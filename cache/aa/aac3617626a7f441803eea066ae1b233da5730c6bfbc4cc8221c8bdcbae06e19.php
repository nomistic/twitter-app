<?php

/* footer.html.twig */
class __TwigTemplate_e93f75d56ad0da2263225d16b6a2d6b10a470eb169c84889e52763f2a6c3f573 extends Twig_Template
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
        echo "</div>
</div>


</div>
<!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

<!-- bootbox library -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js\"></script>

<script>
    \$(function(){
        \$(\"#searchform\").submit(function(){
            var username = \$.trim(\$(\"#username\").val());
            var keyword = \$.trim(\$(\"#keyword\").val());

            if(username === '' && keyword ==='' ){
                \$(\".required-fields\").removeClass('d-none');
                return false;
            }
        });
    });

    /* for form display */

    \$('input[type=\"radio\"]').click(function() {
        if(\$(this).attr('id') == 'location3'  || \$(this).attr('id') == 'location2' ) {
            \$('#geovars').removeClass('d-none');
            if (this.checked) {
                \$(\"#lat\").attr('required', true);
                \$(\"#lon\").attr('required', true);
                \$(\"#miles\").attr('required', true);
            }
            if (\$(this).attr('id') == 'location2' ) {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(getLocation);
                } else {
                    \$(\".no-geo\").removeClass('d-none');
                    return false;
                }
                function getLocation(position) {

                    var lat = position.coords.latitude;
                    var lon = position.coords.longitude;
                    \$(\"#lat\").val(lat);
                    \$(\"#lon\").val(lon);

                }
            }
        }
        else {
            \$('#geovars').addClass('d-none');

        }

    });
</script>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "footer.html.twig", "C:\\xampp\\htdocs\\twitupdate\\twigs\\footer.html.twig");
    }
}
