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

/* affectation/show.html.twig */
class __TwigTemplate_7a0001e197c6066d72065229096cca74 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affectation/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "affectation/show.html.twig", 1);
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

        yield "Affectation des équipes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\">Affectation</h2>

    <div class=\"card shadow-lg border-0\">
        <div class=\"card-body\">
            <h4 class=\"card-title text-primary\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), "html", null, true);
        yield "</h4>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Equipe :</strong> ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 13, $this->source); })()), "equipe", [], "any", false, false, false, 13), "nomEquipe", [], "any", false, false, false, 13), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Chantier :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 14, $this->source); })()), "chantier", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Date de Début :</strong> ";
        // line 15
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 15, $this->source); })()), "dateDebut", [], "any", false, false, false, 15)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 15, $this->source); })()), "dateDebut", [], "any", false, false, false, 15), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</li>
                <li class=\"list-group-item\"><strong>Date de Fin :</strong> ";
        // line 16
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 16, $this->source); })()), "dateFin", [], "any", false, false, false, 16)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 16, $this->source); })()), "dateFin", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</li>
            </ul>
        </div>
    </div>

        <div class=\"mt-4 text-center\">
        <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["affectation"]) || array_key_exists("affectation", $context) ? $context["affectation"] : (function () { throw new RuntimeError('Variable "affectation" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
        ";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "affectation/_delete_form.html.twig");
        yield "
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
        return "affectation/show.html.twig";
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
        return array (  130 => 28,  124 => 25,  118 => 22,  109 => 16,  105 => 15,  101 => 14,  97 => 13,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Affectation des équipes{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\">Affectation</h2>

    <div class=\"card shadow-lg border-0\">
        <div class=\"card-body\">
            <h4 class=\"card-title text-primary\">{{ affectation.nom }}</h4>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Equipe :</strong> {{ affectation.equipe.nomEquipe }}</li>
                <li class=\"list-group-item\"><strong>Chantier :</strong> {{ affectation.chantier.nom}}</li>
                <li class=\"list-group-item\"><strong>Date de Début :</strong> {{ affectation.dateDebut ? affectation.dateDebut|date('d/m/Y') : '-' }}</li>
                <li class=\"list-group-item\"><strong>Date de Fin :</strong> {{ affectation.dateFin ? affectation.dateFin|date('d/m/Y') : '-' }}</li>
            </ul>
        </div>
    </div>

        <div class=\"mt-4 text-center\">
        <a href=\"{{ path('app_affectation_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"{{ path('app_affectation_edit', {'id': affectation.id}) }}\" class=\"btn btn-warning\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
        {{ include('affectation/_delete_form.html.twig') }}
    </div>
{% endblock %}", "affectation/show.html.twig", "/Users/hugo/Documents/IPSSI/2024 - 2025/UE 3 - Préparer le déploiment d'une application sécurisée/1 - Masterclass test unitaire PHP & JavaScript/BtpManager/templates/affectation/show.html.twig");
    }
}
