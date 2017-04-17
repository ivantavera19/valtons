<?php

/* ValtonsBundle:Default:index.html.twig */
class __TwigTemplate_24d1daa2915fee294c3d1114a024fdfb7aed08adacf41150c3e2067130f7124d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e0a7ebf64aa70fe24a6a0b2b54c811634d28c3febafd649d031a7ad4c6cfb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0a7ebf64aa70fe24a6a0b2b54c811634d28c3febafd649d031a7ad4c6cfb52->enter($__internal_7e0a7ebf64aa70fe24a6a0b2b54c811634d28c3febafd649d031a7ad4c6cfb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ValtonsBundle:Default:index.html.twig"));

        $__internal_d49f8fc5473849a1d3b78634c9b60a2557a97477ca3e7df2d0e93f214617a063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49f8fc5473849a1d3b78634c9b60a2557a97477ca3e7df2d0e93f214617a063->enter($__internal_d49f8fc5473849a1d3b78634c9b60a2557a97477ca3e7df2d0e93f214617a063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ValtonsBundle:Default:index.html.twig"));

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

    <nav class=\"navbar navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <!--<a class=\"navbar-brand\">Valtons</a>-->
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse navbar-right\">
            <div>
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
        echo "
                ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <img align=\"center\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/valtons1.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"valtons\">
      </div>
    </div>

    <div class=\"container\">
      <!-- Example row of columns -->
       

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div>  <!--/container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_7e0a7ebf64aa70fe24a6a0b2b54c811634d28c3febafd649d031a7ad4c6cfb52->leave($__internal_7e0a7ebf64aa70fe24a6a0b2b54c811634d28c3febafd649d031a7ad4c6cfb52_prof);

        
        $__internal_d49f8fc5473849a1d3b78634c9b60a2557a97477ca3e7df2d0e93f214617a063->leave($__internal_d49f8fc5473849a1d3b78634c9b60a2557a97477ca3e7df2d0e93f214617a063_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e68707111d11b7621e9c7d00dd87e24003c8028b0db20e349fc10e63f6966d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e68707111d11b7621e9c7d00dd87e24003c8028b0db20e349fc10e63f6966d5->enter($__internal_2e68707111d11b7621e9c7d00dd87e24003c8028b0db20e349fc10e63f6966d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44f633eb131c0e19f87dbbf8198fadba25f9d43cf8690e8152057ed919d4f9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f633eb131c0e19f87dbbf8198fadba25f9d43cf8690e8152057ed919d4f9fd->enter($__internal_44f633eb131c0e19f87dbbf8198fadba25f9d43cf8690e8152057ed919d4f9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Carta Porte Valtons";
        
        $__internal_44f633eb131c0e19f87dbbf8198fadba25f9d43cf8690e8152057ed919d4f9fd->leave($__internal_44f633eb131c0e19f87dbbf8198fadba25f9d43cf8690e8152057ed919d4f9fd_prof);

        
        $__internal_2e68707111d11b7621e9c7d00dd87e24003c8028b0db20e349fc10e63f6966d5->leave($__internal_2e68707111d11b7621e9c7d00dd87e24003c8028b0db20e349fc10e63f6966d5_prof);

    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0d68655af5c7ac625ba4bc0535a76ce616aedf5854684e2846811703abfc31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d68655af5c7ac625ba4bc0535a76ce616aedf5854684e2846811703abfc31b->enter($__internal_d0d68655af5c7ac625ba4bc0535a76ce616aedf5854684e2846811703abfc31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_02a7971c08d006ae896e01cad071c6152451fdf780bab9ba61b2e05f95467ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a7971c08d006ae896e01cad071c6152451fdf780bab9ba61b2e05f95467ff2->enter($__internal_02a7971c08d006ae896e01cad071c6152451fdf780bab9ba61b2e05f95467ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 71
        echo "                    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 72
        echo "                ";
        
        $__internal_02a7971c08d006ae896e01cad071c6152451fdf780bab9ba61b2e05f95467ff2->leave($__internal_02a7971c08d006ae896e01cad071c6152451fdf780bab9ba61b2e05f95467ff2_prof);

        
        $__internal_d0d68655af5c7ac625ba4bc0535a76ce616aedf5854684e2846811703abfc31b->leave($__internal_d0d68655af5c7ac625ba4bc0535a76ce616aedf5854684e2846811703abfc31b_prof);

    }

    // line 71
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93e4d59e8518589c87f0cd7243c4943ef3df37f93aa5fe0af2584cc7474ce255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e4d59e8518589c87f0cd7243c4943ef3df37f93aa5fe0af2584cc7474ce255->enter($__internal_93e4d59e8518589c87f0cd7243c4943ef3df37f93aa5fe0af2584cc7474ce255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_19f1a464a5cc648227dc45f0a554505425d882fd745ea8de5d54c328f3b96627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f1a464a5cc648227dc45f0a554505425d882fd745ea8de5d54c328f3b96627->enter($__internal_19f1a464a5cc648227dc45f0a554505425d882fd745ea8de5d54c328f3b96627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_19f1a464a5cc648227dc45f0a554505425d882fd745ea8de5d54c328f3b96627->leave($__internal_19f1a464a5cc648227dc45f0a554505425d882fd745ea8de5d54c328f3b96627_prof);

        
        $__internal_93e4d59e8518589c87f0cd7243c4943ef3df37f93aa5fe0af2584cc7474ce255->leave($__internal_93e4d59e8518589c87f0cd7243c4943ef3df37f93aa5fe0af2584cc7474ce255_prof);

    }

    public function getTemplateName()
    {
        return "ValtonsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 71,  246 => 72,  243 => 71,  234 => 70,  216 => 12,  202 => 104,  197 => 102,  173 => 81,  163 => 73,  161 => 70,  158 => 69,  155 => 68,  149 => 67,  140 => 64,  135 => 63,  130 => 62,  125 => 61,  123 => 60,  119 => 58,  110 => 55,  104 => 52,  100 => 51,  95 => 50,  93 => 49,  66 => 25,  56 => 18,  50 => 15,  44 => 12,  39 => 10,  28 => 1,);
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

    <nav class=\"navbar navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <!--<a class=\"navbar-brand\">Valtons</a>-->
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse navbar-right\">
            <div>
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

                {% block content %}
                    {% block fos_user_content %}{% endblock %}
                {% endblock %}

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <img align=\"center\" src=\"{{asset('img/valtons1.png')}}\" class=\"img-responsive\" alt=\"valtons\">
      </div>
    </div>

    <div class=\"container\">
      <!-- Example row of columns -->
       

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div>  <!--/container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{asset('js/ie10-viewport-bug-workaround.js')}}\"></script>
  </body>
</html>
", "ValtonsBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\rolesesion\\src\\ValtonsBundle/Resources/views/Default/index.html.twig");
    }
}
