<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_3c1e989bc1e6d036adbf4dd72cdd5c30b24d7b1eb719f118ff343db1b4c092b8 extends Twig_Template
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
        $__internal_02cad1a905d763265e797f58162b189c33d7c5ef3a30cff72ffb61511797980c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cad1a905d763265e797f58162b189c33d7c5ef3a30cff72ffb61511797980c->enter($__internal_02cad1a905d763265e797f58162b189c33d7c5ef3a30cff72ffb61511797980c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_995fd8134499876f8aec09f556a3c1147905aeb2d51622c7855a30f10cacb618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995fd8134499876f8aec09f556a3c1147905aeb2d51622c7855a30f10cacb618->enter($__internal_995fd8134499876f8aec09f556a3c1147905aeb2d51622c7855a30f10cacb618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_02cad1a905d763265e797f58162b189c33d7c5ef3a30cff72ffb61511797980c->leave($__internal_02cad1a905d763265e797f58162b189c33d7c5ef3a30cff72ffb61511797980c_prof);

        
        $__internal_995fd8134499876f8aec09f556a3c1147905aeb2d51622c7855a30f10cacb618->leave($__internal_995fd8134499876f8aec09f556a3c1147905aeb2d51622c7855a30f10cacb618_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
