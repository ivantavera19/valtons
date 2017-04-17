<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ebb8106dc31eb97b3a188d8aa8937984ef45a6b8bb72ce572cb34f50ccab72be extends Twig_Template
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
        $__internal_e5aeec2ae5ab0a01f988bf5b40ebd2300c5183b5a0cb75ff902b81c94570e02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aeec2ae5ab0a01f988bf5b40ebd2300c5183b5a0cb75ff902b81c94570e02d->enter($__internal_e5aeec2ae5ab0a01f988bf5b40ebd2300c5183b5a0cb75ff902b81c94570e02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_eac9ef8ce2554a2de5a919c601f1aab27b8d96abbda56f509c25b6239f7ecf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac9ef8ce2554a2de5a919c601f1aab27b8d96abbda56f509c25b6239f7ecf04->enter($__internal_eac9ef8ce2554a2de5a919c601f1aab27b8d96abbda56f509c25b6239f7ecf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e5aeec2ae5ab0a01f988bf5b40ebd2300c5183b5a0cb75ff902b81c94570e02d->leave($__internal_e5aeec2ae5ab0a01f988bf5b40ebd2300c5183b5a0cb75ff902b81c94570e02d_prof);

        
        $__internal_eac9ef8ce2554a2de5a919c601f1aab27b8d96abbda56f509c25b6239f7ecf04->leave($__internal_eac9ef8ce2554a2de5a919c601f1aab27b8d96abbda56f509c25b6239f7ecf04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
