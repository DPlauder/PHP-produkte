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

/* admin/category-delete.html */
class __TwigTemplate_62bbbc2bf448a4967ebf177f25224544 extends Template
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
        return "admin/layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/category-delete.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<main class=\"container mx-auto text text-center\">
    <form class=\"w-full grid\" action=\"category-delete.php\" method=\"POST\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
        <h2 class=\"text-blue-500 mb-8\">Are you sure you want to delete this category?</h2>
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
            Yes
        </button>
        <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/categories.php\">NO</a>
        ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 15)) {
            // line 16
            yield "              <p class=\"text-red-500\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
        ";
        }
        // line 18
        yield "    </form>
</main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/category-delete.html";
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
        return array (  85 => 18,  79 => 16,  77 => 15,  73 => 14,  65 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block title%}{{title}}{% endblock %}

{% block content %}

<main class=\"container mx-auto text text-center\">
    <form class=\"w-full grid\" action=\"category-delete.php\" method=\"POST\">
        <input type=\"hidden\" name=\"id\" value=\"{{category.id}}\">
        <h2 class=\"text-blue-500 mb-8\">Are you sure you want to delete this category?</h2>
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
            Yes
        </button>
        <a href=\"{{doc_root}}admin/categories.php\">NO</a>
        {% if errors.content %}
              <p class=\"text-red-500\">{{errors.content}}</p>
        {% endif %}
    </form>
</main>

{% endblock %}", "admin/category-delete.html", "C:\\xampp\\htdocs\\templates\\admin\\category-delete.html");
    }
}
