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

/* chantier/show.html.twig */
class __TwigTemplate_9b11213271138c4fee0e4e814e871413 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chantier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chantier/show.html.twig", 1);
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

        yield "Détails du Chantier";
        
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
        yield "<div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\">🏗️ Détails du Chantier</h2>

    <div class=\"card shadow-lg border-0\">
        ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10)) {
            // line 11
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Image du Chantier\">
        ";
        } else {
            // line 13
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/default-placeholder.png"), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Pas d'image\">
        ";
        }
        // line 15
        yield "        <div class=\"card-body\">
            <h4 class=\"card-title text-primary\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
        yield "</h4>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Effectif Requis :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 18, $this->source); })()), "effectifRequis", [], "any", false, false, false, 18), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Chantier Prérequis :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["chantier"] ?? null), "chantierPrerequis", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 19, $this->source); })()), "chantierPrerequis", [], "any", false, false, false, 19), "-")) : ("-")), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\"><strong>Date de Début :</strong> ";
        // line 20
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 20, $this->source); })()), "dateDebut", [], "any", false, false, false, 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 20, $this->source); })()), "dateDebut", [], "any", false, false, false, 20), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</li>
                <li class=\"list-group-item\"><strong>Date de Fin :</strong> ";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 21, $this->source); })()), "dateFin", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 21, $this->source); })()), "dateFin", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true)) : ("-"));
        yield "</li>
            </ul>
        </div>
    </div>

    <div class=\"mt-4 text-center\">
        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
        ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "chantier/_delete_form.html.twig");
        yield "
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
        return "chantier/show.html.twig";
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
        return array (  146 => 33,  140 => 30,  134 => 27,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  108 => 16,  105 => 15,  99 => 13,  93 => 11,  91 => 10,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Chantier{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\">🏗️ Détails du Chantier</h2>

    <div class=\"card shadow-lg border-0\">
        {% if chantier.image %}
            <img src=\"{{ asset('uploads/images/' ~ chantier.image) }}\" class=\"card-img-top\" alt=\"Image du Chantier\">
        {% else %}
            <img src=\"{{ asset('uploads/images/default-placeholder.png') }}\" class=\"card-img-top\" alt=\"Pas d'image\">
        {% endif %}
        <div class=\"card-body\">
            <h4 class=\"card-title text-primary\">{{ chantier.nom }}</h4>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\"><strong>Effectif Requis :</strong> {{ chantier.effectifRequis }}</li>
                <li class=\"list-group-item\"><strong>Chantier Prérequis :</strong> {{ chantier.chantierPrerequis|default('-') }}</li>
                <li class=\"list-group-item\"><strong>Date de Début :</strong> {{ chantier.dateDebut ? chantier.dateDebut|date('d/m/Y') : '-' }}</li>
                <li class=\"list-group-item\"><strong>Date de Fin :</strong> {{ chantier.dateFin ? chantier.dateFin|date('d/m/Y') : '-' }}</li>
            </ul>
        </div>
    </div>

    <div class=\"mt-4 text-center\">
        <a href=\"{{ path('app_chantier_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        <a href=\"{{ path('app_chantier_edit', {'id': chantier.id}) }}\" class=\"btn btn-warning\">
            <i class=\"fas fa-edit\"></i> Modifier
        </a>
        {{ include('chantier/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}", "chantier/show.html.twig", "/Users/louneshelali/BtpManager/templates/chantier/show.html.twig");
    }
}
