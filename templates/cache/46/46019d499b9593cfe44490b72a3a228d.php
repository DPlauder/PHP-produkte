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

/* user.html */
class __TwigTemplate_038577526ebc6eed63896949144532a4 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "user.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surename", [], "any", false, false, false, 3), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 4), "html", null, true);
        yield " ";
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "
    <main class=\"container mx-auto mt-10 mb-10\">
        <section>
            <h1 class=\"text-3xl text-center\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "forename", [], "any", false, false, false, 10), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>
            <p class=\"text-center text-gray-500\">Joined: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "joined", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
            ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 12)) {
            // line 13
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "profile_pic", [], "any", false, false, false, 13), "html", null, true);
            yield "\" alt=\"Profile Picture\">
            ";
        } else {
            // line 15
            yield "                <img alt=\"No Image\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "/uploads/placeholder.jpg\">
            ";
        }
        // line 17
        yield "        </section>
        <section class=\"flex flex-wrap p-8\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            yield "                <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
                    <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "article.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
                        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 22)) {
                // line 23
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 23), "html", null, true);
                yield "\"
                            alt=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "alt_text", [], "any", false, false, false, 24), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 26
                yield "                        <img alt=\"No Image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "/uploads/placeholder.jpg\">
                        ";
            }
            // line 28
            yield "                        <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 28), "html", null, true);
            yield "</h2>
                        <p class=\"text-gray-500 pb-2.5\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
                    </a>
                    <p class=\"credit text-xs\">
                        Posted in <a class=\"text-pink-400\" href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "category.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 32), "html", null, true);
            yield "\">
                            ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 33), "html", null, true);
            yield "</a>
                        by <a class=\"text-pink-400\" href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "user.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 34), "html", null, true);
            yield "\">
                            ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 35), "html", null, true);
            yield " </a>
                    </p>
                </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </section>
    </main>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user.html";
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
        return array (  178 => 39,  168 => 35,  162 => 34,  158 => 33,  152 => 32,  146 => 29,  141 => 28,  135 => 26,  130 => 24,  123 => 23,  121 => 22,  115 => 21,  112 => 20,  108 => 19,  104 => 17,  98 => 15,  90 => 13,  88 => 12,  84 => 11,  78 => 10,  73 => 7,  69 => 6,  59 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title %}{{user.forename}} {{user.surename}}{% endblock %}
{% block description %} {{category.description}} {% endblock %}

{% block content %}

    <main class=\"container mx-auto mt-10 mb-10\">
        <section>
            <h1 class=\"text-3xl text-center\">{{user.forename}} {{user.surname}}</h1>
            <p class=\"text-center text-gray-500\">Joined: {{user.joined}}</p>
            {% if article.image_file %}
                <img src=\"{{doc_root}}uploads/{{user.profile_pic}}\" alt=\"Profile Picture\">
            {% else %}
                <img alt=\"No Image\" src=\"{{doc_root}}/uploads/placeholder.jpg\">
            {% endif %}
        </section>
        <section class=\"flex flex-wrap p-8\">
            {% for article in articles %}
                <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
                    <a href=\"{{doc_root}}article.php?id={{article.id}}\">
                        {% if article.image_file %}
                        <img src=\"{{doc_root}}uploads/{{article.image_file}}\"
                            alt=\"{{article.alt_text}}\">
                        {% else %}
                        <img alt=\"No Image\" src=\"{{doc_root}}/uploads/placeholder.jpg\">
                        {% endif %}
                        <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">{{article.title}}</h2>
                        <p class=\"text-gray-500 pb-2.5\">{{article.summary}}</p>
                    </a>
                    <p class=\"credit text-xs\">
                        Posted in <a class=\"text-pink-400\" href=\"{{doc_root}}category.php?id={{article.category_id}}\">
                            {{article.category}}</a>
                        by <a class=\"text-pink-400\" href=\"{{doc_root}}user.php?id={{article.user_id}}\">
                            {{article.author}} </a>
                    </p>
                </article>
            {% endfor %}
        </section>
    </main>

{% endblock %}", "user.html", "C:\\xampp\\htdocs\\templates\\user.html");
    }
}
