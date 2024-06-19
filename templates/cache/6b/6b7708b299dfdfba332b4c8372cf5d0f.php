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

/* article.html */
class __TwigTemplate_ff17dca8adbf565e81b63dd236806daa extends Template
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
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "article.html", 1);
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
    <main class=\"flex flex-wrap container mx-auto\">
        <section>
            ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 10)) {
            // line 11
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 11), "html", null, true);
            yield "\" 
                alt=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "alt_text", [], "any", false, false, false, 12), "html", null, true);
            yield "\">
            ";
        } else {
            // line 14
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "images/placeholder.jpg\" alt=\"No image available\">
            ";
        }
        // line 16
        yield "        </section>
        <section>
            <h1 class=\"text-4xl text-blue-500 mb-4 mt-8\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "</h1>
            <div class=\"text-gray-500 mb-3\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "created", [], "any", false, false, false, 19), "d M. Y"), "html", null, true);
        yield "</div>
            <div class=\"text-gray-500\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 20), "html", null, true);
        yield "</div>
            <p class=\"credit text-xs mt-5 mb-5\">
                Posted in <a class=\"text-pink-400\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "category.php?id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 22), "html", null, true);
        yield "\">
                    ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>
                by <a class=\"text-pink-400\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "user.php?id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
                    ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 25), "html", null, true);
        yield "</a>
            </p>
        </section>
    </main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article.html";
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
        return array (  127 => 25,  121 => 24,  117 => 23,  111 => 22,  106 => 20,  102 => 19,  98 => 18,  94 => 16,  88 => 14,  83 => 12,  76 => 11,  74 => 10,  69 => 7,  65 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{category.name}}{%endblock%}
{% block description %}{{category.description}}{% endblock %}

{% block content %}

    <main class=\"flex flex-wrap container mx-auto\">
        <section>
            {% if article.image_file %}
            <img src=\"{{doc_root}}uploads/{{article.image_file}}\" 
                alt=\"{{article.alt_text}}\">
            {% else %}
            <img src=\"{{doc_root}}images/placeholder.jpg\" alt=\"No image available\">
            {% endif %}
        </section>
        <section>
            <h1 class=\"text-4xl text-blue-500 mb-4 mt-8\">{{article.title}}</h1>
            <div class=\"text-gray-500 mb-3\">{{article.created|date('d M. Y')}}</div>
            <div class=\"text-gray-500\">{{article.content}}</div>
            <p class=\"credit text-xs mt-5 mb-5\">
                Posted in <a class=\"text-pink-400\" href=\"{{doc_root}}category.php?id={{article.category_id}}\">
                    {{article.category}}</a>
                by <a class=\"text-pink-400\" href=\"{{doc_root}}user.php?id={{article.user_id}}\">
                    {{article.author}}</a>
            </p>
        </section>
    </main>

{% endblock %}", "article.html", "C:\\xampp\\htdocs\\templates\\article.html");
    }
}
