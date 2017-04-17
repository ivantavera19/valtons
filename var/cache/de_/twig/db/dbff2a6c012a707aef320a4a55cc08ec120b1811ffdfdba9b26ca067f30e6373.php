<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c461d682694ac95db26a8c5b409f676678bf985c3e11dd5a56033a90c67dead0 extends Twig_Template
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
        $__internal_75bce3f99df90bd97ea1ecfbd3a0a4a1599edc0aa52dd475efa3d37341d52d17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75bce3f99df90bd97ea1ecfbd3a0a4a1599edc0aa52dd475efa3d37341d52d17->enter($__internal_75bce3f99df90bd97ea1ecfbd3a0a4a1599edc0aa52dd475efa3d37341d52d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_36bb7928fdc87e043334aa11e889c613153727e7945949ff664587ed1eb49780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bb7928fdc87e043334aa11e889c613153727e7945949ff664587ed1eb49780->enter($__internal_36bb7928fdc87e043334aa11e889c613153727e7945949ff664587ed1eb49780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_75bce3f99df90bd97ea1ecfbd3a0a4a1599edc0aa52dd475efa3d37341d52d17->leave($__internal_75bce3f99df90bd97ea1ecfbd3a0a4a1599edc0aa52dd475efa3d37341d52d17_prof);

        
        $__internal_36bb7928fdc87e043334aa11e889c613153727e7945949ff664587ed1eb49780->leave($__internal_36bb7928fdc87e043334aa11e889c613153727e7945949ff664587ed1eb49780_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
