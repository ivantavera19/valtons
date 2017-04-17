<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_6023dfddd742055927c2478bd8aca76cd5d258ed0deeafefe067b10a6c6dc2c0 extends Twig_Template
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
        $__internal_34be737bf08efdc986a17b926f459ecf8a894a4b16ece81a3bc47419042c5b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34be737bf08efdc986a17b926f459ecf8a894a4b16ece81a3bc47419042c5b13->enter($__internal_34be737bf08efdc986a17b926f459ecf8a894a4b16ece81a3bc47419042c5b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b52ec1895383b54a510159332c28566413fa5cc07c71e10be57f13648076e30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52ec1895383b54a510159332c28566413fa5cc07c71e10be57f13648076e30c->enter($__internal_b52ec1895383b54a510159332c28566413fa5cc07c71e10be57f13648076e30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_34be737bf08efdc986a17b926f459ecf8a894a4b16ece81a3bc47419042c5b13->leave($__internal_34be737bf08efdc986a17b926f459ecf8a894a4b16ece81a3bc47419042c5b13_prof);

        
        $__internal_b52ec1895383b54a510159332c28566413fa5cc07c71e10be57f13648076e30c->leave($__internal_b52ec1895383b54a510159332c28566413fa5cc07c71e10be57f13648076e30c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
