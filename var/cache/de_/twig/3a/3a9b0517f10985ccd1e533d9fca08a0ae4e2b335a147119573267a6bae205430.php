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
        $__internal_3f42ee901fa77a8789da7e77d7102530c9b110d93c025878412cd828faff6c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f42ee901fa77a8789da7e77d7102530c9b110d93c025878412cd828faff6c90->enter($__internal_3f42ee901fa77a8789da7e77d7102530c9b110d93c025878412cd828faff6c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d70f89e667fbd4289358f03ab0bb7c14f1afdb5ece7b52a70e480ba826e87662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70f89e667fbd4289358f03ab0bb7c14f1afdb5ece7b52a70e480ba826e87662->enter($__internal_d70f89e667fbd4289358f03ab0bb7c14f1afdb5ece7b52a70e480ba826e87662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <link href=\"jumbotron.css\" rel=\"stylesheet\">

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

        <nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Carta Porte Valtons</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse navbar-right\">
            <div>
            \t<div>
                    ";
        // line 49
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                        <a href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 55
            echo "                        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 58
        echo "                </div>

                ";
        // line 60
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 61
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 62
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 63
                    echo "                            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                ";
                    // line 64
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                ";
        }
        // line 69
        echo "            </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<br><br>
    <div class=\"jumbotron\">
      <div class=\"container\">
        <img align=\"center\" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/valtons1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"valtons\">
      </div>
    </div>

    <div class=\"container\">
      <!-- Example row of columns -->
       <div class=\"row\">
        <div class=\"col-xs-12 col-lg-12\">
              
              ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "              
            </div><!--/.col-xs-6.col-lg-4-->          
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div>  <!--/container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/vendor/jquery.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_3f42ee901fa77a8789da7e77d7102530c9b110d93c025878412cd828faff6c90->leave($__internal_3f42ee901fa77a8789da7e77d7102530c9b110d93c025878412cd828faff6c90_prof);

        
        $__internal_d70f89e667fbd4289358f03ab0bb7c14f1afdb5ece7b52a70e480ba826e87662->leave($__internal_d70f89e667fbd4289358f03ab0bb7c14f1afdb5ece7b52a70e480ba826e87662_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_52bf53dbc416af88f3aa3b101d564fd9a575e9afea13816c120e8639e62c53e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bf53dbc416af88f3aa3b101d564fd9a575e9afea13816c120e8639e62c53e3->enter($__internal_52bf53dbc416af88f3aa3b101d564fd9a575e9afea13816c120e8639e62c53e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f7dd783ee54bb984203bd87bc75a869b6f7ce169a67cc079df0cacfdbbbb003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7dd783ee54bb984203bd87bc75a869b6f7ce169a67cc079df0cacfdbbbb003->enter($__internal_0f7dd783ee54bb984203bd87bc75a869b6f7ce169a67cc079df0cacfdbbbb003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carta Porte Valtons";
        
        $__internal_0f7dd783ee54bb984203bd87bc75a869b6f7ce169a67cc079df0cacfdbbbb003->leave($__internal_0f7dd783ee54bb984203bd87bc75a869b6f7ce169a67cc079df0cacfdbbbb003_prof);

        
        $__internal_52bf53dbc416af88f3aa3b101d564fd9a575e9afea13816c120e8639e62c53e3->leave($__internal_52bf53dbc416af88f3aa3b101d564fd9a575e9afea13816c120e8639e62c53e3_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_80858db3dbe69da722d4495c17a38570fa7ec33e5e066e4e70281a8080321f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80858db3dbe69da722d4495c17a38570fa7ec33e5e066e4e70281a8080321f3e->enter($__internal_80858db3dbe69da722d4495c17a38570fa7ec33e5e066e4e70281a8080321f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e723399787c769ec66c1b9ff748e1338d740e1f3bc48d7985802e95a66941e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e723399787c769ec66c1b9ff748e1338d740e1f3bc48d7985802e95a66941e6f->enter($__internal_e723399787c769ec66c1b9ff748e1338d740e1f3bc48d7985802e95a66941e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "
              ";
        
        $__internal_e723399787c769ec66c1b9ff748e1338d740e1f3bc48d7985802e95a66941e6f->leave($__internal_e723399787c769ec66c1b9ff748e1338d740e1f3bc48d7985802e95a66941e6f_prof);

        
        $__internal_80858db3dbe69da722d4495c17a38570fa7ec33e5e066e4e70281a8080321f3e->leave($__internal_80858db3dbe69da722d4495c17a38570fa7ec33e5e066e4e70281a8080321f3e_prof);

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
        return array (  249 => 87,  240 => 86,  222 => 12,  208 => 108,  203 => 106,  199 => 105,  181 => 89,  179 => 86,  167 => 77,  157 => 69,  154 => 68,  148 => 67,  139 => 64,  134 => 63,  129 => 62,  124 => 61,  122 => 60,  118 => 58,  109 => 55,  103 => 52,  99 => 51,  94 => 50,  92 => 49,  65 => 25,  55 => 18,  49 => 15,  43 => 12,  38 => 10,  27 => 1,);
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
    <link href=\"jumbotron.css\" rel=\"stylesheet\">

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

        <nav class=\"navbar navbar-fixed-top navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Carta Porte Valtons</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse navbar-right\">
            <div>
            \t<div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                        <a href=\"{{ path('fos_user_security_logout') }}\">
                            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% else %}
                        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}
                        </a>
                    {% endif %}
                </div>

                {% if app.request.hasPreviousSession %}
                    {% for type, messages in app.session.flashbag.all() %}
                        {% for message in messages %}
                            <div class=\"flash-{{ type }}\">
                                {{ message }}
                            </div>
                        {% endfor %}
                    {% endfor %}
                {% endif %}
            </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<br><br>
    <div class=\"jumbotron\">
      <div class=\"container\">
        <img align=\"center\" src=\"{{asset('img/valtons1.png')}}\" class=\"img-responsive\" alt=\"valtons\">
      </div>
    </div>

    <div class=\"container\">
      <!-- Example row of columns -->
       <div class=\"row\">
        <div class=\"col-xs-12 col-lg-12\">
              
              {% block body %}

              {% endblock %}
              
            </div><!--/.col-xs-6.col-lg-4-->          
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
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
