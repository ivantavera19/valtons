<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a78a6ff1855a11fa56b9aa6f9e619d5d8d1b705a194d0b65fc2ec565b651ab79 extends Twig_Template
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
        $__internal_3ef59130011b6d65ab917a937b7839db9683582bdbfe36d0400f890775f89eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef59130011b6d65ab917a937b7839db9683582bdbfe36d0400f890775f89eb4->enter($__internal_3ef59130011b6d65ab917a937b7839db9683582bdbfe36d0400f890775f89eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a218730bd526907aa079c8a51c224532b38cdb64b2d1d7645e36b5f04965cf58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a218730bd526907aa079c8a51c224532b38cdb64b2d1d7645e36b5f04965cf58->enter($__internal_a218730bd526907aa079c8a51c224532b38cdb64b2d1d7645e36b5f04965cf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_3ef59130011b6d65ab917a937b7839db9683582bdbfe36d0400f890775f89eb4->leave($__internal_3ef59130011b6d65ab917a937b7839db9683582bdbfe36d0400f890775f89eb4_prof);

        
        $__internal_a218730bd526907aa079c8a51c224532b38cdb64b2d1d7645e36b5f04965cf58->leave($__internal_a218730bd526907aa079c8a51c224532b38cdb64b2d1d7645e36b5f04965cf58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
