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

/* admin/articles.html */
class __TwigTemplate_6b79737ee2f6b5e04cf8899d29b83e64 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/articles.html", 1);
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
    <main class=\"container mx-auto flex justify-center flex-col items-center dark:text-white\">
        <header class=\"p-10\">
            ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            yield "                <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["error"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 13
        yield "            ";
        if (($context["success"] ?? null)) {
            // line 14
            yield "                <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "</p>
            ";
        }
        // line 16
        yield "            <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
            <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"article.php\"> Add new article</a></button>
        </header>
        <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
            <thead class=\"text-xl text-white-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white \">
                <tr>
                    <th class=\"px-6 py-3\">IMAGE</th>
                    <th class=\"px-6 py-3\">TITLE</th>
                    <th class=\"px-6 py-3\">CREATED</th>
                    <th class=\"px-6 py-3\">CATEGORY</th>
                    <th class=\"px-6 py-3\">PUBLISHED</th>
                    <th class=\"px-6 py-3\">EDIT</th>
                    <th class=\"px-6 py-3\">DELETE</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 34
            yield "                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:text-white\">
                        <td class=\"px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap\">
                            ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 36)) {
                // line 37
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "uploads/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image_file", [], "any", false, false, false, 37), "html", null, true);
                yield "\" 
                                alt=\"";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "alt_text", [], "any", false, false, false, 38), "html", null, true);
                yield "\">
                            ";
            } else {
                // line 40
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "images/placeholder.jpg\" alt=\"No image available\">
                            ";
            }
            // line 42
            yield "                        </td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "created", [], "any", false, false, false, 44), "d M. Y"), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">";
            // line 46
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "published", [], "any", false, false, false, 46)) ? ("YES") : ("NO"));
            yield "</td>

                        <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a href=\"article.php?id=";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\">Edit</a></td>
                        <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a href=\"article-delete.php?id=";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\">Delete</a></td>
                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "            </tbody>
        </table>
    </main>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/articles.html";
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
        return array (  172 => 53,  162 => 49,  158 => 48,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  138 => 42,  132 => 40,  127 => 38,  120 => 37,  118 => 36,  114 => 34,  110 => 33,  91 => 16,  85 => 14,  82 => 13,  76 => 11,  74 => 10,  69 => 7,  65 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block title %}{{category.name}}{%endblock%}
{% block description %}{{category.description}}{% endblock %}

{% block content %}

    <main class=\"container mx-auto flex justify-center flex-col items-center dark:text-white\">
        <header class=\"p-10\">
            {% if error %}
                <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{error}}</p>
            {% endif %}
            {% if success %}
                <p class=\"success text-green-500 bg-green-200 p-5 rounded-md\">{{success }}</p>
            {% endif %}
            <h1 class=\"text-4xl text-blue-500 mb-8\">Articles</h1>
            <button class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\"><a href=\"article.php\"> Add new article</a></button>
        </header>
        <table class=\"w-full text-sm text-left rtl:text-right text-gray-500 max-w-xl mb-10\">
            <thead class=\"text-xl text-white-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-white \">
                <tr>
                    <th class=\"px-6 py-3\">IMAGE</th>
                    <th class=\"px-6 py-3\">TITLE</th>
                    <th class=\"px-6 py-3\">CREATED</th>
                    <th class=\"px-6 py-3\">CATEGORY</th>
                    <th class=\"px-6 py-3\">PUBLISHED</th>
                    <th class=\"px-6 py-3\">EDIT</th>
                    <th class=\"px-6 py-3\">DELETE</th>
                </tr>
            </thead>
            <tbody>

                {% for article in articles %}
                    <tr class=\"bg-white border-b dark:bg-gray-800 dark:text-white\">
                        <td class=\"px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap\">
                            {% if article.image_file %}
                            <img src=\"{{doc_root}}uploads/{{article.image_file}}\" 
                                alt=\"{{article.alt_text}}\">
                            {% else %}
                            <img src=\"{{doc_root}}images/placeholder.jpg\" alt=\"No image available\">
                            {% endif %}
                        </td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{article.title}}</td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{article.created|date('d M. Y')}}</td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{article.category}}</td>
                        <td class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap\">{{ article.published ? 'YES' : 'NO' }}</td>

                        <td class=\"px-6 py-4 font-medium text-pink-600 whitespace-nowrap\"><a href=\"article.php?id={{article.id}}\">Edit</a></td>
                        <td class=\"px-6 py-4 font-medium text-blue-600 whitespace-nowrap\"><a href=\"article-delete.php?id={{article.id}}\">Delete</a></td>
                    </tr>

                {% endfor %}
            </tbody>
        </table>
    </main>
{% endblock %}", "admin/articles.html", "C:\\xampp\\htdocs\\templates\\admin\\articles.html");
    }
}
