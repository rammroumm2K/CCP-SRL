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

/* base.html.twig */
class __TwigTemplate_eac773d6c97ecce90582279cbf0204b7 extends Template
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
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t";
        // line 5
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 28
        yield "\t</head>

\t<body class=\"d-flex flex-column min-vh-100\"> ";
        // line 30
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 31
        yield "\t\t<!-- Hero Section -->
\t\t<section class=\"hero text-center pt-5 \">
\t\t\t<div class=\"container\">
\t\t\t\t<h1 class=\" display-4  fw-semibold text-white  \">“Empowering Your Business Through Tailored IT Solutions Since 1993”
\t\t\t\t</h1>
\t\t\t\t<p class=\"lead text-white\">
\t\t\t\t\tBy
\t\t\t\t\t<a class=\"text-decoration-none text-info\" href=\"https://be.linkedin.com/in/john-hellinckx-19309b1\" target=\"_blank\">John Hellinckx</a>
\t\t\t\t</p>
\t\t\t</div>

\t\t</section>
\t\t<svg id=\"wave\" style=\"transform:rotate(180deg); transition: 0.3s\" viewbox=\"0 0 1440 280\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"none\">
\t\t\t<defs>
\t\t\t\t<linearGradient id=\"sw-gradient-0\" x1=\"0\" x2=\"0\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop stop-color=\"rgba(0, 0, 0, 1)\" offset=\"0%\"></stop>
\t\t\t\t\t<stop stop-color=\"rgba(30.053, 255, 0, 1)\" offset=\"100%\"></stop>
\t\t\t\t</linearGradient>
\t\t\t</defs>
\t\t\t<path style=\"transform:translate(0, 0px); opacity:1\" fill=\"url(#sw-gradient-0)\" d=\"M0,28L14.1,37.3C28.2,47,56,65,85,98C112.9,131,141,177,169,200.7C197.6,224,226,224,254,191.3C282.4,159,311,93,339,79.3C367.1,65,395,103,424,107.3C451.8,112,480,84,508,65.3C536.5,47,565,37,593,37.3C621.2,37,649,47,678,51.3C705.9,56,734,56,762,74.7C790.6,93,819,131,847,149.3C875.3,168,904,168,932,149.3C960,131,988,93,1016,102.7C1044.7,112,1073,168,1101,163.3C1129.4,159,1158,93,1186,56C1214.1,19,1242,9,1271,4.7C1298.8,0,1327,0,1355,42C1383.5,84,1412,168,1440,191.3C1468.2,215,1496,177,1525,163.3C1552.9,149,1581,159,1609,154C1637.6,149,1666,131,1694,126C1722.4,121,1751,131,1779,154C1807.1,177,1835,215,1864,214.7C1891.8,215,1920,177,1948,140C1976.5,103,2005,65,2019,46.7L2032.9,28L2032.9,280L2018.8,280C2004.7,280,1976,280,1948,280C1920,280,1892,280,1864,280C1835.3,280,1807,280,1779,280C1750.6,280,1722,280,1694,280C1665.9,280,1638,280,1609,280C1581.2,280,1553,280,1525,280C1496.5,280,1468,280,1440,280C1411.8,280,1384,280,1355,280C1327.1,280,1299,280,1271,280C1242.4,280,1214,280,1186,280C1157.6,280,1129,280,1101,280C1072.9,280,1045,280,1016,280C988.2,280,960,280,932,280C903.5,280,875,280,847,280C818.8,280,791,280,762,280C734.1,280,706,280,678,280C649.4,280,621,280,593,280C564.7,280,536,280,508,280C480,280,452,280,424,280C395.3,280,367,280,339,280C310.6,280,282,280,254,280C225.9,280,198,280,169,280C141.2,280,113,280,85,280C56.5,280,28,280,14,280L0,280Z\"></path>
\t\t\t<defs>
\t\t\t\t<linearGradient id=\"sw-gradient-1\" x1=\"0\" x2=\"0\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop stop-color=\"rgba(0, 0, 0, 1)\" offset=\"0%\"></stop>
\t\t\t\t\t<stop stop-color=\"rgba(0, 0, 0, 1)\" offset=\"100%\"></stop>
\t\t\t\t</linearGradient>
\t\t\t</defs>
\t\t\t<path style=\"transform:translate(0, 50px); opacity:0.9\" fill=\"url(#sw-gradient-1)\" d=\"M0,168L14.1,149.3C28.2,131,56,93,85,65.3C112.9,37,141,19,169,37.3C197.6,56,226,112,254,149.3C282.4,187,311,205,339,196C367.1,187,395,149,424,112C451.8,75,480,37,508,23.3C536.5,9,565,19,593,23.3C621.2,28,649,28,678,32.7C705.9,37,734,47,762,42C790.6,37,819,19,847,32.7C875.3,47,904,93,932,116.7C960,140,988,140,1016,154C1044.7,168,1073,196,1101,205.3C1129.4,215,1158,205,1186,168C1214.1,131,1242,65,1271,51.3C1298.8,37,1327,75,1355,116.7C1383.5,159,1412,205,1440,214.7C1468.2,224,1496,196,1525,154C1552.9,112,1581,56,1609,56C1637.6,56,1666,112,1694,116.7C1722.4,121,1751,75,1779,84C1807.1,93,1835,159,1864,186.7C1891.8,215,1920,205,1948,172.7C1976.5,140,2005,84,2019,56L2032.9,28L2032.9,280L2018.8,280C2004.7,280,1976,280,1948,280C1920,280,1892,280,1864,280C1835.3,280,1807,280,1779,280C1750.6,280,1722,280,1694,280C1665.9,280,1638,280,1609,280C1581.2,280,1553,280,1525,280C1496.5,280,1468,280,1440,280C1411.8,280,1384,280,1355,280C1327.1,280,1299,280,1271,280C1242.4,280,1214,280,1186,280C1157.6,280,1129,280,1101,280C1072.9,280,1045,280,1016,280C988.2,280,960,280,932,280C903.5,280,875,280,847,280C818.8,280,791,280,762,280C734.1,280,706,280,678,280C649.4,280,621,280,593,280C564.7,280,536,280,508,280C480,280,452,280,424,280C395.3,280,367,280,339,280C310.6,280,282,280,254,280C225.9,280,198,280,169,280C141.2,280,113,280,85,280C56.5,280,28,280,14,280L0,280Z\"></path>
\t\t</svg>


\t\t<!-- About Section -->
\t\t<section id=\"section2\" class=\"py-5\">
\t\t\t<div id=\"about-menu\" class=\"container my-auto\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-md-10 text-center mx-3\">
\t\t\t\t\t\t<div class=\"svg-title\">
\t\t\t\t\t\t\t<svg id=\"svg-square\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev/svgjs\" viewbox=\"0 0 600 600\">
\t\t\t\t\t\t\t\t<path d=\"M278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969C457.33257548014325,258.68392690022785,278.0978291829427,220.0895792643229,247.4840087890625,239.58299255371094C216.87018839518228,259.07640584309894,243.03583272298178,395.13781992594403,278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969\" fill=\"hsl(103, 69%, 60%)\"></path>
\t\t\t\t\t\t\t\t<path d=\"M209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655C388.25524619202423 166.84250214659752 209.02049989482367 128.2481545106926 178.40667950094348 147.74156780008062C147.79285910706326 167.23498108946862 173.95850343486276 303.29639517231317 209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655 \" fill-opacity=\"1\" fill=\"hsl(0, 0%, 0%)\" opacity=\"1\" stroke-opacity=\"1\" stroke-width=\"0\" stroke=\"hsl(340, 45%, 30%)\" transform=\"matrix(1,0,0,1,75,75)\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<h2 class=\" mb-5 fs-1 fw-bold  mt-5\">ABOUT CCP</h2>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"fs-3 bold-text mt-5 text-start\">
\t\t\t\t\t\t\tFounded in 1993 by John Hellinckx, CCP is a full-service IT provider with a rich history of technological
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            evolution. Starting with Novell Netware networks, we’ve transitioned over the years from coaxial cable
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            systems to modern cloud computing.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p class=\"fs-3 bold-text text-start\">
\t\t\t\t\t\t\tToday, we offer comprehensive IT maintenance and services to large enterprises, SMBs, and NGOs across
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            Belgium and Europe. Our mission is to provide tailored IT solutions that empower our clients to focus on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            their core business goals, driving success, growth, and profitability.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p id=\"our-it-services\" class=\"fs-3 bold-text text-start\">
\t\t\t\t\t\t\tNot every organization can afford an in-house IT specialist—this is where we come in, acting as your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            dedicated IT department. Our value lies in our ability to fully manage and support your IT needs, delivering
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            high-quality solutions across computer systems, IT infrastructure, internet, cloud, and mobile platforms—all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            at competitive rates.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-5 \">
\t\t\t\t\t\t\t<button class=\"styled-button mt-5 btn-lg\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#services-grid\" aria-expanded=\"false\" aria-controls=\"services-grid\">
\t\t\t\t\t\t\t\tOur IT Services
\t\t\t\t\t\t\t\t<div class=\"inner-button\">
\t\t\t\t\t\t\t\t\t<svg id=\"Arrow\" viewbox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\" height=\"30px\" width=\"30px\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient y2=\"100%\" x2=\"100%\" y1=\"0%\" x1=\"0%\" id=\"iconGradient\">
\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#FFFFFF;stop-opacity:1\" offset=\"0%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#AAAAAA;stop-opacity:1\" offset=\"100%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t<path fill=\"url(#iconGradient)\" d=\"M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Services Grid Section -->
\t\t<section id=\"section3\" class=\"py-5 collapse show\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tid=\"services-grid\" class=\"collapse row g-4\">

\t\t\t\t\t<!--ALl services cards here-->
\t\t\t\t\t<div class=\"container my-5\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row g-4\">
\t\t\t\t\t\t\t<!-- Managed IT Service -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-gear-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Managed IT Service</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5 fs-sm-1\">Our managed IT services allow us to act as your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  dedicated IT department, providing tailored support that aligns with the criticality of your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  equipment, system specifics, and budget constraints. Whether you need full IT management or occasional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  assistance, we offer a service customized to your needs, helping you maintain a reliable and efficient
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  IT infrastructure.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- End-User Support -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">End-User Support</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Does your team need daily IT assistance? We offer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  responsive remote and onsite support for end-users, ensuring they have the help they need to stay
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  productive. Our end-user support service includes troubleshooting, assistance with day-to-day issues,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  and guidance on best IT practices.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Cloud Migration and Management -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-cloud-upload-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Cloud Migration and Management</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Transition to the cloud seamlessly with our migration and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  management services. We specialize in platforms like Microsoft Azure, Office 365, Google Workspace,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  AWS, and more. Whether you’re moving to the cloud or need management for an existing setup, we ensure
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  smooth operations, optimal performance, and security for your cloud environment.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Consulting -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-dots-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Consulting</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Need expert advice on your IT setup? Our consulting
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  service offers audits, project implementation support, and long-term strategic planning to enhance
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  your IT infrastructure. We cover areas like IT master plans, helpdesk setup, cloud computing,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  licensing, and hosting advisory to ensure your IT aligns with your business goals.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Project Management -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Project Management</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">From planning to execution, our project management
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  service supports your IT initiatives from start to finish. We ensure that each project is completed on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  time, within budget, and to your specifications, allowing you to focus on core business activities.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Virtualisation -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-display-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Virtualisation</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Optimize your resources and improve scalability with our
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  virtualization solutions. We provide expert support in implementing and managing virtual environments,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  helping you reduce costs, increase efficiency, and enhance flexibility.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>


\t\t</section>


\t\t<section id=\"support\" class=\"bg-light  py-5 my-5\">
\t\t\t<div class=\"container my-auto \">
\t\t\t\t<div class=\"d-flex justify-content-center align-items-center\">
\t\t\t\t\t<div class=\"col-md-10 text-center\">
\t\t\t\t\t\t<div class=\"svg-title text-center\">
\t\t\t\t\t\t\t<svg id=\"svg-square2\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev/svgjs\" viewbox=\"0 0 600 600\">
\t\t\t\t\t\t\t\t<path d=\"M278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969C457.33257548014325,258.68392690022785,278.0978291829427,220.0895792643229,247.4840087890625,239.58299255371094C216.87018839518228,259.07640584309894,243.03583272298178,395.13781992594403,278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969\" fill=\"hsl(103, 69%, 60%)\"></path>
\t\t\t\t\t\t\t\t<path d=\"M209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655C388.25524619202423 166.84250214659752 209.02049989482367 128.2481545106926 178.40667950094348 147.74156780008062C147.79285910706326 167.23498108946862 173.95850343486276 303.29639517231317 209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655 \" fill-opacity=\"1\" fill=\"hsl(0, 0%, 0%)\" opacity=\"1\" stroke-opacity=\"1\" stroke-width=\"0\" stroke=\"hsl(340, 45%, 30%)\" transform=\"matrix(1,0,0,1,75,75)\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<h2 class=\"text-center mb-5 fs-1 fw-bold about-ccp\">SUPPORT</h2>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"container my-auto pt-5\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center flex-column\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8 download-card\">
\t\t\t\t\t\t\t\t\t<h3 class=\"text-center\">ISL (Remote Support)
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<p class=\"fs-4 pt-3 text-start\">ISL Remote Support is a software for remote assistance that allows secure access and control of devices, ideal for IT support and remote management.</p>

\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.islonline.com/be/en/downloads/download-isl-light-client.htm\" target=\"_blank\" class=\"text-decoration-none styled-button d-inline-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\tDownload ISL
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-button ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg id=\"Arrow\" viewbox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\" height=\"30px\" width=\"30px\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<linearGradient y2=\"100%\" x2=\"100%\" y1=\"0%\" x1=\"0%\" id=\"iconGradient\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#FFFFFF;stop-opacity:1\" offset=\"0%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#AAAAAA;stop-opacity:1\" offset=\"100%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"url(#iconGradient)\" d=\"M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<!-- Why Choose Us Section -->
\t\t<section class=\"py-5 my-5 \">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"text-center mb-5 fs-1 fw-bold about-ccp\">Why Choose Us</h2>
\t\t\t\t<div
\t\t\t\t\tclass=\"row text-center\">

\t\t\t\t\t<!-- Extensive IT Expertise -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<div class=\"icon-box mx-auto d-flex justify-content-center align-items-center mb-3 why-icon-style\">
\t\t\t\t\t\t\t<i class=\"fas fa-cloud fa-2x text-success\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Extensive IT Expertise</h4>
\t\t\t\t\t\t<p>With 30+ years in IT, CCP delivers reliable solutions across cloud, support, and infrastructure management, keeping your business secure and efficient.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Tailored Support -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<div class=\"icon-box mx-auto d-flex justify-content-center align-items-center mb-3 why-icon-style\">
\t\t\t\t\t\t\t<i class=\"fas fa-headset fa-2x text-success\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Tailored Support</h4>
\t\t\t\t\t\t<p>We provide personalized, proactive IT support, ensuring seamless operations so you can focus on growing your business.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Cost-Effective Solutions -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<div class=\"icon-box mx-auto d-flex justify-content-center align-items-center mb-3 why-icon-style\">
\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign fa-2x text-success\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Cost-Effective Solutions</h4>
\t\t\t\t\t\t<p>Our flexible, budget-friendly services make expert IT support accessible, helping you maximize your investment and drive success.</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"faq-section py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"text-center mb-4 mb-5 fs-1 fw-bold about-ccp\">Frequently Asked Questions</h2>
\t\t\t\t<div
\t\t\t\t\tclass=\"accordion\" id=\"faqAccordion\">

\t\t\t\t\t<!-- Question 1 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t<button class=\"accordion-button lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\tHow can I register for your services?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tYou can register for our services by filling out the form on the
\t\t\t\t\t\t\t\t<a href=\"#contact-menu\" class=\"text-decoration-none\">contact</a>
\t\t\t\t\t\t\t\tform.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 3 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\tAre there any hidden costs in your pricing?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tNo, our pricing is transparent. All costs are clearly outlined in our quotes, and there are no hidden fees.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 4 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingFour\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
\t\t\t\t\t\t\t\tWhat should I do if I encounter an issue with the service?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tIf you encounter any issues, you can contact our support team from 9:00 AM to 6:00 PM, Monday to Friday.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 5 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingFive\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
\t\t\t\t\t\t\t\tCan I customize your services to meet my needs?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tAbsolutely! We offer fully customizable services. Contact us with your requirements, and we’ll provide a tailored solution.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 6 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingSix\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSixUnique\" aria-expanded=\"false\" aria-controls=\"collapseSixUnique\">
\t\t\t\t\t\t\t\tWhere is the CCP office located?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseSixUnique\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSix\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tThe CCP office is located at Rue Van Eyck 22, 1000 Brussels, Belgium.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<div class=\"container mb-5\">
\t\t\t<div id=\"contact-block\" class=\"row justify-content-center\">
\t\t\t\t<svg id=\"svg-square-3\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev/svgjs\" viewbox=\"0 0 600 600\">
\t\t\t\t\t<path d=\"M278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969C457.33257548014325,258.68392690022785,278.0978291829427,220.0895792643229,247.4840087890625,239.58299255371094C216.87018839518228,259.07640584309894,243.03583272298178,395.13781992594403,278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969\" fill=\"hsl(103, 69%, 60%)\"></path>
\t\t\t\t\t<path d=\"M209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655C388.25524619202423 166.84250214659752 209.02049989482367 128.2481545106926 178.40667950094348 147.74156780008062C147.79285910706326 167.23498108946862 173.95850343486276 303.29639517231317 209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655 \" fill-opacity=\"1\" fill=\"hsl(0, 0%, 0%)\" opacity=\"1\" stroke-opacity=\"1\" stroke-width=\"0\" stroke=\"hsl(340, 45%, 30%)\" transform=\"matrix(1,0,0,1,75,75)\"></path>
\t\t\t\t</svg>
\t\t\t\t<h2 id=\"contact-menu\" class=\"text-center mb-5 fs-1 fw-bold about-ccp\">CONTACT</h2>
\t\t\t\t<div class=\"col-lg-6 col-md-8 col-sm-10\">
\t\t\t\t\t<div class=\"custom-card-form\">
\t\t\t\t\t\t<div class=\"p-4 mt-5\">
\t\t\t\t\t\t\t";
        // line 397
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), 'form_start', ["attr" => ["id" => "contact-form", "novalidate" => "novalidate"]]);
        yield "

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"";
        // line 400
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "name", [], "any", false, false, false, 400), "vars", [], "any", false, false, false, 400), "id", [], "any", false, false, false, 400), "html", null, true);
        yield "\" class=\"form-label\" style=\"color: #fff;\">Full Name</label>
\t\t\t\t\t\t\t\t";
        // line 401
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "name", [], "any", false, false, false, 401), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter your full name"]]);
        yield "
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">";
        // line 402
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), "name", [], "any", false, false, false, 402), 'errors');
        yield "</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 406, $this->source); })()), "email", [], "any", false, false, false, 406), "vars", [], "any", false, false, false, 406), "id", [], "any", false, false, false, 406), "html", null, true);
        yield "\" class=\"form-label\" style=\"color: #fff;\">Email Address</label>
\t\t\t\t\t\t\t\t";
        // line 407
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()), "email", [], "any", false, false, false, 407), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter your email address"]]);
        yield "
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">";
        // line 408
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()), "email", [], "any", false, false, false, 408), 'errors');
        yield "</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 412, $this->source); })()), "subject", [], "any", false, false, false, 412), "vars", [], "any", false, false, false, 412), "id", [], "any", false, false, false, 412), "html", null, true);
        yield "\" class=\"form-label\" style=\"color: #fff;\">Subject</label>
\t\t\t\t\t\t\t\t";
        // line 413
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "subject", [], "any", false, false, false, 413), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter the subject"]]);
        yield "
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">";
        // line 414
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "subject", [], "any", false, false, false, 414), 'errors');
        yield "</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()), "message", [], "any", false, false, false, 418), "vars", [], "any", false, false, false, 418), "id", [], "any", false, false, false, 418), "html", null, true);
        yield "\" class=\"form-label\" style=\"color: #fff;\">Message</label>
\t\t\t\t\t\t\t\t";
        // line 419
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "message", [], "any", false, false, false, 419), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type your message here...", "rows" => "5"]]);
        yield "
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">";
        // line 420
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "message", [], "any", false, false, false, 420), 'errors');
        yield "</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check mb-3\">
\t\t\t\t\t\t\t\t";
        // line 424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 424, $this->source); })()), "consent", [], "any", false, false, false, 424), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
\t\t\t\t\t\t\t\t<label for=\"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 425, $this->source); })()), "consent", [], "any", false, false, false, 425), "vars", [], "any", false, false, false, 425), "id", [], "any", false, false, false, 425), "html", null, true);
        yield "\" class=\"form-check-label\" style=\"color: #fff;\">
\t\t\t\t\t\t\t\t\tI agree to have my data collected and stored for the purpose of contacting me.
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">";
        // line 428
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()), "consent", [], "any", false, false, false, 428), 'errors');
        yield "</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"captcha\" value=\"test-token-valid\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Send Message</button>
\t\t\t\t\t\t\t";
        // line 433
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t<div id=\"formModal\" class=\"modal fade";
        // line 438
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 438, $this->source); })()), "show", [], "any", false, false, false, 438)) {
            yield " show";
        }
        yield "\" tabindex=\"-1\" aria-labelledby=\"modalTitle\" aria-hidden=\"true\" ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 438, $this->source); })()), "show", [], "any", false, false, false, 438)) {
            yield "style=\"display: block;\"";
        }
        yield ">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content bg-dark text-white\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalTitle\">";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 442, $this->source); })()), "title", [], "any", false, false, false, 442), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 446
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["modal"]) || array_key_exists("modal", $context) ? $context["modal"] : (function () { throw new RuntimeError('Variable "modal" does not exist.', 446, $this->source); })()), "message", [], "any", false, false, false, 446);
        yield "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>



\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!--Cookies Sections-->

\t\t<!-- Cookie Consent Modal -->
\t\t\t<div id=\"cookieModal\" style=\"position: fixed; bottom: 20px; right: 20px; z-index: 1050; display: none; background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; text-align: center; font-family: Arial, sans-serif;\"> <div>
\t\t\t\t<img src=\"https://cdn-icons-png.flaticon.com/512/2917/2917995.png\" alt=\"Cookie Icon\" style=\"width: 50px; margin-bottom: 10px;\">
\t\t\t\t<h3 style=\"font-size: 18px; margin-bottom: 10px;\">We use cookies</h3>
\t\t\t\t<p style=\"font-size: 14px; color: #666; margin-bottom: 20px;\">This website uses cookies to ensure you get the best experience on our site.</p>
\t\t\t\t<button id=\"allowCookies\" style=\"background-color: #7e57c2; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Allow</button>
\t\t\t\t<button id=\"declineCookies\" style=\"background-color: #ccc; color: #333; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Decline</button>
\t\t\t</div>
\t\t</div>


\t\t";
        // line 474
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 475
        yield "
\t\t<!-- Bootstrap JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- Custom JS -->
\t\t<script src=\"";
        // line 479
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/script.js"), "html", null, true);
        yield "\"></script>
\t\t<!-- Font Awesome -->

\t\t<!--GCaptcha-->
\t\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t\t<script src=\"";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("cookie-banner.js"), "html", null, true);
        yield "\"></script>
\t\t<!--Cookies Sections-->

\t\t<!-- Cookie Consent Modal -->
\t\t<div id=\"cookieModal\">
\t\t\t<div>
\t\t\t\t<img src=\"https://cdn-icons-png.flaticon.com/512/2917/2917995.png\" alt=\"Cookie Icon\" style=\"width: 50px; margin-bottom: 10px;\">
\t\t\t\t<h3>We use cookies</h3>
\t\t\t\t<p>This website uses cookies to ensure you get the best experience on our site.</p>
\t\t\t\t<button id=\"allowCookies\">Allow</button>
\t\t\t\t<button id=\"declineCookies\">Decline</button>
\t\t\t</div>
\t\t</div>

\t\t<!--reCaptcha Google-->
\t\t<script src=\"https://www.google.com/recaptcha/api.js?render=";
        // line 499
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["site_key"]) || array_key_exists("site_key", $context) ? $context["site_key"] : (function () { throw new RuntimeError('Variable "site_key" does not exist.', 499, $this->source); })()), "html", null, true);
        yield "\"></script>
\t\t<script>
\t\t\tdocument.addEventListener('DOMContentLoaded', function () {
grecaptcha.ready(function () {
grecaptcha.execute('";
        // line 503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["site_key"]) || array_key_exists("site_key", $context) ? $context["site_key"] : (function () { throw new RuntimeError('Variable "site_key" does not exist.', 503, $this->source); })()), "html", null, true);
        yield "', {action: 'contact_form'}).then(function (token) {
document.querySelector('input[name=\"captcha\"]').value = token;
});
});
});
\t\t</script>


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

    // line 30
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 474
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  713 => 474,  691 => 30,  672 => 20,  663 => 14,  653 => 6,  640 => 5,  617 => 503,  610 => 499,  592 => 484,  584 => 479,  578 => 475,  576 => 474,  545 => 446,  538 => 442,  525 => 438,  517 => 433,  509 => 428,  503 => 425,  499 => 424,  492 => 420,  488 => 419,  484 => 418,  477 => 414,  473 => 413,  469 => 412,  462 => 408,  458 => 407,  454 => 406,  447 => 402,  443 => 401,  439 => 400,  433 => 397,  65 => 31,  63 => 30,  59 => 28,  57 => 5,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

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

\t<body class=\"d-flex flex-column min-vh-100\"> {% block navbar %}{% endblock %}
\t\t<!-- Hero Section -->
\t\t<section class=\"hero text-center pt-5 \">
\t\t\t<div class=\"container\">
\t\t\t\t<h1 class=\" display-4  fw-semibold text-white  \">“Empowering Your Business Through Tailored IT Solutions Since 1993”
\t\t\t\t</h1>
\t\t\t\t<p class=\"lead text-white\">
\t\t\t\t\tBy
\t\t\t\t\t<a class=\"text-decoration-none text-info\" href=\"https://be.linkedin.com/in/john-hellinckx-19309b1\" target=\"_blank\">John Hellinckx</a>
\t\t\t\t</p>
\t\t\t</div>

\t\t</section>
\t\t<svg id=\"wave\" style=\"transform:rotate(180deg); transition: 0.3s\" viewbox=\"0 0 1440 280\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" preserveaspectratio=\"none\">
\t\t\t<defs>
\t\t\t\t<linearGradient id=\"sw-gradient-0\" x1=\"0\" x2=\"0\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop stop-color=\"rgba(0, 0, 0, 1)\" offset=\"0%\"></stop>
\t\t\t\t\t<stop stop-color=\"rgba(30.053, 255, 0, 1)\" offset=\"100%\"></stop>
\t\t\t\t</linearGradient>
\t\t\t</defs>
\t\t\t<path style=\"transform:translate(0, 0px); opacity:1\" fill=\"url(#sw-gradient-0)\" d=\"M0,28L14.1,37.3C28.2,47,56,65,85,98C112.9,131,141,177,169,200.7C197.6,224,226,224,254,191.3C282.4,159,311,93,339,79.3C367.1,65,395,103,424,107.3C451.8,112,480,84,508,65.3C536.5,47,565,37,593,37.3C621.2,37,649,47,678,51.3C705.9,56,734,56,762,74.7C790.6,93,819,131,847,149.3C875.3,168,904,168,932,149.3C960,131,988,93,1016,102.7C1044.7,112,1073,168,1101,163.3C1129.4,159,1158,93,1186,56C1214.1,19,1242,9,1271,4.7C1298.8,0,1327,0,1355,42C1383.5,84,1412,168,1440,191.3C1468.2,215,1496,177,1525,163.3C1552.9,149,1581,159,1609,154C1637.6,149,1666,131,1694,126C1722.4,121,1751,131,1779,154C1807.1,177,1835,215,1864,214.7C1891.8,215,1920,177,1948,140C1976.5,103,2005,65,2019,46.7L2032.9,28L2032.9,280L2018.8,280C2004.7,280,1976,280,1948,280C1920,280,1892,280,1864,280C1835.3,280,1807,280,1779,280C1750.6,280,1722,280,1694,280C1665.9,280,1638,280,1609,280C1581.2,280,1553,280,1525,280C1496.5,280,1468,280,1440,280C1411.8,280,1384,280,1355,280C1327.1,280,1299,280,1271,280C1242.4,280,1214,280,1186,280C1157.6,280,1129,280,1101,280C1072.9,280,1045,280,1016,280C988.2,280,960,280,932,280C903.5,280,875,280,847,280C818.8,280,791,280,762,280C734.1,280,706,280,678,280C649.4,280,621,280,593,280C564.7,280,536,280,508,280C480,280,452,280,424,280C395.3,280,367,280,339,280C310.6,280,282,280,254,280C225.9,280,198,280,169,280C141.2,280,113,280,85,280C56.5,280,28,280,14,280L0,280Z\"></path>
\t\t\t<defs>
\t\t\t\t<linearGradient id=\"sw-gradient-1\" x1=\"0\" x2=\"0\" y1=\"1\" y2=\"0\">
\t\t\t\t\t<stop stop-color=\"rgba(0, 0, 0, 1)\" offset=\"0%\"></stop>
\t\t\t\t\t<stop stop-color=\"rgba(0, 0, 0, 1)\" offset=\"100%\"></stop>
\t\t\t\t</linearGradient>
\t\t\t</defs>
\t\t\t<path style=\"transform:translate(0, 50px); opacity:0.9\" fill=\"url(#sw-gradient-1)\" d=\"M0,168L14.1,149.3C28.2,131,56,93,85,65.3C112.9,37,141,19,169,37.3C197.6,56,226,112,254,149.3C282.4,187,311,205,339,196C367.1,187,395,149,424,112C451.8,75,480,37,508,23.3C536.5,9,565,19,593,23.3C621.2,28,649,28,678,32.7C705.9,37,734,47,762,42C790.6,37,819,19,847,32.7C875.3,47,904,93,932,116.7C960,140,988,140,1016,154C1044.7,168,1073,196,1101,205.3C1129.4,215,1158,205,1186,168C1214.1,131,1242,65,1271,51.3C1298.8,37,1327,75,1355,116.7C1383.5,159,1412,205,1440,214.7C1468.2,224,1496,196,1525,154C1552.9,112,1581,56,1609,56C1637.6,56,1666,112,1694,116.7C1722.4,121,1751,75,1779,84C1807.1,93,1835,159,1864,186.7C1891.8,215,1920,205,1948,172.7C1976.5,140,2005,84,2019,56L2032.9,28L2032.9,280L2018.8,280C2004.7,280,1976,280,1948,280C1920,280,1892,280,1864,280C1835.3,280,1807,280,1779,280C1750.6,280,1722,280,1694,280C1665.9,280,1638,280,1609,280C1581.2,280,1553,280,1525,280C1496.5,280,1468,280,1440,280C1411.8,280,1384,280,1355,280C1327.1,280,1299,280,1271,280C1242.4,280,1214,280,1186,280C1157.6,280,1129,280,1101,280C1072.9,280,1045,280,1016,280C988.2,280,960,280,932,280C903.5,280,875,280,847,280C818.8,280,791,280,762,280C734.1,280,706,280,678,280C649.4,280,621,280,593,280C564.7,280,536,280,508,280C480,280,452,280,424,280C395.3,280,367,280,339,280C310.6,280,282,280,254,280C225.9,280,198,280,169,280C141.2,280,113,280,85,280C56.5,280,28,280,14,280L0,280Z\"></path>
\t\t</svg>


\t\t<!-- About Section -->
\t\t<section id=\"section2\" class=\"py-5\">
\t\t\t<div id=\"about-menu\" class=\"container my-auto\">
\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t<div class=\"col-md-10 text-center mx-3\">
\t\t\t\t\t\t<div class=\"svg-title\">
\t\t\t\t\t\t\t<svg id=\"svg-square\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev/svgjs\" viewbox=\"0 0 600 600\">
\t\t\t\t\t\t\t\t<path d=\"M278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969C457.33257548014325,258.68392690022785,278.0978291829427,220.0895792643229,247.4840087890625,239.58299255371094C216.87018839518228,259.07640584309894,243.03583272298178,395.13781992594403,278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969\" fill=\"hsl(103, 69%, 60%)\"></path>
\t\t\t\t\t\t\t\t<path d=\"M209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655C388.25524619202423 166.84250214659752 209.02049989482367 128.2481545106926 178.40667950094348 147.74156780008062C147.79285910706326 167.23498108946862 173.95850343486276 303.29639517231317 209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655 \" fill-opacity=\"1\" fill=\"hsl(0, 0%, 0%)\" opacity=\"1\" stroke-opacity=\"1\" stroke-width=\"0\" stroke=\"hsl(340, 45%, 30%)\" transform=\"matrix(1,0,0,1,75,75)\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<h2 class=\" mb-5 fs-1 fw-bold  mt-5\">ABOUT CCP</h2>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"fs-3 bold-text mt-5 text-start\">
\t\t\t\t\t\t\tFounded in 1993 by John Hellinckx, CCP is a full-service IT provider with a rich history of technological
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            evolution. Starting with Novell Netware networks, we’ve transitioned over the years from coaxial cable
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            systems to modern cloud computing.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p class=\"fs-3 bold-text text-start\">
\t\t\t\t\t\t\tToday, we offer comprehensive IT maintenance and services to large enterprises, SMBs, and NGOs across
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            Belgium and Europe. Our mission is to provide tailored IT solutions that empower our clients to focus on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            their core business goals, driving success, growth, and profitability.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<p id=\"our-it-services\" class=\"fs-3 bold-text text-start\">
\t\t\t\t\t\t\tNot every organization can afford an in-house IT specialist—this is where we come in, acting as your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            dedicated IT department. Our value lies in our ability to fully manage and support your IT needs, delivering
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            high-quality solutions across computer systems, IT infrastructure, internet, cloud, and mobile platforms—all
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            at competitive rates.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"d-flex justify-content-center mt-5 \">
\t\t\t\t\t\t\t<button class=\"styled-button mt-5 btn-lg\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#services-grid\" aria-expanded=\"false\" aria-controls=\"services-grid\">
\t\t\t\t\t\t\t\tOur IT Services
\t\t\t\t\t\t\t\t<div class=\"inner-button\">
\t\t\t\t\t\t\t\t\t<svg id=\"Arrow\" viewbox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\" height=\"30px\" width=\"30px\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t<linearGradient y2=\"100%\" x2=\"100%\" y1=\"0%\" x1=\"0%\" id=\"iconGradient\">
\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#FFFFFF;stop-opacity:1\" offset=\"0%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#AAAAAA;stop-opacity:1\" offset=\"100%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t<path fill=\"url(#iconGradient)\" d=\"M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z\"></path>
\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<!-- Services Grid Section -->
\t\t<section id=\"section3\" class=\"py-5 collapse show\">
\t\t\t<div class=\"container\">
\t\t\t\t<div
\t\t\t\t\tid=\"services-grid\" class=\"collapse row g-4\">

\t\t\t\t\t<!--ALl services cards here-->
\t\t\t\t\t<div class=\"container my-5\">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row g-4\">
\t\t\t\t\t\t\t<!-- Managed IT Service -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-gear-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Managed IT Service</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5 fs-sm-1\">Our managed IT services allow us to act as your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  dedicated IT department, providing tailored support that aligns with the criticality of your
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  equipment, system specifics, and budget constraints. Whether you need full IT management or occasional
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  assistance, we offer a service customized to your needs, helping you maintain a reliable and efficient
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  IT infrastructure.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- End-User Support -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">End-User Support</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Does your team need daily IT assistance? We offer
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  responsive remote and onsite support for end-users, ensuring they have the help they need to stay
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  productive. Our end-user support service includes troubleshooting, assistance with day-to-day issues,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  and guidance on best IT practices.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Cloud Migration and Management -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-cloud-upload-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Cloud Migration and Management</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Transition to the cloud seamlessly with our migration and
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  management services. We specialize in platforms like Microsoft Azure, Office 365, Google Workspace,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  AWS, and more. Whether you’re moving to the cloud or need management for an existing setup, we ensure
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  smooth operations, optimal performance, and security for your cloud environment.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Consulting -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chat-left-dots-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Consulting</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Need expert advice on your IT setup? Our consulting
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  service offers audits, project implementation support, and long-term strategic planning to enhance
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  your IT infrastructure. We cover areas like IT master plans, helpdesk setup, cloud computing,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  licensing, and hosting advisory to ensure your IT aligns with your business goals.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Project Management -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Project Management</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">From planning to execution, our project management
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  service supports your IT initiatives from start to finish. We ensure that each project is completed on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  time, within budget, and to your specifications, allowing you to focus on core business activities.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Virtualisation -->
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card service-card text-center p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-display-fill service-icon\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"service-title mt-3\">Virtualisation</h5>
\t\t\t\t\t\t\t\t\t<p class=\"service-description text-start fs-5\">Optimize your resources and improve scalability with our
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  virtualization solutions. We provide expert support in implementing and managing virtual environments,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                  helping you reduce costs, increase efficiency, and enhance flexibility.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>


\t\t</section>


\t\t<section id=\"support\" class=\"bg-light  py-5 my-5\">
\t\t\t<div class=\"container my-auto \">
\t\t\t\t<div class=\"d-flex justify-content-center align-items-center\">
\t\t\t\t\t<div class=\"col-md-10 text-center\">
\t\t\t\t\t\t<div class=\"svg-title text-center\">
\t\t\t\t\t\t\t<svg id=\"svg-square2\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev/svgjs\" viewbox=\"0 0 600 600\">
\t\t\t\t\t\t\t\t<path d=\"M278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969C457.33257548014325,258.68392690022785,278.0978291829427,220.0895792643229,247.4840087890625,239.58299255371094C216.87018839518228,259.07640584309894,243.03583272298178,395.13781992594403,278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969\" fill=\"hsl(103, 69%, 60%)\"></path>
\t\t\t\t\t\t\t\t<path d=\"M209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655C388.25524619202423 166.84250214659752 209.02049989482367 128.2481545106926 178.40667950094348 147.74156780008062C147.79285910706326 167.23498108946862 173.95850343486276 303.29639517231317 209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655 \" fill-opacity=\"1\" fill=\"hsl(0, 0%, 0%)\" opacity=\"1\" stroke-opacity=\"1\" stroke-width=\"0\" stroke=\"hsl(340, 45%, 30%)\" transform=\"matrix(1,0,0,1,75,75)\"></path>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t<h2 class=\"text-center mb-5 fs-1 fw-bold about-ccp\">SUPPORT</h2>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"container my-auto pt-5\">
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center flex-column\">
\t\t\t\t\t\t\t\t<div class=\"col-md-8 download-card\">
\t\t\t\t\t\t\t\t\t<h3 class=\"text-center\">ISL (Remote Support)
\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t<p class=\"fs-4 pt-3 text-start\">ISL Remote Support is a software for remote assistance that allows secure access and control of devices, ideal for IT support and remote management.</p>

\t\t\t\t\t\t\t\t\t<div class=\"text-center mt-4\">
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.islonline.com/be/en/downloads/download-isl-light-client.htm\" target=\"_blank\" class=\"text-decoration-none styled-button d-inline-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\tDownload ISL
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-button ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<svg id=\"Arrow\" viewbox=\"0 0 32 32\" xmlns=\"http://www.w3.org/2000/svg\" height=\"30px\" width=\"30px\" class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<defs>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<linearGradient y2=\"100%\" x2=\"100%\" y1=\"0%\" x1=\"0%\" id=\"iconGradient\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#FFFFFF;stop-opacity:1\" offset=\"0%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<stop style=\"stop-color:#AAAAAA;stop-opacity:1\" offset=\"100%\"></stop>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</linearGradient>
\t\t\t\t\t\t\t\t\t\t\t\t\t</defs>
\t\t\t\t\t\t\t\t\t\t\t\t\t<path fill=\"url(#iconGradient)\" d=\"M4 15a1 1 0 0 0 1 1h19.586l-4.292 4.292a1 1 0 0 0 1.414 1.414l6-6a.99.99 0 0 0 .292-.702V15c0-.13-.026-.26-.078-.382a.99.99 0 0 0-.216-.324l-6-6a1 1 0 0 0-1.414 1.414L24.586 14H5a1 1 0 0 0-1 1z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<!-- Why Choose Us Section -->
\t\t<section class=\"py-5 my-5 \">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"text-center mb-5 fs-1 fw-bold about-ccp\">Why Choose Us</h2>
\t\t\t\t<div
\t\t\t\t\tclass=\"row text-center\">

\t\t\t\t\t<!-- Extensive IT Expertise -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<div class=\"icon-box mx-auto d-flex justify-content-center align-items-center mb-3 why-icon-style\">
\t\t\t\t\t\t\t<i class=\"fas fa-cloud fa-2x text-success\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Extensive IT Expertise</h4>
\t\t\t\t\t\t<p>With 30+ years in IT, CCP delivers reliable solutions across cloud, support, and infrastructure management, keeping your business secure and efficient.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Tailored Support -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<div class=\"icon-box mx-auto d-flex justify-content-center align-items-center mb-3 why-icon-style\">
\t\t\t\t\t\t\t<i class=\"fas fa-headset fa-2x text-success\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Tailored Support</h4>
\t\t\t\t\t\t<p>We provide personalized, proactive IT support, ensuring seamless operations so you can focus on growing your business.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Cost-Effective Solutions -->
\t\t\t\t\t<div class=\"col-md-4 mb-4\">
\t\t\t\t\t\t<div class=\"icon-box mx-auto d-flex justify-content-center align-items-center mb-3 why-icon-style\">
\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign fa-2x text-success\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h4>Cost-Effective Solutions</h4>
\t\t\t\t\t\t<p>Our flexible, budget-friendly services make expert IT support accessible, helping you maximize your investment and drive success.</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"faq-section py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<h2 class=\"text-center mb-4 mb-5 fs-1 fw-bold about-ccp\">Frequently Asked Questions</h2>
\t\t\t\t<div
\t\t\t\t\tclass=\"accordion\" id=\"faqAccordion\">

\t\t\t\t\t<!-- Question 1 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t\t\t<button class=\"accordion-button lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\tHow can I register for your services?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tYou can register for our services by filling out the form on the
\t\t\t\t\t\t\t\t<a href=\"#contact-menu\" class=\"text-decoration-none\">contact</a>
\t\t\t\t\t\t\t\tform.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 3 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\t\t\tAre there any hidden costs in your pricing?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tNo, our pricing is transparent. All costs are clearly outlined in our quotes, and there are no hidden fees.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 4 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingFour\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
\t\t\t\t\t\t\t\tWhat should I do if I encounter an issue with the service?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tIf you encounter any issues, you can contact our support team from 9:00 AM to 6:00 PM, Monday to Friday.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 5 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingFive\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
\t\t\t\t\t\t\t\tCan I customize your services to meet my needs?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tAbsolutely! We offer fully customizable services. Contact us with your requirements, and we’ll provide a tailored solution.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Question 6 -->
\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t<h2 class=\"accordion-header\" id=\"headingSix\">
\t\t\t\t\t\t\t<button class=\"accordion-button collapsed lime-accordion\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseSixUnique\" aria-expanded=\"false\" aria-controls=\"collapseSixUnique\">
\t\t\t\t\t\t\t\tWhere is the CCP office located?
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div id=\"collapseSixUnique\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingSix\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t<div class=\"accordion-body mt-3\">
\t\t\t\t\t\t\t\tThe CCP office is located at Rue Van Eyck 22, 1000 Brussels, Belgium.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<div class=\"container mb-5\">
\t\t\t<div id=\"contact-block\" class=\"row justify-content-center\">
\t\t\t\t<svg id=\"svg-square-3\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" xmlns:svgjs=\"http://svgjs.dev/svgjs\" viewbox=\"0 0 600 600\">
\t\t\t\t\t<path d=\"M278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969C457.33257548014325,258.68392690022785,278.0978291829427,220.0895792643229,247.4840087890625,239.58299255371094C216.87018839518228,259.07640584309894,243.03583272298178,395.13781992594403,278.8827819824219,402.856689453125C314.729731241862,410.57555898030597,467.798833211263,313.1084925333659,462.5657043457031,285.8962097167969\" fill=\"hsl(103, 69%, 60%)\"></path>
\t\t\t\t\t<path d=\"M209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655C388.25524619202423 166.84250214659752 209.02049989482367 128.2481545106926 178.40667950094348 147.74156780008062C147.79285910706326 167.23498108946862 173.95850343486276 303.29639517231317 209.80545269430286 311.0152646994942C245.65240195374298 318.7341342266751 398.721503923144 221.26706777973558 393.4883750575841 194.05478496316655 \" fill-opacity=\"1\" fill=\"hsl(0, 0%, 0%)\" opacity=\"1\" stroke-opacity=\"1\" stroke-width=\"0\" stroke=\"hsl(340, 45%, 30%)\" transform=\"matrix(1,0,0,1,75,75)\"></path>
\t\t\t\t</svg>
\t\t\t\t<h2 id=\"contact-menu\" class=\"text-center mb-5 fs-1 fw-bold about-ccp\">CONTACT</h2>
\t\t\t\t<div class=\"col-lg-6 col-md-8 col-sm-10\">
\t\t\t\t\t<div class=\"custom-card-form\">
\t\t\t\t\t\t<div class=\"p-4 mt-5\">
\t\t\t\t\t\t\t{{ form_start(form, { 'attr': { 'id': 'contact-form', 'novalidate': 'novalidate' } }) }}

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"{{ form.name.vars.id }}\" class=\"form-label\" style=\"color: #fff;\">Full Name</label>
\t\t\t\t\t\t\t\t{{ form_widget(form.name, { 'attr': {'class': 'form-control', 'placeholder': 'Enter your full name'} }) }}
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">{{ form_errors(form.name) }}</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"{{ form.email.vars.id }}\" class=\"form-label\" style=\"color: #fff;\">Email Address</label>
\t\t\t\t\t\t\t\t{{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'Enter your email address'} }) }}
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">{{ form_errors(form.email) }}</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"{{ form.subject.vars.id }}\" class=\"form-label\" style=\"color: #fff;\">Subject</label>
\t\t\t\t\t\t\t\t{{ form_widget(form.subject, { 'attr': {'class': 'form-control', 'placeholder': 'Enter the subject'} }) }}
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">{{ form_errors(form.subject) }}</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label for=\"{{ form.message.vars.id }}\" class=\"form-label\" style=\"color: #fff;\">Message</label>
\t\t\t\t\t\t\t\t{{ form_widget(form.message, { 'attr': {'class': 'form-control', 'placeholder': 'Type your message here...', 'rows': '5'} }) }}
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">{{ form_errors(form.message) }}</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-check mb-3\">
\t\t\t\t\t\t\t\t{{ form_widget(form.consent, { 'attr': {'class': 'form-check-input'} }) }}
\t\t\t\t\t\t\t\t<label for=\"{{ form.consent.vars.id }}\" class=\"form-check-label\" style=\"color: #fff;\">
\t\t\t\t\t\t\t\t\tI agree to have my data collected and stored for the purpose of contacting me.
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">{{ form_errors(form.consent) }}</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<input type=\"hidden\" name=\"captcha\" value=\"test-token-valid\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100\">Send Message</button>
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t<div id=\"formModal\" class=\"modal fade{% if modal.show %} show{% endif %}\" tabindex=\"-1\" aria-labelledby=\"modalTitle\" aria-hidden=\"true\" {% if modal.show %}style=\"display: block;\"{% endif %}>
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content bg-dark text-white\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalTitle\">{{ modal.title }}</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p>{{ modal.message|raw }}</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>



\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<!--Cookies Sections-->

\t\t<!-- Cookie Consent Modal -->
\t\t\t<div id=\"cookieModal\" style=\"position: fixed; bottom: 20px; right: 20px; z-index: 1050; display: none; background: #fff; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); padding: 20px; width: 300px; text-align: center; font-family: Arial, sans-serif;\"> <div>
\t\t\t\t<img src=\"https://cdn-icons-png.flaticon.com/512/2917/2917995.png\" alt=\"Cookie Icon\" style=\"width: 50px; margin-bottom: 10px;\">
\t\t\t\t<h3 style=\"font-size: 18px; margin-bottom: 10px;\">We use cookies</h3>
\t\t\t\t<p style=\"font-size: 14px; color: #666; margin-bottom: 20px;\">This website uses cookies to ensure you get the best experience on our site.</p>
\t\t\t\t<button id=\"allowCookies\" style=\"background-color: #7e57c2; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; margin-right: 10px;\">Allow</button>
\t\t\t\t<button id=\"declineCookies\" style=\"background-color: #ccc; color: #333; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;\">Decline</button>
\t\t\t</div>
\t\t</div>


\t\t{% block footer %}{% endblock %}

\t\t<!-- Bootstrap JS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
\t\t<!-- Custom JS -->
\t\t<script src=\"{{asset ('/script.js')}}\"></script>
\t\t<!-- Font Awesome -->

\t\t<!--GCaptcha-->
\t\t<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
\t\t<script src=\"{{asset ('cookie-banner.js')}}\"></script>
\t\t<!--Cookies Sections-->

\t\t<!-- Cookie Consent Modal -->
\t\t<div id=\"cookieModal\">
\t\t\t<div>
\t\t\t\t<img src=\"https://cdn-icons-png.flaticon.com/512/2917/2917995.png\" alt=\"Cookie Icon\" style=\"width: 50px; margin-bottom: 10px;\">
\t\t\t\t<h3>We use cookies</h3>
\t\t\t\t<p>This website uses cookies to ensure you get the best experience on our site.</p>
\t\t\t\t<button id=\"allowCookies\">Allow</button>
\t\t\t\t<button id=\"declineCookies\">Decline</button>
\t\t\t</div>
\t\t</div>

\t\t<!--reCaptcha Google-->
\t\t<script src=\"https://www.google.com/recaptcha/api.js?render={{ site_key }}\"></script>
\t\t<script>
\t\t\tdocument.addEventListener('DOMContentLoaded', function () {
grecaptcha.ready(function () {
grecaptcha.execute('{{ site_key }}', {action: 'contact_form'}).then(function (token) {
document.querySelector('input[name=\"captcha\"]').value = token;
});
});
});
\t\t</script>


\t</body>

</html>
", "base.html.twig", "C:\\Users\\RamiBenSalem\\final_project\\CCP WEBSITE\\final project\\ccp_srl\\templates\\base.html.twig");
    }
}
