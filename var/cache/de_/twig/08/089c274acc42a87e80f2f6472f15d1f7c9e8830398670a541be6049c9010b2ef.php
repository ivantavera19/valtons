<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c4ce05921829ab9e8618ad92cc4f2aeed7403f604d7593a0504b1dc59c38f067 extends Twig_Template
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
        $__internal_197a2b941952cd8547894e5e1d2612e3765575172bf35edb376aefc858bee641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197a2b941952cd8547894e5e1d2612e3765575172bf35edb376aefc858bee641->enter($__internal_197a2b941952cd8547894e5e1d2612e3765575172bf35edb376aefc858bee641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_cc4eeeb132aa576a79e4617e0f4659382e0704d6eff0fca493e0a3c0f0553b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4eeeb132aa576a79e4617e0f4659382e0704d6eff0fca493e0a3c0f0553b38->enter($__internal_cc4eeeb132aa576a79e4617e0f4659382e0704d6eff0fca493e0a3c0f0553b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_197a2b941952cd8547894e5e1d2612e3765575172bf35edb376aefc858bee641->leave($__internal_197a2b941952cd8547894e5e1d2612e3765575172bf35edb376aefc858bee641_prof);

        
        $__internal_cc4eeeb132aa576a79e4617e0f4659382e0704d6eff0fca493e0a3c0f0553b38->leave($__internal_cc4eeeb132aa576a79e4617e0f4659382e0704d6eff0fca493e0a3c0f0553b38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
