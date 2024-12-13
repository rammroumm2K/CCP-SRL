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

/* supplier/index.html.twig */
class __TwigTemplate_c41e8fb2f66a6741d9137de303cf789e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin CCP</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- DataTables CSS -->
    <link href=\"https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css\" rel=\"stylesheet\">
    <!-- CSS -->
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
        yield "\">Tag Editor</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2>Welcome back ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["admin_name"]) || array_key_exists("admin_name", $context) ? $context["admin_name"] : (function () { throw new RuntimeError('Variable "admin_name" does not exist.', 29, $this->source); })()), "html", null, true);
        yield "! 😊</h2>
            
            <div class=\"table-container\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <!-- Pulsante Aggiungi -->
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_new");
        yield "\" class=\"btn btn-success\">Add</a>
                </div>
                <table id=\"dataTable\" class=\"table table-dark table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company Name</th>
                            <th>Links</th>
                            <th>Tags</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["supplier"]) {
            // line 48
            yield "                            <tr>
                                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "nameCompany", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                                <td><a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "link", [], "any", false, false, false, 51), "html", null, true);
            yield "\" class=\"truncate-link\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "link", [], "any", false, false, false, 51), "html", null, true);
            yield "</a></td>
                                <td>
                                    ";
            // line 53
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "tags", [], "any", false, false, false, 53))) {
                // line 54
                yield "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "tags", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 55
                    yield "                                            <span class=\"badge bg-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 55), "html", null, true);
                    yield "</span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "                                    ";
            } else {
                // line 58
                yield "                                        <em>No tags</em>
                                    ";
            }
            // line 60
            yield "                                </td>
                                <td>
                                    <!-- Pulsanti Azione -->
                                    <a href=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Show</a>
                                    <a href=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Modify</a>
                                    <!-- Pulsante Delete -->
                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"deleteModal";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\">
                                            <div class=\"modal-content bg-dark text-white\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\">Confirm Deletion</h5>
                                                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Are you sure you want to delete this supplier?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                                    <form method=\"post\" action=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["supplier"], "id", [], "any", false, false, false, 84))), "html", null, true);
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
            // line 94
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center\">No suppliers found.</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['supplier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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
        return "supplier/index.html.twig";
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
        return array (  230 => 98,  221 => 94,  206 => 84,  202 => 83,  191 => 75,  182 => 71,  174 => 66,  169 => 64,  165 => 63,  160 => 60,  156 => 58,  153 => 57,  144 => 55,  139 => 54,  137 => 53,  130 => 51,  126 => 50,  122 => 49,  119 => 48,  114 => 47,  98 => 34,  90 => 29,  82 => 24,  76 => 21,  72 => 20,  61 => 12,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Admin CCP</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- DataTables CSS -->
    <link href=\"https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css\" rel=\"stylesheet\">
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style-admin.css') }}\">
</head>
<body>
    <div class=\"d-flex\">
        <!-- Sidebar -->
        <div class=\"sidebar p-3\">
            <h4 class=\"text-center\">CCP</h4>
            <h5 class=\"mt-4\">Tables</h5>
            <a href=\"{{ path('app_supplier_index') }}\">Supplier</a>
            <a href=\"{{ path('app_tag_index') }}\">Tag Editor</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2>Welcome back {{ admin_name }}! 😊</h2>
            
            <div class=\"table-container\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <!-- Pulsante Aggiungi -->
                    <a href=\"{{ path('app_supplier_new') }}\" class=\"btn btn-success\">Add</a>
                </div>
                <table id=\"dataTable\" class=\"table table-dark table-striped\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company Name</th>
                            <th>Links</th>
                            <th>Tags</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for supplier in suppliers %}
                            <tr>
                                <td>{{ supplier.id }}</td>
                                <td>{{ supplier.nameCompany }}</td>
                                <td><a href=\"{{ supplier.link }}\" class=\"truncate-link\" target=\"_blank\">{{ supplier.link }}</a></td>
                                <td>
                                    {% if supplier.tags is not empty %}
                                        {% for tag in supplier.tags %}
                                            <span class=\"badge bg-secondary\">{{ tag.name }}</span>
                                        {% endfor %}
                                    {% else %}
                                        <em>No tags</em>
                                    {% endif %}
                                </td>
                                <td>
                                    <!-- Pulsanti Azione -->
                                    <a href=\"{{ path('app_supplier_show', {'id': supplier.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                                    <a href=\"{{ path('app_supplier_edit', {'id': supplier.id}) }}\" class=\"btn btn-primary btn-sm\">Modify</a>
                                    <!-- Pulsante Delete -->
                                    <button type=\"button\" class=\"btn btn-danger btn-sm\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteModal{{ supplier.id }}\">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class=\"modal fade\" id=\"deleteModal{{ supplier.id }}\" tabindex=\"-1\" aria-labelledby=\"deleteModalLabel{{ supplier.id }}\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\">
                                            <div class=\"modal-content bg-dark text-white\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"deleteModalLabel{{ supplier.id }}\">Confirm Deletion</h5>
                                                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Are you sure you want to delete this supplier?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                                    <form method=\"post\" action=\"{{ path('app_supplier_delete', {'id': supplier.id}) }}\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ supplier.id) }}\">
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
                                <td colspan=\"5\" class=\"text-center\">No suppliers found.</td>
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
", "supplier/index.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\supplier\\index.html.twig");
    }
}
