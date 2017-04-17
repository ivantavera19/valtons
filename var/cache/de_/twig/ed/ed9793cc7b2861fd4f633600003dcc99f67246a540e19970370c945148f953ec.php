<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b9722f19ed09fef2b51b2dd70e6c854f2e25abf70a6d3bbb338dcfaddfc89139 extends Twig_Template
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
        $__internal_a5d7750ac703436099a45d45753deb10047998608c62937696928862d8767492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d7750ac703436099a45d45753deb10047998608c62937696928862d8767492->enter($__internal_a5d7750ac703436099a45d45753deb10047998608c62937696928862d8767492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_1a3ad6bbd85fc71f43167d0a93ca14fa7f2db8e5545ed5b2e1e4a266b9210413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3ad6bbd85fc71f43167d0a93ca14fa7f2db8e5545ed5b2e1e4a266b9210413->enter($__internal_1a3ad6bbd85fc71f43167d0a93ca14fa7f2db8e5545ed5b2e1e4a266b9210413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a5d7750ac703436099a45d45753deb10047998608c62937696928862d8767492->leave($__internal_a5d7750ac703436099a45d45753deb10047998608c62937696928862d8767492_prof);

        
        $__internal_1a3ad6bbd85fc71f43167d0a93ca14fa7f2db8e5545ed5b2e1e4a266b9210413->leave($__internal_1a3ad6bbd85fc71f43167d0a93ca14fa7f2db8e5545ed5b2e1e4a266b9210413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
