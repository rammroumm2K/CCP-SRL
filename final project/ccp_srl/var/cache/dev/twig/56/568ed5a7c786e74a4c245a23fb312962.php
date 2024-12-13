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

/* supplier/edit.html.twig */
class __TwigTemplate_26e8a30c515b527151ad4b0d50db4cd3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "supplier/edit.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Supplier</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- CSS -->
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
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2 class=\"mb-4\">Edit Supplier</h2>

            <!-- Responsive Wrapper for Table -->
            <div class=\"table-responsive\">
                ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
                <table class=\"table table-dark table-striped align-middle\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">ID</th>
                            <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Company Name</th>
                            <td>";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nameCompany", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter company name", "style" => "max-width: 400px"]]);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Link</th>
                            <td>";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "link", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter company link", "style" => "max-width: 400px"]]);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Tags</th>
                            <td>
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        Select Tags
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 54
            yield "                                            <li>
                                                <div class=\"form-check ms-2\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"tag-";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\" name=\"tags[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 56), "html", null, true);
            yield "\"
                                                        ";
            // line 57
            if (CoreExtension::inFilter($context["tag"], CoreExtension::getAttribute($this->env, $this->source, (isset($context["supplier"]) || array_key_exists("supplier", $context) ? $context["supplier"] : (function () { throw new RuntimeError('Variable "supplier" does not exist.', 57, $this->source); })()), "tags", [], "any", false, false, false, 57))) {
                yield "checked";
            }
            yield ">
                                                    <label class=\"form-check-label\" for=\"tag-";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 58), "html", null, true);
            yield "\">
                                                        ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 59), "html", null, true);
            yield "
                                                    </label>
                                                </div>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex gap-3 mt-3\">
                    <button type=\"submit\" class=\"btn btn-success\">Update</button>
                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_index");
        yield "\" class=\"btn btn-primary\">Back to list</a>
                </div>
                ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
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
        return "supplier/edit.html.twig";
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
        return array (  174 => 75,  169 => 73,  158 => 64,  147 => 59,  143 => 58,  137 => 57,  131 => 56,  127 => 54,  123 => 53,  110 => 43,  103 => 39,  96 => 35,  88 => 30,  76 => 21,  70 => 18,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Edit Supplier</title>
    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('styles/style-admin.css') }}\">
</head>
<body>
    <div class=\"d-flex flex-wrap\">
        <!-- Sidebar -->
        <div class=\"sidebar p-3\">
            <h4 class=\"text-center\">CCP</h4>
            <h5 class=\"mt-4\">Tables</h5>
            <a href=\"{{ path('app_supplier_index') }}\">Supplier</a>
            
            <h5 class=\"mt-3\">User</h5>
            <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>

        <!-- Main Content -->
        <div class=\"flex-grow-1 p-4\">
            <h2 class=\"mb-4\">Edit Supplier</h2>

            <!-- Responsive Wrapper for Table -->
            <div class=\"table-responsive\">
                {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
                <table class=\"table table-dark table-striped align-middle\">
                    <tbody>
                        <tr>
                            <th class=\"w-25\">ID</th>
                            <td>{{ supplier.id }}</td>
                        </tr>
                        <tr>
                            <th>Company Name</th>
                            <td>{{ form_widget(form.nameCompany, {'attr': {'class': 'form-control', 'placeholder': 'Enter company name', 'style': 'max-width: 400px'}}) }}</td>
                        </tr>
                        <tr>
                            <th>Link</th>
                            <td>{{ form_widget(form.link, {'attr': {'class': 'form-control', 'placeholder': 'Enter company link', 'style': 'max-width: 400px'}}) }}</td>
                        </tr>
                        <tr>
                            <th>Tags</th>
                            <td>
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        Select Tags
                                    </button>
                                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        {% for tag in tags %}
                                            <li>
                                                <div class=\"form-check ms-2\">
                                                    <input class=\"form-check-input\" type=\"checkbox\" id=\"tag-{{ tag.id }}\" name=\"tags[]\" value=\"{{ tag.id }}\"
                                                        {% if tag in supplier.tags %}checked{% endif %}>
                                                    <label class=\"form-check-label\" for=\"tag-{{ tag.id }}\">
                                                        {{ tag.name }}
                                                    </label>
                                                </div>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex gap-3 mt-3\">
                    <button type=\"submit\" class=\"btn btn-success\">Update</button>
                    <a href=\"{{ path('app_supplier_index') }}\" class=\"btn btn-primary\">Back to list</a>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
", "supplier/edit.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\supplier\\edit.html.twig");
    }
}
