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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_0f1e6b39797f3983ee243113511fc9f7581a87c1610e83c4fd70d8e116887aa5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->loadTemplate("public/menu.html.twig", "@Twig/Exception/error.html.twig", 4)->display($context);
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"error-template\">
                <h1>
                    ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h1>
                <div class=\"error-details\">
                    Sorry, an error has occured: ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ".
                </div>
                <div class=\"error-details\">
                    Please contact a staff member for assistance.
                </div>
                ";
        // line 20
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") && twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", true, true, false, 20))) {
            // line 21
            echo "                <div class=\"error-details mt-4\" style=\"text-align: left;\">
                    <code>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 22, $this->source); })()), "message", [], "any", false, false, false, 22), "html", null, true);
            echo "</code>
                </div>
                ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  87 => 22,  84 => 21,  82 => 20,  74 => 15,  67 => 13,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block menu %}
    {% include 'public/menu.html.twig' %}
{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"error-template\">
                <h1>
                    {{ status_code }} {{ status_text }}</h1>
                <div class=\"error-details\">
                    Sorry, an error has occured: {{ status_text }}.
                </div>
                <div class=\"error-details\">
                    Please contact a staff member for assistance.
                </div>
                {% if is_granted(\"ROLE_JURY\") and exception.message is defined %}
                <div class=\"error-details mt-4\" style=\"text-align: left;\">
                    <code>{{ exception.message }}</code>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "@Twig/Exception/error.html.twig", "/home/chinhhi/domjudge/domserver/webapp/templates/bundles/TwigBundle/Exception/error.html.twig");
    }
}
