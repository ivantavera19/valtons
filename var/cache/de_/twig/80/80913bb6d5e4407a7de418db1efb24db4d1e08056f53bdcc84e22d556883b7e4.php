<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_9781175d7d2f96a0c4395b170a783381bf7238ea78dcfd332ae3f67f5fa84a44 extends Twig_Template
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
        $__internal_9fec31e56b03466b5831acca7f328cec2cc97401d8300046443715753e47503e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fec31e56b03466b5831acca7f328cec2cc97401d8300046443715753e47503e->enter($__internal_9fec31e56b03466b5831acca7f328cec2cc97401d8300046443715753e47503e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_155121c541c1f0f7fce24250822201bee6ea3c623797052647e4ebd8962da572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155121c541c1f0f7fce24250822201bee6ea3c623797052647e4ebd8962da572->enter($__internal_155121c541c1f0f7fce24250822201bee6ea3c623797052647e4ebd8962da572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9fec31e56b03466b5831acca7f328cec2cc97401d8300046443715753e47503e->leave($__internal_9fec31e56b03466b5831acca7f328cec2cc97401d8300046443715753e47503e_prof);

        
        $__internal_155121c541c1f0f7fce24250822201bee6ea3c623797052647e4ebd8962da572->leave($__internal_155121c541c1f0f7fce24250822201bee6ea3c623797052647e4ebd8962da572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
