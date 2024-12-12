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

/* admin/index.html.twig */
class __TwigTemplate_2a4508a685096e40eeef79505e93046f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

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
    <!--CSS-->
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
            <a href=\"#\">Supplier</a>
            
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"#\">Logout</a>
        </div>

 <!-- Main Content -->
<div class=\"flex-grow-1 p-4\">
    <h2>Welcome back ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["admin_name"]) || array_key_exists("admin_name", $context) ? $context["admin_name"] : (function () { throw new RuntimeError('Variable "admin_name" does not exist.', 30, $this->source); })()), "html", null, true);
        yield " ! 😊</h2>
    
    <div class=\"table-container\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <!-- Pulsante Aggiungi -->
            <button class=\"btn btn-success\" id=\"addButton\">Add</button>
        </div>
        <table id=\"dataTable\" class=\"table table-dark table-striped\">
            <thead>
                <tr>
                    <th>Name Company</th>
                    <th>Links</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Supplier A</td>
                    <td>Link A</td>
                    <td>
                        <!-- Pulsanti Azione -->
                        <button class=\"btn btn-primary btn-sm\">Modify</button>
                        <button class=\"btn btn-danger btn-sm\">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Supplier B</td>
                    <td>Link B</td>
                    <td>
                        <!-- Pulsanti Azione -->
                        <button class=\"btn btn-primary btn-sm\">Modify</button>
                        <button class=\"btn btn-danger btn-sm\">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
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
        return "admin/index.html.twig";
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
        return array (  82 => 30,  61 => 12,  48 => 1,);
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
    <!--CSS-->
    <link rel=\"stylesheet\" href=\"{{asset ('styles/style-admin.css')}}\">
    
</head>
<body>
    <div class=\"d-flex\">
        <!-- Sidebar -->
        <div class=\"sidebar p-3\">
            <h4 class=\"text-center\">CCP</h4>
            <h5 class=\"mt-4\">Tables</h5>
            <a href=\"#\">Supplier</a>
            
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"#\">Logout</a>
        </div>

 <!-- Main Content -->
<div class=\"flex-grow-1 p-4\">
    <h2>Welcome back {{ admin_name}} ! 😊</h2>
    
    <div class=\"table-container\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <!-- Pulsante Aggiungi -->
            <button class=\"btn btn-success\" id=\"addButton\">Add</button>
        </div>
        <table id=\"dataTable\" class=\"table table-dark table-striped\">
            <thead>
                <tr>
                    <th>Name Company</th>
                    <th>Links</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Supplier A</td>
                    <td>Link A</td>
                    <td>
                        <!-- Pulsanti Azione -->
                        <button class=\"btn btn-primary btn-sm\">Modify</button>
                        <button class=\"btn btn-danger btn-sm\">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Supplier B</td>
                    <td>Link B</td>
                    <td>
                        <!-- Pulsanti Azione -->
                        <button class=\"btn btn-primary btn-sm\">Modify</button>
                        <button class=\"btn btn-danger btn-sm\">Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
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
", "admin/index.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\admin\\index.html.twig");
    }
}
