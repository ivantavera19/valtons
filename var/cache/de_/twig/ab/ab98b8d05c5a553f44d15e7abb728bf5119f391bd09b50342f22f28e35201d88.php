<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_242aba863d62b093dfc136bd9222b3a5e7ff55c8865c4675d310342cfb82bb81 extends Twig_Template
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
        $__internal_90d5eb4312f894714c0ca3162aef85d763d18a753990508dc28cd17bc0c37748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d5eb4312f894714c0ca3162aef85d763d18a753990508dc28cd17bc0c37748->enter($__internal_90d5eb4312f894714c0ca3162aef85d763d18a753990508dc28cd17bc0c37748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_c8105c77098f4547434dd76d58d58079dc7db2cc0be2d69f5aab2eab90a05757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8105c77098f4547434dd76d58d58079dc7db2cc0be2d69f5aab2eab90a05757->enter($__internal_c8105c77098f4547434dd76d58d58079dc7db2cc0be2d69f5aab2eab90a05757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_90d5eb4312f894714c0ca3162aef85d763d18a753990508dc28cd17bc0c37748->leave($__internal_90d5eb4312f894714c0ca3162aef85d763d18a753990508dc28cd17bc0c37748_prof);

        
        $__internal_c8105c77098f4547434dd76d58d58079dc7db2cc0be2d69f5aab2eab90a05757->leave($__internal_c8105c77098f4547434dd76d58d58079dc7db2cc0be2d69f5aab2eab90a05757_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
