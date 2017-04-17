<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f3defe0f75614e153998bf8fb316ac33a171f8ae713cd81fba113152e65f9515 extends Twig_Template
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
        $__internal_1c92acf8f9b19ad37fb426644fd4a563a80b64f50b6d0cb27c658b47ba25c749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c92acf8f9b19ad37fb426644fd4a563a80b64f50b6d0cb27c658b47ba25c749->enter($__internal_1c92acf8f9b19ad37fb426644fd4a563a80b64f50b6d0cb27c658b47ba25c749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1affa603386bf12f6b725fcb0abe00e0696efa1ca5a7a5cfb42e71b74fed0016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1affa603386bf12f6b725fcb0abe00e0696efa1ca5a7a5cfb42e71b74fed0016->enter($__internal_1affa603386bf12f6b725fcb0abe00e0696efa1ca5a7a5cfb42e71b74fed0016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1c92acf8f9b19ad37fb426644fd4a563a80b64f50b6d0cb27c658b47ba25c749->leave($__internal_1c92acf8f9b19ad37fb426644fd4a563a80b64f50b6d0cb27c658b47ba25c749_prof);

        
        $__internal_1affa603386bf12f6b725fcb0abe00e0696efa1ca5a7a5cfb42e71b74fed0016->leave($__internal_1affa603386bf12f6b725fcb0abe00e0696efa1ca5a7a5cfb42e71b74fed0016_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
