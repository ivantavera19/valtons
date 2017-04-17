<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_7345753f1263fb07fdb6bb031c63503a12ea2307d17e7e833d223670dc9697be extends Twig_Template
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
        $__internal_a6b65d0c58460fbe12b038696cf2e42df2669270a7f8b988d2987da84e4f13a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b65d0c58460fbe12b038696cf2e42df2669270a7f8b988d2987da84e4f13a4->enter($__internal_a6b65d0c58460fbe12b038696cf2e42df2669270a7f8b988d2987da84e4f13a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_481bfef714e5d7eeca8c140f3d44aaaeff6f4faa539ff1e86736534b4e9f555d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481bfef714e5d7eeca8c140f3d44aaaeff6f4faa539ff1e86736534b4e9f555d->enter($__internal_481bfef714e5d7eeca8c140f3d44aaaeff6f4faa539ff1e86736534b4e9f555d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a6b65d0c58460fbe12b038696cf2e42df2669270a7f8b988d2987da84e4f13a4->leave($__internal_a6b65d0c58460fbe12b038696cf2e42df2669270a7f8b988d2987da84e4f13a4_prof);

        
        $__internal_481bfef714e5d7eeca8c140f3d44aaaeff6f4faa539ff1e86736534b4e9f555d->leave($__internal_481bfef714e5d7eeca8c140f3d44aaaeff6f4faa539ff1e86736534b4e9f555d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
