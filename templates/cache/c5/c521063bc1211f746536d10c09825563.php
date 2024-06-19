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

/* layout.html */
class __TwigTemplate_ecc84ce4411876e2c92dd269c74e690b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta content=\"";
        // line 7
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\" name=\"description\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "css/output.css\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"log-in register bg-gray-100\">
        ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 13) == 0)) {
            // line 14
            yield "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "login.php\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "register.php\">Register</a>
            </li>
        </ul>
        ";
        } else {
            // line 23
            yield "        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "user.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "forename", [], "any", false, false, false, 25), "html", null, true);
            yield "</a>
            </li>
            ";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "role", [], "any", false, false, false, 27) == "admin")) {
                // line 28
                yield "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
                yield "admin/index.php\">Admin</a>
            </li>
            ";
            }
            // line 32
            yield "            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "logout.php\">Logout</a>
            </li>
        ";
        }
        // line 36
        yield "        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "index.php\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "img/page-logo.png\" alt=\"IT-Logo\" width=\"100\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
            </a>
        </div>
        <nav>
            <button data-collapse-toggle=\"navbar-default\" type=\"button\"
                    class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\"
                    aria-controls=\"navbar-default\" aria-expanded=\"false\">
                <span class=\"sr-only\">Open main menu</span>
                <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\"/>
                </svg>
            </button>
            <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                <ul id=\"menu\"
                    class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["navigation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 58
            yield "                            <li>
                                <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                                    href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "category.php?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\">
                                    ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 61), "html", null, true);
            yield "
                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "search.php\">
                            <object class=\"pointer-events-none\" data=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "img/material-search.svg\" type=\"image/svg+xml\">
                                <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "/img/material-search.png\" alt=\"Search\">
                            </object>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
";
        // line 76
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 78
        yield "<footer class=\"mx-auto bg-slate-50 p-4 flex justify-around\">
    <div>
        edvgraz ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "
    </div>
    <div>
        <a href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "contact.php\">Contact</a>
    </div>
</footer>
</body>
</html>
";
        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "IT-News";
        return; yield '';
    }

    // line 7
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "All about IT and New from Software Development and Hardware";
        return; yield '';
    }

    // line 76
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout.html";
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
        return array (  229 => 76,  221 => 7,  213 => 6,  202 => 83,  196 => 80,  192 => 78,  190 => 76,  178 => 67,  174 => 66,  169 => 65,  159 => 61,  153 => 60,  149 => 58,  145 => 57,  126 => 41,  122 => 40,  116 => 36,  110 => 33,  107 => 32,  101 => 29,  98 => 28,  96 => 27,  87 => 25,  83 => 23,  76 => 19,  70 => 16,  66 => 14,  64 => 13,  56 => 8,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de-DE\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}IT-News{% endblock %}</title>
    <meta content=\"{% block description %}All about IT and New from Software Development and Hardware{% endblock %}\" name=\"description\">
    <link rel=\"stylesheet\" href=\"{{doc_root}}css/output.css\" type=\"text/css\">
</head>
<body>
<header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
    <nav class=\"log-in register bg-gray-100\">
        {% if session.id == 0 %}
        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}login.php\">Login</a>
            </li>
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}register.php\">Register</a>
            </li>
        </ul>
        {% else %}
        <ul class=\"flex justify-end p-1\">
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}user.php?id={{session.id}}\">{{session.forename}}</a>
            </li>
            {% if session.role == 'admin' %}
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}admin/index.php\">Admin</a>
            </li>
            {% endif %}
            <li class=\"p-1\">
                <a class=\"text-pink-600 hover:text-blue-600\" href=\"{{doc_root}}logout.php\">Logout</a>
            </li>
        {% endif %}
        </ul>
    </nav>
    <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
        <div class=\"logo\">
            <a href=\"{{doc_root}}index.php\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                <img src=\"{{doc_root}}img/page-logo.png\" alt=\"IT-Logo\" width=\"100\">
                <span class=\"self-center text-2xl font-semibold whitespace-nowrap dark:text-white\">IT-News-Blog</span>
            </a>
        </div>
        <nav>
            <button data-collapse-toggle=\"navbar-default\" type=\"button\"
                    class=\"inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600\"
                    aria-controls=\"navbar-default\" aria-expanded=\"false\">
                <span class=\"sr-only\">Open main menu</span>
                <svg class=\"w-5 h-5\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 17 14\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h15M1 7h15M1 13h15\"/>
                </svg>
            </button>
            <div class=\"hidden w-full md:block md:w-auto\" id=\"navbar-default\">
                <ul id=\"menu\"
                    class=\"font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700\">
                        {% for link in navigation %}
                            <li>
                                <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                                    href=\"{{doc_root}}category.php?id={{link.id}}\">
                                    {{link.name}}
                                </a>
                            </li>
                        {% endfor %}
                        <a href=\"{{doc_root}}search.php\">
                            <object class=\"pointer-events-none\" data=\"{{doc_root}}img/material-search.svg\" type=\"image/svg+xml\">
                                <img src=\"{{doc_root}}/img/material-search.png\" alt=\"Search\">
                            </object>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
{% block content %}
{% endblock %}
<footer class=\"mx-auto bg-slate-50 p-4 flex justify-around\">
    <div>
        edvgraz {{'now'|date('Y')}}
    </div>
    <div>
        <a href=\"{{doc_root}}contact.php\">Contact</a>
    </div>
</footer>
</body>
</html>
", "layout.html", "E:\\XAMPP\\htdocs\\templates\\layout.html");
    }
}
