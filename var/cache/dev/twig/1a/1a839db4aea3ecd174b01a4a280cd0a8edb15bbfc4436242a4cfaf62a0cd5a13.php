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

/* EasyAdminBundle:css:easyadmin.css.twig */
class __TwigTemplate_e442043477cd2c88eda3a7cb317f203652990ca818f9fa9c033dbcbc8642f684 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:css:easyadmin.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EasyAdminBundle:css:easyadmin.css.twig"));

        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = ["dark" => ["info" => "#39A0ED", "warning" => "#F0AD4E", "danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"], "light" => ["info" => "#39A0ED", "warning" => "#F0AD4E", "danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"]];
        // line 47
        echo "
";
        // line 48
        $context["colors"] = twig_get_attribute($this->env, $this->source, (isset($context["color_schemes"]) || array_key_exists("color_schemes", $context) ? $context["color_schemes"] : (function () { throw new RuntimeError('Variable "color_schemes" does not exist.', 48, $this->source); })()), (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 48, $this->source); })()), [], "array", false, false, false, 48);
        // line 49
        echo "
";
        // line 56
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 64
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 75
        echo "a        { color: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 75, $this->source); })()), "link", [], "any", false, false, false, 75);
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 86
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 86, $this->source); })()), "link", [], "any", false, false, false, 86);
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 90
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 90, $this->source); })()), "danger", [], "any", false, false, false, 90);
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 99
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 117
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 121
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 121, $this->source); })()), "success", [], "any", false, false, false, 121);
        echo ";
    color: ";
        // line 122
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 122, $this->source); })()), "white", [], "any", false, false, false, 122);
        echo ";
}
div.flash-error {
    background: ";
        // line 125
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 125, $this->source); })()), "danger", [], "any", false, false, false, 125);
        echo ";
    color: ";
        // line 126
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 126, $this->source); })()), "white", [], "any", false, false, false, 126);
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 135
        echo ".label:not([class*=label-]) {
    background: ";
        // line 136
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 136, $this->source); })()), "gray_darker", [], "any", false, false, false, 136);
        echo ";
}
.label {
    color: ";
        // line 139
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 139, $this->source); })()), "white", [], "any", false, false, false, 139);
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 148
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 148, $this->source); })()), "success", [], "any", false, false, false, 148);
        echo " !important;
}
.label-danger {
    ";
        // line 152
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 152, $this->source); })()), "danger", [], "any", false, false, false, 152);
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 158
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 158, $this->source); })()), "gray_light", [], "any", false, false, false, 158);
        echo ";
    padding: 4px 8px;
}

";
        // line 163
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 172
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 214
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 214, $this->source); })()), "gray_lighter", [], "any", false, false, false, 214);
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 230
        echo "span.badge {
    background-color: ";
        // line 231
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 231, $this->source); })());
        echo ";
}

";
        // line 236
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 253
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 253, $this->source); })()))) {
            // line 254
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 254, $this->source); })()), "gray_light", [], "any", false, false, false, 254);
            echo ";
";
        } elseif (("light" ==         // line 255
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 255, $this->source); })()))) {
            // line 256
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 256, $this->source); })()), "gray", [], "any", false, false, false, 256);
            echo ";
";
        }
        // line 258
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 261
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 261, $this->source); })()), "text", [], "any", false, false, false, 261);
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}
.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 289
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 289, $this->source); })());
        echo ";
    border-color: transparent;
    color: ";
        // line 291
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 291, $this->source); })()), "white", [], "any", false, false, false, 291);
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: ";
        // line 298
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 298, $this->source); })()), "info", [], "any", false, false, false, 298);
        echo ";
    border-color: transparent;
    color: ";
        // line 300
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 300, $this->source); })()), "white", [], "any", false, false, false, 300);
        echo ";
}
.btn-warning,
.btn-warning:hover,
.btn-warning:active,
.btn-warning:focus,
.btn-warning:active:hover {
    background-color: ";
        // line 307
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 307, $this->source); })()), "warning", [], "any", false, false, false, 307);
        echo ";
    border-color: transparent;
    color: ";
        // line 309
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 309, $this->source); })()), "white", [], "any", false, false, false, 309);
        echo ";
}
.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 316
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 316, $this->source); })()), "danger", [], "any", false, false, false, 316);
        echo ";
    border-color: transparent;
    color: ";
        // line 318
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 318, $this->source); })()), "white", [], "any", false, false, false, 318);
        echo ";
}
.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 325
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 325, $this->source); })()), "success", [], "any", false, false, false, 325);
        echo ";
    border-color: transparent;
    color: ";
        // line 327
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 327, $this->source); })()), "white", [], "any", false, false, false, 327);
        echo ";
}

";
        // line 331
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 337
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 337, $this->source); })());
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-warning,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 367
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 372
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 372, $this->source); })()), "gray", [], "any", false, false, false, 372);
        echo ";
    border-radius: 0;
";
        // line 374
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 374, $this->source); })()))) {
            // line 375
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 377
        echo "    color: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 377, $this->source); })()), "text", [], "any", false, false, false, 377);
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 382
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 382, $this->source); })()))) {
            // line 383
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 383, $this->source); })()), "gray_dark", [], "any", false, false, false, 383);
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 385
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 385, $this->source); })()))) {
            // line 386
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 386, $this->source); })()), "gray_darker", [], "any", false, false, false, 386);
            echo ";
";
        }
        // line 388
        echo "}

.has-error .error-block {
    color: ";
        // line 391
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 391, $this->source); })()), "danger", [], "any", false, false, false, 391);
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 407
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 407, $this->source); })()), "text_muted", [], "any", false, false, false, 407);
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 417
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 417, $this->source); })()))) {
            // line 418
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 418, $this->source); })()), "gray_lighter", [], "any", false, false, false, 418);
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 419
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 419, $this->source); })()), "gray_light", [], "any", false, false, false, 419);
            echo ";
";
        } elseif (("light" ==         // line 420
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 420, $this->source); })()))) {
            // line 421
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 421, $this->source); })()), "gray_light", [], "any", false, false, false, 421);
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 422
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 422, $this->source); })()), "gray", [], "any", false, false, false, 422);
            echo ";
";
        }
        // line 424
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 426
        if ((((isset($context["kernel_debug"]) || array_key_exists("kernel_debug", $context))) ? (_twig_default_filter((isset($context["kernel_debug"]) || array_key_exists("kernel_debug", $context) ? $context["kernel_debug"] : (function () { throw new RuntimeError('Variable "kernel_debug" does not exist.', 426, $this->source); })()), false)) : (false))) {
            // line 427
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 430
        echo "    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

";
        // line 446
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 452
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 457
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 457, $this->source); })()))) {
            // line 458
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 459
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 459, $this->source); })()))) {
            // line 460
            echo "    border-top-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 460, $this->source); })()), "gray_lighter", [], "any", false, false, false, 460);
            echo ";
";
        }
        // line 462
        echo "}
.field-group .field-divider hr {
";
        // line 464
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 464, $this->source); })()))) {
            // line 465
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 466
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 466, $this->source); })()))) {
            // line 467
            echo "    border-top-color: #EEE;
";
        }
        // line 469
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 475
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 475, $this->source); })()))) {
            // line 476
            echo "    border-bottom: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 476, $this->source); })()), "gray_light", [], "any", false, false, false, 476);
            echo ";
    color: ";
            // line 477
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 477, $this->source); })()), "gray_dark", [], "any", false, false, false, 477);
            echo ";
";
        } elseif (("light" ==         // line 478
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 478, $this->source); })()))) {
            // line 479
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 480
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 480, $this->source); })()), "gray_darker", [], "any", false, false, false, 480);
            echo ";
";
        }
        // line 482
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 486
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 486, $this->source); })()))) {
            // line 487
            echo "    color: #555;
";
        } elseif (("light" ==         // line 488
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 488, $this->source); })()))) {
            // line 489
            echo "    color: #777;
";
        }
        // line 491
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 498
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 498, $this->source); })()))) {
            // line 499
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 500
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 500, $this->source); })()))) {
            // line 501
            echo "    border: 1px solid #EEE;
";
        }
        // line 503
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 506
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 506, $this->source); })()))) {
            // line 507
            echo "    color: #555;
";
        } elseif (("light" ==         // line 508
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 508, $this->source); })()))) {
            // line 509
            echo "    color: #777;
";
        }
        // line 511
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 514
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 514, $this->source); })()))) {
            // line 515
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 517
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 517, $this->source); })()))) {
            // line 518
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 518, $this->source); })()), "gray_light", [], "any", false, false, false, 518);
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 520
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 520, $this->source); })()), "gray_darker", [], "any", false, false, false, 520);
            echo ";
";
        }
        // line 522
        echo "    padding: 11px 10px 9px;
}
";
        // line 524
        if (("light" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 524, $this->source); })()))) {
            // line 525
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 529
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 539
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 543
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 543, $this->source); })()), "gray", [], "any", false, false, false, 543);
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 546
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 546, $this->source); })()), "text", [], "any", false, false, false, 546);
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 554
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 554, $this->source); })()), "text", [], "any", false, false, false, 554);
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 561
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 561, $this->source); })()), "gray_light", [], "any", false, false, false, 561);
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 565
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 565, $this->source); })());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 568
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 568, $this->source); })()), "text", [], "any", false, false, false, 568);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 571
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 571, $this->source); })()), "danger", [], "any", false, false, false, 571);
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 577
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 577, $this->source); })()), "gray_dark", [], "any", false, false, false, 577);
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 590
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 591
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 591, $this->source); })()), "white", [], "any", false, false, false, 591);
        echo ";
    box-shadow: 0 0 3px ";
        // line 592
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 592, $this->source); })()), "gray", [], "any", false, false, false, 592);
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 605
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 615
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 616
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 616, $this->source); })()), "white", [], "any", false, false, false, 616);
        echo ";
    box-shadow: 0 0 3px ";
        // line 617
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 617, $this->source); })()), "gray", [], "any", false, false, false, 617);
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    width: 100%;
    max-width: 100%;
}

";
        // line 640
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 648
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 648, $this->source); })()), "gray_lighter", [], "any", false, false, false, 648);
        echo ";
    border-top: 1px solid ";
        // line 649
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 649, $this->source); })()), "gray_light", [], "any", false, false, false, 649);
        echo ";
    margin-top: 1.5em;
}

";
        // line 655
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 663
        echo "
";
        // line 666
        echo ".content-wrapper {
    background: ";
        // line 667
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 667, $this->source); })()), "page_background", [], "any", false, false, false, 667);
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 675
        echo ".main-header {
    background: ";
        // line 676
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 676, $this->source); })());
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 680
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 680, $this->source); })()), "white", [], "any", false, false, false, 680);
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 682
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 707
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 707, $this->source); })());
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 726
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 726, $this->source); })()), "white", [], "any", false, false, false, 726);
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 783
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 799
        echo ".main-sidebar,
.wrapper {
";
        // line 801
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 801, $this->source); })()))) {
            // line 802
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 803
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 803, $this->source); })()))) {
            // line 804
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 804, $this->source); })()), "gray_light", [], "any", false, false, false, 804);
            echo ";
";
        }
        // line 806
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 812
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 812, $this->source); })()))) {
            // line 813
            echo "    color: #777;
";
        } elseif (("light" ==         // line 814
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 814, $this->source); })()))) {
            // line 815
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 815, $this->source); })()), "gray_dark", [], "any", false, false, false, 815);
            echo ";
";
        }
        // line 817
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 822
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 822, $this->source); })()))) {
            // line 823
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 824
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 824, $this->source); })()))) {
            // line 825
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 825, $this->source); })()), "gray_lighter", [], "any", false, false, false, 825);
            echo ";
";
        }
        // line 827
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 844
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 844, $this->source); })()))) {
            // line 845
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 847
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 847, $this->source); })()))) {
            // line 848
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 848, $this->source); })()), "gray_darker", [], "any", false, false, false, 848);
            echo ";
";
        }
        // line 850
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 856
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 856, $this->source); })()))) {
            // line 857
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 858
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 858, $this->source); })()))) {
            // line 859
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 859, $this->source); })()), "gray_lighter", [], "any", false, false, false, 859);
            echo ";
";
        }
        // line 861
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 870
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 870, $this->source); })()))) {
            // line 871
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 871, $this->source); })()), "white", [], "any", false, false, false, 871);
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 874
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 874, $this->source); })()))) {
            // line 875
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 878
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 887
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 904
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 904, $this->source); })()))) {
            // line 905
            echo "    background: #333;
";
        } elseif (("light" ==         // line 906
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 906, $this->source); })()))) {
            // line 907
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 907, $this->source); })()), "gray_light", [], "any", false, false, false, 907);
            echo ";
";
        }
        // line 909
        echo "}

";
        // line 912
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 913
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 913, $this->source); })()))) {
            // line 914
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 915
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 915, $this->source); })()))) {
            // line 916
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 918
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 928
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 933
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 933, $this->source); })()))) {
            // line 934
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 934, $this->source); })()), "gray_dark", [], "any", false, false, false, 934);
            echo ";
";
        } elseif (("light" ==         // line 935
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 935, $this->source); })()))) {
            // line 936
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 938
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 938, $this->source); })()), "text_muted", [], "any", false, false, false, 938);
            echo ";
";
        }
        // line 940
        echo "    margin: 10px 0 5px;
}

";
        // line 946
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 982
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 995
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 995, $this->source); })()), "white", [], "any", false, false, false, 995);
        echo ";
";
        // line 996
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 996, $this->source); })()))) {
            // line 997
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 997, $this->source); })()), "gray_light", [], "any", false, false, false, 997);
            echo ";
";
        } elseif (("light" ==         // line 998
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 998, $this->source); })()))) {
            // line 999
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 999, $this->source); })()), "gray", [], "any", false, false, false, 999);
            echo ";
";
        }
        // line 1001
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 1005
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1005, $this->source); })()), "table_row_border", [], "any", false, false, false, 1005);
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1046
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1059
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1066
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1066, $this->source); })()))) {
            // line 1067
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1067, $this->source); })()), "text_muted", [], "any", false, false, false, 1067);
            echo ";
";
        } elseif (("light" ==         // line 1068
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1068, $this->source); })()))) {
            // line 1069
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1069, $this->source); })()), "gray", [], "any", false, false, false, 1069);
            echo ";
";
        }
        // line 1071
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1073
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1073, $this->source); })()), "white", [], "any", false, false, false, 1073);
        echo ";
    border-color: ";
        // line 1074
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1074, $this->source); })()), "gray_light", [], "any", false, false, false, 1074);
        echo ";
    border-radius: 0;
    color: ";
        // line 1076
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1076, $this->source); })()), "text", [], "any", false, false, false, 1076);
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1079
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 1079, $this->source); })());
        echo ";
    color: ";
        // line 1080
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1080, $this->source); })()), "white", [], "any", false, false, false, 1080);
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1092
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1100
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1102
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1102, $this->source); })()), "danger", [], "any", false, false, false, 1102);
        echo ";
    font-size: 16px;
}

";
        // line 1109
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1131
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1153
        echo "body.show .form-control {
";
        // line 1154
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1154, $this->source); })()))) {
            // line 1155
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1155, $this->source); })()), "white", [], "any", false, false, false, 1155);
            echo ";
";
        } elseif (("light" ==         // line 1156
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1156, $this->source); })()))) {
            // line 1157
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1157, $this->source); })()), "gray_lighter", [], "any", false, false, false, 1157);
            echo ";
";
        }
        // line 1159
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1173
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1178
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1178, $this->source); })()), "white", [], "any", false, false, false, 1178);
        echo ";
    border: 1px solid ";
        // line 1179
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1179, $this->source); })()), "gray_lighter", [], "any", false, false, false, 1179);
        echo ";
    box-shadow: 0 0 3px ";
        // line 1180
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1180, $this->source); })()), "gray_light", [], "any", false, false, false, 1180);
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1185
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1185, $this->source); })()), "danger", [], "any", false, false, false, 1185);
        echo ";
    color: ";
        // line 1186
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1186, $this->source); })()), "white", [], "any", false, false, false, 1186);
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1202
        echo "
";
        // line 1206
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1230
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1277
        echo "    body.list table {
        background: ";
        // line 1278
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1278, $this->source); })()), "white", [], "any", false, false, false, 1278);
        echo ";
        border: 1px solid ";
        // line 1279
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1279, $this->source); })()), "table_border", [], "any", false, false, false, 1279);
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1285
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1285, $this->source); })()), "table_header", [], "any", false, false, false, 1285);
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1289
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1289, $this->source); })()), "gray", [], "any", false, false, false, 1289);
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1294
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1294, $this->source); })()), "text", [], "any", false, false, false, 1294);
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1300
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1300, $this->source); })()), "gray_light", [], "any", false, false, false, 1300);
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1305
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1305, $this->source); })()))) {
            // line 1306
            echo "        background: ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 1306, $this->source); })());
            echo ";
        color: ";
            // line 1307
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1307, $this->source); })()), "white", [], "any", false, false, false, 1307);
            echo ";
";
        }
        // line 1309
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1312
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1312, $this->source); })()))) {
            // line 1313
            echo "        color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1313, $this->source); })()), "white", [], "any", false, false, false, 1313);
            echo ";
";
        } elseif (("light" ==         // line 1314
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1314, $this->source); })()))) {
            // line 1315
            echo "        color: ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 1315, $this->source); })());
            echo ";
";
        }
        // line 1317
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1325
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1325, $this->source); })()), "gray_light", [], "any", false, false, false, 1325);
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1328
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 1328, $this->source); })());
        echo ";
    }
    ";
        // line 1331
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1332
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new RuntimeError('Variable "color_scheme" does not exist.', 1332, $this->source); })()))) {
            // line 1333
            echo "        border-left: 1px solid ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 1333, $this->source); })());
            echo ";
        border-top: 1px solid ";
            // line 1334
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new RuntimeError('Variable "brand_color" does not exist.', 1334, $this->source); })());
            echo ";
";
        }
        // line 1336
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1338
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1338, $this->source); })()), "gray_light", [], "any", false, false, false, 1338);
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1347
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1347, $this->source); })()), "table_row_border", [], "any", false, false, false, 1347);
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1359
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1359, $this->source); })()), "gray_lighter", [], "any", false, false, false, 1359);
        echo ";
        border-color: ";
        // line 1360
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1360, $this->source); })()), "table_row_border", [], "any", false, false, false, 1360);
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1363
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 1363, $this->source); })()), "gray_lighter", [], "any", false, false, false, 1363);
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1403
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:css:easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1906 => 1403,  1865 => 1363,  1859 => 1360,  1855 => 1359,  1840 => 1347,  1828 => 1338,  1824 => 1336,  1819 => 1334,  1814 => 1333,  1812 => 1332,  1809 => 1331,  1804 => 1328,  1798 => 1325,  1788 => 1317,  1782 => 1315,  1780 => 1314,  1775 => 1313,  1773 => 1312,  1768 => 1309,  1763 => 1307,  1758 => 1306,  1756 => 1305,  1748 => 1300,  1739 => 1294,  1731 => 1289,  1724 => 1285,  1715 => 1279,  1711 => 1278,  1708 => 1277,  1660 => 1230,  1635 => 1206,  1632 => 1202,  1616 => 1186,  1612 => 1185,  1604 => 1180,  1600 => 1179,  1596 => 1178,  1589 => 1173,  1576 => 1159,  1570 => 1157,  1568 => 1156,  1563 => 1155,  1561 => 1154,  1558 => 1153,  1537 => 1131,  1516 => 1109,  1509 => 1102,  1505 => 1100,  1498 => 1092,  1486 => 1080,  1482 => 1079,  1476 => 1076,  1471 => 1074,  1467 => 1073,  1463 => 1071,  1457 => 1069,  1455 => 1068,  1450 => 1067,  1448 => 1066,  1439 => 1059,  1426 => 1046,  1384 => 1005,  1378 => 1001,  1372 => 999,  1370 => 998,  1365 => 997,  1363 => 996,  1359 => 995,  1344 => 982,  1308 => 946,  1303 => 940,  1298 => 938,  1294 => 936,  1292 => 935,  1287 => 934,  1285 => 933,  1278 => 928,  1269 => 918,  1265 => 916,  1263 => 915,  1260 => 914,  1258 => 913,  1255 => 912,  1251 => 909,  1245 => 907,  1243 => 906,  1240 => 905,  1238 => 904,  1219 => 887,  1209 => 878,  1204 => 875,  1202 => 874,  1195 => 871,  1193 => 870,  1182 => 861,  1176 => 859,  1174 => 858,  1171 => 857,  1169 => 856,  1161 => 850,  1155 => 848,  1153 => 847,  1149 => 845,  1147 => 844,  1128 => 827,  1122 => 825,  1120 => 824,  1117 => 823,  1115 => 822,  1108 => 817,  1102 => 815,  1100 => 814,  1097 => 813,  1095 => 812,  1087 => 806,  1081 => 804,  1079 => 803,  1076 => 802,  1074 => 801,  1070 => 799,  1054 => 783,  996 => 726,  974 => 707,  947 => 682,  943 => 680,  936 => 676,  933 => 675,  924 => 667,  921 => 666,  918 => 663,  911 => 655,  904 => 649,  900 => 648,  890 => 640,  866 => 617,  862 => 616,  859 => 615,  849 => 605,  834 => 592,  830 => 591,  827 => 590,  813 => 577,  804 => 571,  798 => 568,  792 => 565,  785 => 561,  775 => 554,  764 => 546,  758 => 543,  752 => 539,  743 => 529,  737 => 525,  735 => 524,  731 => 522,  726 => 520,  720 => 518,  718 => 517,  714 => 515,  712 => 514,  707 => 511,  703 => 509,  701 => 508,  698 => 507,  696 => 506,  691 => 503,  687 => 501,  685 => 500,  682 => 499,  680 => 498,  671 => 491,  667 => 489,  665 => 488,  662 => 487,  660 => 486,  654 => 482,  649 => 480,  646 => 479,  644 => 478,  640 => 477,  635 => 476,  633 => 475,  625 => 469,  621 => 467,  619 => 466,  616 => 465,  614 => 464,  610 => 462,  604 => 460,  602 => 459,  599 => 458,  597 => 457,  590 => 452,  584 => 446,  568 => 430,  563 => 427,  561 => 426,  557 => 424,  552 => 422,  547 => 421,  545 => 420,  541 => 419,  536 => 418,  534 => 417,  521 => 407,  502 => 391,  497 => 388,  491 => 386,  489 => 385,  483 => 383,  481 => 382,  472 => 377,  468 => 375,  466 => 374,  461 => 372,  454 => 367,  423 => 337,  415 => 331,  409 => 327,  404 => 325,  394 => 318,  389 => 316,  379 => 309,  374 => 307,  364 => 300,  359 => 298,  349 => 291,  344 => 289,  313 => 261,  308 => 258,  302 => 256,  300 => 255,  295 => 254,  293 => 253,  274 => 236,  268 => 231,  265 => 230,  248 => 214,  204 => 172,  197 => 163,  190 => 158,  180 => 152,  173 => 148,  162 => 139,  156 => 136,  153 => 135,  144 => 126,  140 => 125,  134 => 122,  130 => 121,  124 => 117,  106 => 99,  96 => 90,  89 => 86,  74 => 75,  63 => 64,  56 => 56,  53 => 49,  51 => 48,  48 => 47,  46 => 5,  43 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{#  ========================================================================
    EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License
    ======================================================================== #}

{% set color_schemes = {
    'dark': {
        info: '#39A0ED',
        warning: '#F0AD4E',
        danger: '#D42124',
        success: '#006B2E',
        text: '#222222',
        text_muted: '#737373',
        link: '#205081',
        black: '#111111',
        white: '#FFFFFF',
        gray_darker: '#252525',
        gray_dark: '#444',
        gray: '#AAA',
        gray_light: '#CCC',
        gray_lighter: '#F5F5F5',
        page_background: '#F5F5F5',
        table_header: '#EEE',
        table_border: '#CCC',
        table_row_border: '#DDD',
    },
    'light': {
        info: '#39A0ED',
        warning: '#F0AD4E',
        danger: '#D42124',
        success: '#006B2E',
        text: '#444444',
        text_muted: '#737373',
        link: '#205081',
        black: '#333333',
        white: '#FFFFFF',
        gray_darker: '#444',
        gray_dark: '#AAA',
        gray: '#CCC',
        gray_light: '#F5F5F5',
        gray_lighter: '#FAFAFA',
        page_background: '#FFFFFF',
        table_header: '#FAFAFA',
        table_border: '#FFFFFF',
        table_row_border: '#E5E5E5',
    }
} %}

{% set colors = color_schemes[color_scheme] %}

{% autoescape false %}
{# -------------------------------------------------------------------------
   RESET STYLES
   ------------------------------------------------------------------------- #}
{# make the Symfony Web Toolbar look nice by neutralizing the aliasing applied
   globally by the AdminLTE template styles #}
.sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

{# -------------------------------------------------------------------------
   BASIC STYLES
   ------------------------------------------------------------------------- #}
body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

{# Links
   ------------------------------------------------------------------------- #}
a        { color: {{ colors.link }}; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: {{ colors.link }};
}
a.text-danger,
a.text-danger:focus {
    color: {{ colors.danger }};
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

{# Lists
   ------------------------------------------------------------------------- #}
ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

{# Flash messages
   ------------------------------------------------------------------------- #}
div.flash {
    padding: .5em;
}
div.flash-success {
    background: {{ colors.success }};
    color: {{ colors.white }};
}
div.flash-error {
    background: {{ colors.danger }};
    color: {{ colors.white }};
}
div.flash-error strong {
    padding-right: .5em;
}

{# Labels
   ------------------------------------------------------------------------- #}
{# this prevents overriding default styles for labels (label-info, label-primary, etc.) #}
.label:not([class*=label-]) {
    background: {{ colors.gray_darker }};
}
.label {
    color: {{ colors.white }};
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.success }} !important;
}
.label-danger {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.danger }} !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: {{ colors.gray_light }};
    padding: 4px 8px;
}

{# this makes boolean labels to be of the same width for most languages #}
.boolean .label,
.toggle .label {
    min-width: 33px;
}

{# Switches / toggles
   ------------------------------------------------------------------------- #}
{# needed to neutralize the default .toggle styles applied by Bootstrap Toggle
   which collide with the .toggle class applied to <th> too #}
.toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: {{ colors.gray_lighter }};
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

{# Badges
   ------------------------------------------------------------------------- #}
span.badge {
    background-color: {{ brand_color }};
}

{# Buttons
   ------------------------------------------------------------------------- #}
.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
{% if 'dark' == color_scheme %}
    background: {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray }};
{% endif %}
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: {{ colors.text }};
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}
.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: {{ brand_color }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: {{ colors.info }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-warning,
.btn-warning:hover,
.btn-warning:active,
.btn-warning:focus,
.btn-warning:active:hover {
    background-color: {{ colors.warning }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: {{ colors.danger }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: {{ colors.success }};
    border-color: transparent;
    color: {{ colors.white }};
}

{# .bnt-secondary is for 'buttons' displayed as text links #}
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: {{ brand_color }};
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-warning,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

{# Forms
   ------------------------------------------------------------------------- #}
.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
{% if 'dark' == color_scheme %}
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% endif %}
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
{% if 'dark' == color_scheme %}
    border-color: {{ colors.gray_dark }};
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% elseif 'light' == color_scheme %}
    border-color: {{ colors.gray_darker }};
{% endif %}
}

.has-error .error-block {
    color: {{ colors.danger }};
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: {{ colors.text_muted }};
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
{% if 'dark' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
    box-shadow: 0 -1px 4px {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
    box-shadow: 0 -1px 4px {{ colors.gray }};
{% endif %}
    height: 52px;
    padding-top: 10px;
{% if kernel_debug|default(false) %}
    height: 85px;
    padding-bottom: 45px;
{% endif %}
    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

{# Field: collection
   ------------------------------------------------------------------------- #}
.field-collection .collection-empty {
    margin: .5em 0;
}

{# Field: special Form Fields (dividers, groups, sections)
   ------------------------------------------------------------------------- #}
.field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: {{ colors.gray_lighter }};
{% endif %}
}
.field-group .field-divider hr {
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: #EEE;
{% endif %}
}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid {{ colors.gray_light }};
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
{% if 'dark' == color_scheme %}
    border: 1px solid #DDD;
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
{% endif %}
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-group .box-header.with-border {
{% if 'dark' == color_scheme %}
    background: #F0F0F0;
    border-bottom-color: #DDD;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
    border-bottom-color: #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    padding: 11px 10px 9px;
}
{% if 'light' == color_scheme %}
.field-group .box-header .box-title {
    color: #777;
}
{% endif %}
.field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

{# Select2 widget
   ------------------------------------------------------------------------- #}
{# these styles must be applied after loading the default select2 styles #}
.select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: {{ colors.text }};
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: {{ colors.gray_light }};
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: {{ brand_color }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: {{ colors.text }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: {{ colors.danger }};
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid {{ colors.gray_dark }};
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

{# VichUploaderBundle files and images
   ------------------------------------------------------------------------- #}
.easyadmin-vich-image img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
{# the checkbox to delete the image/file #}
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

{# Thumbnails and image lightbox
   ------------------------------------------------------------------------- #}
.easyadmin-thumbnail img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    width: 100%;
    max-width: 100%;
}

{# Modal windows
   ------------------------------------------------------------------------- #}
.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: {{ colors.gray_lighter }};
    border-top: 1px solid {{ colors.gray_light }};
    margin-top: 1.5em;
}

{# Utils
   ------------------------------------------------------------------------- #}
.newrow, .new-row {
    clear: both;
    display: block;
}

{# -------------------------------------------------------------------------
   LAYOUT
   ------------------------------------------------------------------------- #}

{# Wrapper
   ------------------------------------------------------------------------- #}
.content-wrapper {
    background: {{ colors.page_background }};
}
.fixed .content-wrapper {
    padding-top: 50px;
}

{# Header
   ------------------------------------------------------------------------- #}
.main-header {
    background: {{ brand_color }};
    position: relative;
}
.main-header .logo {
    color: {{ colors.white }};
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; {# needed to override AdminLTE styles #}
    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: {{ brand_color }};
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: {{ colors.white }};
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

{# Main body
   ------------------------------------------------------------------------- #}
#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

{# Sidebar
   ------------------------------------------------------------------------- #}
.main-sidebar,
.wrapper {
{% if 'dark' == color_scheme %}
    background-color: #333;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
{% endif %}
}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    color: #777;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_dark }};
{% endif %}
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #333;
    color: #CCC;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_darker }};
{% endif %}
    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
{% if 'dark' == color_scheme %}
    color: {{ colors.white }};
    background: #4D4D4D;
    border-left-color: #BBB;
{% elseif 'light' == color_scheme %}
    background: #DCDCDC;
    border-left-color: #808080;
{% endif %}
}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

{# when the sidebar is collapsed #}
.sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
{% if 'dark' == color_scheme %}
    background: #333;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
{% endif %}
}

{# when collapsed, menu dividers are displayed as a straight line #}
.sidebar-mini.sidebar-collapse .sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid #777;
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #BBB;
{% endif %}
    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

{# -------------------------------------------------------------------------
   COMMON ADMIN PAGES
   ------------------------------------------------------------------------- #}
body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
{% if 'dark' == color_scheme %}
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: {{ colors.text_muted }};
{% endif %}
    margin: 10px 0 5px;
}

{# -------------------------------------------------------------------------
   LIST PAGE
   ------------------------------------------------------------------------- #}

body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

{# Responsive tables
   ------------------------------------------------------------------------- #}
body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: {{ colors.white }};
{% if 'dark' == color_scheme %}
    border: 1px solid {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    border: 1px solid {{ colors.gray }};
{% endif %}
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid {{ colors.table_row_border }};
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

{# Search results
   ------------------------------------------------------------------------- #}
body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

{# Pagination
   ------------------------------------------------------------------------- #}
body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
{% if 'dark' == color_scheme %}
    color: {{ colors.text_muted }};
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray }};
{% endif %}
}
body.list .pagination > li > a {
    background: {{ colors.white }};
    border-color: {{ colors.gray_light }};
    border-radius: 0;
    color: {{ colors.text }};
}
body.list .pagination > li > a:hover {
    background: {{ brand_color }};
    color: {{ colors.white }};
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
{# this hack is needed to avoid the last pagination page from showing wrong
   borders for the second pagination element (we need to put this element above
   the third element) #}
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

{# -------------------------------------------------------------------------
   FORM PAGE
   ------------------------------------------------------------------------- #}
form label.control-label.required:after {
    content: \"\\00a0*\";
    color: {{ colors.danger }};
    font-size: 16px;
}

{# -------------------------------------------------------------------------
   NEW PAGE
   ------------------------------------------------------------------------- #}
body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   EDIT PAGE
   ------------------------------------------------------------------------- #}
body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   SHOW PAGE
   ------------------------------------------------------------------------- #}
body.show .form-control {
{% if 'dark' == color_scheme %}
    background: {{ colors.white }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_lighter }};
{% endif %}
    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

{# -------------------------------------------------------------------------
   ERROR PAGES
   ------------------------------------------------------------------------- #}
body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: {{ colors.white }};
    border: 1px solid {{ colors.gray_lighter }};
    box-shadow: 0 0 3px {{ colors.gray_light }};
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: {{ colors.danger }};
    color: {{ colors.white }};
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

{# =========================================================================
   RESPONSIVE
   ========================================================================= #}

{# -------------------------------------------------------------------------
   VERTICAL TABLETS and LANDSCAPE SMARTPHONES
   ------------------------------------------------------------------------- #}
@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; {# neutralizes AdminLTE styles #}
        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    {# these table styles are needed to override the \"responsive tables\" styles #}
    body.list table {
        background: {{ colors.white }};
        border: 1px solid {{ colors.table_border }};
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: {{ colors.table_header }};
        padding: 0;
    }
    body.list table thead th i {
        color: {{ colors.gray }};
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: {{ colors.text }};
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: {{ colors.gray_light }};
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
{% if 'dark' == color_scheme %}
        background: {{ brand_color }};
        color: {{ colors.white }};
{% endif %}
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
{% if 'dark' == color_scheme %}
        color: {{ colors.white }};
{% elseif 'light' == color_scheme %}
        color: {{ brand_color }};
{% endif %}
    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid {{ colors.gray_light }};
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset {{ brand_color }};
    }
    {# these styles are needed to fix some visual glitches when the sort field is the first column #}
    body.list .table thead tr th:first-child.sorted {
{% if 'dark' == color_scheme %}
        border-left: 1px solid {{ brand_color }};
        border-top: 1px solid {{ brand_color }};
{% endif %}
    }
    body.list .table tbody {
        border-bottom: 2px double {{ colors.gray_light }};
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid {{ colors.table_row_border }};
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: {{ colors.gray_lighter }};
        border-color: {{ colors.table_row_border }};
    }
    body.list .table tbody tr:hover td {
        background: {{ colors.gray_lighter }};
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    {# Field: checkbox
       ------------------------------------------------------------------------- #}
    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
{% endautoescape %}
", "EasyAdminBundle:css:easyadmin.css.twig", "/home/jessica/Escritorio/back/cenurbBack/vendor/easycorp/easyadmin-bundle/src/Resources/views/css/easyadmin.css.twig");
    }
}
