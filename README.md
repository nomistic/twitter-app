                     **Twitter App**
                     =====================
                     This tool is a lightweight application which makes use of Twitter's API.
                                          
                     The connection to Twitter's OAuth authentication was made using a third-party library twitter-api-php library
                     The view is created using the Twig Library
              
                     
                     **Installation**
                     --
                     
                     Simply run 
                     
                     composer update
                     
                     This will install the twitter-api-php library as well as the twig library
                     
                     Configuration
                     --
                     In index.php, you will typically need to configure the private keys and authentication you receive from
                     Twitter (their new API requires logging in and requesting it as of the last couple months)
                     The required fields are:
                     - oauth_access_token
                     - oauth_access_token_secret
                     - consumer_key
                     - consumer_secret
                     
                     Enter these on lines 46-49 of index.php
                     

                                         
                     **Use**
                     ---
                     To run the Twitter Application, fire up your web server, and navigate to the root of your created directory (the one where you have placed all of the files).
                     
                     You will be presented with a basic search form.  You can search either by search term or by username, or both
                     
                        
                        
                     
