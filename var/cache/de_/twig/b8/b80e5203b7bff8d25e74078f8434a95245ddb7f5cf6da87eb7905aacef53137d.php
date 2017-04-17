<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_18527f90fd08c94a43f65264c68bddfb33529f5b8cd1d4b52676f822d711b258 extends Twig_Template
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
        $__internal_6b9c9791568feac08d31ea48569c83bf2e8d179bcabb3c35ab6089d6d4bfed3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9c9791568feac08d31ea48569c83bf2e8d179bcabb3c35ab6089d6d4bfed3b->enter($__internal_6b9c9791568feac08d31ea48569c83bf2e8d179bcabb3c35ab6089d6d4bfed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_76e08598659bac0f0b05208de2abbe2cd4fd9c972435a694d1922b071174398f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e08598659bac0f0b05208de2abbe2cd4fd9c972435a694d1922b071174398f->enter($__internal_76e08598659bac0f0b05208de2abbe2cd4fd9c972435a694d1922b071174398f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b9c9791568feac08d31ea48569c83bf2e8d179bcabb3c35ab6089d6d4bfed3b->leave($__internal_6b9c9791568feac08d31ea48569c83bf2e8d179bcabb3c35ab6089d6d4bfed3b_prof);

        
        $__internal_76e08598659bac0f0b05208de2abbe2cd4fd9c972435a694d1922b071174398f->leave($__internal_76e08598659bac0f0b05208de2abbe2cd4fd9c972435a694d1922b071174398f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
