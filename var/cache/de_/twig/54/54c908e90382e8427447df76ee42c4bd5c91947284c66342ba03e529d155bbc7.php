<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_53839805dc5d40feee01e1e76eef794f27432b5592295ec3a47dc244c0f55ab2 extends Twig_Template
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
        $__internal_72705a28c689ce3506e5f9b11fd2cd51cce24ccf548343b9e66b0981fd0269fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72705a28c689ce3506e5f9b11fd2cd51cce24ccf548343b9e66b0981fd0269fe->enter($__internal_72705a28c689ce3506e5f9b11fd2cd51cce24ccf548343b9e66b0981fd0269fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_79f107ea2efe15049e8b0dae3fc57044f443c8d1a1e3c9d908ee1619c9d234f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f107ea2efe15049e8b0dae3fc57044f443c8d1a1e3c9d908ee1619c9d234f7->enter($__internal_79f107ea2efe15049e8b0dae3fc57044f443c8d1a1e3c9d908ee1619c9d234f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_72705a28c689ce3506e5f9b11fd2cd51cce24ccf548343b9e66b0981fd0269fe->leave($__internal_72705a28c689ce3506e5f9b11fd2cd51cce24ccf548343b9e66b0981fd0269fe_prof);

        
        $__internal_79f107ea2efe15049e8b0dae3fc57044f443c8d1a1e3c9d908ee1619c9d234f7->leave($__internal_79f107ea2efe15049e8b0dae3fc57044f443c8d1a1e3c9d908ee1619c9d234f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
