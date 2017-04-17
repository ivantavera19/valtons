<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f2c75c71d755c20233abb6dae5681d4ad78b3f519dc5ee83edf32e5282f28ad7 extends Twig_Template
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
        $__internal_05ffa8c4440856b2b5d5846b5c03e739ef892465dcd8d68a57db754a243cd848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ffa8c4440856b2b5d5846b5c03e739ef892465dcd8d68a57db754a243cd848->enter($__internal_05ffa8c4440856b2b5d5846b5c03e739ef892465dcd8d68a57db754a243cd848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_4b442d9934f595b20b63fcfe9a898c5fd63dabbdec0928d34bc66c8cd2d6c4e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b442d9934f595b20b63fcfe9a898c5fd63dabbdec0928d34bc66c8cd2d6c4e7->enter($__internal_4b442d9934f595b20b63fcfe9a898c5fd63dabbdec0928d34bc66c8cd2d6c4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_05ffa8c4440856b2b5d5846b5c03e739ef892465dcd8d68a57db754a243cd848->leave($__internal_05ffa8c4440856b2b5d5846b5c03e739ef892465dcd8d68a57db754a243cd848_prof);

        
        $__internal_4b442d9934f595b20b63fcfe9a898c5fd63dabbdec0928d34bc66c8cd2d6c4e7->leave($__internal_4b442d9934f595b20b63fcfe9a898c5fd63dabbdec0928d34bc66c8cd2d6c4e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
