<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_d94b5af16942b7dc334a5cc4944c5cf24069159ff35cffafa4d3e01d64293004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44a8d462a33f0ee9559b2224bcf90a743c55384a696f547167aa43476478117a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a8d462a33f0ee9559b2224bcf90a743c55384a696f547167aa43476478117a->enter($__internal_44a8d462a33f0ee9559b2224bcf90a743c55384a696f547167aa43476478117a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_02aee61ef8d3bf977a59077a210f482b0a88ba5d043949b86e2a504025b3a24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02aee61ef8d3bf977a59077a210f482b0a88ba5d043949b86e2a504025b3a24d->enter($__internal_02aee61ef8d3bf977a59077a210f482b0a88ba5d043949b86e2a504025b3a24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a8d462a33f0ee9559b2224bcf90a743c55384a696f547167aa43476478117a->leave($__internal_44a8d462a33f0ee9559b2224bcf90a743c55384a696f547167aa43476478117a_prof);

        
        $__internal_02aee61ef8d3bf977a59077a210f482b0a88ba5d043949b86e2a504025b3a24d->leave($__internal_02aee61ef8d3bf977a59077a210f482b0a88ba5d043949b86e2a504025b3a24d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_607e1157ef8ce4200bf9cb0bb99e75182e051891d7b72ac8f12e594b0da2488e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607e1157ef8ce4200bf9cb0bb99e75182e051891d7b72ac8f12e594b0da2488e->enter($__internal_607e1157ef8ce4200bf9cb0bb99e75182e051891d7b72ac8f12e594b0da2488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8771d2925bedce0137c391d715f3ff0075c04af48315f2a57c2afa615ebfcb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8771d2925bedce0137c391d715f3ff0075c04af48315f2a57c2afa615ebfcb78->enter($__internal_8771d2925bedce0137c391d715f3ff0075c04af48315f2a57c2afa615ebfcb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8771d2925bedce0137c391d715f3ff0075c04af48315f2a57c2afa615ebfcb78->leave($__internal_8771d2925bedce0137c391d715f3ff0075c04af48315f2a57c2afa615ebfcb78_prof);

        
        $__internal_607e1157ef8ce4200bf9cb0bb99e75182e051891d7b72ac8f12e594b0da2488e->leave($__internal_607e1157ef8ce4200bf9cb0bb99e75182e051891d7b72ac8f12e594b0da2488e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
