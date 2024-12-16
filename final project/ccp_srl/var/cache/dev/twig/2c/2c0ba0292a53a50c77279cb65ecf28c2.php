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

/* tag/new.html.twig */
class __TwigTemplate_c0f33aa071009da168f24f3f1cfd840f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/new.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Create New Tag</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style-admin.css"), "html", null, true);
        yield "\">
</head>
<body>
    <div class=\"d-flex flex-wrap\">
        <!-- Sidebar -->
        <div class=\"sidebar p-3\">
            <h4 class=\"text-center\">CCP</h4>
            <h5 class=\"mt-4\">Tables</h5>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_index");
        yield "\">Supplier</a>
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_index");
        yield "\" class=\"fw-bold\">Tag</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2 class=\"mb-4\">Create New Tag</h2>

            <!-- Flash Messages -->
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 31
            yield "                <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 33
                yield "                        <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
            <!-- Form -->
            <div class=\"table-responsive\">
                ";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "

                <!-- Errori Generali del Form -->
                <div class=\"mb-3\">
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'errors');
        yield "
                </div>

                <table class=\"table table-dark table-striped align-middle\">
                    <tbody>
                        <tr>
                            <th>Tag Name</th>
                            <td>
                                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "style" => "max-width: 400px", "placeholder" => "Enter tag name (uppercase only)"]]);
        // line 59
        yield "
                                <!-- Errori Specifici del Campo -->
                                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), 'errors');
        yield "
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex gap-3 mt-3\">
                    <button type=\"submit\" class=\"btn btn-success\">Create</button>
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_index");
        yield "\" class=\"btn btn-primary\">Back to list</a>
                </div>
                
                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'rest');
        yield "
                ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- JavaScript per Convertire in Maiuscolo -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tagNameInput = document.querySelector('#tag_name'); // Cambia in base all'ID generato
            if (tagNameInput) {
                tagNameInput.addEventListener('input', () => {
                    tagNameInput.value = tagNameInput.value.toUpperCase();
                });
            }
        });
    </script>
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
        return "tag/new.html.twig";
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
        return array (  171 => 73,  167 => 72,  161 => 69,  150 => 61,  146 => 59,  144 => 53,  133 => 45,  126 => 41,  121 => 38,  113 => 35,  104 => 33,  100 => 32,  95 => 31,  91 => 30,  80 => 22,  74 => 19,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Create New Tag</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style-admin.css') }}\">
</head>
<body>
    <div class=\"d-flex flex-wrap\">
        <!-- Sidebar -->
        <div class=\"sidebar p-3\">
            <h4 class=\"text-center\">CCP</h4>
            <h5 class=\"mt-4\">Tables</h5>
            <a href=\"{{ path('app_supplier_index') }}\">Supplier</a>
            <a href=\"{{ path('app_tag_index') }}\" class=\"fw-bold\">Tag</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2 class=\"mb-4\">Create New Tag</h2>

            <!-- Flash Messages -->
            {% for label, messages in app.flashes %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {% for message in messages %}
                        <p>{{ message }}</p>
                    {% endfor %}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            <!-- Form -->
            <div class=\"table-responsive\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}

                <!-- Errori Generali del Form -->
                <div class=\"mb-3\">
                    {{ form_errors(form) }}
                </div>

                <table class=\"table table-dark table-striped align-middle\">
                    <tbody>
                        <tr>
                            <th>Tag Name</th>
                            <td>
                                {{ form_widget(form.name, {
                                    'attr': {
                                        'class': 'form-control',
                                        'style': 'max-width: 400px',
                                        'placeholder': 'Enter tag name (uppercase only)'
                                    }
                                }) }}
                                <!-- Errori Specifici del Campo -->
                                {{ form_errors(form.name) }}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex gap-3 mt-3\">
                    <button type=\"submit\" class=\"btn btn-success\">Create</button>
                    <a href=\"{{ path('app_tag_index') }}\" class=\"btn btn-primary\">Back to list</a>
                </div>
                
                {{ form_rest(form) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- JavaScript per Convertire in Maiuscolo -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tagNameInput = document.querySelector('#tag_name'); // Cambia in base all'ID generato
            if (tagNameInput) {
                tagNameInput.addEventListener('input', () => {
                    tagNameInput.value = tagNameInput.value.toUpperCase();
                });
            }
        });
    </script>
</body>
</html>
", "tag/new.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\tag\\new.html.twig");
    }
}
