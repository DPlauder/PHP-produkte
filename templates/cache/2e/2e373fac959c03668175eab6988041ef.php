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

/* register.html */
class __TwigTemplate_3dca40268ef9d0e6484618826feff5d3 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "register.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Register";
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "
    <main class=\"container mx-auto flex justify-center flex-col items-center\">
        <header class=\"p-10\">
            <h1 class=\"text-4xl text-blue-500 mb-8\">Register</h1>
        </header>
        <form action=\"register.php\" class=\"w-2/3 grid\" method=\"POST\">
            ";
        // line 11
        if (($context["errors"] ?? null)) {
            // line 12
            yield "            <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
            ";
        }
        // line 14
        yield "            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"forename\">Forename</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"text\" id=\"forename\" name=\"forename\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 17), "html", null, true);
        yield "\">
                <span class=\"text-red-500\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "forename", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"surname\">Surname</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"text\" id=\"surname\" name=\"surname\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 23), "html", null, true);
        yield "\">
                <span class=\"text-red-500\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "surname", [], "any", false, false, false, 24), "html", null, true);
        yield "</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"mail\">E-Mail-Address</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"email\" id=\"mail\" name=\"mail\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 29), "html", null, true);
        yield "\">
                <span class=\"text-red-500\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
        yield "</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"password\">Password</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"password\" id=\"password\" name=\"password\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "password", [], "any", false, false, false, 35), "html", null, true);
        yield "\">
                <span class=\"text-red-500\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 36), "html", null, true);
        yield "</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"confirm\">Confirm</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"password\" id=\"confirm\" name=\"confirm\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "confirm", [], "any", false, false, false, 41), "html", null, true);
        yield "\">
                <span class=\"text-red-500\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "confirm", [], "any", false, false, false, 42), "html", null, true);
        yield "</span>
            </div>
            <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Register</button>
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
        return "register.html";
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
        return array (  131 => 42,  127 => 41,  119 => 36,  115 => 35,  107 => 30,  103 => 29,  95 => 24,  91 => 23,  83 => 18,  79 => 17,  74 => 14,  70 => 12,  68 => 11,  60 => 5,  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block title %}Register{% endblock %}

{% block content %}

    <main class=\"container mx-auto flex justify-center flex-col items-center\">
        <header class=\"p-10\">
            <h1 class=\"text-4xl text-blue-500 mb-8\">Register</h1>
        </header>
        <form action=\"register.php\" class=\"w-2/3 grid\" method=\"POST\">
            {% if errors %}
            <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
            {% endif %}
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"forename\">Forename</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"text\" id=\"forename\" name=\"forename\" value=\"{{user.forename}}\">
                <span class=\"text-red-500\">{{errors.forename}}</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"surname\">Surname</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"text\" id=\"surname\" name=\"surname\" value=\"{{user.surname}}\">
                <span class=\"text-red-500\">{{errors.surname}}</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"mail\">E-Mail-Address</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"email\" id=\"mail\" name=\"mail\" value=\"{{user.email}}\">
                <span class=\"text-red-500\">{{errors.email}}</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"password\">Password</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"password\" id=\"password\" name=\"password\" value=\"{{user.password}}\">
                <span class=\"text-red-500\">{{errors.password}}</span>
            </div>
            <div class=\"p-4\">
                <label class=\"block mb-2 text-sm front-medium text-gray-900\" for=\"confirm\">Confirm</label>
                <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                    type=\"password\" id=\"confirm\" name=\"confirm\" value=\"{{user.confirm}}\">
                <span class=\"text-red-500\">{{errors.confirm}}</span>
            </div>
            <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Register</button>
        </form>
    </main>

{% endblock %}", "register.html", "C:\\xampp\\htdocs\\templates\\register.html");
    }
}
