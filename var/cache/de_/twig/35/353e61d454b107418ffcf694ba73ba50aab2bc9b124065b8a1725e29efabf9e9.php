<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_0be88e837369bbfb75611f10b64df5e089a376bc8e60bdc38ff5a39a52912efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b71cbf78acefb4e26ed05710ef0dc0f2a836682b3f4a945e6c3e8aaded2e0f42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71cbf78acefb4e26ed05710ef0dc0f2a836682b3f4a945e6c3e8aaded2e0f42->enter($__internal_b71cbf78acefb4e26ed05710ef0dc0f2a836682b3f4a945e6c3e8aaded2e0f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_61e6d051fd836ac8d1968947e20704c2394cbdb6930d95d8e9da8f89e7fe5427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e6d051fd836ac8d1968947e20704c2394cbdb6930d95d8e9da8f89e7fe5427->enter($__internal_61e6d051fd836ac8d1968947e20704c2394cbdb6930d95d8e9da8f89e7fe5427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/ie10-viewport-bug-workaround.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/signin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie-emulation-modes-warning.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <div class=\"container\">

      <form class=\"form-signin\">        
        <h2 class=\"form-signin-heading\">INICIO DE SESION</h2>

        ";
        // line 42
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 44
        echo "        
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
        
        $__internal_b71cbf78acefb4e26ed05710ef0dc0f2a836682b3f4a945e6c3e8aaded2e0f42->leave($__internal_b71cbf78acefb4e26ed05710ef0dc0f2a836682b3f4a945e6c3e8aaded2e0f42_prof);

        
        $__internal_61e6d051fd836ac8d1968947e20704c2394cbdb6930d95d8e9da8f89e7fe5427->leave($__internal_61e6d051fd836ac8d1968947e20704c2394cbdb6930d95d8e9da8f89e7fe5427_prof);

    }

    // line 42
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6f8bb4ec44815c50684ce761fa3bd31bcc4ab22038c00fe084fb4fb8c354a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f8bb4ec44815c50684ce761fa3bd31bcc4ab22038c00fe084fb4fb8c354a1d->enter($__internal_a6f8bb4ec44815c50684ce761fa3bd31bcc4ab22038c00fe084fb4fb8c354a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cf84f7ade512ed6650a06e8bc76c9cfb639304146d717ab9a1010fe92a824456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf84f7ade512ed6650a06e8bc76c9cfb639304146d717ab9a1010fe92a824456->enter($__internal_cf84f7ade512ed6650a06e8bc76c9cfb639304146d717ab9a1010fe92a824456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 43
        echo "        ";
        
        $__internal_cf84f7ade512ed6650a06e8bc76c9cfb639304146d717ab9a1010fe92a824456->leave($__internal_cf84f7ade512ed6650a06e8bc76c9cfb639304146d717ab9a1010fe92a824456_prof);

        
        $__internal_a6f8bb4ec44815c50684ce761fa3bd31bcc4ab22038c00fe084fb4fb8c354a1d->leave($__internal_a6f8bb4ec44815c50684ce761fa3bd31bcc4ab22038c00fe084fb4fb8c354a1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 43,  108 => 42,  95 => 51,  86 => 44,  84 => 42,  65 => 26,  58 => 22,  52 => 19,  46 => 16,  38 => 11,  26 => 1,);
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
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"{{asset('favicon.ico')}}\">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"{{asset('css/ie10-viewport-bug-workaround.css')}}\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"{{asset('css/signin.css')}}\" rel=\"stylesheet\">

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

    <div class=\"container\">

      <form class=\"form-signin\">        
        <h2 class=\"form-signin-heading\">INICIO DE SESION</h2>

        {% block fos_user_content %}
        {% endblock fos_user_content %}
        
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src=\"{{asset('js/ie10-viewport-bug-workaround.js')}}\"></script>
  </body>
</html>", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
