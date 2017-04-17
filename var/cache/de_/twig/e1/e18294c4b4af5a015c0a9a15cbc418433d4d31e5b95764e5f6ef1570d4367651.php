<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_07e48d0a50392af885080e28f6130fa0a71811d01c3e6c9ab444d7df40a149e0 extends Twig_Template
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
        $__internal_d7e52b5c61137dc4f284daf85bb1f9df7777af12ad6949db982a7180134d2b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e52b5c61137dc4f284daf85bb1f9df7777af12ad6949db982a7180134d2b49->enter($__internal_d7e52b5c61137dc4f284daf85bb1f9df7777af12ad6949db982a7180134d2b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a3a1db8d6f610d6dcf2c5c2cc2f1762ac7efaad33f34cb2cca0d28dcd9769147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a1db8d6f610d6dcf2c5c2cc2f1762ac7efaad33f34cb2cca0d28dcd9769147->enter($__internal_a3a1db8d6f610d6dcf2c5c2cc2f1762ac7efaad33f34cb2cca0d28dcd9769147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d7e52b5c61137dc4f284daf85bb1f9df7777af12ad6949db982a7180134d2b49->leave($__internal_d7e52b5c61137dc4f284daf85bb1f9df7777af12ad6949db982a7180134d2b49_prof);

        
        $__internal_a3a1db8d6f610d6dcf2c5c2cc2f1762ac7efaad33f34cb2cca0d28dcd9769147->leave($__internal_a3a1db8d6f610d6dcf2c5c2cc2f1762ac7efaad33f34cb2cca0d28dcd9769147_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
