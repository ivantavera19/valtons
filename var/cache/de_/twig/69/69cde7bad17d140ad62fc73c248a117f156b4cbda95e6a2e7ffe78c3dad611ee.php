<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9fb48ab85c6fa2ec16cc489adf99081fd879f3501ba7d70b54c2fa40d5384b93 extends Twig_Template
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
        $__internal_1d6f60f73c2745c2faed64b4d23aa8da90ab53dd633e2accf186d657e180fc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6f60f73c2745c2faed64b4d23aa8da90ab53dd633e2accf186d657e180fc81->enter($__internal_1d6f60f73c2745c2faed64b4d23aa8da90ab53dd633e2accf186d657e180fc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8f28a420baf891541d72876c73188d4a0a00ab632ebd32b80552f1fb939dc78e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f28a420baf891541d72876c73188d4a0a00ab632ebd32b80552f1fb939dc78e->enter($__internal_8f28a420baf891541d72876c73188d4a0a00ab632ebd32b80552f1fb939dc78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1d6f60f73c2745c2faed64b4d23aa8da90ab53dd633e2accf186d657e180fc81->leave($__internal_1d6f60f73c2745c2faed64b4d23aa8da90ab53dd633e2accf186d657e180fc81_prof);

        
        $__internal_8f28a420baf891541d72876c73188d4a0a00ab632ebd32b80552f1fb939dc78e->leave($__internal_8f28a420baf891541d72876c73188d4a0a00ab632ebd32b80552f1fb939dc78e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
