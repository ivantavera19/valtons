<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d6cb6cbeeb3e1f514801834123a9f84a251f9971f4810198e3a6366663d6eaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7455f10dac10e81e9a1fb7093013e2078038704bd2f92f4e3b779531251474d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7455f10dac10e81e9a1fb7093013e2078038704bd2f92f4e3b779531251474d3->enter($__internal_7455f10dac10e81e9a1fb7093013e2078038704bd2f92f4e3b779531251474d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_733a881cb945269868724fa25638af729e9940899ba1c6dfcb799f524046b41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733a881cb945269868724fa25638af729e9940899ba1c6dfcb799f524046b41b->enter($__internal_733a881cb945269868724fa25638af729e9940899ba1c6dfcb799f524046b41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7455f10dac10e81e9a1fb7093013e2078038704bd2f92f4e3b779531251474d3->leave($__internal_7455f10dac10e81e9a1fb7093013e2078038704bd2f92f4e3b779531251474d3_prof);

        
        $__internal_733a881cb945269868724fa25638af729e9940899ba1c6dfcb799f524046b41b->leave($__internal_733a881cb945269868724fa25638af729e9940899ba1c6dfcb799f524046b41b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7542ea18801bbfc2d02af68f2509e23a193b861af754d1960bbd42935f8ec31c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7542ea18801bbfc2d02af68f2509e23a193b861af754d1960bbd42935f8ec31c->enter($__internal_7542ea18801bbfc2d02af68f2509e23a193b861af754d1960bbd42935f8ec31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_021e2b14f032ff5daac4ab6e2db4df4ecafe0c61235c79d2d3885f38bd85b64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021e2b14f032ff5daac4ab6e2db4df4ecafe0c61235c79d2d3885f38bd85b64c->enter($__internal_021e2b14f032ff5daac4ab6e2db4df4ecafe0c61235c79d2d3885f38bd85b64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_021e2b14f032ff5daac4ab6e2db4df4ecafe0c61235c79d2d3885f38bd85b64c->leave($__internal_021e2b14f032ff5daac4ab6e2db4df4ecafe0c61235c79d2d3885f38bd85b64c_prof);

        
        $__internal_7542ea18801bbfc2d02af68f2509e23a193b861af754d1960bbd42935f8ec31c->leave($__internal_7542ea18801bbfc2d02af68f2509e23a193b861af754d1960bbd42935f8ec31c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
