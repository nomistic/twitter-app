<?php
require_once 'vendor/j7mbo/twitter-api-php/TwitterAPIExchange.php';
require_once 'vendor/autoload.php';


//twig

$loader = new Twig_Loader_Filesystem('twigs');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
));

$regxfilter = new Twig_SimpleFilter('regx', function ($string) {
    $link = '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/';
    $replace_link = '<a href="$0" target="_blank" title="$0">$0</a>';
    $tweet_output = preg_replace($link, $replace_link, $string);

    //hashtags
    $hashtag = '/\B#([a-z0-9_-]+)/i';
    $replace_hashtag = '<a href="'.$_SERVER['PHP_SELF'].'?keyword=%23$1">$0</a>';
    $tweet_output = preg_replace($hashtag, $replace_hashtag, $tweet_output);

    //user tags
    $usertag = '/(^|[^a-z0-9_])@([a-z0-9_]+)/i';
    $replace_usertag ='$1<a href="'.$_SERVER['PHP_SELF'].'?username=$2">@$2</a>';
    $tweet_output = preg_replace($usertag, $replace_usertag, $tweet_output);

    return $tweet_output;
});

$twig->addFilter($regxfilter);


//$twig->addFilter($filter);



//debug  TODO: remove later
$twig->enableDebug();
$twig->enableAutoReload(); // <-- Add this line…
$twig->addExtension(new \Twig_Extension_Debug());


// twitter API configuration details - perhaps should store externally
$config = array(
    'oauth_access_token' => YOUR_ACCESS_TOKEN,
    'oauth_access_token_secret' => YOUR_SECRET,
    'consumer_key' => YOUR_CONSUMER_KEY,
    'consumer_secret' => YOUR_CONSUMER_SECRET
);

// timeline of all posts for a specified user
$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
// list of tweets for a search term
$surl = 'https://api.twitter.com/1.1/search/tweets.json';
$request_type = 'GET';


// create a twitter wrapper object
$twitter = new TwitterAPIExchange($config);

// simple twig container array

$twig_output = array(
    'post' => $_POST,
    'self' =>$_SERVER['PHP_SELF']);

// handle post variables or if a user link is clicked within the text


if ($_POST  || isset($_GET['username']) || isset($_GET['keyword']) ) {

    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $keyword = $_POST['keyword'];
        $count = $_POST['post_count'];

    }
    else if (isset($_GET['username'])){
        $username = $_GET['username'];
        //set a default count
        $count = '20';
        $keyword = false;
    }
    else {
        $keyword = $_GET['keyword'];
        $username = false;
        $count = '50';

        echo '<strong>Hashtag: '. $keyword .'</strong><br/><br/>';
    }
       $geo ='';

    // 3 = use below

    if (isset($_POST['location']) && ($_POST['location'] == 3 || $_POST['location'] ==2)) {
        $lat = $_POST['lat'];
           //$lat = '42.255331';
        $lon = $_POST['lon'];
           //$lon = '-72.6565083';
        $miles = $_POST['miles'];
           //$miles = '25';
         if(isset($lat) && isset($lon) && isset($miles)){
            $geo = '&geocode='.$lat.','.$lon.','.$miles.'mi';
         }
         else {
            $geo = '';
         }

       }

    //user display string
    $input_str = '?screen_name='.$username.'&count='.$count.'&tweet_mode=extended';


    //this check is for including username in the search string, and doesn't affect user timeline lookups

    if ($username) {
        $from = 'from:'.$username.' ';
    }
    else {
        $from = '';
    }

    $search_str = '?q='.$from.$keyword.'&result_type=recent&count='.$count.$geo.'&tweet_mode=extended';

    $output =  json_decode($twitter->setGetfield($input_str)
        ->buildOauth($url, $request_type)
        ->performRequest(),$assoc = TRUE);
    //  $surl is search tweets
    $s_output =  json_decode($twitter->setGetfield($search_str)
        ->buildOauth($surl, $request_type)
        ->performRequest(),$assoc = TRUE);


//if keyword is provided, do a keyword search.  If a username is provided along with the keyword search, then use the search api to find the use
// it is important to note that the keyword search will only search through tweets from the past week

    if ($keyword) {
        if(array_key_exists("errors", $s_output))
        {

            //perhaps bring in different errors for different situations.  Looking up tweets only seems to bring back 34 if not found, even if it's for a user.

            echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$output["errors"][0]["message"]."</em></p>";
            exit();
        }
        else {

            $twig_output['tweets'] = $s_output['statuses'];

        }
    }
    //if the keyword is not provided, simply do a timeline search
    else {
        if(array_key_exists("errors", $output))
        {
            echo "<h3>Houston, we have a problem.</h3><p></p><p><em>".$output["errors"][0]["message"]."</em></p>";
            exit();
        }
        else {

            $twig_output['tweets'] = $output;

        }
    }
}

echo $twig->render('index.html.twig', $twig_output);

?>


