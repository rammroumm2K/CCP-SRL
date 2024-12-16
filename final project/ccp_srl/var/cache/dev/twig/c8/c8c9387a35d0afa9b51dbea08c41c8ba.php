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

/* tag/edit.html.twig */
class __TwigTemplate_cbf277300797dc863b8faf1a12f93165 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Tag</title>
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
        yield "\" class=\"fw-bold\">Tag Editor</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2 class=\"mb-4\">Edit Tag</h2>

           

            <!-- Form -->
            <div class=\"table-responsive\">
                ";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
                
                <!-- Errori Generali del Form -->
                <div class=\"mb-3\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'errors');
        yield "
                </div>

                <table class=\"table table-dark table-striped align-middle\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">ID</th>
                            <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Tag Name</th>
                            <td>
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "name", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter tag name", "style" => "max-width: 400px"]]);
        // line 55
        yield "
                                <!-- Errori Specifici del Campo -->
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), 'errors');
        yield "
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Buttons -->
                <div class=\"d-flex gap-3 mt-3\">
                    <button type=\"submit\" class=\"btn btn-success\">Update</button>
                    <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_index");
        yield "\" class=\"btn btn-primary\">Back to list</a>
                    
                    <!-- Button to trigger modal -->
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        Delete
                    </button>
                </div>
                ";
        // line 73
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <!-- Modal for Delete Confirmation -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content bg-dark text-white\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirm Deletion</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    Are you sure you want to delete this tag? This action cannot be undone.
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <form method=\"post\" action=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 92, $this->source); })()), "id", [], "any", false, false, false, 92))), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                    </form>
                </div>
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
        return "tag/edit.html.twig";
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
        return array (  172 => 92,  168 => 91,  147 => 73,  137 => 66,  125 => 57,  121 => 55,  119 => 49,  111 => 44,  101 => 37,  94 => 33,  80 => 22,  74 => 19,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Tag</title>
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
            <a href=\"{{ path('app_tag_index') }}\" class=\"fw-bold\">Tag Editor</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2 class=\"mb-4\">Edit Tag</h2>

           

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
                            <th class=\"w-25\">ID</th>
                            <td>{{ tag.id }}</td>
                        </tr>
                        <tr>
                            <th>Tag Name</th>
                            <td>
                                {{ form_widget(form.name, {
                                    'attr': {
                                        'class': 'form-control',
                                        'placeholder': 'Enter tag name',
                                        'style': 'max-width: 400px'
                                    }
                                }) }}
                                <!-- Errori Specifici del Campo -->
                                {{ form_errors(form.name) }}
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Buttons -->
                <div class=\"d-flex gap-3 mt-3\">
                    <button type=\"submit\" class=\"btn btn-success\">Update</button>
                    <a href=\"{{ path('app_tag_index') }}\" class=\"btn btn-primary\">Back to list</a>
                    
                    <!-- Button to trigger modal -->
                    <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal\">
                        Delete
                    </button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <!-- Modal for Delete Confirmation -->
    <div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content bg-dark text-white\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"deleteModalLabel\">Confirm Deletion</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    Are you sure you want to delete this tag? This action cannot be undone.
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <form method=\"post\" action=\"{{ path('app_tag_delete', {'id': tag.id}) }}\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ tag.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                    </form>
                </div>
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
", "tag/edit.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\tag\\edit.html.twig");
    }
}
