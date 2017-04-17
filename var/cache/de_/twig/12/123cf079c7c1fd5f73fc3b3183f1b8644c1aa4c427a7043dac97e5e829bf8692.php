<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1baeefbcc2cca536797ec4095c6152b3354293a582477aa0cf923dae9a138d9d extends Twig_Template
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
        $__internal_0500d8d9bd3065022fe043598d2ee3b2116e7ea81c2d1406273cab588b27d91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0500d8d9bd3065022fe043598d2ee3b2116e7ea81c2d1406273cab588b27d91e->enter($__internal_0500d8d9bd3065022fe043598d2ee3b2116e7ea81c2d1406273cab588b27d91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_80141616ecd204cba34b71f67a6077304c88127ba7f3b2f919f195e2fd5fff85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80141616ecd204cba34b71f67a6077304c88127ba7f3b2f919f195e2fd5fff85->enter($__internal_80141616ecd204cba34b71f67a6077304c88127ba7f3b2f919f195e2fd5fff85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0500d8d9bd3065022fe043598d2ee3b2116e7ea81c2d1406273cab588b27d91e->leave($__internal_0500d8d9bd3065022fe043598d2ee3b2116e7ea81c2d1406273cab588b27d91e_prof);

        
        $__internal_80141616ecd204cba34b71f67a6077304c88127ba7f3b2f919f195e2fd5fff85->leave($__internal_80141616ecd204cba34b71f67a6077304c88127ba7f3b2f919f195e2fd5fff85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
