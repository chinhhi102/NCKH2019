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

/* jury/internal_errors.html.twig */
class __TwigTemplate_f47b68d17e50dc186c0e9ff5e940b525a3cfb9cbf6d4807b7f97a12e925950b1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "jury/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("jury/jury_macros.twig", "jury/internal_errors.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("jury/base.html.twig", "jury/internal_errors.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  Internal errors - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
  ";
        // line 10
        echo twig_call_macro($macros["macros"], "macro_table_extrahead", [], 10, $context, $this->getSourceContext());
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\" style=\"overflow: auto\">
        <h1>
          Internal errors
        </h1>

        ";
        // line 21
        echo twig_call_macro($macros["macros"], "macro_table", [        // line 23
(isset($context["internal_errors"]) || array_key_exists("internal_errors", $context) ? $context["internal_errors"] : (function () { throw new RuntimeError('Variable "internal_errors" does not exist.', 23, $this->source); })()),         // line 24
(isset($context["table_fields"]) || array_key_exists("table_fields", $context) ? $context["table_fields"] : (function () { throw new RuntimeError('Variable "table_fields" does not exist.', 24, $this->source); })()), 0, ["ordering" => "false"]], 22, $context, $this->getSourceContext());
        // line 30
        echo "
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "jury/internal_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  92 => 24,  91 => 23,  90 => 21,  81 => 14,  77 => 13,  71 => 10,  66 => 9,  62 => 8,  55 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'jury/base.html.twig' %}
{% import 'jury/jury_macros.twig' as macros %}

{% block title %}
  Internal errors - {{ parent() }}
{% endblock %}

{% block extrahead %}
  {{ parent() }}
  {{ macros.table_extrahead() }}
{% endblock %}

{% block content %}
  <div class=\"dashboard-wrapper\">
    <div class=\"row\">
      <div class=\"col-12\" style=\"overflow: auto\">
        <h1>
          Internal errors
        </h1>

        {{
          macros.table(
            internal_errors,
            table_fields,
            0,
            {
              ordering: 'false'
            }
          )
        }}
      </div>
    </div>
  </div>
{% endblock %}
", "jury/internal_errors.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/jury/internal_errors.html.twig");
    }
}
