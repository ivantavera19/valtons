<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_aba139d7dcfc550ce3c2ed326fd2332fcceb60ce7fdab503af5f61badb6e75db extends Twig_Template
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
        $__internal_010c2db0c8fb7bbe80955ce407453e8e5be696642d0a7c88bf01e024035786c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010c2db0c8fb7bbe80955ce407453e8e5be696642d0a7c88bf01e024035786c2->enter($__internal_010c2db0c8fb7bbe80955ce407453e8e5be696642d0a7c88bf01e024035786c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_efcb521a78788a8f1f39df555d8c06e2a57f09e17528fcf70240950a8d6f64f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efcb521a78788a8f1f39df555d8c06e2a57f09e17528fcf70240950a8d6f64f1->enter($__internal_efcb521a78788a8f1f39df555d8c06e2a57f09e17528fcf70240950a8d6f64f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "

    <form class=\"form-signin\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 9
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "
        
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Usuario\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" autofocus />
        

        
            <input class=\"form-control\" placeholder=\"Contraseña\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Recuerdame
            </label>
        </div>

        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
        
        $__internal_010c2db0c8fb7bbe80955ce407453e8e5be696642d0a7c88bf01e024035786c2->leave($__internal_010c2db0c8fb7bbe80955ce407453e8e5be696642d0a7c88bf01e024035786c2_prof);

        
        $__internal_efcb521a78788a8f1f39df555d8c06e2a57f09e17528fcf70240950a8d6f64f1->leave($__internal_efcb521a78788a8f1f39df555d8c06e2a57f09e17528fcf70240950a8d6f64f1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 26,  56 => 14,  52 => 12,  46 => 10,  44 => 9,  40 => 8,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}


    <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}

        
            <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Usuario\" value=\"{{ last_username }}\" required=\"required\" autofocus />
        

        
            <input class=\"form-control\" placeholder=\"Contraseña\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        
        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> Recuerdame
            </label>
        </div>

        <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    </form>
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
