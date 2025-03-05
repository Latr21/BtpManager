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
        padding: 120px 20px;
        margin-bottom: 30px;
        border-radius: 10px;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    .card {
        transition: transform 0.3s ease-in-out;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 35
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        yield "
<header class=\"hero\">
    <div class=\"container\">
        <h1>Bienvenue sur la gestion des équipes et chantiers</h1>
        <p>Gérez facilement vos équipes, chantiers, ouvriers et affectations.</p>
    </div>
</header>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Équipes</h5>
                    <p class=\"card-text\">Gérez les équipes travaillant sur vos projets.</p>
                    <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipe_index");
        yield "\" class=\"btn btn-primary w-100\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Chantiers</h5>
                    <p class=\"card-text\">Consultez la liste des chantiers en cours.</p>
                    <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_index");
        yield "\" class=\"btn btn-primary w-100\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Affectations</h5>
                    <p class=\"card-text\">Suivez les affectations de vos ouvriers.</p>
                    <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_index");
        yield "\" class=\"btn btn-primary w-100\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Ouvriers</h5>
                    <p class=\"card-text\">Gérez vos ouvriers et leurs compétences.</p>
                    <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_index");
        yield "\" class=\"btn btn-primary w-100\">Voir</a>
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
        return array (  184 => 78,  172 => 69,  160 => 60,  148 => 51,  131 => 36,  121 => 35,  86 => 6,  76 => 5,  59 => 3,  42 => 1,);
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
        padding: 120px 20px;
        margin-bottom: 30px;
        border-radius: 10px;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    .card {
        transition: transform 0.3s ease-in-out;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card:hover {
        transform: scale(1.05);
    }
    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
    }
</style>
{% endblock %}

{% block body %}

<header class=\"hero\">
    <div class=\"container\">
        <h1>Bienvenue sur la gestion des équipes et chantiers</h1>
        <p>Gérez facilement vos équipes, chantiers, ouvriers et affectations.</p>
    </div>
</header>

<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Équipes</h5>
                    <p class=\"card-text\">Gérez les équipes travaillant sur vos projets.</p>
                    <a href=\"{{ path('app_equipe_index') }}\" class=\"btn btn-primary w-100\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Chantiers</h5>
                    <p class=\"card-text\">Consultez la liste des chantiers en cours.</p>
                    <a href=\"{{ path('app_chantier_index') }}\" class=\"btn btn-primary w-100\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Affectations</h5>
                    <p class=\"card-text\">Suivez les affectations de vos ouvriers.</p>
                    <a href=\"{{ path('app_affectation_index') }}\" class=\"btn btn-primary w-100\">Voir</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 mb-4\">
            <div class=\"card text-center shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Ouvriers</h5>
                    <p class=\"card-text\">Gérez vos ouvriers et leurs compétences.</p>
                    <a href=\"{{ path('app_ouvrier_index') }}\" class=\"btn btn-primary w-100\">Voir</a>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\helal\\BtpManager\\templates\\home\\index.html.twig");
    }
}
