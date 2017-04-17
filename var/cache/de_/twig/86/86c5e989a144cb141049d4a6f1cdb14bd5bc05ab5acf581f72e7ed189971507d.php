<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_12070d718bfc51e8a51c7abb3735953deaf59e9121363fd43fe8f77c18067e86 extends Twig_Template
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
        $__internal_d69b054a8a17b45de511b69a4adedff0f17116958847e7d8fa6183512af98145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69b054a8a17b45de511b69a4adedff0f17116958847e7d8fa6183512af98145->enter($__internal_d69b054a8a17b45de511b69a4adedff0f17116958847e7d8fa6183512af98145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_dda8ab0e2398e4ffe41f86c2ca2667f4917ec67d99fda2d645b10fb979a0c3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda8ab0e2398e4ffe41f86c2ca2667f4917ec67d99fda2d645b10fb979a0c3e3->enter($__internal_dda8ab0e2398e4ffe41f86c2ca2667f4917ec67d99fda2d645b10fb979a0c3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d69b054a8a17b45de511b69a4adedff0f17116958847e7d8fa6183512af98145->leave($__internal_d69b054a8a17b45de511b69a4adedff0f17116958847e7d8fa6183512af98145_prof);

        
        $__internal_dda8ab0e2398e4ffe41f86c2ca2667f4917ec67d99fda2d645b10fb979a0c3e3->leave($__internal_dda8ab0e2398e4ffe41f86c2ca2667f4917ec67d99fda2d645b10fb979a0c3e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
