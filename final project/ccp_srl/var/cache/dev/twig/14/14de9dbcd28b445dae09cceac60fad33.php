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

/* tag/index.html.twig */
class __TwigTemplate_7722479f865a33739109c727fd4394d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tag/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Tag Management</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- DataTables CSS -->
    <link href=\"https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/style-admin.css"), "html", null, true);
        yield "\">
</head>
<body>
    <div class=\"d-flex\">
        <!-- Sidebar -->
        <div class=\"sidebar p-3\">
            <h4 class=\"text-center\">CCP</h4>
            <h5 class=\"mt-4\">Tables</h5>
            <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_index");
        yield "\">Supplier</a>
            <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_index");
        yield "\" class=\"fw-bold\">Tag Editor</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2>Tag Management</h2>
             <!-- Flash Messages -->
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 32
            yield "                <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
            yield " alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "            
            <div class=\"table-container\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <!-- Pulsante Aggiungi -->
                    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_new");
        yield "\" class=\"btn btn-success\">Add New Tag</a>
                </div>
                <!-- Tabella con DataTables -->
                <table id=\"dataTable\" class=\"table table-dark table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 56
            yield "                            <tr>
                                <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                                <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Edit</a>
                                    
                                    <!-- Button to trigger modal -->
                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"deleteModal";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\">
                                            <div class=\"modal-content bg-dark text-white\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 72), "html", null, true);
            yield "\">Confirm Deletion</h5>
                                                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Are you sure you want to delete the tag \"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 76), "html", null, true);
            yield "\"? This action cannot be undone.
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                                    <form method=\"post\" action=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tag_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 81))), "html", null, true);
            yield "\">
                                                        <button type=\"submit\" class=\"btn btn-danger\">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 91
            yield "                            <tr>
                                <td colspan=\"3\" class=\"text-center\">No tags found.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
    <!-- jQuery (required for DataTables) -->
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <!-- DataTables JS -->
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#dataTable').DataTable();
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
        return "tag/index.html.twig";
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
        return array (  225 => 95,  216 => 91,  201 => 81,  197 => 80,  190 => 76,  183 => 72,  174 => 68,  166 => 63,  160 => 60,  155 => 58,  151 => 57,  148 => 56,  143 => 55,  128 => 43,  122 => 39,  114 => 36,  105 => 34,  101 => 33,  96 => 32,  92 => 31,  82 => 24,  76 => 21,  72 => 20,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Tag Management</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- DataTables CSS -->
    <link href=\"https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css\" rel=\"stylesheet\">
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style-admin.css') }}\">
</head>
<body>
    <div class=\"d-flex\">
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
            <h2>Tag Management</h2>
             <!-- Flash Messages -->
            {% for label, messages in app.flashes %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    {% for message in messages %}
                        {{ message }}
                    {% endfor %}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
            
            <div class=\"table-container\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <!-- Pulsante Aggiungi -->
                    <a href=\"{{ path('app_tag_new') }}\" class=\"btn btn-success\">Add New Tag</a>
                </div>
                <!-- Tabella con DataTables -->
                <table id=\"dataTable\" class=\"table table-dark table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for tag in tags %}
                            <tr>
                                <td>{{ tag.id }}</td>
                                <td>{{ tag.name }}</td>
                                <td>
                                    <a href=\"{{ path('app_tag_edit', {'id': tag.id}) }}\" class=\"btn btn-primary btn-sm\">Edit</a>
                                    
                                    <!-- Button to trigger modal -->
                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ tag.id }}\">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"deleteModal{{ tag.id }}\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel{{ tag.id }}\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\">
                                            <div class=\"modal-content bg-dark text-white\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"deleteModalLabel{{ tag.id }}\">Confirm Deletion</h5>
                                                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Are you sure you want to delete the tag \"{{ tag.name }}\"? This action cannot be undone.
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
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"3\" class=\"text-center\">No tags found.</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
    <!-- jQuery (required for DataTables) -->
    <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
    <!-- DataTables JS -->
    <script src=\"https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js\"></script>
    <script>
        \$(document).ready(function () {
            \$('#dataTable').DataTable();
        });
    </script>
</body>
</html>
", "tag/index.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\tag\\index.html.twig");
    }
}
