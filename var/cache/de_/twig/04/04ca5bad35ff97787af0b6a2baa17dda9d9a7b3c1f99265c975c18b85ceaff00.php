<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_6a45b3d5f89929e2731c2843f257c4e9cd0f124a75c4c50b25e1d539d98814ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ca42895fab7815462e7aa009b6d532360b14f00db86cba718d8bec010fde2844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca42895fab7815462e7aa009b6d532360b14f00db86cba718d8bec010fde2844->enter($__internal_ca42895fab7815462e7aa009b6d532360b14f00db86cba718d8bec010fde2844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_ec4fd503d4a85124af2da734df8a47ac4f30f87db6cb359c8a49eae2ee9963a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4fd503d4a85124af2da734df8a47ac4f30f87db6cb359c8a49eae2ee9963a0->enter($__internal_ec4fd503d4a85124af2da734df8a47ac4f30f87db6cb359c8a49eae2ee9963a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca42895fab7815462e7aa009b6d532360b14f00db86cba718d8bec010fde2844->leave($__internal_ca42895fab7815462e7aa009b6d532360b14f00db86cba718d8bec010fde2844_prof);

        
        $__internal_ec4fd503d4a85124af2da734df8a47ac4f30f87db6cb359c8a49eae2ee9963a0->leave($__internal_ec4fd503d4a85124af2da734df8a47ac4f30f87db6cb359c8a49eae2ee9963a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25f281d964ee043842a6b7ba00f206f975dfc72e9af7fc947bf63b2aa5c9d4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f281d964ee043842a6b7ba00f206f975dfc72e9af7fc947bf63b2aa5c9d4f3->enter($__internal_25f281d964ee043842a6b7ba00f206f975dfc72e9af7fc947bf63b2aa5c9d4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_76e1002ff2693372611ad0a5fcb621873bff3a681010a54b6d72facd0db66385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e1002ff2693372611ad0a5fcb621873bff3a681010a54b6d72facd0db66385->enter($__internal_76e1002ff2693372611ad0a5fcb621873bff3a681010a54b6d72facd0db66385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_76e1002ff2693372611ad0a5fcb621873bff3a681010a54b6d72facd0db66385->leave($__internal_76e1002ff2693372611ad0a5fcb621873bff3a681010a54b6d72facd0db66385_prof);

        
        $__internal_25f281d964ee043842a6b7ba00f206f975dfc72e9af7fc947bf63b2aa5c9d4f3->leave($__internal_25f281d964ee043842a6b7ba00f206f975dfc72e9af7fc947bf63b2aa5c9d4f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
