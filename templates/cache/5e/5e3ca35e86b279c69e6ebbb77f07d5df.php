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

/* login.html */
class __TwigTemplate_7475276216c4077b8c346189e5d12586 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'description' => [$this, 'block_description'],
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
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " Log In IT-News";
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
        <h1 class=\"text-4xl text-blue-500 mb-8\">Log In</h1>
    </header>
    <form action=\"login.php\" class=\"w-1/3 grid\" method=\"POST\">
        ";
        // line 11
        if (($context["errors"] ?? null)) {
            // line 12
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        ";
        }
        // line 14
        yield "        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">Email</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                type=\"email\" name=\"mail\" id=\"mail\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["email"] ?? null), "html", null, true);
        yield "\">
            <span class=\"text-red-500\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 18), "html", null, true);
        yield "</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                type=\"password\" name=\"password\" id=\"password\">
            <span class=\"text-red-500\">";
        // line 24
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 24);
        yield "</span>
        </div>
        <a class=\"text-pink-600 hover:text-blue-600\" href=\"forgot-password.php\">Reset your password</a>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Login</button>
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
        return "login.html";
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
        return array (  92 => 24,  83 => 18,  79 => 17,  74 => 14,  70 => 12,  68 => 11,  60 => 5,  56 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block description %} Log In IT-News{% endblock %}
{% block content %}

<main class=\"container mx-auto flex justify-center flex-col items-center\">
    <header class=\"p-10\">
        <h1 class=\"text-4xl text-blue-500 mb-8\">Log In</h1>
    </header>
    <form action=\"login.php\" class=\"w-1/3 grid\" method=\"POST\">
        {% if errors %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">Please correct all errors</p>
        {% endif %}
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"mail\">Email</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                type=\"email\" name=\"mail\" id=\"mail\" value=\"{{email}}\">
            <span class=\"text-red-500\">{{errors.email}}</span>
        </div>
        <div class=\"p-4\">
            <label class=\"block mb-2 text-sm font-medium text-gray-900\" for=\"password\">Password</label>
            <input class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\"
                type=\"password\" name=\"password\" id=\"password\">
            <span class=\"text-red-500\">{{errors.password|raw}}</span>
        </div>
        <a class=\"text-pink-600 hover:text-blue-600\" href=\"forgot-password.php\">Reset your password</a>
        <button class=\"text-white w-1/3 bg-blue-500 p-3 rounded-md hover:bg-pink-600 m-5\" type=\"submit\">Login</button>
    </form>
</main>

{% endblock %}", "login.html", "E:\\XAMPP\\htdocs\\templates\\login.html");
    }
}
