<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_4b12ad243fb772bad9f4152b4531fbc9b64c3a0569d08023f5a5ce63325746a4 extends Twig_Template
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
        $__internal_0d496f7489e5c1024fc304237347f61eb3d98c4cd2e6936120c7eff238cf9a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d496f7489e5c1024fc304237347f61eb3d98c4cd2e6936120c7eff238cf9a42->enter($__internal_0d496f7489e5c1024fc304237347f61eb3d98c4cd2e6936120c7eff238cf9a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_c0a75fb7bbbad4345ba5381843cf81a644650fbd44edb7317bf69a5249809036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a75fb7bbbad4345ba5381843cf81a644650fbd44edb7317bf69a5249809036->enter($__internal_c0a75fb7bbbad4345ba5381843cf81a644650fbd44edb7317bf69a5249809036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0d496f7489e5c1024fc304237347f61eb3d98c4cd2e6936120c7eff238cf9a42->leave($__internal_0d496f7489e5c1024fc304237347f61eb3d98c4cd2e6936120c7eff238cf9a42_prof);

        
        $__internal_c0a75fb7bbbad4345ba5381843cf81a644650fbd44edb7317bf69a5249809036->leave($__internal_c0a75fb7bbbad4345ba5381843cf81a644650fbd44edb7317bf69a5249809036_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
