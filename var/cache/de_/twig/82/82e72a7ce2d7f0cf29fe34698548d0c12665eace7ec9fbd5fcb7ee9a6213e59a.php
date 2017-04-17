<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_81adae75faad2e6ba3c986a31a7c8b6df32ae167cdececdf2a290bce27b530a6 extends Twig_Template
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
        $__internal_6c19120911eed148b5fa8bd4b5943b5ef3a2296174c12e2dfb0d8dc7f06719ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c19120911eed148b5fa8bd4b5943b5ef3a2296174c12e2dfb0d8dc7f06719ad->enter($__internal_6c19120911eed148b5fa8bd4b5943b5ef3a2296174c12e2dfb0d8dc7f06719ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_333b7f78c400c04cba30d03c44695d634ac710438c90c3fe96c24b792bcc50ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_333b7f78c400c04cba30d03c44695d634ac710438c90c3fe96c24b792bcc50ab->enter($__internal_333b7f78c400c04cba30d03c44695d634ac710438c90c3fe96c24b792bcc50ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_6c19120911eed148b5fa8bd4b5943b5ef3a2296174c12e2dfb0d8dc7f06719ad->leave($__internal_6c19120911eed148b5fa8bd4b5943b5ef3a2296174c12e2dfb0d8dc7f06719ad_prof);

        
        $__internal_333b7f78c400c04cba30d03c44695d634ac710438c90c3fe96c24b792bcc50ab->leave($__internal_333b7f78c400c04cba30d03c44695d634ac710438c90c3fe96c24b792bcc50ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
