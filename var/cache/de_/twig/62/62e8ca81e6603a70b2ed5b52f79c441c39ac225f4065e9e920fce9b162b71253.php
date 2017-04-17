<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_28e6933c1a269f5ebb2ab91156c4fdd38c99aa769be7bbda253785f2c5d18f25 extends Twig_Template
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
        $__internal_05c0fced9f5ad426c3d9b4e5c2eb15fc15afe2de39ca02a99c533cfd0639ddb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c0fced9f5ad426c3d9b4e5c2eb15fc15afe2de39ca02a99c533cfd0639ddb8->enter($__internal_05c0fced9f5ad426c3d9b4e5c2eb15fc15afe2de39ca02a99c533cfd0639ddb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8e3012fd40a3dd5487faef7987bec3634202fc72fc05cedacf2085280c7c33e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3012fd40a3dd5487faef7987bec3634202fc72fc05cedacf2085280c7c33e1->enter($__internal_8e3012fd40a3dd5487faef7987bec3634202fc72fc05cedacf2085280c7c33e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_05c0fced9f5ad426c3d9b4e5c2eb15fc15afe2de39ca02a99c533cfd0639ddb8->leave($__internal_05c0fced9f5ad426c3d9b4e5c2eb15fc15afe2de39ca02a99c533cfd0639ddb8_prof);

        
        $__internal_8e3012fd40a3dd5487faef7987bec3634202fc72fc05cedacf2085280c7c33e1->leave($__internal_8e3012fd40a3dd5487faef7987bec3634202fc72fc05cedacf2085280c7c33e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
