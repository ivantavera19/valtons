<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f4c2062366b000d00c1eca96b68f4f1dc01ad8ddfd3c7aebb78f02d346ddd27c extends Twig_Template
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
        $__internal_aaee6f0226e885a3fa746f4f91a931ab5d4852260383e470222bee3174c0ef7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaee6f0226e885a3fa746f4f91a931ab5d4852260383e470222bee3174c0ef7e->enter($__internal_aaee6f0226e885a3fa746f4f91a931ab5d4852260383e470222bee3174c0ef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_cc4d3d546e69c4b4137e447dd78e9d717c2a66381e8bb865907a3536973a8dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4d3d546e69c4b4137e447dd78e9d717c2a66381e8bb865907a3536973a8dbd->enter($__internal_cc4d3d546e69c4b4137e447dd78e9d717c2a66381e8bb865907a3536973a8dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_aaee6f0226e885a3fa746f4f91a931ab5d4852260383e470222bee3174c0ef7e->leave($__internal_aaee6f0226e885a3fa746f4f91a931ab5d4852260383e470222bee3174c0ef7e_prof);

        
        $__internal_cc4d3d546e69c4b4137e447dd78e9d717c2a66381e8bb865907a3536973a8dbd->leave($__internal_cc4d3d546e69c4b4137e447dd78e9d717c2a66381e8bb865907a3536973a8dbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
