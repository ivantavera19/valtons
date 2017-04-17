<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7f34bdbb47e0523c6c5e4a9664bb6f5eefa327992fecedc20cc046d780be37a1 extends Twig_Template
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
        $__internal_866188b45c5c5a1a7080de898e26f55819d6cf167b03d114d8b78186fcddb507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866188b45c5c5a1a7080de898e26f55819d6cf167b03d114d8b78186fcddb507->enter($__internal_866188b45c5c5a1a7080de898e26f55819d6cf167b03d114d8b78186fcddb507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_343eeb1f508e7acf420012731c2e938b3b074eb72a3c187a8eb8c6440f3407c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343eeb1f508e7acf420012731c2e938b3b074eb72a3c187a8eb8c6440f3407c3->enter($__internal_343eeb1f508e7acf420012731c2e938b3b074eb72a3c187a8eb8c6440f3407c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_866188b45c5c5a1a7080de898e26f55819d6cf167b03d114d8b78186fcddb507->leave($__internal_866188b45c5c5a1a7080de898e26f55819d6cf167b03d114d8b78186fcddb507_prof);

        
        $__internal_343eeb1f508e7acf420012731c2e938b3b074eb72a3c187a8eb8c6440f3407c3->leave($__internal_343eeb1f508e7acf420012731c2e938b3b074eb72a3c187a8eb8c6440f3407c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
