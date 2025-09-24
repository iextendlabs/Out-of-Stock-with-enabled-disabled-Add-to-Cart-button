<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* extension/cart_control/admin/view/template/module/cart_control.twig */
class __TwigTemplate_9f2de16bd842519203b472d435ad81fa extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 9
        yield ($context["cancel"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-light\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 13
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            yield "\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
            yield "</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 24
        if (($context["success"] ?? null)) {
            // line 25
            yield "\t\t\t<div id=\"alert\" class=\"d-flex justify-content-center mt-3\">
\t\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" style=\"max-width: 500px; opacity: 0.9;\" role=\"alert\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-check me-2\"></i>
\t\t\t\t\t";
            // line 28
            yield ($context["success"] ?? null);
            yield "
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 33
        yield "
\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fa-solid fa-pencil me-1\"></i>
\t\t\t\t";
        // line 37
        yield ($context["text_edit"] ?? null);
        yield "
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form action=\"";
        // line 40
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 42
        yield ($context["entry_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"form-check form-switch form-switch-lg\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_hide_cart_button_status\" value=\"0\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_hide_cart_button_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\" ";
        // line 46
        if (($context["module_hide_cart_button_status"] ?? null)) {
            yield " checked ";
        }
        yield ">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Check By -->
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 52
        yield ($context["entry_check_type"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select id=\"check-type\" name=\"module_hide_cart_button_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"quantity\" ";
        // line 55
        if ((($context["module_hide_cart_button_type"] ?? null) == "quantity")) {
            yield "selected";
        }
        yield ">Quantity</option>
\t\t\t\t\t\t\t\t<option value=\"status\" ";
        // line 56
        if ((($context["module_hide_cart_button_type"] ?? null) == "status")) {
            yield "selected";
        }
        yield ">Stock Status</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Stock Status Multi Select -->
\t\t\t\t\t<div id=\"stock-status-section\" class=\"row mb-3\" ";
        // line 61
        if ((($context["module_hide_cart_button_type"] ?? null) != "status")) {
            yield "style=\"display:none\"";
        }
        yield ">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">";
        // line 62
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-2\" id=\"stock-status-search\" placeholder=\"Search stock status...\">
\t\t\t\t\t\t\t<div id=\"stock-status-checkbox-list\" style=\"max-height: 100px; overflow-y: auto; border: 1px solid #eee; padding: 8px; border-radius: 4px;\">
\t\t\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock"]) {
            // line 67
            yield "\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-1 stock-status-item\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"module_hide_cart_button_stock_status[]\" id=\"stock-status-";
            // line 68
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "stock_status_id", [], "any", false, false, false, 68);
            yield "\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "stock_status_id", [], "any", false, false, false, 68);
            yield "\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 69
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "stock_status_id", [], "any", false, false, false, 69), ($context["module_hide_cart_button_stock_status"] ?? null))) {
                yield "checked";
            }
            yield ">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"stock-status-";
            // line 70
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "stock_status_id", [], "any", false, false, false, 70);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock"], "name", [], "any", false, false, false, 70);
            yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<script>
    \$('#check-type').on('change', function() {
        \$('#stock-status-section').toggle(this.value === 'status');
    });
</script>
<script>
    \$('#stock-status-search').on('keyup', function() {
        var search = \$(this).val().toLowerCase();
        \$('#stock-status-checkbox-list .stock-status-item').each(function() {
            var label = \$(this).find('label').text().toLowerCase();
            \$(this).toggle(label.indexOf(search) !== -1);
        });
    });
</script>
";
        // line 96
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/cart_control/admin/view/template/module/cart_control.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  235 => 96,  210 => 73,  199 => 70,  193 => 69,  187 => 68,  184 => 67,  180 => 66,  173 => 62,  167 => 61,  157 => 56,  151 => 55,  145 => 52,  134 => 46,  127 => 42,  122 => 40,  116 => 37,  110 => 33,  102 => 28,  97 => 25,  95 => 24,  89 => 20,  78 => 17,  75 => 16,  71 => 15,  66 => 13,  57 => 9,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t</button>
\t\t\t\t<a href=\"{{ cancel }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_cancel }}\" class=\"btn btn-light\">
\t\t\t\t\t<i class=\"fa fa-reply\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t\t<a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t{% if success %}
\t\t\t<div id=\"alert\" class=\"d-flex justify-content-center mt-3\">
\t\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" style=\"max-width: 500px; opacity: 0.9;\" role=\"alert\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-check me-2\"></i>
\t\t\t\t\t{{ success }}
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

\t\t<div class=\"card\">
\t\t\t<div class=\"card-header\">
\t\t\t\t<i class=\"fa-solid fa-pencil me-1\"></i>
\t\t\t\t{{ text_edit }}
\t\t\t</div>
\t\t\t<div class=\"card-body\">
\t\t\t\t<form action=\"{{ action }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"form-check form-switch form-switch-lg\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"module_hide_cart_button_status\" value=\"0\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_hide_cart_button_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\" {% if module_hide_cart_button_status %} checked {% endif %}>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Check By -->
\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">{{ entry_check_type }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select id=\"check-type\" name=\"module_hide_cart_button_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"quantity\" {% if module_hide_cart_button_type == 'quantity' %}selected{% endif %}>Quantity</option>
\t\t\t\t\t\t\t\t<option value=\"status\" {% if module_hide_cart_button_type == 'status' %}selected{% endif %}>Stock Status</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Stock Status Multi Select -->
\t\t\t\t\t<div id=\"stock-status-section\" class=\"row mb-3\" {% if module_hide_cart_button_type != 'status' %}style=\"display:none\"{% endif %}>
\t\t\t\t\t\t<label class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control mb-2\" id=\"stock-status-search\" placeholder=\"Search stock status...\">
\t\t\t\t\t\t\t<div id=\"stock-status-checkbox-list\" style=\"max-height: 100px; overflow-y: auto; border: 1px solid #eee; padding: 8px; border-radius: 4px;\">
\t\t\t\t\t\t\t\t{% for stock in stock_statuses %}
\t\t\t\t\t\t\t\t\t<div class=\"form-check mb-1 stock-status-item\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" name=\"module_hide_cart_button_stock_status[]\" id=\"stock-status-{{ stock.stock_status_id }}\" value=\"{{ stock.stock_status_id }}\"
\t\t\t\t\t\t\t\t\t\t\t{% if stock.stock_status_id in module_hide_cart_button_stock_status %}checked{% endif %}>
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"stock-status-{{ stock.stock_status_id }}\">{{ stock.name }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>

\t</div>
</div>
<script>
    \$('#check-type').on('change', function() {
        \$('#stock-status-section').toggle(this.value === 'status');
    });
</script>
<script>
    \$('#stock-status-search').on('keyup', function() {
        var search = \$(this).val().toLowerCase();
        \$('#stock-status-checkbox-list .stock-status-item').each(function() {
            var label = \$(this).find('label').text().toLowerCase();
            \$(this).toggle(label.indexOf(search) !== -1);
        });
    });
</script>
{{ footer }}
", "extension/cart_control/admin/view/template/module/cart_control.twig", "D:\\wamp64\\www\\opencart\\cart_status\\extension\\cart_control\\admin\\view\\template\\module\\cart_control.twig");
    }
}
