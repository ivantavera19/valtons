<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e6a617f70ceb20ccf700a800676314ea2830de0d56a1bd622841f731eda41c61 extends Twig_Template
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
        $__internal_c4adb7baeb0f3f216a402e7e95d577519451ad33aabd5ff30b36955f4e2dbcfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4adb7baeb0f3f216a402e7e95d577519451ad33aabd5ff30b36955f4e2dbcfd->enter($__internal_c4adb7baeb0f3f216a402e7e95d577519451ad33aabd5ff30b36955f4e2dbcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_6b1ceaed55dbf17bf5efd25111bbad6999258bb9f9653ade2320f56e476b6974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1ceaed55dbf17bf5efd25111bbad6999258bb9f9653ade2320f56e476b6974->enter($__internal_6b1ceaed55dbf17bf5efd25111bbad6999258bb9f9653ade2320f56e476b6974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c4adb7baeb0f3f216a402e7e95d577519451ad33aabd5ff30b36955f4e2dbcfd->leave($__internal_c4adb7baeb0f3f216a402e7e95d577519451ad33aabd5ff30b36955f4e2dbcfd_prof);

        
        $__internal_6b1ceaed55dbf17bf5efd25111bbad6999258bb9f9653ade2320f56e476b6974->leave($__internal_6b1ceaed55dbf17bf5efd25111bbad6999258bb9f9653ade2320f56e476b6974_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
