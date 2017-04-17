<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ebfd5ace12b238358b83b89fff067be87118f7d5c896aa0ec1a13c49f82fea2f extends Twig_Template
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
        $__internal_22bfb876116d7d713fa7b7b3eaf04b442a097843cde1cbc94e1a0131315ee739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bfb876116d7d713fa7b7b3eaf04b442a097843cde1cbc94e1a0131315ee739->enter($__internal_22bfb876116d7d713fa7b7b3eaf04b442a097843cde1cbc94e1a0131315ee739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d8b748497a5b4f324664cb686281e73830302e93c9996e9a0805dd84bae20d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b748497a5b4f324664cb686281e73830302e93c9996e9a0805dd84bae20d48->enter($__internal_d8b748497a5b4f324664cb686281e73830302e93c9996e9a0805dd84bae20d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_22bfb876116d7d713fa7b7b3eaf04b442a097843cde1cbc94e1a0131315ee739->leave($__internal_22bfb876116d7d713fa7b7b3eaf04b442a097843cde1cbc94e1a0131315ee739_prof);

        
        $__internal_d8b748497a5b4f324664cb686281e73830302e93c9996e9a0805dd84bae20d48->leave($__internal_d8b748497a5b4f324664cb686281e73830302e93c9996e9a0805dd84bae20d48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
