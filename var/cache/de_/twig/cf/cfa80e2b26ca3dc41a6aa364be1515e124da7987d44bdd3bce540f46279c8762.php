<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a8395efcc0285990473807d26c07e8769d62155b6166ffdeb8d3ad346d61c7ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_84ea87d70bca6fcfc6f1901b772fffa16f1129f6715f588eac7c008bb581e847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ea87d70bca6fcfc6f1901b772fffa16f1129f6715f588eac7c008bb581e847->enter($__internal_84ea87d70bca6fcfc6f1901b772fffa16f1129f6715f588eac7c008bb581e847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_e8493c59f898275a904fcc0160d45027d7578204cc8c6803aa134b8d41f7ce75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8493c59f898275a904fcc0160d45027d7578204cc8c6803aa134b8d41f7ce75->enter($__internal_e8493c59f898275a904fcc0160d45027d7578204cc8c6803aa134b8d41f7ce75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84ea87d70bca6fcfc6f1901b772fffa16f1129f6715f588eac7c008bb581e847->leave($__internal_84ea87d70bca6fcfc6f1901b772fffa16f1129f6715f588eac7c008bb581e847_prof);

        
        $__internal_e8493c59f898275a904fcc0160d45027d7578204cc8c6803aa134b8d41f7ce75->leave($__internal_e8493c59f898275a904fcc0160d45027d7578204cc8c6803aa134b8d41f7ce75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a57bf0e77c52f8618eb0d5b9bb0bc8db028e36721dd0de5d1218a3ba4abb609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a57bf0e77c52f8618eb0d5b9bb0bc8db028e36721dd0de5d1218a3ba4abb609->enter($__internal_3a57bf0e77c52f8618eb0d5b9bb0bc8db028e36721dd0de5d1218a3ba4abb609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_34ab552a1f5a77067824391f57607fce77afa8daea0c0a778df68ade77202a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34ab552a1f5a77067824391f57607fce77afa8daea0c0a778df68ade77202a5f->enter($__internal_34ab552a1f5a77067824391f57607fce77afa8daea0c0a778df68ade77202a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_34ab552a1f5a77067824391f57607fce77afa8daea0c0a778df68ade77202a5f->leave($__internal_34ab552a1f5a77067824391f57607fce77afa8daea0c0a778df68ade77202a5f_prof);

        
        $__internal_3a57bf0e77c52f8618eb0d5b9bb0bc8db028e36721dd0de5d1218a3ba4abb609->leave($__internal_3a57bf0e77c52f8618eb0d5b9bb0bc8db028e36721dd0de5d1218a3ba4abb609_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
