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

/* admin/article-delete.html */
class __TwigTemplate_3904916dd1b26633464d4bc98a4fccdd extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/article-delete.html", 1);
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
    <form class=\"w-full grid\" action=\"article-delete.php?id=";
        // line 8
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 8)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true)) : (yield ""));
        yield "\" method=\"POST\">
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\">
        <h2 class=\"text-blue-500 mb-8\">Are you sure you want to delete this article?</h2>
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
            Yes
        </button>
        <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "templates/admin/articles.php\">NO</a>
        ";
        // line 15
        if ((null === ($context["errors"] ?? null))) {
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
        return "admin/article-delete.html";
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
        return array (  88 => 18,  82 => 16,  80 => 15,  76 => 14,  68 => 9,  64 => 8,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block title%}{{title}}{% endblock %}

{% block content %}

<main class=\"container mx-auto text text-center\">
    <form class=\"w-full grid\" action=\"article-delete.php?id={{article.id ?? ''}}\" method=\"POST\">
        <input type=\"hidden\" name=\"id\" value=\"{{article.id}}\">
        <h2 class=\"text-blue-500 mb-8\">Are you sure you want to delete this article?</h2>
        <button type=\"submit\" class=\"bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded\">
            Yes
        </button>
        <a href=\"{{doc_root}}templates/admin/articles.php\">NO</a>
        {% if errors is null %}
              <p class=\"text-red-500\">{{errors.content}}</p>
        {% endif %}
    </form>
</main>


{% endblock %}", "admin/article-delete.html", "C:\\xampp\\htdocs\\templates\\admin\\article-delete.html");
    }
}
