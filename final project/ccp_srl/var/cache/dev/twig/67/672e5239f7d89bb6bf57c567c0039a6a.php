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
class __TwigTemplate_639002c7bd217fdb47640f85043b02e1 extends Template
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

<head>
\t<head>
    ";
        // line 6
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 28
        yield "\t</head>
\t<style>
\t\t* {
  margin:0px auto;
  padding: 0px;
text-align:center;
}
\t</style>


<body class=\"\">
\t";
        // line 39
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 42
        yield "\t\t\t\t<div class=\"cont_principal\">
\t\t\t\t\t<div class=\"cont_error\">
\t\t\t\t\t  
\t\t\t\t\t<h1>Oops</h1>  
\t\t\t\t\t  <p>The Page you're looking for isn't here.</p>
\t\t\t\t\t  </div>
\t\t\t\t\t<div class=\"cont_aura_1\"></div>
\t\t\t\t\t<div class=\"cont_aura_2\"></div>
\t\t\t\t\t</div>

       
\t<script>
\twindow.onload = function(){
\t\tdocument.querySelector('.cont_principal').className= \"cont_principal cont_error_active\";  
\t\t  
\t\t}</script>
\t\t
</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>CCP SRL</title>
\t\t<!-- Customize browser tab color for mobile -->
\t\t<meta
\t\tname=\"theme-color\" content=\"#98c379\">
\t\t<!--Logo browser-->
\t\t<link
\t\trel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/LOGO/ccp-_logo.png"), "html", null, true);
        yield "\">
\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<!-- Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">

\t\t<!-- Font Icon Bootstrao (for icons) -->
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t<!-- Font Awesome -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\" rel=\"stylesheet\">
    ";
        
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
        yield "    ";
        yield from $this->loadTemplate("elements/_menu.html.twig", "error/404.html.twig", 40)->unwrap()->yield($context);
        // line 41
        yield "    ";
        
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
        return array (  170 => 41,  167 => 40,  154 => 39,  135 => 20,  127 => 15,  117 => 7,  104 => 6,  74 => 42,  72 => 39,  59 => 28,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<head>
    {% block head %}
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>CCP SRL</title>
\t\t<!-- Customize browser tab color for mobile -->
\t\t<meta
\t\tname=\"theme-color\" content=\"#98c379\">
\t\t<!--Logo browser-->
\t\t<link
\t\trel=\"icon\" type=\"image/x-icon\" href=\"{{asset ('image/LOGO/ccp-_logo.png')}}\">
\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t<!-- Custom CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{asset ('styles/app.css') }}\">

\t\t<!-- Font Icon Bootstrao (for icons) -->
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t<!-- Font Awesome -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css\" rel=\"stylesheet\">
    {% endblock %}
\t</head>
\t<style>
\t\t* {
  margin:0px auto;
  padding: 0px;
text-align:center;
}
\t</style>


<body class=\"\">
\t{% block navbar %}
    {% include \"elements/_menu.html.twig\" %}
    {% endblock %}
\t\t\t\t<div class=\"cont_principal\">
\t\t\t\t\t<div class=\"cont_error\">
\t\t\t\t\t  
\t\t\t\t\t<h1>Oops</h1>  
\t\t\t\t\t  <p>The Page you're looking for isn't here.</p>
\t\t\t\t\t  </div>
\t\t\t\t\t<div class=\"cont_aura_1\"></div>
\t\t\t\t\t<div class=\"cont_aura_2\"></div>
\t\t\t\t\t</div>

       
\t<script>
\twindow.onload = function(){
\t\tdocument.querySelector('.cont_principal').className= \"cont_principal cont_error_active\";  
\t\t  
\t\t}</script>
\t\t
</body>

</html>", "error/404.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\error\\404.html.twig");
    }
}
