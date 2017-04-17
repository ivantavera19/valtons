<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f5da74cc831cae1f4e2c8c48eb12db58e79b64c60996dd8bb885dd0b9b2b762f extends Twig_Template
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
        $__internal_893226b9e84e57c4574a33cac4397cf103590f2e092debf0c6e865c362e68818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893226b9e84e57c4574a33cac4397cf103590f2e092debf0c6e865c362e68818->enter($__internal_893226b9e84e57c4574a33cac4397cf103590f2e092debf0c6e865c362e68818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ad76f52fe8bd31425aa8482844b5bd7d98de67309d546b9b7066338cb2830f73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad76f52fe8bd31425aa8482844b5bd7d98de67309d546b9b7066338cb2830f73->enter($__internal_ad76f52fe8bd31425aa8482844b5bd7d98de67309d546b9b7066338cb2830f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_893226b9e84e57c4574a33cac4397cf103590f2e092debf0c6e865c362e68818->leave($__internal_893226b9e84e57c4574a33cac4397cf103590f2e092debf0c6e865c362e68818_prof);

        
        $__internal_ad76f52fe8bd31425aa8482844b5bd7d98de67309d546b9b7066338cb2830f73->leave($__internal_ad76f52fe8bd31425aa8482844b5bd7d98de67309d546b9b7066338cb2830f73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
