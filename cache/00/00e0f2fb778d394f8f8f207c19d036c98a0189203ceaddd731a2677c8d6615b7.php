<?php

/* index.html.twig */
class __TwigTemplate_6533390964b1bdaed5aa95736aee8937bde08fc1a6c4382630743cc6ef31aefe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("header.html.twig", "index.html.twig", 1)->display($context);
        // line 2
        echo "

<h3>Search Tweets</h3>

<div class=\"required-fields alert alert-warning d-none\">
    You must enter at least a keyword string or a user.
</div>
<div class=\"no-geo alert alert-warning d-none\">
    Geolocation is not supported by this browser.
</div>

<div class=\"row\">
    <div class=\"col-sm-4\">
        <form method=\"post\" id=\"searchform\">
            <table class='table table-hover table-responsive table-bordered'>
                <tbody>
                <tr>
                    <td>Search Term:</td>
                    <td><input type=\"text\" name=\"keyword\" id=\"keyword\"  ";
        // line 20
        if ((isset($context["post"]) ? $context["post"] : null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "keyword", array()), "html", null, true);
            echo "\" ";
        }
        echo " ></td>
                </tr>
                <tr>
                    <td><label for=\"location\">Location</label></td>
                    <td>
                        <div id=\"locvars\"><input type=\"radio\" name=\"location\" id=\"location1\" value=\"1\" <?php if (!isset(\$_POST['location']) || \$_POST['location'] == 1) echo 'checked=\"checked\"';  ?>/> <label for=\"location1\">None</label><br/>
                            <input type=\"radio\" name=\"location\" id=\"location2\" value=\"2\" <?php if (isset(\$_POST['location']) && \$_POST['location'] == 2) echo 'checked=\"checked\"';  ?>/> <label for=\"location2\">Your Location</label><br/>
                            <input type=\"radio\" name=\"location\" id=\"location3\" value=\"3\" <?php if (isset(\$_POST['location']) && \$_POST['location'] == 3) echo 'checked=\"checked\"';  ?>/> <label for=\"location3\">Enter Coordinates</label>
                        </div>
                        <div id=\"geovars\" class=\"d-none\">
                            <label for=\"lat\">Latitude</label><br/> <input type=\"text\" name=\"lat\" id=\"lat\" <?php if (\$_POST)  echo 'value=\"'.\$_POST['lat'].'\" '; ?>/><br/>
                            <label for=\"lon\">Longitude</label><br/> <input type=\"text\" name=\"lon\" id=\"lon\" <?php if (\$_POST)  echo 'value=\"'.\$_POST['lon'].'\" '; ?>/><br/>
                            <label for=\"miles\">Miles</label><br/> <input type=\"text\" name=\"miles\" id=\"miles\" <?php if (\$_POST)  echo 'value=\"'.\$_POST['miles'].'\" '; ?>/><br/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Twitter User</td>
                    <td><input type=\"text\" name=\"username\" id=\"username\" <?php if (\$_POST)  echo 'value=\"'.\$_POST['username'].'\" '; ?> /></td>
                </tr>
                <tr>
                    <td>Number of Tweets</td>
                    <td>
                        <select id=\"post_count\" name=\"post_count\">
                            <option value=\"5\" <?php if (\$_POST) {if (\$_POST['post_count']=='5') echo 'selected=\"selected\"';} ?>>5</option>
                            <option value=\"10\" <?php if (\$_POST) {if (\$_POST['post_count']=='10') echo 'selected=\"selected\"';} ?>>10</option>
                            <option value=\"20\" <?php if (\$_POST) {if (\$_POST['post_count']=='20') echo 'selected=\"selected\"';} ?>>20</option>
                            <option value=\"50\" <?php if (\$_POST) {if (\$_POST['post_count']=='50') echo 'selected=\"selected\"';} ?>>50</option>
                            <option value=\"100\" <?php if (\$_POST) {if (\$_POST['post_count']=='100') echo 'selected=\"selected\"';} ?>>100</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type=\"submit\" value=\"search\" class=\"btn btn-info\">Search</button> <a class=\"btn btn-info\" href=\"index.php\">Reset</a></td>
                </tr>
                </tbody>
            </table>


        </form>
    </div>
    <div class=\"col-sm-8\">


";
        // line 65
        $this->loadTemplate("footer.html.twig", "index.html.twig", 65)->display($context);
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 65,  41 => 20,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\twitupdate\\twigs\\index.html.twig");
    }
}
