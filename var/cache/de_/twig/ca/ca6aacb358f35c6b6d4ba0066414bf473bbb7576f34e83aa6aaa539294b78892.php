<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_65b55bd3d377178d2513830f67e53d97834863dec3b0c995259ba72c28c2fd77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7886f7c7cfb55e7279fc89b1c88068e99fe343b6beab6b77714bcb198dbd142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7886f7c7cfb55e7279fc89b1c88068e99fe343b6beab6b77714bcb198dbd142->enter($__internal_c7886f7c7cfb55e7279fc89b1c88068e99fe343b6beab6b77714bcb198dbd142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_75eb2bea509e21309c1b583e87555dc1ec248d0caef0a1f5378bdb6fbb1d235c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75eb2bea509e21309c1b583e87555dc1ec248d0caef0a1f5378bdb6fbb1d235c->enter($__internal_75eb2bea509e21309c1b583e87555dc1ec248d0caef0a1f5378bdb6fbb1d235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
            html {
                background: #eee;
            }
            body {
                font: 11px Verdana, Arial, sans-serif;
                color: #333;
            }
            .sf-reset, .sf-reset .block, .sf-reset #message {
                margin: auto;
            }
            img {
                border: 0;
            }
            .clear {
                clear: both;
                height: 0;
                font-size: 0;
                line-height: 0;
            }
            .clear-fix:after {
                content: \"\\0020\";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            .clear-fix {
                display: inline-block;
            }
            * html .clear-fix {
                height: 1%;
            }
            .clear-fix {
                display: block;
            }
            .header {
                padding: 30px 30px 20px 30px;
            }
            .header-logo {
                float: left;
            }
            .search {
                float: right;
                padding-top: 20px;
            }
            .search label {
                line-height: 28px;
                vertical-align: middle;
            }
            .search input {
                width: 195px;
                font-size: 12px;
                border: 1px solid #dadada;
                background: #fff url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
                padding: 5px 6px;
                color: #565656;
            }
            .search input[type=\"search\"] {
                -webkit-appearance: textfield;
            }
            #content {
                width: 970px;
                margin: 0 auto;
            }
            #content pre {
                white-space: normal;
                font-family: Arial, Helvetica, sans-serif;
            }

            /*
            Copyright (c) 2010, Yahoo! Inc. All rights reserved.
            Code licensed under the BSD License:
            http://developer.yahoo.com/yui/license.html
            version: 3.1.2
            build: 56
            */
            .sf-reset div,.sf-reset dl,.sf-reset dt,.sf-reset dd,.sf-reset ul,.sf-reset ol,.sf-reset li,.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6,.sf-reset pre,.sf-reset code,.sf-reset form,.sf-reset fieldset,.sf-reset legend,.sf-reset input,.sf-reset textarea,.sf-reset p,.sf-reset blockquote,.sf-reset th,.sf-reset td{margin:0;padding:0;}.sf-reset table{border-collapse:collapse;border-spacing:0;}.sf-reset fieldset,.sf-reset img{border:0;}.sf-reset address,.sf-reset caption,.sf-reset cite,.sf-reset code,.sf-reset dfn,.sf-reset em,.sf-reset strong,.sf-reset th,.sf-reset var{font-style:normal;font-weight:normal;}.sf-reset li{list-style:none;}.sf-reset caption,.sf-reset th{text-align:left;}.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6{font-size:100%;font-weight:normal;}.sf-reset q:before,.sf-reset q:after{content:'';}.sf-reset abbr,.sf-reset acronym{border:0;font-variant:normal;}.sf-reset sup{vertical-align:text-top;}.sf-reset sub{vertical-align:text-bottom;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-size:100%;}.sf-reset legend{color:#000;}
            .sf-reset abbr {
                border-bottom: 1px dotted #000;
                cursor: help;
            }
            .sf-reset p {
                font-size: 14px;
                line-height: 20px;
                padding-bottom: 20px;
            }
            .sf-reset strong {
                color: #313131;
                font-weight: bold;
            }
            .sf-reset a {
                color: #6c6159;
            }
            .sf-reset a img {
                border: none;
            }
            .sf-reset a:hover {
                text-decoration: underline;
            }
            .sf-reset em {
                font-style: italic;
            }
            .sf-reset h2,
            .sf-reset h3 {
                font-weight: bold;
            }
            .sf-reset h1 {
                font-family: Georgia, \"Times New Roman\", Times, serif;
                font-size: 20px;
                color: #313131;
                word-wrap: break-word;
            }
            .sf-reset li {
                padding-bottom: 10px;
            }
            .sf-reset .block {
                -moz-border-radius: 16px;
                -webkit-border-radius: 16px;
                border-radius: 16px;
                margin-bottom: 20px;
                background-color: #FFFFFF;
                border: 1px solid #dfdfdf;
                padding: 40px 50px;
                word-break: break-all;
            }
            .sf-reset h2 {
                font-size: 16px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .sf-reset li a {
                background: none;
                color: #868686;
                text-decoration: none;
            }
            .sf-reset li a:hover {
                background: none;
                color: #313131;
                text-decoration: underline;
            }
            .sf-reset ol {
                padding: 10px 0;
            }
            .sf-reset ol li {
                list-style: decimal;
                margin-left: 20px;
                padding: 2px;
                padding-bottom: 20px;
            }
            .sf-reset ol ol li {
                list-style-position: inside;
                margin-left: 0;
                white-space: nowrap;
                font-size: 12px;
                padding-bottom: 0;
            }
            .sf-reset li .selected {
                background-color: #ffd;
            }
            .sf-button {
                display: -moz-inline-box;
                display: inline-block;
                text-align: center;
                vertical-align: middle;
                border: 0;
                background: transparent none;
                text-transform: uppercase;
                cursor: pointer;
                font: bold 11px Arial, Helvetica, sans-serif;
            }
            .sf-button span {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
            }
            .sf-button .border-l {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
                padding: 0 0 0 7px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQtJREFUeNpiPHnyJAMakARiByDWYEGT8ADiYGVlZStubm5xlv///4MEQYoKZGRkQkRERLRYWVl5wYJQyXBZWdkwCQkJUxAHKgaWlAHSLqKiosb//v1DsYMFKGCvoqJiDmQzwXTAJYECulxcXNLoumCSoszMzDzoumDGghQwYZUECWIzkrAkSIIGOmlkLI10AiX//P379x8jIyMTNmPf/v79+ysLCwsvuiQoNi5//fr1Kch4dAyS3P/gwYMTQBP+wxwHw0xA4gkQ73v9+vUZdJ2w1Lf82bNn4iCHCQoKasHsZw4ODgbRIL8c+/Lly5M3b978Y2dn5wC6npkFLXnsAOKLjx49AmUHLYAAAwBoQubG016R5wAAAABJRU5ErkJggg==) no-repeat top left;
            }
            .sf-button .border-r {
                padding: 0 7px 0 0;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR1JREFUeNpiPHnyZCMDA8MNID5gZmb2nAEJMH7//v3N169fX969e/cYkL8WqGAHXPLv37//QYzfv39/fvPmzbUnT56sAXInmJub/2H5/x8sx8DCwsIrISFhDmQyPX78+CmQXs70798/BmQsKipqBNTgdvz4cWkmkE5kDATMioqKZkCFdiwg1eiAi4tLGqhQF24nMmBmZuYEigth1QkEbEBxTlySYPvJkwSJ00AnjYylgU6gxB8g/oFVEphkvgLF32KNMmCCewYUv4qhEyj47+HDhyeBzIMYOoEp8CxQw56wsLAncJ1//vz5/P79+2svX74EJc2V4BT58+fPd8CE/QKYHMGJOiIiAp6oWW7evDkNSF8DZYfIyEiU7AAQYACJ2vxVdJW4eQAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button .btn-bg {
                padding: 0 14px;
                color: #636363;
                line-height: 28px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAYAAACgXdXMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpiPnny5EKGf//+/Wf6//8/A4QAcrGzKCZwGc9sa2urBBBgAIbDUoYVp9lmAAAAAElFTkSuQmCC) repeat-x top left;
            }
            .sf-button:hover .border-l,
            .sf-button-selected .border-l {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR9JREFUeNpi/P//PwMyOHfunDqQSgNiexZkibNnzxYBqZa3HOs5v7PcYQBLnjlzhg1IbfzIdsTjA/t+ht9Mr8GKwZL//v3r+sB+0OMN+zqIEf8gFMvJkyd1gXTOa9YNDP//otrPAtSV/Jp9HfPff78Z0AEL0LUeXxivMfxD0wXTqfjj/2ugkf+wSrL9/YtpJEyS4S8WI5Ek/+GR/POPFjr//cenE6/kP9q4Fo/kr39/mdj+M/zFkGQCSj5i+ccPjLJ/GBgkuYOHQR1sNDpmAkb2LBmWwL///zKCIxwZM0VHR18G6p4uxeLLAA4tJMwEshiou1iMxXaHLGswA+t/YbhORuQUv2DBAnCifvxzI+enP3dQJUFg/vz5sOzgBBBgAPxX9j0YnH4JAAAAAElFTkSuQmCC) no-repeat top left;
            }
            .sf-button:hover .border-r,
            .sf-button-selected .border-r {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT5JREFUeNpiPHv27BkGBoaDQDzLyMjoJgMSYHrM3WX8hn1d0f///88DFRYhSzIuv2X5H8Rg/SfKIPDTkYH/l80OINffxMTkF9O/f/8ZQPgnwyuGl+wrGd6x7vf49+9fO9jYf3+Bkkj4NesmBqAV+SdPntQC6vzHgIz//gOawbqOGchOxtAJwp8Zr4F0e7D8/fuPAR38/P8eZIo0yz8skv8YvoIk+YE6/zNgAyD7sRqLkPzzjxY6/+HS+R+fTkZ8djLh08lCUCcuSWawJGbwMTGwg7zyBatX2Bj5QZKPsBrLzaICktzN8g/NWEYGZgYZjoC/wMiei5FMpFh8QPSU6Ojoy3Cd7EwiDBJsDgxiLNY7gLrKQGIsHAxSDHxAO2TZ/b8D+TVxcXF9MCtYtLiKLgDpfUDVsxITE1GyA0CAAQA2E/N8VuHyAAAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button:hover .btn-bg,
            .sf-button-selected .btn-bg {
                color: #FFFFFF;
                text-shadow:0 1px 1px #6b9311;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAIAAAAvP0KbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAEFJREFUeNpiPnv2LNMdvlymf///M/37B8R/QfQ/MP33L4j+B6Qh7L9//sHpf2h8MA1V+w/KRjYLaDaLCU8vQIABAFO3TxZriO4yAAAAAElFTkSuQmCC) repeat-x top left;
            }
        </style>
        ";
        // line 216
        $this->displayBlock('head', $context, $blocks);
        // line 217
        echo "    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    ";
        // line 222
        echo twig_include($this->env, $context, "@Twig/symfony.svg");
        echo "
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                ";
        // line 247
        $this->displayBlock('body', $context, $blocks);
        // line 248
        echo "            </div>
        </div>
    </body>
</html>
";
        
        $__internal_c7886f7c7cfb55e7279fc89b1c88068e99fe343b6beab6b77714bcb198dbd142->leave($__internal_c7886f7c7cfb55e7279fc89b1c88068e99fe343b6beab6b77714bcb198dbd142_prof);

        
        $__internal_75eb2bea509e21309c1b583e87555dc1ec248d0caef0a1f5378bdb6fbb1d235c->leave($__internal_75eb2bea509e21309c1b583e87555dc1ec248d0caef0a1f5378bdb6fbb1d235c_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_e04b2a79b8db65b7ad1da649fc4563c0fdcbd2d783dee978023696ac37fda29a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04b2a79b8db65b7ad1da649fc4563c0fdcbd2d783dee978023696ac37fda29a->enter($__internal_e04b2a79b8db65b7ad1da649fc4563c0fdcbd2d783dee978023696ac37fda29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71cf762c949e2662b3cbc605255fbc57d71d97a360af3ba5d4edb9f28c106d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cf762c949e2662b3cbc605255fbc57d71d97a360af3ba5d4edb9f28c106d84->enter($__internal_71cf762c949e2662b3cbc605255fbc57d71d97a360af3ba5d4edb9f28c106d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_71cf762c949e2662b3cbc605255fbc57d71d97a360af3ba5d4edb9f28c106d84->leave($__internal_71cf762c949e2662b3cbc605255fbc57d71d97a360af3ba5d4edb9f28c106d84_prof);

        
        $__internal_e04b2a79b8db65b7ad1da649fc4563c0fdcbd2d783dee978023696ac37fda29a->leave($__internal_e04b2a79b8db65b7ad1da649fc4563c0fdcbd2d783dee978023696ac37fda29a_prof);

    }

    // line 216
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c08fdcf6c824c870b983fb8e473d9fbe65e56be54d96780d8747026664f96d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c08fdcf6c824c870b983fb8e473d9fbe65e56be54d96780d8747026664f96d9->enter($__internal_2c08fdcf6c824c870b983fb8e473d9fbe65e56be54d96780d8747026664f96d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_378ac47abb69193c737f00e8decd647b27a5a97c5c8dc481ee85d6dd378a99f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378ac47abb69193c737f00e8decd647b27a5a97c5c8dc481ee85d6dd378a99f1->enter($__internal_378ac47abb69193c737f00e8decd647b27a5a97c5c8dc481ee85d6dd378a99f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_378ac47abb69193c737f00e8decd647b27a5a97c5c8dc481ee85d6dd378a99f1->leave($__internal_378ac47abb69193c737f00e8decd647b27a5a97c5c8dc481ee85d6dd378a99f1_prof);

        
        $__internal_2c08fdcf6c824c870b983fb8e473d9fbe65e56be54d96780d8747026664f96d9->leave($__internal_2c08fdcf6c824c870b983fb8e473d9fbe65e56be54d96780d8747026664f96d9_prof);

    }

    // line 247
    public function block_body($context, array $blocks = array())
    {
        $__internal_658c7a60d8f894ad24cda1f53f9592e85db06ba697f93cc1411c59fb5f2b4952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658c7a60d8f894ad24cda1f53f9592e85db06ba697f93cc1411c59fb5f2b4952->enter($__internal_658c7a60d8f894ad24cda1f53f9592e85db06ba697f93cc1411c59fb5f2b4952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_587f1b8923260eeb9188b278c7673d6d2f2f54cb5458d04442adf61619ba7d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587f1b8923260eeb9188b278c7673d6d2f2f54cb5458d04442adf61619ba7d35->enter($__internal_587f1b8923260eeb9188b278c7673d6d2f2f54cb5458d04442adf61619ba7d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_587f1b8923260eeb9188b278c7673d6d2f2f54cb5458d04442adf61619ba7d35->leave($__internal_587f1b8923260eeb9188b278c7673d6d2f2f54cb5458d04442adf61619ba7d35_prof);

        
        $__internal_658c7a60d8f894ad24cda1f53f9592e85db06ba697f93cc1411c59fb5f2b4952->leave($__internal_658c7a60d8f894ad24cda1f53f9592e85db06ba697f93cc1411c59fb5f2b4952_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 247,  321 => 216,  304 => 6,  290 => 248,  288 => 247,  260 => 222,  253 => 217,  251 => 216,  38 => 6,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>{% block title %}{% endblock %}</title>
        <style>
            html {
                background: #eee;
            }
            body {
                font: 11px Verdana, Arial, sans-serif;
                color: #333;
            }
            .sf-reset, .sf-reset .block, .sf-reset #message {
                margin: auto;
            }
            img {
                border: 0;
            }
            .clear {
                clear: both;
                height: 0;
                font-size: 0;
                line-height: 0;
            }
            .clear-fix:after {
                content: \"\\0020\";
                display: block;
                height: 0;
                clear: both;
                visibility: hidden;
            }
            .clear-fix {
                display: inline-block;
            }
            * html .clear-fix {
                height: 1%;
            }
            .clear-fix {
                display: block;
            }
            .header {
                padding: 30px 30px 20px 30px;
            }
            .header-logo {
                float: left;
            }
            .search {
                float: right;
                padding-top: 20px;
            }
            .search label {
                line-height: 28px;
                vertical-align: middle;
            }
            .search input {
                width: 195px;
                font-size: 12px;
                border: 1px solid #dadada;
                background: #fff url(data:image/gif;base64,R0lGODlhAQAFAKIAAPX19e/v7/39/fr6+urq6gAAAAAAAAAAACH5BAAAAAAALAAAAAABAAUAAAMESAEjCQA7) repeat-x left top;
                padding: 5px 6px;
                color: #565656;
            }
            .search input[type=\"search\"] {
                -webkit-appearance: textfield;
            }
            #content {
                width: 970px;
                margin: 0 auto;
            }
            #content pre {
                white-space: normal;
                font-family: Arial, Helvetica, sans-serif;
            }

            /*
            Copyright (c) 2010, Yahoo! Inc. All rights reserved.
            Code licensed under the BSD License:
            http://developer.yahoo.com/yui/license.html
            version: 3.1.2
            build: 56
            */
            .sf-reset div,.sf-reset dl,.sf-reset dt,.sf-reset dd,.sf-reset ul,.sf-reset ol,.sf-reset li,.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6,.sf-reset pre,.sf-reset code,.sf-reset form,.sf-reset fieldset,.sf-reset legend,.sf-reset input,.sf-reset textarea,.sf-reset p,.sf-reset blockquote,.sf-reset th,.sf-reset td{margin:0;padding:0;}.sf-reset table{border-collapse:collapse;border-spacing:0;}.sf-reset fieldset,.sf-reset img{border:0;}.sf-reset address,.sf-reset caption,.sf-reset cite,.sf-reset code,.sf-reset dfn,.sf-reset em,.sf-reset strong,.sf-reset th,.sf-reset var{font-style:normal;font-weight:normal;}.sf-reset li{list-style:none;}.sf-reset caption,.sf-reset th{text-align:left;}.sf-reset h1,.sf-reset h2,.sf-reset h3,.sf-reset h4,.sf-reset h5,.sf-reset h6{font-size:100%;font-weight:normal;}.sf-reset q:before,.sf-reset q:after{content:'';}.sf-reset abbr,.sf-reset acronym{border:0;font-variant:normal;}.sf-reset sup{vertical-align:text-top;}.sf-reset sub{vertical-align:text-bottom;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-family:inherit;font-size:inherit;font-weight:inherit;}.sf-reset input,.sf-reset textarea,.sf-reset select{font-size:100%;}.sf-reset legend{color:#000;}
            .sf-reset abbr {
                border-bottom: 1px dotted #000;
                cursor: help;
            }
            .sf-reset p {
                font-size: 14px;
                line-height: 20px;
                padding-bottom: 20px;
            }
            .sf-reset strong {
                color: #313131;
                font-weight: bold;
            }
            .sf-reset a {
                color: #6c6159;
            }
            .sf-reset a img {
                border: none;
            }
            .sf-reset a:hover {
                text-decoration: underline;
            }
            .sf-reset em {
                font-style: italic;
            }
            .sf-reset h2,
            .sf-reset h3 {
                font-weight: bold;
            }
            .sf-reset h1 {
                font-family: Georgia, \"Times New Roman\", Times, serif;
                font-size: 20px;
                color: #313131;
                word-wrap: break-word;
            }
            .sf-reset li {
                padding-bottom: 10px;
            }
            .sf-reset .block {
                -moz-border-radius: 16px;
                -webkit-border-radius: 16px;
                border-radius: 16px;
                margin-bottom: 20px;
                background-color: #FFFFFF;
                border: 1px solid #dfdfdf;
                padding: 40px 50px;
                word-break: break-all;
            }
            .sf-reset h2 {
                font-size: 16px;
                font-family: Arial, Helvetica, sans-serif;
            }
            .sf-reset li a {
                background: none;
                color: #868686;
                text-decoration: none;
            }
            .sf-reset li a:hover {
                background: none;
                color: #313131;
                text-decoration: underline;
            }
            .sf-reset ol {
                padding: 10px 0;
            }
            .sf-reset ol li {
                list-style: decimal;
                margin-left: 20px;
                padding: 2px;
                padding-bottom: 20px;
            }
            .sf-reset ol ol li {
                list-style-position: inside;
                margin-left: 0;
                white-space: nowrap;
                font-size: 12px;
                padding-bottom: 0;
            }
            .sf-reset li .selected {
                background-color: #ffd;
            }
            .sf-button {
                display: -moz-inline-box;
                display: inline-block;
                text-align: center;
                vertical-align: middle;
                border: 0;
                background: transparent none;
                text-transform: uppercase;
                cursor: pointer;
                font: bold 11px Arial, Helvetica, sans-serif;
            }
            .sf-button span {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
            }
            .sf-button .border-l {
                text-decoration: none;
                display: block;
                height: 28px;
                float: left;
                padding: 0 0 0 7px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQtJREFUeNpiPHnyJAMakARiByDWYEGT8ADiYGVlZStubm5xlv///4MEQYoKZGRkQkRERLRYWVl5wYJQyXBZWdkwCQkJUxAHKgaWlAHSLqKiosb//v1DsYMFKGCvoqJiDmQzwXTAJYECulxcXNLoumCSoszMzDzoumDGghQwYZUECWIzkrAkSIIGOmlkLI10AiX//P379x8jIyMTNmPf/v79+ysLCwsvuiQoNi5//fr1Kch4dAyS3P/gwYMTQBP+wxwHw0xA4gkQ73v9+vUZdJ2w1Lf82bNn4iCHCQoKasHsZw4ODgbRIL8c+/Lly5M3b978Y2dn5wC6npkFLXnsAOKLjx49AmUHLYAAAwBoQubG016R5wAAAABJRU5ErkJggg==) no-repeat top left;
            }
            .sf-button .border-r {
                padding: 0 7px 0 0;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR1JREFUeNpiPHnyZCMDA8MNID5gZmb2nAEJMH7//v3N169fX969e/cYkL8WqGAHXPLv37//QYzfv39/fvPmzbUnT56sAXInmJub/2H5/x8sx8DCwsIrISFhDmQyPX78+CmQXs70798/BmQsKipqBNTgdvz4cWkmkE5kDATMioqKZkCFdiwg1eiAi4tLGqhQF24nMmBmZuYEigth1QkEbEBxTlySYPvJkwSJ00AnjYylgU6gxB8g/oFVEphkvgLF32KNMmCCewYUv4qhEyj47+HDhyeBzIMYOoEp8CxQw56wsLAncJ1//vz5/P79+2svX74EJc2V4BT58+fPd8CE/QKYHMGJOiIiAp6oWW7evDkNSF8DZYfIyEiU7AAQYACJ2vxVdJW4eQAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button .btn-bg {
                padding: 0 14px;
                color: #636363;
                line-height: 28px;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAYAAACgXdXMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAClJREFUeNpiPnny5EKGf//+/Wf6//8/A4QAcrGzKCZwGc9sa2urBBBgAIbDUoYVp9lmAAAAAElFTkSuQmCC) repeat-x top left;
            }
            .sf-button:hover .border-l,
            .sf-button-selected .border-l {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAR9JREFUeNpi/P//PwMyOHfunDqQSgNiexZkibNnzxYBqZa3HOs5v7PcYQBLnjlzhg1IbfzIdsTjA/t+ht9Mr8GKwZL//v3r+sB+0OMN+zqIEf8gFMvJkyd1gXTOa9YNDP//otrPAtSV/Jp9HfPff78Z0AEL0LUeXxivMfxD0wXTqfjj/2ugkf+wSrL9/YtpJEyS4S8WI5Ek/+GR/POPFjr//cenE6/kP9q4Fo/kr39/mdj+M/zFkGQCSj5i+ccPjLJ/GBgkuYOHQR1sNDpmAkb2LBmWwL///zKCIxwZM0VHR18G6p4uxeLLAA4tJMwEshiou1iMxXaHLGswA+t/YbhORuQUv2DBAnCifvxzI+enP3dQJUFg/vz5sOzgBBBgAPxX9j0YnH4JAAAAAElFTkSuQmCC) no-repeat top left;
            }
            .sf-button:hover .border-r,
            .sf-button-selected .border-r {
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAcCAYAAACtQ6WLAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT5JREFUeNpiPHv27BkGBoaDQDzLyMjoJgMSYHrM3WX8hn1d0f///88DFRYhSzIuv2X5H8Rg/SfKIPDTkYH/l80OINffxMTkF9O/f/8ZQPgnwyuGl+wrGd6x7vf49+9fO9jYf3+Bkkj4NesmBqAV+SdPntQC6vzHgIz//gOawbqOGchOxtAJwp8Zr4F0e7D8/fuPAR38/P8eZIo0yz8skv8YvoIk+YE6/zNgAyD7sRqLkPzzjxY6/+HS+R+fTkZ8djLh08lCUCcuSWawJGbwMTGwg7zyBatX2Bj5QZKPsBrLzaICktzN8g/NWEYGZgYZjoC/wMiei5FMpFh8QPSU6Ojoy3Cd7EwiDBJsDgxiLNY7gLrKQGIsHAxSDHxAO2TZ/b8D+TVxcXF9MCtYtLiKLgDpfUDVsxITE1GyA0CAAQA2E/N8VuHyAAAAAABJRU5ErkJggg==) right top no-repeat;
            }
            .sf-button:hover .btn-bg,
            .sf-button-selected .btn-bg {
                color: #FFFFFF;
                text-shadow:0 1px 1px #6b9311;
                background: transparent url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcCAIAAAAvP0KbAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAEFJREFUeNpiPnv2LNMdvlymf///M/37B8R/QfQ/MP33L4j+B6Qh7L9//sHpf2h8MA1V+w/KRjYLaDaLCU8vQIABAFO3TxZriO4yAAAAAElFTkSuQmCC) repeat-x top left;
            }
        </style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <div id=\"content\">
            <div class=\"header clear-fix\">
                <div class=\"header-logo\">
                    {{ include('@Twig/symfony.svg') }}
                </div>

                <div class=\"search\">
                    <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                        <div class=\"form-row\">
                            <label for=\"search-id\">
                                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAABUElEQVQoz2NgAIJ29iBdD0d7X2cPb+tY2f9MDMjgP2O2hKu7vS8CBlisZUNSMJ3fxRMkXO61wm2ue6I3iB1q8Z8ZriDZFCS03fm/wX+1/xp/TBo8QPxeqf+MUAW+QIFKj/+q/wX/c/3n/i/6Qd/bx943z/Q/K1SBI1D9fKv/AhCn/Wf5L5EHdFGKw39OqAIXoPpOMziX4T9/DFBBnuN/HqhAEtCKCNf/XDA/rZRyAmrpsvrPDVUw3wrkqCiLaewg6TohX1d7X0ffs5r/OaAKfinmgt3t4ulr4+Xg4ANip3j+l/zPArNT4LNOD0pAgWCSOUIBy3+h/+pXbBa5tni0eMx23+/mB1YSYnENroT5Pw/QSOX/mkCo+l/jgo0v2KJA643s8PgAmsMBDCbu/5xALHPB2husxN9uCzsDOgAq5kAoaZVnYMCh5Ky1r88Eh/+iABM8jUk7ClYIAAAAAElFTkSuQmCC\" alt=\"Search on Symfony website\" />
                            </label>

                            <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"Search on Symfony website\" />

                            <button type=\"submit\" class=\"sf-button\">
                                <span class=\"border-l\">
                                    <span class=\"border-r\">
                                        <span class=\"btn-bg\">OK</span>
                                    </span>
                                </span>
                            </button>
                        </div>
                   </form>
                </div>
            </div>

            <div class=\"sf-reset\">
                {% block body %}{% endblock %}
            </div>
        </div>
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\rolesesion\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
