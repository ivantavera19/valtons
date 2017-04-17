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
        $__internal_53e6b3a61b1b9030789ab55529881d62df695570e2ba2ac0402eff4e7695e9d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53e6b3a61b1b9030789ab55529881d62df695570e2ba2ac0402eff4e7695e9d2->enter($__internal_53e6b3a61b1b9030789ab55529881d62df695570e2ba2ac0402eff4e7695e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_d09cd78bbc5fd8bbfc551192e0d999696231ea47af92b663ac35fb8b8ecce7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09cd78bbc5fd8bbfc551192e0d999696231ea47af92b663ac35fb8b8ecce7c3->enter($__internal_d09cd78bbc5fd8bbfc551192e0d999696231ea47af92b663ac35fb8b8ecce7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

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
        <h2 class=\"form-signin-heading\">INICIO DE SESION</h2>
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
        
        $__internal_53e6b3a61b1b9030789ab55529881d62df695570e2ba2ac0402eff4e7695e9d2->leave($__internal_53e6b3a61b1b9030789ab55529881d62df695570e2ba2ac0402eff4e7695e9d2_prof);

        
        $__internal_d09cd78bbc5fd8bbfc551192e0d999696231ea47af92b663ac35fb8b8ecce7c3->leave($__internal_d09cd78bbc5fd8bbfc551192e0d999696231ea47af92b663ac35fb8b8ecce7c3_prof);

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

        <h2 class=\"form-signin-heading\">INICIO DE SESION</h2>
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
