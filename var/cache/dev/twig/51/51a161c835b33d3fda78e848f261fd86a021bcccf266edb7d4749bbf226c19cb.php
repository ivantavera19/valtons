<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_22c56217a14c85aa3903d1ae8c5d46102dec220813aeac265ad3690be8a15ef2 extends Twig_Template
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
        $__internal_20e3aec12a1f5a5b17fb9c79c31dcac967bb85a92b30d53199cdbbb1055bc1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e3aec12a1f5a5b17fb9c79c31dcac967bb85a92b30d53199cdbbb1055bc1d6->enter($__internal_20e3aec12a1f5a5b17fb9c79c31dcac967bb85a92b30d53199cdbbb1055bc1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_9a500844f1539d7e42887b218a447c49157ed73cadef59004bdedb2b4d0f92ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a500844f1539d7e42887b218a447c49157ed73cadef59004bdedb2b4d0f92ca->enter($__internal_9a500844f1539d7e42887b218a447c49157ed73cadef59004bdedb2b4d0f92ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_20e3aec12a1f5a5b17fb9c79c31dcac967bb85a92b30d53199cdbbb1055bc1d6->leave($__internal_20e3aec12a1f5a5b17fb9c79c31dcac967bb85a92b30d53199cdbbb1055bc1d6_prof);

        
        $__internal_9a500844f1539d7e42887b218a447c49157ed73cadef59004bdedb2b4d0f92ca->leave($__internal_9a500844f1539d7e42887b218a447c49157ed73cadef59004bdedb2b4d0f92ca_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
