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

/* admin/category.html */
class __TwigTemplate_7fdac41f4768535bd3deece22942116c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "
    <main class=\"container w-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
        <form class=\"w-full grid\" action=\"category.php?id=";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\" method=\"POST\">
            <h2 class=\"text3xl text-blue-500 mb-8\">";
        // line 10
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 10)) ? ("Edit ") : ("New "));
        yield "Category</h2>

            ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 12)) {
            // line 13
            yield "                <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 13), "html", null, true);
            yield "</p>
            ";
        }
        // line 15
        yield "            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "\">
                <span class=\"error text-red-500\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
                <textarea class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                name=\"description\" id=\"description\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 24), "html", null, true);
        yield "</textarea>
                <span class=\"text-red-500\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "description", [], "any", false, false, false, 25), "html", null, true);
        yield "</span>
            </div>
            <div class=\"p-4\">
                <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\" type=\"checkbox\"
                name=\"navigation\" id=\"navigation\" 
                    ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "navigation", [], "any", false, false, false, 30)) {
            // line 31
            yield "                        checked
                    ";
        }
        // line 32
        yield ">
                <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
            </div>
            <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
        </form>
    </main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  125 => 32,  121 => 31,  119 => 30,  111 => 25,  107 => 24,  99 => 19,  95 => 18,  90 => 15,  84 => 13,  82 => 12,  77 => 10,  73 => 9,  69 => 7,  65 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block title %}{{category.name}}{%endblock%}
{% block description %}{{category.description}}{% endblock %}

{% block content %}

    <main class=\"container w-auto md:w-1/2 flex justify-center flex-col items-center p-5\">
        <form class=\"w-full grid\" action=\"category.php?id={{category.id}}\" method=\"POST\">
            <h2 class=\"text3xl text-blue-500 mb-8\">{{category.id ? 'Edit ' : 'New '}}Category</h2>

            {% if errors.issue %}
                <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
            {% endif %}
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"name\">Name</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                type=\"text\" id=\"name\" name=\"name\" value=\"{{category.name}}\">
                <span class=\"error text-red-500\">{{errors.name}}</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"description\">Description</label>
                <textarea class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                name=\"description\" id=\"description\">{{category.description}}</textarea>
                <span class=\"text-red-500\">{{errors.description}}</span>
            </div>
            <div class=\"p-4\">
                <input class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\" type=\"checkbox\"
                name=\"navigation\" id=\"navigation\" 
                    {% if category.navigation %}
                        checked
                    {% endif %}>
                <label class=\"ms-2 text-sm font-medium text-gray-900\" for=\"navigation\">Navigation</label>
            </div>
            <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
        </form>
    </main>

{% endblock %}", "admin/category.html", "C:\\xampp\\htdocs\\templates\\admin\\category.html");
    }
}
