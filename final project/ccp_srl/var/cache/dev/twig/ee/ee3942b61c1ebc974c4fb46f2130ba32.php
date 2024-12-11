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

/* security/login.html.twig */
class __TwigTemplate_c8cb7d8f9f87acc8c7aca556806a063a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"style.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css\">
    <title>CCP login</title>
</head>
<body>
<style>
body {
    background-color: #1c1e29;
    color: #fff;
}
.sidebar {
    background-color: #12141d;
    min-height: 100vh;
    padding-top: 1rem;
}
.sidebar a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
}
.sidebar a:hover {
    background-color: #343a40;
    border-radius: 5px;
}
.table-container {
    background-color: #2a2d3e;
    padding: 20px;
    border-radius: 10px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: #fff !important;
   
    border-radius: 5px;
    padding: 5px 10px;
}

</style>
    <!-- Login 13 - Bootstrap Brain Component -->
<section class=\" py-3 py-md-5\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4\">
          <div class=\" shadow-sm\">
            <div class=\"card-body p-3 p-md-4 p-xl-5 bg-dark text-light\">
              <div class=\"text-center mb-3\">
                <a href=\"#!\">
                  <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/image/LOGO/ccp-_logo.png"), "html", null, true);
        yield "\" alt=\"CCP Logo\" width=\"175\" height=\"57\">
                </a>
              </div>
              <h2 class=\"fs-6 fw-normal text-center text-secondary mb-4\">Welcome back !</h2>
              <form method=\"post\">
                <div class=\"row gy-2 overflow-hidden\">
                  <div class=\"col-12\">
                  ";
        // line 60
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 60, $this->source); })())) {
            // line 61
            yield "                                <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageKey", [], "any", false, false, false, 61), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 61, $this->source); })()), "messageData", [], "any", false, false, false, 61), "security"), "html", null, true);
            yield "</div>
                  ";
        }
        // line 63
        yield "
                  
                ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65)) {
            // line 66
            yield "                    <div class=\"mb-3\">
                        You are logged in as ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "userIdentifier", [], "any", false, false, false, 67), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                    </div>
                ";
        }
        // line 70
        yield "

                    <div class=\"form-floating mb-3\">
                      <input type=\"username\" class=\"form-control\" name=\"username\" id=\"inputUsername\" autocomplete=\"username\" required autofocus>
                      <label for=\"inputUsername\" class=\"form-label\">Username</label>
                    </div>
                  </div>
                  <div class=\"col-12\">
                    <div class=\"form-floating mb-3\">
                      <input type=\"password\" class=\"form-control\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required>
                      <label for=\"password\" class=\"form-label\">Password</label>
                      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    </div>
                  </div>
                  <div class=\"col-12\">
                    <div class=\"d-flex gap-2 justify-content-between\">
                      <div class=\"form-check\">
                       <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Keep me logged in
                        </label>
                      </div>
                
                    </div>
                  </div>
                  <div class=\"col-12\">
                    <div class=\"d-grid my-3\">
                      <button class=\"btn btn-primary btn-lg\" type=\"submit\">Log in</button>
                    </div>
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  150 => 81,  137 => 70,  129 => 67,  126 => 66,  124 => 65,  120 => 63,  114 => 61,  112 => 60,  102 => 53,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" href=\"style.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css\">
    <title>CCP login</title>
</head>
<body>
<style>
body {
    background-color: #1c1e29;
    color: #fff;
}
.sidebar {
    background-color: #12141d;
    min-height: 100vh;
    padding-top: 1rem;
}
.sidebar a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
}
.sidebar a:hover {
    background-color: #343a40;
    border-radius: 5px;
}
.table-container {
    background-color: #2a2d3e;
    padding: 20px;
    border-radius: 10px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: #fff !important;
   
    border-radius: 5px;
    padding: 5px 10px;
}

</style>
    <!-- Login 13 - Bootstrap Brain Component -->
<section class=\" py-3 py-md-5\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4\">
          <div class=\" shadow-sm\">
            <div class=\"card-body p-3 p-md-4 p-xl-5 bg-dark text-light\">
              <div class=\"text-center mb-3\">
                <a href=\"#!\">
                  <img src=\"{{asset ('/image/LOGO/ccp-_logo.png')}}\" alt=\"CCP Logo\" width=\"175\" height=\"57\">
                </a>
              </div>
              <h2 class=\"fs-6 fw-normal text-center text-secondary mb-4\">Welcome back !</h2>
              <form method=\"post\">
                <div class=\"row gy-2 overflow-hidden\">
                  <div class=\"col-12\">
                  {% if error %}
                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                  {% endif %}

                  
                {% if app.user %}
                    <div class=\"mb-3\">
                        You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                    </div>
                {% endif %}


                    <div class=\"form-floating mb-3\">
                      <input type=\"username\" class=\"form-control\" name=\"username\" id=\"inputUsername\" autocomplete=\"username\" required autofocus>
                      <label for=\"inputUsername\" class=\"form-label\">Username</label>
                    </div>
                  </div>
                  <div class=\"col-12\">
                    <div class=\"form-floating mb-3\">
                      <input type=\"password\" class=\"form-control\" name=\"password\" id=\"inputPassword\" autocomplete=\"current-password\" required>
                      <label for=\"password\" class=\"form-label\">Password</label>
                      <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    </div>
                  </div>
                  <div class=\"col-12\">
                    <div class=\"d-flex gap-2 justify-content-between\">
                      <div class=\"form-check\">
                       <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Keep me logged in
                        </label>
                      </div>
                
                    </div>
                  </div>
                  <div class=\"col-12\">
                    <div class=\"d-grid my-3\">
                      <button class=\"btn btn-primary btn-lg\" type=\"submit\">Log in</button>
                    </div>
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
", "security/login.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\security\\login.html.twig");
    }
}
