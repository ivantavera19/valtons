<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_dbe3596093799abfcc846c93c6aef5fe75cbd6a3fa3eb6d816cf5d49cfd6e8c5 extends Twig_Template
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
        $__internal_34b976b5871f9ebd835b7c1cd4311cf6265af78f84d5ff4a774222d18e88b502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b976b5871f9ebd835b7c1cd4311cf6265af78f84d5ff4a774222d18e88b502->enter($__internal_34b976b5871f9ebd835b7c1cd4311cf6265af78f84d5ff4a774222d18e88b502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5a2115b4a3eeb00fa894abcb6b929ae82cd7d574a59f6f913faf4d4b7b25cb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2115b4a3eeb00fa894abcb6b929ae82cd7d574a59f6f913faf4d4b7b25cb05->enter($__internal_5a2115b4a3eeb00fa894abcb6b929ae82cd7d574a59f6f913faf4d4b7b25cb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_34b976b5871f9ebd835b7c1cd4311cf6265af78f84d5ff4a774222d18e88b502->leave($__internal_34b976b5871f9ebd835b7c1cd4311cf6265af78f84d5ff4a774222d18e88b502_prof);

        
        $__internal_5a2115b4a3eeb00fa894abcb6b929ae82cd7d574a59f6f913faf4d4b7b25cb05->leave($__internal_5a2115b4a3eeb00fa894abcb6b929ae82cd7d574a59f6f913faf4d4b7b25cb05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
