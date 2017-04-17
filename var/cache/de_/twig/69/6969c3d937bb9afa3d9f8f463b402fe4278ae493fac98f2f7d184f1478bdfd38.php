<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_adb5c9aed8e238ce21f7bdcb74877aedf5f913e215cb2622a3e8afe3d625bd51 extends Twig_Template
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
        $__internal_fc3d8116c92852d3ecc9e2ec0462c9fa49a57486168ba5fcf0f2b2d0977977b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3d8116c92852d3ecc9e2ec0462c9fa49a57486168ba5fcf0f2b2d0977977b2->enter($__internal_fc3d8116c92852d3ecc9e2ec0462c9fa49a57486168ba5fcf0f2b2d0977977b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5ee2cb49a8d39664bc40edf9007f5e2d951600f7ddcd04aac549eb3f5568614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee2cb49a8d39664bc40edf9007f5e2d951600f7ddcd04aac549eb3f5568614e->enter($__internal_5ee2cb49a8d39664bc40edf9007f5e2d951600f7ddcd04aac549eb3f5568614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fc3d8116c92852d3ecc9e2ec0462c9fa49a57486168ba5fcf0f2b2d0977977b2->leave($__internal_fc3d8116c92852d3ecc9e2ec0462c9fa49a57486168ba5fcf0f2b2d0977977b2_prof);

        
        $__internal_5ee2cb49a8d39664bc40edf9007f5e2d951600f7ddcd04aac549eb3f5568614e->leave($__internal_5ee2cb49a8d39664bc40edf9007f5e2d951600f7ddcd04aac549eb3f5568614e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
