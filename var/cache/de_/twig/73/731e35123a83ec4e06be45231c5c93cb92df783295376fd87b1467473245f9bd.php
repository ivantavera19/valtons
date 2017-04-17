<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ec6d46555e2034d392cd4f045ddf46fc6f02ca06ac3658e287a7488bdcb299c3 extends Twig_Template
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
        $__internal_c9752a7458270f36b1202b97a1bf2d12715ac7642329fe4434704a7a1ed0a81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9752a7458270f36b1202b97a1bf2d12715ac7642329fe4434704a7a1ed0a81e->enter($__internal_c9752a7458270f36b1202b97a1bf2d12715ac7642329fe4434704a7a1ed0a81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_e5e396ce452fe80737e75cf1735e0bc2ab9bc3c43551cd01a220b8c08ec9ee44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e396ce452fe80737e75cf1735e0bc2ab9bc3c43551cd01a220b8c08ec9ee44->enter($__internal_e5e396ce452fe80737e75cf1735e0bc2ab9bc3c43551cd01a220b8c08ec9ee44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c9752a7458270f36b1202b97a1bf2d12715ac7642329fe4434704a7a1ed0a81e->leave($__internal_c9752a7458270f36b1202b97a1bf2d12715ac7642329fe4434704a7a1ed0a81e_prof);

        
        $__internal_e5e396ce452fe80737e75cf1735e0bc2ab9bc3c43551cd01a220b8c08ec9ee44->leave($__internal_e5e396ce452fe80737e75cf1735e0bc2ab9bc3c43551cd01a220b8c08ec9ee44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
