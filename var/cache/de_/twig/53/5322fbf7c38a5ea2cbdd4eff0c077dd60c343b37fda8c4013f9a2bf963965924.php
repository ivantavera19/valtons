<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_56f8c7f3d5f9e08f3fd9de32c552af390273466e519da4bfed1d7d3cf9d5e83c extends Twig_Template
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
        $__internal_a5c910da0fe6c0f6c1665ae4fcc5184da941a75bb45b1946f3ac3cee40107cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c910da0fe6c0f6c1665ae4fcc5184da941a75bb45b1946f3ac3cee40107cf5->enter($__internal_a5c910da0fe6c0f6c1665ae4fcc5184da941a75bb45b1946f3ac3cee40107cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f9c0dabf3a808901851dd37ccc2bdc2ae742a95135e30f0e8bc4b16d4dc88724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c0dabf3a808901851dd37ccc2bdc2ae742a95135e30f0e8bc4b16d4dc88724->enter($__internal_f9c0dabf3a808901851dd37ccc2bdc2ae742a95135e30f0e8bc4b16d4dc88724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a5c910da0fe6c0f6c1665ae4fcc5184da941a75bb45b1946f3ac3cee40107cf5->leave($__internal_a5c910da0fe6c0f6c1665ae4fcc5184da941a75bb45b1946f3ac3cee40107cf5_prof);

        
        $__internal_f9c0dabf3a808901851dd37ccc2bdc2ae742a95135e30f0e8bc4b16d4dc88724->leave($__internal_f9c0dabf3a808901851dd37ccc2bdc2ae742a95135e30f0e8bc4b16d4dc88724_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
