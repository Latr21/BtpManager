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

/* home/index.html.twig */
class __TwigTemplate_526455eef5d1f48ffb002144cc979163 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<style>
    .hero {
        background: url('https://source.unsplash.com/1600x900/?construction,team') no-repeat center center;
        background-size: cover;
        color: white;
        text-align: center;
        padding: 100px 20px;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    .card {
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.05);
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Mon Application</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
        yield "\">Équipes</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_index");
        yield "\">Chantiers</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_index");
        yield "\">Affectations</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_index");
        yield "\">Ouvriers</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class=\"hero\">
    <div class=\"container\">
        <h1>Bienvenue sur la gestion des équipes et chantiers</h1>
        <p>Gérez facilement vos équipes, chantiers, ouvriers et affectations.</p>
    </div>
</header>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Équipes</h5>
                    <p class=\"card-text\">Gérez les équipes travaillant sur vos projets.</p>
                    <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
        yield "\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Chantiers</h5>
                    <p class=\"card-text\">Consultez la liste des chantiers en cours.</p>
                    <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_index");
        yield "\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Affectations</h5>
                    <p class=\"card-text\">Suivez les affectations de vos ouvriers.</p>
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_index");
        yield "\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Ouvriers</h5>
                    <p class=\"card-text\">Gérez vos ouvriers et leurs compétences.</p>
                    <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_index");
        yield "\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  207 => 86,  195 => 77,  183 => 68,  171 => 59,  148 => 39,  144 => 38,  140 => 37,  136 => 36,  127 => 30,  123 => 28,  113 => 27,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block stylesheets %}
<style>
    .hero {
        background: url('https://source.unsplash.com/1600x900/?construction,team') no-repeat center center;
        background-size: cover;
        color: white;
        text-align: center;
        padding: 100px 20px;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    .card {
        transition: transform 0.3s ease-in-out;
    }
    .card:hover {
        transform: scale(1.05);
    }
</style>
{% endblock %}

{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Mon Application</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_equipe_index') }}\">Équipes</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_chantier_index') }}\">Chantiers</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_affectation_index') }}\">Affectations</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_ouvrier_index') }}\">Ouvriers</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class=\"hero\">
    <div class=\"container\">
        <h1>Bienvenue sur la gestion des équipes et chantiers</h1>
        <p>Gérez facilement vos équipes, chantiers, ouvriers et affectations.</p>
    </div>
</header>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Équipes</h5>
                    <p class=\"card-text\">Gérez les équipes travaillant sur vos projets.</p>
                    <a href=\"{{ path('app_equipe_index') }}\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Chantiers</h5>
                    <p class=\"card-text\">Consultez la liste des chantiers en cours.</p>
                    <a href=\"{{ path('app_chantier_index') }}\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Affectations</h5>
                    <p class=\"card-text\">Suivez les affectations de vos ouvriers.</p>
                    <a href=\"{{ path('app_affectation_index') }}\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"card text-center\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Ouvriers</h5>
                    <p class=\"card-text\">Gérez vos ouvriers et leurs compétences.</p>
                    <a href=\"{{ path('app_ouvrier_index') }}\" class=\"btn btn-primary\">Voir</a>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\mayac\\BtpManager\\templates\\home\\index.html.twig");
    }
}
