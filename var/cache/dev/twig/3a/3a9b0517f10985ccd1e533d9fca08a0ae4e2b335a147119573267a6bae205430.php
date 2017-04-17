<?php

/* base.html.twig */
class __TwigTemplate_cacf579b6000f723f17482e8fbcf34b983262632f4c235fe52e12381e458265c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e4b2f57cba748fdc235d6e61deaa813b2bc7f9bfb5a51bef34c508005eccf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e4b2f57cba748fdc235d6e61deaa813b2bc7f9bfb5a51bef34c508005eccf66->enter($__internal_8e4b2f57cba748fdc235d6e61deaa813b2bc7f9bfb5a51bef34c508005eccf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_b2796b42a2052acb2a587f8fcd00cd8d453ba9756cfdd135837e5af37ea4923a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2796b42a2052acb2a587f8fcd00cd8d453ba9756cfdd135837e5af37ea4923a->enter($__internal_b2796b42a2052acb2a587f8fcd00cd8d453ba9756cfdd135837e5af37ea4923a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/jumbotron.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
    <body>

    <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">VALTONS</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">INICIO</a></li>
            <li><a href=\"";
        // line 49
        echo "cartaporte";
        echo "\">CARTAS PORTE</a></li>
           <!-- <li><a href=\"#contact\">Contact</a></li>-->
           <!-- <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li class=\"dropdown-header\">Nav header</li>
                <li><a href=\"#\">Separated link</a></li>
                <li><a href=\"#\">One more separated link</a></li>
              </ul> 
            </li>-->
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">               
                  ";
        // line 65
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 66
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 71
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 74
        echo "                

                ";
        // line 76
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 77
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 78
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 79
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 80
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                ";
        }
        // line 85
        echo "          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class=\"jumbotron\">
      <div class=\"container\">        
                <img align=\"center\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/valtons1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"valtons\">
        </div><!--/.navbar-collapse -->
        
      </div>
        


    </div>

    <div class=\"container\">
      <div>
                    
      <!-- Example row of columns -->
       <div class=\"row\">
        <div class=\"col-xs-12 col-lg-12\">
              
              ";
        // line 109
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "              
            </div><!--/.col-xs-6.col-lg-4-->          
      </div>

      <hr>

      <footer>
        <p>&copy; 2017 Desarrollado por In2com</p>
      </footer>
    </div>  <!--/container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_8e4b2f57cba748fdc235d6e61deaa813b2bc7f9bfb5a51bef34c508005eccf66->leave($__internal_8e4b2f57cba748fdc235d6e61deaa813b2bc7f9bfb5a51bef34c508005eccf66_prof);

        
        $__internal_b2796b42a2052acb2a587f8fcd00cd8d453ba9756cfdd135837e5af37ea4923a->leave($__internal_b2796b42a2052acb2a587f8fcd00cd8d453ba9756cfdd135837e5af37ea4923a_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_31025ebfaf528064af1fadbb0aed0c039b9ff218854097f6af9cd9ecc307287a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31025ebfaf528064af1fadbb0aed0c039b9ff218854097f6af9cd9ecc307287a->enter($__internal_31025ebfaf528064af1fadbb0aed0c039b9ff218854097f6af9cd9ecc307287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0bb0dc10c7d9f57042a9fd5a4b1b86de561367ae25c94319ac58a7a9c1bb2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bb0dc10c7d9f57042a9fd5a4b1b86de561367ae25c94319ac58a7a9c1bb2fe->enter($__internal_b0bb0dc10c7d9f57042a9fd5a4b1b86de561367ae25c94319ac58a7a9c1bb2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carta Porte Valtons";
        
        $__internal_b0bb0dc10c7d9f57042a9fd5a4b1b86de561367ae25c94319ac58a7a9c1bb2fe->leave($__internal_b0bb0dc10c7d9f57042a9fd5a4b1b86de561367ae25c94319ac58a7a9c1bb2fe_prof);

        
        $__internal_31025ebfaf528064af1fadbb0aed0c039b9ff218854097f6af9cd9ecc307287a->leave($__internal_31025ebfaf528064af1fadbb0aed0c039b9ff218854097f6af9cd9ecc307287a_prof);

    }

    // line 109
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1a80f9d341b120f8dfc8e03a9c468cd1c7c05282228e8df67eff3c01bec3d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a80f9d341b120f8dfc8e03a9c468cd1c7c05282228e8df67eff3c01bec3d7e->enter($__internal_d1a80f9d341b120f8dfc8e03a9c468cd1c7c05282228e8df67eff3c01bec3d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7f2138f70533470ba1cce2f941762f70bbda878a8bf461c4571e2d551de896b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f2138f70533470ba1cce2f941762f70bbda878a8bf461c4571e2d551de896b->enter($__internal_e7f2138f70533470ba1cce2f941762f70bbda878a8bf461c4571e2d551de896b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 110
        echo "
              ";
        
        $__internal_e7f2138f70533470ba1cce2f941762f70bbda878a8bf461c4571e2d551de896b->leave($__internal_e7f2138f70533470ba1cce2f941762f70bbda878a8bf461c4571e2d551de896b_prof);

        
        $__internal_d1a80f9d341b120f8dfc8e03a9c468cd1c7c05282228e8df67eff3c01bec3d7e->leave($__internal_d1a80f9d341b120f8dfc8e03a9c468cd1c7c05282228e8df67eff3c01bec3d7e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 110,  269 => 109,  251 => 12,  237 => 131,  232 => 129,  228 => 128,  210 => 112,  208 => 109,  189 => 93,  179 => 85,  176 => 84,  170 => 83,  161 => 80,  156 => 79,  151 => 78,  146 => 77,  144 => 76,  140 => 74,  131 => 71,  125 => 68,  121 => 67,  116 => 66,  114 => 65,  95 => 49,  68 => 25,  61 => 21,  55 => 18,  49 => 15,  43 => 12,  38 => 10,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{asset('favicon.ico')}}\">

    <title>{% block title %}Carta Porte Valtons{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"{{asset('css/ie10-viewport-bug-workaround.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('css/jumbotron.css')}}\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"{{asset('js/ie-emulation-modes-warning.js')}}\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
    <body>

    <nav class=\"navbar navbar-default navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">VALTONS</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"#\">INICIO</a></li>
            <li><a href=\"{{('cartaporte')}}\">CARTAS PORTE</a></li>
           <!-- <li><a href=\"#contact\">Contact</a></li>-->
           <!-- <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li role=\"separator\" class=\"divider\"></li>
                <li class=\"dropdown-header\">Nav header</li>
                <li><a href=\"#\">Separated link</a></li>
                <li><a href=\"#\">One more separated link</a></li>
              </ul> 
            </li>-->
          </ul>
          <ul class=\"nav navbar-nav navbar-right\">               
                  {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% endif %}
                

                {% if app.request.hasPreviousSession %}
                    {% for type, messages in app.session.flashbag.all() %}
                        {% for message in messages %}
                            <div class=\"flash-{{ type }}\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    {% endfor %}
                {% endif %}
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class=\"jumbotron\">
      <div class=\"container\">        
                <img align=\"center\" src=\"{{asset('img/valtons1.png')}}\" class=\"img-responsive\" alt=\"valtons\">
        </div><!--/.navbar-collapse -->
        
      </div>
        


    </div>

    <div class=\"container\">
      <div>
                    
      <!-- Example row of columns -->
       <div class=\"row\">
        <div class=\"col-xs-12 col-lg-12\">
              
              {% block body %}

              {% endblock %}
              
            </div><!--/.col-xs-6.col-lg-4-->          
      </div>

      <hr>

      <footer>
        <p>&copy; 2017 Desarrollado por In2com</p>
      </footer>
    </div>  <!--/container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"{{asset('js/vendor/jquery.min.js')}}\"><\\/script>')</script>
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{asset('js/ie10-viewport-bug-workaround.js')}}\"></script>
  </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\rolesesion\\app\\Resources\\views\\base.html.twig");
    }
}
