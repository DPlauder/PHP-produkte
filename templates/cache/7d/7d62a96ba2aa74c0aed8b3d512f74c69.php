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

/* admin/layout.html */
class __TwigTemplate_0f0bf21c6cfca08ca22d69b4e0b7a19d extends Template
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
    <html lang=\"de-DE\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
            <meta content=\"";
        // line 8
        yield from $this->unwrap()->yieldBlock('description', $context, $blocks);
        yield "\" name=\"description\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "css/output.css\" type=\"text/css\">

        </head>
        <body>
        <header class=\"bg-white border-gray-200 dark:bg-gray-900 border-b-4\">
            <div class=\"max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4\">
                <div class=\"logo\">
                    <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "index.php\" class=\"flex items-center space-x-3 rtl:space-x-reverse\">
                        <img src=\"";
        // line 17
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
                            <li>
                                  <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                                    href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/articles.php\">
                                    Articles
                                  </a>
                            </li>
                            <li>
                                  <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                                    href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "admin/categories.php\">
                                    Categories
                                  </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
";
        // line 50
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 52
        yield "<footer>
    <div class=\"mx-auto bg-slate-50  p-4\">
        &copy; edvgraz <?= date( 'Y' ); ?>
    </div>
</footer>
</body>
</html>
</body>
</html>";
        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "IT-News";
        return; yield '';
    }

    // line 8
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "All about IT and New from Software Development and Hardware";
        return; yield '';
    }

    // line 50
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
        return "admin/layout.html";
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
        return array (  144 => 50,  136 => 8,  128 => 7,  115 => 52,  113 => 50,  101 => 41,  92 => 35,  71 => 17,  67 => 16,  57 => 9,  53 => 8,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"de-DE\">
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
                            <li>
                                  <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                                    href=\"{{doc_root}}admin/articles.php\">
                                    Articles
                                  </a>
                            </li>
                            <li>
                                  <a class=\"block py-2 px-3 text-white bg-blue-700 rounded hover:text-pink-600 md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500\"
                                    href=\"{{doc_root}}admin/categories.php\">
                                    Categories
                                  </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
{% block content %}
{% endblock %}
<footer>
    <div class=\"mx-auto bg-slate-50  p-4\">
        &copy; edvgraz <?= date( 'Y' ); ?>
    </div>
</footer>
</body>
</html>
</body>
</html>", "admin/layout.html", "C:\\xampp\\htdocs\\templates\\admin\\layout.html");
    }
}
