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

/* OnurbYumlBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_052e23fb415968d009ccc1a2b6a22a821fee62a59f98b135e52464d79642da5e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "OnurbYumlBundle:Toolbar:toolbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "OnurbYumlBundle:Toolbar:toolbar.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "OnurbYumlBundle:Toolbar:toolbar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctrine_yuml_mapping");
        echo "\" target=\"_blank\">
            <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAaCAYAAAC3g3x9AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAA3XAAAN1wFCKJt4AAAAB3RJTUUH3AwOFjIRE2xHhwAAAvZJREFUSMedlF9oVnUYxz/P77zzzRmruYELGhh48Qor3026sOlFUFHrQmMuvXAQZrS9r+DawkVSeCPsItmibbB3zMKSFBGLJcIuhnazaM2tZjRRr15LcP3BomKdc35PFxs7O2fnde92Lp/z/D6/7/N9nt8jRD7NPF3l4w0BO0CnHJFj0jc5RpGfiQZ8vB6gASgHedZX+drNpJ9ZM1BhWySSEGTEzaafXxNQ0NGYvA2iMuy1pvesGugk3feAWzG5SUTOetn07tUp7P7xd2d2Swo4FQtVueBlal8vGggg58/71nF6VfkGxIsWAeS8bPpQ7NllTTm8PeX7tgfhhbj/ocPCgNM32VIQuFDKR8D64oZEVeCM0z/VvKxkP5M+AgwuhUl1CtPSg2nsgMS6WI2KHPBbaztDCt3M9p2CvbLgT2Dw258gTzw1ryU/gz35Grj/xUm1in2ppP/7EaMgYHNRGAB//UFI7cEuSJQUaK7p1aYmR9xM3YuCXo616JFKTPsQUlkduPbTGHagHdy5OEtfNYLuLej5/V+xJ/ajN8YDpVt3YFq6oSQZo1P2iJ+pm1a0Zn5sS5HnmpGKx+H+bJC4fgNS3wgmGFvNz2C734C5v5cif0ko+tjiBa+0Ibv2FjUwUp3C7OvEnn5/aXiTCTUjfFsRY2iXhRICeYVHAexwP/LzbSh9GP78LcgqLcM0tsO6YN71zgz2XFeUdy+hwjTKk/NPxUW//SqcUlaB0zYYhk2NYk+9A370mcs1g8qFgiVtrMIc/RQ2bQ5g45exQ0djYAD2S+N4MgzkY6d137tIeVUA++Eq9rPjYG1c+l3Hc84YyU24qLbGKizbGMBufocd7ADPLdAgOSa5iX8Wt42bre0SpTPkyOYapOFNmM1jv/gw/nUAiH6c6Js6GFpfCuJlaz8Q5a2V9mAElnNc57DkJtzYBetl0w2qclIgtQIqD3Qm+ic/f+DGBtDjGP9e3cugDQL1CpUISVHuqHAd5aKTfOiSdI/9Gz37P6crCTosFB7sAAAAAElFTkSuQmCC\" alt=\"Doctrine Mapping\">
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        $context["text"] = ('' === $tmp = "Visualize objects mapping") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OnurbYumlBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 11,  82 => 10,  79 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        <a href=\"{{ path('doctrine_yuml_mapping') }}\" target=\"_blank\">
            <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAaCAYAAAC3g3x9AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAA3XAAAN1wFCKJt4AAAAB3RJTUUH3AwOFjIRE2xHhwAAAvZJREFUSMedlF9oVnUYxz/P77zzzRmruYELGhh48Qor3026sOlFUFHrQmMuvXAQZrS9r+DawkVSeCPsItmibbB3zMKSFBGLJcIuhnazaM2tZjRRr15LcP3BomKdc35PFxs7O2fnde92Lp/z/D6/7/N9nt8jRD7NPF3l4w0BO0CnHJFj0jc5RpGfiQZ8vB6gASgHedZX+drNpJ9ZM1BhWySSEGTEzaafXxNQ0NGYvA2iMuy1pvesGugk3feAWzG5SUTOetn07tUp7P7xd2d2Swo4FQtVueBlal8vGggg58/71nF6VfkGxIsWAeS8bPpQ7NllTTm8PeX7tgfhhbj/ocPCgNM32VIQuFDKR8D64oZEVeCM0z/VvKxkP5M+AgwuhUl1CtPSg2nsgMS6WI2KHPBbaztDCt3M9p2CvbLgT2Dw258gTzw1ryU/gz35Grj/xUm1in2ppP/7EaMgYHNRGAB//UFI7cEuSJQUaK7p1aYmR9xM3YuCXo616JFKTPsQUlkduPbTGHagHdy5OEtfNYLuLej5/V+xJ/ajN8YDpVt3YFq6oSQZo1P2iJ+pm1a0Zn5sS5HnmpGKx+H+bJC4fgNS3wgmGFvNz2C734C5v5cif0ko+tjiBa+0Ibv2FjUwUp3C7OvEnn5/aXiTCTUjfFsRY2iXhRICeYVHAexwP/LzbSh9GP78LcgqLcM0tsO6YN71zgz2XFeUdy+hwjTKk/NPxUW//SqcUlaB0zYYhk2NYk+9A370mcs1g8qFgiVtrMIc/RQ2bQ5g45exQ0djYAD2S+N4MgzkY6d137tIeVUA++Eq9rPjYG1c+l3Hc84YyU24qLbGKizbGMBufocd7ADPLdAgOSa5iX8Wt42bre0SpTPkyOYapOFNmM1jv/gw/nUAiH6c6Js6GFpfCuJlaz8Q5a2V9mAElnNc57DkJtzYBetl0w2qclIgtQIqD3Qm+ic/f+DGBtDjGP9e3cugDQL1CpUISVHuqHAd5aKTfOiSdI/9Gz37P6crCTosFB7sAAAAAElFTkSuQmCC\" alt=\"Doctrine Mapping\">
        </a>
    {% endset %}
    {% set text %}Visualize objects mapping{% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "OnurbYumlBundle:Toolbar:toolbar.html.twig", "/home/jessica/Escritorio/back4/cenurbBack/vendor/onurb/doctrine-yuml-bundle/lib/Onurb/Bundle/YumlBundle/Resources/views/Toolbar/toolbar.html.twig");
    }
}
