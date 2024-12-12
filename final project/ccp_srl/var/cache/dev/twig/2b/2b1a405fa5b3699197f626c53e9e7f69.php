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
use Twig\TemplateWrapper;

/* error/404.html.twig */
class __TwigTemplate_86b0fa26cf3cd6fe01471e3e78e35cfe extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'navbar' => [$this, 'block_navbar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/404.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head></head>
\t<head>
\t\t";
        // line 5
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 28
        yield "\t</head>
\t<style>
\t\t* {
\t\t\tmargin: 0 auto;
\t\t\tpadding: 0;
\t\t\ttext-align: center;
\t\t}
\t</style>


\t<body class=\"\">
\t\t";
        // line 39
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 42
        yield "\t\t<div class=\"cont_principal\">
\t\t\t<div class=\"cont_error\">

\t\t\t\t<h1>Oops</h1>
\t\t\t\t<p>The Page you're looking for isn't here.</p>
\t\t\t</div>
\t\t\t<div class=\"cont_aura_1\"></div>
\t\t\t<div class=\"cont_aura_2\"></div>
\t\t</div>


\t\t<script>
\t\t\twindow.onload = function () {
document.querySelector('.cont_principal').className = \"cont_principal cont_error_active\";

}
\t\t</script>
<!-- Bootstrap JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "\t\t\t<meta charset=\"UTF-8\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<title>CCP SRL</title>
\t\t\t<!-- Customize browser tab color for mobile -->
\t\t\t<meta
\t\t\tname=\"theme-color\" content=\"#98c379\">
\t\t\t<!--Logo browser-->
\t\t\t<link
\t\t\trel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/LOGO/ccp-_logo.png"), "html", null, true);
        yield "\">
\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<!-- Custom CSS -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">

\t\t\t<!-- Font Icon Bootstrao (for icons) -->
\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t\t<!-- Font Awesome -->
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 40
        yield "\t\t\t";
        yield from $this->loadTemplate("elements/_menu.html.twig", "error/404.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "error/404.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  173 => 41,  170 => 40,  157 => 39,  138 => 20,  129 => 14,  119 => 6,  106 => 5,  73 => 42,  71 => 39,  58 => 28,  56 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head></head>
\t<head>
\t\t{% block head %}
\t\t\t<meta charset=\"UTF-8\">
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<title>CCP SRL</title>
\t\t\t<!-- Customize browser tab color for mobile -->
\t\t\t<meta
\t\t\tname=\"theme-color\" content=\"#98c379\">
\t\t\t<!--Logo browser-->
\t\t\t<link
\t\t\trel=\"icon\" type=\"image/x-icon\" href=\"{{asset ('image/LOGO/ccp-_logo.png')}}\">
\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<!-- Custom CSS -->
\t\t\t<link
\t\t\trel=\"stylesheet\" href=\"{{asset ('styles/app.css') }}\">

\t\t\t<!-- Font Icon Bootstrao (for icons) -->
\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t\t<!-- Font Awesome -->
\t\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\" rel=\"stylesheet\">
\t\t{% endblock %}
\t</head>
\t<style>
\t\t* {
\t\t\tmargin: 0 auto;
\t\t\tpadding: 0;
\t\t\ttext-align: center;
\t\t}
\t</style>


\t<body class=\"\">
\t\t{% block navbar %}
\t\t\t{% include \"elements/_menu.html.twig\" %}
\t\t{% endblock %}
\t\t<div class=\"cont_principal\">
\t\t\t<div class=\"cont_error\">

\t\t\t\t<h1>Oops</h1>
\t\t\t\t<p>The Page you're looking for isn't here.</p>
\t\t\t</div>
\t\t\t<div class=\"cont_aura_1\"></div>
\t\t\t<div class=\"cont_aura_2\"></div>
\t\t</div>


\t\t<script>
\t\t\twindow.onload = function () {
document.querySelector('.cont_principal').className = \"cont_principal cont_error_active\";

}
\t\t</script>
<!-- Bootstrap JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
\t</body>

</html>
", "error/404.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\error\\404.html.twig");
    }
}
