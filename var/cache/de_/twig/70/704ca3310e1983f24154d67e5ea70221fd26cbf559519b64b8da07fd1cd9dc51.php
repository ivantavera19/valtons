<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_3159f0d967b285144a2b9f1ebbce44504ad0cf05866b700f2f437d5849d4bfef extends Twig_Template
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
        $__internal_6980696386aec404d2d81ef1ded2b3e23d146339f6aab93bca37a528db7f4b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6980696386aec404d2d81ef1ded2b3e23d146339f6aab93bca37a528db7f4b69->enter($__internal_6980696386aec404d2d81ef1ded2b3e23d146339f6aab93bca37a528db7f4b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0de677ffcc17afe5e62b2f67085aa599fac0f9c4e550bd9f87c1b202c127ef00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de677ffcc17afe5e62b2f67085aa599fac0f9c4e550bd9f87c1b202c127ef00->enter($__internal_0de677ffcc17afe5e62b2f67085aa599fac0f9c4e550bd9f87c1b202c127ef00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6980696386aec404d2d81ef1ded2b3e23d146339f6aab93bca37a528db7f4b69->leave($__internal_6980696386aec404d2d81ef1ded2b3e23d146339f6aab93bca37a528db7f4b69_prof);

        
        $__internal_0de677ffcc17afe5e62b2f67085aa599fac0f9c4e550bd9f87c1b202c127ef00->leave($__internal_0de677ffcc17afe5e62b2f67085aa599fac0f9c4e550bd9f87c1b202c127ef00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
