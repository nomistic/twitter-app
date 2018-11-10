<?php

/* index.html.twig */
class __TwigTemplate_9e7f2ae2d286ee95a99a417f7f8459cb609eff383f0391a6c4ae8157c5e9672b extends Twig_Template
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
                        <div id=\"locvars\">
                             <input type=\"radio\" name=\"location\" id=\"location1\" value=\"1\"  > <label for=\"location1\">None</label><br/>
                            <input type=\"radio\" name=\"location\" id=\"location2\" value=\"2\" ";
        // line 27
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "location", array()) || ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "location", array()) == 2))) {
            echo " checked=\"checked\" ";
        }
        echo "/> <label for=\"location2\">Your Location</label><br/>
                            <input type=\"radio\" name=\"location\" id=\"location3\" value=\"3\" ";
        // line 28
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "location", array()) || ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "location", array()) == 3))) {
            echo " checked=\"checked\" ";
        }
        echo "/> <label for=\"location3\">Enter Coordinates</label>
                        </div>
                        <div id=\"geovars\" class=\"d-none\">
                            <label for=\"lat\">Latitude</label><br/> <input type=\"text\" name=\"lat\" id=\"lat\" ";
        // line 31
        if ((isset($context["post"]) ? $context["post"] : null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "lat", array()), "html", null, true);
            echo "\" ";
        }
        echo "/><br/>
                            <label for=\"lon\">Longitude</label><br/> <input type=\"text\" name=\"lon\" id=\"lon\" ";
        // line 32
        if ((isset($context["post"]) ? $context["post"] : null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "lon", array()), "html", null, true);
            echo "\" ";
        }
        echo "/><br/>
                            <label for=\"miles\">Miles</label><br/> <input type=\"text\" name=\"miles\" id=\"miles\" ";
        // line 33
        if ((isset($context["post"]) ? $context["post"] : null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "miles", array()), "html", null, true);
            echo "\" ";
        }
        echo "/><br/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Twitter User</td>
                    <td><input type=\"text\" name=\"username\" id=\"username\" ";
        // line 39
        if ((isset($context["post"]) ? $context["post"] : null)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "username", array()), "html", null, true);
            echo "\" ";
        }
        echo "/></td>
                </tr>
                <tr>
                    <td>Number of Tweets</td>
                    <td>
                        <select id=\"post_count\" name=\"post_count\">

                            <option value=\"5\" ";
        // line 46
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_count", array()) == 5)) {
            echo "selected=\"selected\" ";
        }
        echo ">5</option>
                            <option value=\"10\" ";
        // line 47
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_count", array()) == 10)) {
            echo "selected=\"selected\" ";
        }
        echo ">10</option>
                            <option value=\"20\" ";
        // line 48
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_count", array()) == 20)) {
            echo "selected=\"selected\" ";
        }
        echo ">20</option>
                            <option value=\"50\" ";
        // line 49
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_count", array()) == 50)) {
            echo "selected=\"selected\" ";
        }
        echo ">50</option>
                            <option value=\"100\" ";
        // line 50
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "post_count", array()) == 100)) {
            echo "selected=\"selected\" ";
        }
        echo ">100</option>
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
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tweets"]) ? $context["tweets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tweet"]) {
            // line 67
            echo "

        <p><strong> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "name", array()), "html", null, true);
            echo "</strong> (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tweet"], "user", array()), "screen_name", array()), "html", null, true);
            echo "), <em>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tweet"], "created_at", array()), "M d"), "html", null, true);
            echo "</em><br/>
            ";
            // line 70
            echo call_user_func_array($this->env->getFilter('regx')->getCallable(), array($this->getAttribute($context["tweet"], "full_text", array())));
            echo "
        </p>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tweet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </div>

</div>


";
        // line 79
        $this->loadTemplate("footer.html.twig", "index.html.twig", 79)->display($context);
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
        return array (  190 => 79,  183 => 74,  173 => 70,  165 => 69,  161 => 67,  157 => 66,  136 => 50,  130 => 49,  124 => 48,  118 => 47,  112 => 46,  98 => 39,  85 => 33,  77 => 32,  69 => 31,  61 => 28,  55 => 27,  41 => 20,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'header.html.twig' %}


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
                    <td><input type=\"text\" name=\"keyword\" id=\"keyword\"  {% if post %} value=\"{{ post.keyword }}\" {% endif %} ></td>
                </tr>
                <tr>
                    <td><label for=\"location\">Location</label></td>
                    <td>
                        <div id=\"locvars\">
                             <input type=\"radio\" name=\"location\" id=\"location1\" value=\"1\"  > <label for=\"location1\">None</label><br/>
                            <input type=\"radio\" name=\"location\" id=\"location2\" value=\"2\" {% if  post.location or  post.location == 2 %} checked=\"checked\" {% endif %}/> <label for=\"location2\">Your Location</label><br/>
                            <input type=\"radio\" name=\"location\" id=\"location3\" value=\"3\" {% if  post.location or  post.location == 3 %} checked=\"checked\" {% endif %}/> <label for=\"location3\">Enter Coordinates</label>
                        </div>
                        <div id=\"geovars\" class=\"d-none\">
                            <label for=\"lat\">Latitude</label><br/> <input type=\"text\" name=\"lat\" id=\"lat\" {% if post %} value=\"{{ post.lat }}\" {% endif %}/><br/>
                            <label for=\"lon\">Longitude</label><br/> <input type=\"text\" name=\"lon\" id=\"lon\" {% if post %} value=\"{{ post.lon }}\" {% endif %}/><br/>
                            <label for=\"miles\">Miles</label><br/> <input type=\"text\" name=\"miles\" id=\"miles\" {% if post %} value=\"{{ post.miles }}\" {% endif %}/><br/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Twitter User</td>
                    <td><input type=\"text\" name=\"username\" id=\"username\" {% if post %} value=\"{{ post.username }}\" {% endif %}/></td>
                </tr>
                <tr>
                    <td>Number of Tweets</td>
                    <td>
                        <select id=\"post_count\" name=\"post_count\">

                            <option value=\"5\" {% if post.post_count == 5 %}selected=\"selected\" {% endif %}>5</option>
                            <option value=\"10\" {% if post.post_count == 10 %}selected=\"selected\" {% endif %}>10</option>
                            <option value=\"20\" {% if post.post_count == 20 %}selected=\"selected\" {% endif %}>20</option>
                            <option value=\"50\" {% if post.post_count == 50 %}selected=\"selected\" {% endif %}>50</option>
                            <option value=\"100\" {% if post.post_count == 100 %}selected=\"selected\" {% endif %}>100</option>
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

        {% for tweet in tweets %}


        <p><strong> {{ tweet.user.name }}</strong> ({{ tweet.user.screen_name }}), <em>{{ tweet.created_at|date('M d') }}</em><br/>
            {{ tweet.full_text|regx|raw }}
        </p>

        {% endfor %}
    </div>

</div>


{% include 'footer.html.twig' %}", "index.html.twig", "C:\\xampp\\htdocs\\twitupdate\\twigs\\index.html.twig");
    }
}
