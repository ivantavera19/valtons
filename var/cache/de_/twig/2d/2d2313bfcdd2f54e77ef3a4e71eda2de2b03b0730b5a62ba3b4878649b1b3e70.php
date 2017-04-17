<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e0f971210a2118e226bb84aee46a0abb2057b39af44c6fd69545236a42f8c632 extends Twig_Template
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
        $__internal_5be093edb7c4175e462f29161b0e3f8376e4d8b794d737dfc7702adf9cc0d90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be093edb7c4175e462f29161b0e3f8376e4d8b794d737dfc7702adf9cc0d90b->enter($__internal_5be093edb7c4175e462f29161b0e3f8376e4d8b794d737dfc7702adf9cc0d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1e8ac9057a931a22f5637caef2e0055a14c302a7fd3e6a3b438cc89be2f548d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8ac9057a931a22f5637caef2e0055a14c302a7fd3e6a3b438cc89be2f548d8->enter($__internal_1e8ac9057a931a22f5637caef2e0055a14c302a7fd3e6a3b438cc89be2f548d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5be093edb7c4175e462f29161b0e3f8376e4d8b794d737dfc7702adf9cc0d90b->leave($__internal_5be093edb7c4175e462f29161b0e3f8376e4d8b794d737dfc7702adf9cc0d90b_prof);

        
        $__internal_1e8ac9057a931a22f5637caef2e0055a14c302a7fd3e6a3b438cc89be2f548d8->leave($__internal_1e8ac9057a931a22f5637caef2e0055a14c302a7fd3e6a3b438cc89be2f548d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
