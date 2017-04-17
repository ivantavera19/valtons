<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_873cf7c4762491f06eac0cc9cb8aecccc3baa3416c21ce164f62f79a0619e622 extends Twig_Template
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
        $__internal_d0ea49b60ddffc8a3d9fdfbf46911f36c17a4d0c844ea29158c048c637a9afc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ea49b60ddffc8a3d9fdfbf46911f36c17a4d0c844ea29158c048c637a9afc3->enter($__internal_d0ea49b60ddffc8a3d9fdfbf46911f36c17a4d0c844ea29158c048c637a9afc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_0359e7f2a4a4e9436641ced397e9b6decf609b8a74bd2583a8ea65608b3b5e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0359e7f2a4a4e9436641ced397e9b6decf609b8a74bd2583a8ea65608b3b5e5e->enter($__internal_0359e7f2a4a4e9436641ced397e9b6decf609b8a74bd2583a8ea65608b3b5e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d0ea49b60ddffc8a3d9fdfbf46911f36c17a4d0c844ea29158c048c637a9afc3->leave($__internal_d0ea49b60ddffc8a3d9fdfbf46911f36c17a4d0c844ea29158c048c637a9afc3_prof);

        
        $__internal_0359e7f2a4a4e9436641ced397e9b6decf609b8a74bd2583a8ea65608b3b5e5e->leave($__internal_0359e7f2a4a4e9436641ced397e9b6decf609b8a74bd2583a8ea65608b3b5e5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
