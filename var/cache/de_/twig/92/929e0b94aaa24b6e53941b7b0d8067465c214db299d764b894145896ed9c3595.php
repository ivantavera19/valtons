<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3cba77f24485a488e8e4fa4cecf0b42bca5aaef7b9a81ac0312000eb5f8851f7 extends Twig_Template
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
        $__internal_d0e66bb93522b9997305b257ab77282f923022c053fa2fbbb728d6e9d2fe33bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e66bb93522b9997305b257ab77282f923022c053fa2fbbb728d6e9d2fe33bc->enter($__internal_d0e66bb93522b9997305b257ab77282f923022c053fa2fbbb728d6e9d2fe33bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_b6232b151da394aad0543ee668a8aadbbc8f10539feb2da149b513d962f699d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6232b151da394aad0543ee668a8aadbbc8f10539feb2da149b513d962f699d6->enter($__internal_b6232b151da394aad0543ee668a8aadbbc8f10539feb2da149b513d962f699d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d0e66bb93522b9997305b257ab77282f923022c053fa2fbbb728d6e9d2fe33bc->leave($__internal_d0e66bb93522b9997305b257ab77282f923022c053fa2fbbb728d6e9d2fe33bc_prof);

        
        $__internal_b6232b151da394aad0543ee668a8aadbbc8f10539feb2da149b513d962f699d6->leave($__internal_b6232b151da394aad0543ee668a8aadbbc8f10539feb2da149b513d962f699d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
