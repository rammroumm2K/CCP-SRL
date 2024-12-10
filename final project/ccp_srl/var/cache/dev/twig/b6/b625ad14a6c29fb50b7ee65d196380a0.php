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

/* elements/footer.html.twig */
class __TwigTemplate_30fa5667f4ab4e4e01422a5c8e322937 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elements/footer.html.twig"));

        // line 1
        yield "\t\t<!-- Footer -->
\t\t<footer class=\"text-light pt-5 pb-4\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row\">
\t\t\t\t\t<!-- Company Info -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<h5 class=\"text-uppercase fw-bold\">CCP</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tCreating innovative and tailored solutions to help businesses thrive
\t\t\t\t\t\t\t          in the digital era. Connect with us for cutting-edge technology and
\t\t\t\t\t\t\t          support.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Quick Links -->
\t\t\t\t\t<div class=\"col-md-2 mb-4\">
\t\t\t\t\t\t<h5 class=\"text-uppercase fw-bold\">Quick Links</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-light text-decoration-none\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#about-menu\" class=\"text-light text-decoration-none\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#our-it-services\" class=\"text-light text-decoration-none\">Services</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#contact-menu\" class=\"text-light text-decoration-none\">Contact</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Resources -->
\t\t\t\t\t<div class=\"col-md-2 mb-4\">
\t\t\t\t\t\t<h5 class=\"text-uppercase fw-bold\">Resources</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-light text-decoration-none\">Cookies</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#faqs\" class=\"text-light text-decoration-none\">FAQs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"privacy.html\" target=\"_blank\" class=\"text-light text-decoration-none\">Policy & Privacy</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"terms.html\" target=\"_blank\" class=\"text-light text-decoration-none\">Terms</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- BADGE CO2 and Maps -->
\t\t\t\t\t<div class=\"col-md-4 mb-4 d-flex flex-column align-items-center\">
\t\t\t\t\t\t<div id=\"wcb\" class=\"carbonbadge mb-3\"></div>
\t\t\t\t\t\t<script src=\"https://unpkg.com/website-carbon-badges@1.1.3/b.min.js\" defer></script>
\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.588626906843!2d4.36542967752298!3d50.82026006066697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4ee169e2a49%3A0x7094246845ea0297!2sCCP%20SRL!5e0!3m2!1sen!2sbe!4v1733143139832!5m2!1sen!2sbe&hl=en\" width=\"300\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr
\t\t\t\tclass=\"bg-light\"/>
\t\t\t\t<!-- Footer Bottom -->
\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t<p class=\"mb-0\">&copy;
\t\t\t\t\t\t\t<span id=\"current-year\"></span>
\t\t\t\t\t\t\tCCP. All Rights Reserved.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "elements/footer.html.twig";
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
        return array (  69 => 20,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("\t\t<!-- Footer -->
\t\t<footer class=\"text-light pt-5 pb-4\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row\">
\t\t\t\t\t<!-- Company Info -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<h5 class=\"text-uppercase fw-bold\">CCP</h5>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tCreating innovative and tailored solutions to help businesses thrive
\t\t\t\t\t\t\t          in the digital era. Connect with us for cutting-edge technology and
\t\t\t\t\t\t\t          support.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Quick Links -->
\t\t\t\t\t<div class=\"col-md-2 mb-4\">
\t\t\t\t\t\t<h5 class=\"text-uppercase fw-bold\">Quick Links</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path ('app_home')}}\" class=\"text-light text-decoration-none\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#about-menu\" class=\"text-light text-decoration-none\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#our-it-services\" class=\"text-light text-decoration-none\">Services</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#contact-menu\" class=\"text-light text-decoration-none\">Contact</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Resources -->
\t\t\t\t\t<div class=\"col-md-2 mb-4\">
\t\t\t\t\t\t<h5 class=\"text-uppercase fw-bold\">Resources</h5>
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-light text-decoration-none\">Cookies</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#faqs\" class=\"text-light text-decoration-none\">FAQs</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"privacy.html\" target=\"_blank\" class=\"text-light text-decoration-none\">Policy & Privacy</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"terms.html\" target=\"_blank\" class=\"text-light text-decoration-none\">Terms</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- BADGE CO2 and Maps -->
\t\t\t\t\t<div class=\"col-md-4 mb-4 d-flex flex-column align-items-center\">
\t\t\t\t\t\t<div id=\"wcb\" class=\"carbonbadge mb-3\"></div>
\t\t\t\t\t\t<script src=\"https://unpkg.com/website-carbon-badges@1.1.3/b.min.js\" defer></script>
\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2520.588626906843!2d4.36542967752298!3d50.82026006066697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4ee169e2a49%3A0x7094246845ea0297!2sCCP%20SRL!5e0!3m2!1sen!2sbe!4v1733143139832!5m2!1sen!2sbe&hl=en\" width=\"300\" height=\"200\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr
\t\t\t\tclass=\"bg-light\"/>
\t\t\t\t<!-- Footer Bottom -->
\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t<div class=\"col text-center\">
\t\t\t\t\t\t<p class=\"mb-0\">&copy;
\t\t\t\t\t\t\t<span id=\"current-year\"></span>
\t\t\t\t\t\t\tCCP. All Rights Reserved.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>", "elements/footer.html.twig", "C:\\Users\\RamiBenSalem\\OneDrive - COMPUTER CONSULTANT PARTNERS\\Documents\\CCP WEBSITE\\final project\\ccp_srl\\templates\\elements\\footer.html.twig");
    }
}
