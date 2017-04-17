<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_552e9f692e8c66ced8d9be7d56200b5deea186d81e3a6021debbc8311c914dd2 extends Twig_Template
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
        $__internal_9fa4c81c4a20dc60cf6384850974492f9f979aeb85a573bc05d13a84eea456ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa4c81c4a20dc60cf6384850974492f9f979aeb85a573bc05d13a84eea456ae->enter($__internal_9fa4c81c4a20dc60cf6384850974492f9f979aeb85a573bc05d13a84eea456ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c0966836a889ea621660a682f2cc4982c4a9d819caef018dc081fe6b615543cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0966836a889ea621660a682f2cc4982c4a9d819caef018dc081fe6b615543cb->enter($__internal_c0966836a889ea621660a682f2cc4982c4a9d819caef018dc081fe6b615543cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9fa4c81c4a20dc60cf6384850974492f9f979aeb85a573bc05d13a84eea456ae->leave($__internal_9fa4c81c4a20dc60cf6384850974492f9f979aeb85a573bc05d13a84eea456ae_prof);

        
        $__internal_c0966836a889ea621660a682f2cc4982c4a9d819caef018dc081fe6b615543cb->leave($__internal_c0966836a889ea621660a682f2cc4982c4a9d819caef018dc081fe6b615543cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
