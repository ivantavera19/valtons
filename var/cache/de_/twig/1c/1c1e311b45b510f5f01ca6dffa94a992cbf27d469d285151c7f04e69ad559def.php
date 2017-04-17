<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_633e562032fc2c207cb7b9d09c6a739a81d66b6c442451a74eeb29393ef2e537 extends Twig_Template
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
        $__internal_fc5d15b520f468236098eea120fcbf704c5fbdb9b6697fcb04ab3ee008bf9c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5d15b520f468236098eea120fcbf704c5fbdb9b6697fcb04ab3ee008bf9c3c->enter($__internal_fc5d15b520f468236098eea120fcbf704c5fbdb9b6697fcb04ab3ee008bf9c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0edc8384cf2bd03448ede208836a06b9c4f271e6ce548d3f08acf734530327c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0edc8384cf2bd03448ede208836a06b9c4f271e6ce548d3f08acf734530327c3->enter($__internal_0edc8384cf2bd03448ede208836a06b9c4f271e6ce548d3f08acf734530327c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_fc5d15b520f468236098eea120fcbf704c5fbdb9b6697fcb04ab3ee008bf9c3c->leave($__internal_fc5d15b520f468236098eea120fcbf704c5fbdb9b6697fcb04ab3ee008bf9c3c_prof);

        
        $__internal_0edc8384cf2bd03448ede208836a06b9c4f271e6ce548d3f08acf734530327c3->leave($__internal_0edc8384cf2bd03448ede208836a06b9c4f271e6ce548d3f08acf734530327c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
