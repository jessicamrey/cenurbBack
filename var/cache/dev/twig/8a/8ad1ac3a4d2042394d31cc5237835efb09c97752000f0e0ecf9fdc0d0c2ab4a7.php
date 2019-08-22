<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* EasyAdminBundle:default:paginator.html.twig */
class __TwigTemplate_f3015543e3f172e0bf81772f0a1bfc931c70a9623a6ab9ff40e7192a93346e54 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:paginator.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:paginator.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context["_paginator_request_parameters"] = twig_array_merge((isset($context["_request_parameters"]) || array_key_exists("_request_parameters", $context) ? $context["_request_parameters"] : (function () { throw new RuntimeError('Variable "_request_parameters" does not exist.', 3, $this->source); })()), ["referer" => null]);
        // line 4
        echo "
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 5, $this->source); })()), "haveToPaginate", [], "any", false, false, false, 5)) {
            // line 6
            echo "    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs list-pagination-counter\">
                ";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.counter", ["%start%" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "currentPageOffsetStart", [], "any", false, false, false, 9), "%end%" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "currentPageOffsetEnd", [], "any", false, false, false, 9), "%results%" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 9, $this->source); })()), "nbResults", [], "any", false, false, false, 9)], "EasyAdminBundle");
            echo "
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator ";
            // line 13
            echo (((1 == twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "currentPage", [], "any", false, false, false, 13))) ? ("first-page") : (""));
            echo " ";
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 13, $this->source); })()), "hasNextPage", [], "any", false, false, false, 13)) ? ("") : ("last-page"));
            echo "\">
                    ";
            // line 14
            if ((1 == twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 14, $this->source); })()), "currentPage", [], "any", false, false, false, 14))) {
                // line 15
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.first", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            } else {
                // line 21
                echo "                        <li>
                            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 22, $this->source); })()), ["page" => 1])), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-double-left\"></i> ";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.first", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            // line 27
            echo "
                    ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 28, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 28)) {
                // line 29
                echo "                        <li>
                            <a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 30, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 30, $this->source); })()), "previousPage", [], "any", false, false, false, 30)])), "html", null, true);
                echo "\">
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            } else {
                // line 35
                echo "                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous", [], "EasyAdminBundle"), "html", null, true);
                echo "
                            </span>
                        </li>
                    ";
            }
            // line 41
            echo "
                    ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 42, $this->source); })()), "hasNextPage", [], "any", false, false, false, 42)) {
                // line 43
                echo "                        <li>
                            <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 44, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 44, $this->source); })()), "nextPage", [], "any", false, false, false, 44)])), "html", null, true);
                echo "\">
                                ";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 49
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 55
            echo "
                    ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 56, $this->source); })()), "currentPage", [], "any", false, false, false, 56) < twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 56, $this->source); })()), "nbPages", [], "any", false, false, false, 56))) {
                // line 57
                echo "                        <li>
                            <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", twig_array_merge((isset($context["_paginator_request_parameters"]) || array_key_exists("_paginator_request_parameters", $context) ? $context["_paginator_request_parameters"] : (function () { throw new RuntimeError('Variable "_paginator_request_parameters" does not exist.', 58, $this->source); })()), ["page" => twig_get_attribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 58, $this->source); })()), "nbPages", [], "any", false, false, false, 58)])), "html", null, true);
                echo "\">
                                ";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.last", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    ";
            } else {
                // line 63
                echo "                        <li class=\"disabled\">
                            <span>
                                ";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.last", [], "EasyAdminBundle"), "html", null, true);
                echo " <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    ";
            }
            // line 69
            echo "                </ul>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  181 => 65,  177 => 63,  170 => 59,  166 => 58,  163 => 57,  161 => 56,  158 => 55,  151 => 51,  147 => 49,  140 => 45,  136 => 44,  133 => 43,  131 => 42,  128 => 41,  121 => 37,  117 => 35,  110 => 31,  106 => 30,  103 => 29,  101 => 28,  98 => 27,  91 => 23,  87 => 22,  84 => 21,  77 => 17,  73 => 15,  71 => 14,  65 => 13,  58 => 9,  53 => 6,  51 => 5,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'EasyAdminBundle' %}

{% set _paginator_request_parameters = _request_parameters|merge({'referer': null}) %}

{% if paginator.haveToPaginate %}
    <div class=\"list-pagination\">
        <div class=\"row\">
            <div class=\"col-sm-3 hidden-xs list-pagination-counter\">
                {{ 'paginator.counter'|trans({ '%start%': paginator.currentPageOffsetStart, '%end%': paginator.currentPageOffsetEnd, '%results%': paginator.nbResults})|raw }}
            </div>

            <div class=\"col-xs-12 col-sm-9\">
                <ul class=\"pagination list-pagination-paginator {{ 1 == paginator.currentPage ? 'first-page' : '' }} {{ paginator.hasNextPage ? '' : 'last-page' }}\">
                    {% if 1 == paginator.currentPage %}
                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-double-left\"></i> {{ 'paginator.first'|trans }}
                            </span>
                        </li>
                    {% else %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: 1 }) ) }}\">
                                <i class=\"fa fa-angle-double-left\"></i> {{ 'paginator.first'|trans }}
                            </a>
                        </li>
                    {% endif %}

                    {% if paginator.hasPreviousPage %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.previousPage }) ) }}\">
                                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                <i class=\"fa fa-angle-left\"></i> {{ 'paginator.previous'|trans }}
                            </span>
                        </li>
                    {% endif %}

                    {% if paginator.hasNextPage %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nextPage }) ) }}\">
                                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                {{ 'paginator.next'|trans }} <i class=\"fa fa-angle-right\"></i>
                            </span>
                        </li>
                    {% endif %}

                    {% if paginator.currentPage < paginator.nbPages %}
                        <li>
                            <a href=\"{{ path('easyadmin', _paginator_request_parameters|merge({ page: paginator.nbPages }) ) }}\">
                                {{ 'paginator.last'|trans }} <i class=\"fa fa-angle-double-right\"></i>
                            </a>
                        </li>
                    {% else %}
                        <li class=\"disabled\">
                            <span>
                                {{ 'paginator.last'|trans }} <i class=\"fa fa-angle-double-right\"></i>
                            </span>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
{% endif %}
", "EasyAdminBundle:default:paginator.html.twig", "/home/jessica/Escritorio/back2/cenurbBack/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/paginator.html.twig");
    }
}
