<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f124d37a05b2262eb56cd6ffd21cd10989e9b2c0d575529b58e1af382450dda8 extends Twig_Template
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
        $__internal_9125103997fa7395118ea98957fb65ff770fbc822d950fab7753742264360927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9125103997fa7395118ea98957fb65ff770fbc822d950fab7753742264360927->enter($__internal_9125103997fa7395118ea98957fb65ff770fbc822d950fab7753742264360927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1a55f8dfceff129d62557904cccfb78f8054e68c859070809a538b80305a660c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a55f8dfceff129d62557904cccfb78f8054e68c859070809a538b80305a660c->enter($__internal_1a55f8dfceff129d62557904cccfb78f8054e68c859070809a538b80305a660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9125103997fa7395118ea98957fb65ff770fbc822d950fab7753742264360927->leave($__internal_9125103997fa7395118ea98957fb65ff770fbc822d950fab7753742264360927_prof);

        
        $__internal_1a55f8dfceff129d62557904cccfb78f8054e68c859070809a538b80305a660c->leave($__internal_1a55f8dfceff129d62557904cccfb78f8054e68c859070809a538b80305a660c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
