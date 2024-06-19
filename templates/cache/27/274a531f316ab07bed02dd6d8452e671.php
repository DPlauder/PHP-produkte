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

/* admin/article.html */
class __TwigTemplate_51bf05d04d8567b75cfde432185ddc40 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html", "admin/article.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
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

    <main class=\"p-10\">
        <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">";
        // line 10
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 10)) ? ("Edit ") : ("New "));
        yield " Article</h2>

        ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 12)) {
            // line 13
            yield "        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "issue", [], "any", false, false, false, 13), "html", null, true);
            yield "</p>
        ";
        }
        // line 15
        yield "        <form action=\"article.php?id=";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\">
            <div>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
                <input type=\"text\" id=\"title\" name=\"title\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "\"
                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                <span class=\"text-red-500\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        yield "</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
                <textarea id=\"summary\" name=\"summary\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
        yield "
                </textarea>
                <span class=\"text-red-500\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "summary", [], "any", false, false, false, 25), "html", null, true);
        yield "</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>

                <textarea id=\"content\" rows=\"10\" name=\"content\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 29), "html", null, true);
        yield "
                </textarea>
                <span class=\"text-red-500\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "content", [], "any", false, false, false, 31), "html", null, true);
        yield "</span>
                
            </div>
            <div>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
                <select id=\"category\" name=\"category\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                    <option>select category</option>
                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "\"
                            ";
            // line 41
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 41) == CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "category_id", [], "any", false, false, false, 41))) {
                // line 42
                yield "                                selected
                            ";
            }
            // line 43
            yield ">
                            ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </select>
                <span class=\"text-red-500\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "category", [], "any", false, false, false, 47), "html", null, true);
        yield "</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
                <select id=\"user_id\" name=\"user\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                    <option>select user</option>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 53
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\"
                            ";
            // line 54
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 54) == CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "user_id", [], "any", false, false, false, 54))) {
                // line 55
                yield "                                selected
                            ";
            }
            // line 56
            yield ">
                            ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "forename", [], "any", false, false, false, 57), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "surname", [], "any", false, false, false, 57), "html", null, true);
            yield " </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                </select>
                <span class=\"text-red-500\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "user", [], "any", false, false, false, 60), "html", null, true);
        yield "</span>

                ";
        // line 62
        if (((null === CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_id", [], "any", false, false, false, 62)) || (CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_id", [], "any", false, false, false, 62) == ""))) {
            // line 63
            yield "                    <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
                    <input type=\"file\" id=\"image_file\" accept=\"image/jpeg, image/png\" name=\"image_file\"
                        class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                    <span class=\"text-red-500\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "image_file", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                ";
        } else {
            // line 68
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "uploads/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_file", [], "any", false, false, false, 68), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 68), "html", null, true);
            yield "\" class=\"w-full h-auto\"/>
                    <span>Alt Text: ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 69), "html", null, true);
            yield "</span>
                    <a href=\"alt-text-edit.php?id=";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 70), "html", null, true);
            yield "\" class=\"text-blue-500\">Edit Alt Text</a>
                    <a href=\"img-delete.php?id=";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\" class=\"text-red-500\">Delete Image</a>
                ";
        }
        // line 73
        yield "                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
                <input type=\"text\" id=\"image_alt\" name=\"image_alt\" value=\"";
        // line 74
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", true, true, false, 74) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 74)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "image_alt", [], "any", false, false, false, 74), "html", null, true)) : (yield ""));
        yield "\"
                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                <span class=\"text-red-500\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["errors"] ?? null), "image_alt", [], "any", false, false, false, 76), "html", null, true);
        yield "</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
                <input type=\"checkbox\" id=\"published\" name=\"published\" ";
        // line 78
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["article"] ?? null), "published", [], "any", false, false, false, 78)) ? ("checked") : (""));
        yield "
                    class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\">
            </div>
            <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
        </form>
    </main>
    <script>
        tinymce.init({
            selector: '#content',
            menubar: false,
            toolbar: 'bold italic underline link',
            plugins: 'link',
            link_title: false
        })
    </script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/article.html";
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
        return array (  253 => 78,  248 => 76,  243 => 74,  240 => 73,  235 => 71,  231 => 70,  227 => 69,  218 => 68,  213 => 66,  208 => 63,  206 => 62,  201 => 60,  198 => 59,  188 => 57,  185 => 56,  181 => 55,  179 => 54,  174 => 53,  170 => 52,  162 => 47,  159 => 46,  151 => 44,  148 => 43,  144 => 42,  142 => 41,  137 => 40,  133 => 39,  122 => 31,  117 => 29,  110 => 25,  105 => 23,  99 => 20,  94 => 18,  87 => 15,  81 => 13,  79 => 12,  74 => 10,  69 => 7,  65 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html' %}

{% block title %}{{article.title}}{%endblock%}
{% block description %}{{category.description}}{% endblock %}

{% block content %}


    <main class=\"p-10\">
        <h2 class=\"text-3xl text-blue-500 mb-8 text-center\">{{article.id ? 'Edit ' : 'New '}} Article</h2>

        {% if errors.issue %}
        <p class=\"error text-red-500 bg-red-200 p-5 rounded-md\">{{errors.issue}}</p>
        {% endif %}
        <form action=\"article.php?id={{article.id}}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"grid gap-6 mb-6 md:grid-cols-2 md:w-full\">
            <div>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"title\">Title</label>
                <input type=\"text\" id=\"title\" name=\"title\" value=\"{{article.title}}\"
                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                <span class=\"text-red-500\">{{errors.title}}</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"summary\">Summary</label>
                <textarea id=\"summary\" name=\"summary\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">{{article.title}}
                </textarea>
                <span class=\"text-red-500\">{{errors.summary}}</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"content\">Content</label>

                <textarea id=\"content\" rows=\"10\" name=\"content\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">{{article.content}}
                </textarea>
                <span class=\"text-red-500\">{{errors.content}}</span>
                
            </div>
            <div>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"category\">Category</label>
                <select id=\"category\" name=\"category\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                    <option>select category</option>
                        {% for category in categories %}
                            <option value=\"{{category.id}}\"
                            {% if category.id == article.category_id %}
                                selected
                            {% endif %}>
                            {{category.name}}</option>
                        {% endfor %}
                </select>
                <span class=\"text-red-500\">{{errors.category}}</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"user_id\">User</label>
                <select id=\"user_id\" name=\"user\"
                        class=\"block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500\">
                    <option>select user</option>
                        {% for user in users %}
                            <option value=\"{{user.id}}\"
                            {% if user.id == article.user_id %}
                                selected
                            {% endif %}>
                            {{user.forename}} {{user.surname}} </option>
                        {% endfor %}
                </select>
                <span class=\"text-red-500\">{{errors.user}}</span>

                {% if article.image_id is none or article.image_id == \"\" %}
                    <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_file\">Image</label>
                    <input type=\"file\" id=\"image_file\" accept=\"image/jpeg, image/png\" name=\"image_file\"
                        class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                    <span class=\"text-red-500\">{{ errors.image_file }}</span>
                {% else %}
                    <img src=\"{{ doc_root }}uploads/{{ article.image_file }}\" alt=\"{{ article.image_alt }}\" class=\"w-full h-auto\"/>
                    <span>Alt Text: {{ article.image_alt }}</span>
                    <a href=\"alt-text-edit.php?id={{ article.id }}\" class=\"text-blue-500\">Edit Alt Text</a>
                    <a href=\"img-delete.php?id={{ article.id }}\" class=\"text-red-500\">Delete Image</a>
                {% endif %}
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"image_alt\">Image Alt</label>
                <input type=\"text\" id=\"image_alt\" name=\"image_alt\" value=\"{{article.image_alt ?? ''}}\"
                    class=\"bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5\">
                <span class=\"text-red-500\">{{errors.image_alt}}</span>
                <label class=\"block mb-2 text-sm font-medium text-gray-900 pt-2\" for=\"published\">Published</label>
                <input type=\"checkbox\" id=\"published\" name=\"published\" {{article.published ? 'checked' : '' }}
                    class=\"w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600\">
            </div>
            <button type=\"submit\" class=\"text-white bg-blue-500 p-3 rounded-md hover:bg-pink-600\">Save</button>
        </form>
    </main>
    <script>
        tinymce.init({
            selector: '#content',
            menubar: false,
            toolbar: 'bold italic underline link',
            plugins: 'link',
            link_title: false
        })
    </script>

{% endblock %}", "admin/article.html", "C:\\xampp\\htdocs\\templates\\admin\\article.html");
    }
}
