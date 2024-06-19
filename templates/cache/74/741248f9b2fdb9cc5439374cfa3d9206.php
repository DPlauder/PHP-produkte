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

/* contact.html */
class __TwigTemplate_f95378e0723551d0def4d19e0bbfab86 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "contact.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Contact";
        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "
<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Contact</h1>
    </header>
    <form action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "contact.php?\" class=\"w-2/3 grid\" method=\"POST\">
        ";
        // line 10
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 10))) {
            // line 11
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>
        ";
        }
        // line 13
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["success"] ?? null))) {
            // line 14
            yield "        <p class=\"success text-gray-800 bg-green-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "</p>
        ";
        }
        // line 16
        yield "        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"from\">E-Mail-Adress</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                id=\"from\" name=\"from\" type=\"text\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["from"] ?? null), "html", null, true);
        yield "\">
        </div>
        <div class=\"p-4\">
            <label class=\"block mx-2 text-sm font-medium text-gray-900\" for=\"text\">
                Message
            </label>
            <textarea class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                name=\"text\" id=\"text\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text"] ?? null), "html", null, true);
        yield "</textarea>
            <span class=\"text-red-500\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "text", [], "any", false, false, false, 27), "html", null, true);
        yield "</span>
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Send</button>
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
        return "contact.html";
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
        return array (  107 => 27,  103 => 26,  93 => 19,  88 => 16,  82 => 14,  79 => 13,  73 => 11,  71 => 10,  67 => 9,  60 => 4,  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %}Contact{% endblock %}
{% block content %}

<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Contact</h1>
    </header>
    <form action=\"{{doc_root}}contact.php?\" class=\"w-2/3 grid\" method=\"POST\">
        {% if errors.issue is not empty %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
        {% endif %}
        {% if success is not empty %}
        <p class=\"success text-gray-800 bg-green-200 p-5 rounded-md\">{{success}}</p>
        {% endif %}
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"from\">E-Mail-Adress</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                id=\"from\" name=\"from\" type=\"text\" value=\"{{from}}\">
        </div>
        <div class=\"p-4\">
            <label class=\"block mx-2 text-sm font-medium text-gray-900\" for=\"text\">
                Message
            </label>
            <textarea class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\"
                name=\"text\" id=\"text\">{{text}}</textarea>
            <span class=\"text-red-500\">{{errors.text}}</span>
        </div>
        <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\" type=\"submit\">Send</button>
    </form>
</main>
{% endblock %}", "contact.html", "C:\\xampp\\htdocs\\templates\\contact.html");
    }
}
