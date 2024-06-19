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

/* search.html */
class __TwigTemplate_e23ddc60107c26c65a998f56d9c10919 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "search.html", 1);
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
<main class=\"container mx-auto\">
    <section class=\"flex flex-col justify-center items-center p-10\">
        <h1 class=\"text-3xl font-bold mt-4\">Search Results</h1>
        <form action=\"search.php\" method=\"GET\" class=\"mt-4\">
            <label for=\"search\" class=\"sr-only\">Search</label>
            <input type=\"search\" name=\"search\" id=\"search\" class=\"border p-2\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
        yield "\">
            <button type=\"submit\" class=\"p-2\">Search</button>
        </form>
    </section> 

    <section class=\"flex flex-wrap p-8\" id=\"content\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            yield "        <article class=\"w-full p-4 flex justify-between flex-col sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/6 mb-4\">
            <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "article.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
                ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 21)) {
                // line 22
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 22), "html", null, true);
                yield "\"
                    alt=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "alt_text", [], "any", false, false, false, 23), "html", null, true);
                yield "\">
                ";
            } else {
                // line 25
                yield "                <img alt=\"No Image\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "/uploads/placeholder.jpg\">
                ";
            }
            // line 27
            yield "                <h2 class=\"text-blue-500 text-2xl pt-3 pb-1.5\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 27), "html", null, true);
            yield "</h2>
                <p class=\"text-gray-500 pb-2.5\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "summary", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
            </a>
            <p class=\"credit text-xs\">
                Posted in <a class=\"text-pink-400\" href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "category.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category_id", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
                    ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 32), "html", null, true);
            yield "</a>
                by <a class=\"text-pink-400\" href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "user.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "user_id", [], "any", false, false, false, 33), "html", null, true);
            yield "\">
                    ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 34), "html", null, true);
            yield " </a>
            </p>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    </section>

    ";
        // line 40
        if ((($context["count"] ?? null) > ($context["per_page"] ?? null))) {
            // line 41
            yield "        <section class=\"flex justify-center items-center p-4\">
            <nav>
                <ul class=\"flex justify-center items-center\">
                    ";
            // line 44
            if ((($context["current_page"] ?? null) > 1)) {
                // line 45
                yield "                        <li class=\"m-2\">
                            <a href=\"search.php?search=";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
                yield "&per_page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["per_page"] ?? null), "html", null, true);
                yield "&offset=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["offset"] ?? null) - ($context["per_page"] ?? null)), "html", null, true);
                yield "\"
                                class=\"p-2 bg-blue-500 text-white\">Previous</a>
                        </li>
                    ";
            }
            // line 50
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["total_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 51
                yield "                        <li>
                            <a href=\"search.php?search=";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
                yield "&per_page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["per_page"] ?? null), "html", null, true);
                yield "&offset=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["i"] - 1) * ($context["per_page"] ?? null)), "html", null, true);
                yield "\">
                                <a class=\"p-2 text-white ";
                // line 53
                yield ((($context["i"] == ($context["current_page"] ?? null))) ? ("bg-pink-600") : ("bg-blue-500"));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                    ";
            if ((($context["total_pages"] ?? null) > ($context["current_page"] ?? null))) {
                // line 57
                yield "                        <li class=\"m-2\">
                            <a href=\"search.php?search=";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["search_term"] ?? null), "html", null, true);
                yield "&per_page=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["per_page"] ?? null), "html", null, true);
                yield "&offset=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["offset"] ?? null) + ($context["per_page"] ?? null)), "html", null, true);
                yield "\"
                                class=\"p-2 bg-blue-500 text-white\">Next</a>
                        </li>
                    ";
            }
            // line 62
            yield "                </ul>
            </nav>
        </section>
    ";
        }
        // line 66
        yield "</main>




";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "search.html";
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
        return array (  224 => 66,  218 => 62,  207 => 58,  204 => 57,  201 => 56,  190 => 53,  182 => 52,  179 => 51,  174 => 50,  163 => 46,  160 => 45,  158 => 44,  153 => 41,  151 => 40,  147 => 38,  137 => 34,  131 => 33,  127 => 32,  121 => 31,  115 => 28,  110 => 27,  104 => 25,  99 => 23,  92 => 22,  90 => 21,  84 => 20,  81 => 19,  77 => 18,  68 => 12,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}

{% block title%}{{title}}{% endblock %}

{% block content %}

<main class=\"container mx-auto\">
    <section class=\"flex flex-col justify-center items-center p-10\">
        <h1 class=\"text-3xl font-bold mt-4\">Search Results</h1>
        <form action=\"search.php\" method=\"GET\" class=\"mt-4\">
            <label for=\"search\" class=\"sr-only\">Search</label>
            <input type=\"search\" name=\"search\" id=\"search\" class=\"border p-2\" value=\"{{search_term}}\">
            <button type=\"submit\" class=\"p-2\">Search</button>
        </form>
    </section> 

    <section class=\"flex flex-wrap p-8\" id=\"content\">
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

    {% if count > per_page %}
        <section class=\"flex justify-center items-center p-4\">
            <nav>
                <ul class=\"flex justify-center items-center\">
                    {% if current_page > 1 %}
                        <li class=\"m-2\">
                            <a href=\"search.php?search={{ search_term }}&per_page={{ per_page }}&offset={{ offset - per_page }}\"
                                class=\"p-2 bg-blue-500 text-white\">Previous</a>
                        </li>
                    {% endif %}
                    {% for i in 1..total_pages %}
                        <li>
                            <a href=\"search.php?search={{ search_term }}&per_page={{ per_page }}&offset={{ (i - 1) * per_page }}\">
                                <a class=\"p-2 text-white {{ i == current_page ? 'bg-pink-600' : 'bg-blue-500' }}\">{{ i }}</a>
                        </li>
                    {% endfor %}
                    {% if total_pages > current_page%}
                        <li class=\"m-2\">
                            <a href=\"search.php?search={{ search_term }}&per_page={{ per_page }}&offset={{ offset + per_page }}\"
                                class=\"p-2 bg-blue-500 text-white\">Next</a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </section>
    {% endif %}
</main>




{% endblock %}", "search.html", "C:\\xampp\\htdocs\\templates\\search.html");
    }
}
