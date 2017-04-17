<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_84d8e4234ad8da65ead528aca2feb7c0ec16b867fc9e73a841cdd2f377dc8b9a extends Twig_Template
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
        $__internal_4f79a5a4e523ee5185010398d8afa43039bc55911613ffc268198e3fb6b14818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f79a5a4e523ee5185010398d8afa43039bc55911613ffc268198e3fb6b14818->enter($__internal_4f79a5a4e523ee5185010398d8afa43039bc55911613ffc268198e3fb6b14818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_52d127176d69fca07dfc92d1e1ade298af0a95b016ab93fa10cef263a52e8434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d127176d69fca07dfc92d1e1ade298af0a95b016ab93fa10cef263a52e8434->enter($__internal_52d127176d69fca07dfc92d1e1ade298af0a95b016ab93fa10cef263a52e8434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4f79a5a4e523ee5185010398d8afa43039bc55911613ffc268198e3fb6b14818->leave($__internal_4f79a5a4e523ee5185010398d8afa43039bc55911613ffc268198e3fb6b14818_prof);

        
        $__internal_52d127176d69fca07dfc92d1e1ade298af0a95b016ab93fa10cef263a52e8434->leave($__internal_52d127176d69fca07dfc92d1e1ade298af0a95b016ab93fa10cef263a52e8434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
