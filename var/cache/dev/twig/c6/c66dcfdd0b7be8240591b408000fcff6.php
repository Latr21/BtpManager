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

/* affectation/index.html.twig */
class __TwigTemplate_6663503f3323ed0c9ec6197d87ab99fe extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "affectation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "affectation/index.html.twig", 1);
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

        yield "Affectation index";
        
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
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["affectations"]) || array_key_exists("affectations", $context) ? $context["affectations"] : (function () { throw new RuntimeError('Variable "affectations" does not exist.', 6, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["affectation"]) {
            // line 7
            yield "        <div class=\"card shadow-lg border-0\">
        ";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "chantier", [], "any", false, false, false, 8), "image", [], "any", false, false, false, 8)) {
                // line 9
                yield "            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "chantier", [], "any", false, false, false, 9), "image", [], "any", false, false, false, 9))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Image du Chantier\">
        ";
            } else {
                // line 11
                yield "            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/default-placeholder.png"), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Pas d'image\">
        ";
            }
            // line 13
            yield "            <div class=\"card-body\">
                <h4 class=\"card-title text-primary\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "nom", [], "any", false, false, false, 14), "html", null, true);
            yield "</h4>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\"><strong>Equipe :</strong> ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "equipe", [], "any", false, false, false, 16), "nomEquipe", [], "any", false, false, false, 16), "html", null, true);
            yield "</li>
                    <li class=\"list-group-item\"><strong>Chantier :</strong> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "chantier", [], "any", false, false, false, 17), "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "</li>
                    <li class=\"list-group-item\"><strong>Date de Début :</strong> ";
            // line 18
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateDebut", [], "any", false, false, false, 18)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateDebut", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</li>
                    <li class=\"list-group-item\"><strong>Date de Fin :</strong> ";
            // line 19
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateFin", [], "any", false, false, false, 19)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateFin", [], "any", false, false, false, 19), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</li>
                </ul>
            </div>
        </div>

        <div class=\"mt-4 text-center\">
            <a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_index");
            yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                <i class=\"fas fa-eye\"></i> Show
            </a>
            <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 35
        if (!$context['_iterated']) {
            // line 36
            yield "        <div class=\"alert alert-warning\">No records found</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['affectation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
    <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_new");
        yield "\" class=\"btn btn-primary\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "affectation/index.html.twig";
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
        return array (  170 => 39,  167 => 38,  160 => 36,  158 => 35,  149 => 31,  143 => 28,  137 => 25,  128 => 19,  124 => 18,  120 => 17,  116 => 16,  111 => 14,  108 => 13,  102 => 11,  96 => 9,  94 => 8,  91 => 7,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Affectation index{% endblock %}

{% block body %}
    {% for affectation in affectations %}
        <div class=\"card shadow-lg border-0\">
        {% if affectation.chantier.image %}
            <img src=\"{{ asset('uploads/images/' ~ affectation.chantier.image) }}\" class=\"card-img-top\" alt=\"Image du Chantier\">
        {% else %}
            <img src=\"{{ asset('uploads/images/default-placeholder.png') }}\" class=\"card-img-top\" alt=\"Pas d'image\">
        {% endif %}
            <div class=\"card-body\">
                <h4 class=\"card-title text-primary\">{{ affectation.nom }}</h4>
                <ul class=\"list-group list-group-flush\">
                    <li class=\"list-group-item\"><strong>Equipe :</strong> {{ affectation.equipe.nomEquipe }}</li>
                    <li class=\"list-group-item\"><strong>Chantier :</strong> {{ affectation.chantier.nom }}</li>
                    <li class=\"list-group-item\"><strong>Date de Début :</strong> {{ affectation.dateDebut ? affectation.dateDebut|date('d/m/Y') : '-' }}</li>
                    <li class=\"list-group-item\"><strong>Date de Fin :</strong> {{ affectation.dateFin ? affectation.dateFin|date('d/m/Y') : '-' }}</li>
                </ul>
            </div>
        </div>

        <div class=\"mt-4 text-center\">
            <a href=\"{{ path('app_affectation_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
            </a>
            <a href=\"{{ path('app_affectation_show', {'id': affectation.id}) }}\" class=\"btn btn-warning\">
                <i class=\"fas fa-eye\"></i> Show
            </a>
            <a href=\"{{ path('app_affectation_edit', {'id': affectation.id}) }}\" class=\"btn btn-warning\">
                <i class=\"fas fa-edit\"></i> Modifier
            </a>
        </div>
    {% else %}
        <div class=\"alert alert-warning\">No records found</div>
    {% endfor %}

    <a href=\"{{ path('app_affectation_new') }}\" class=\"btn btn-primary\">Create new</a>
{% endblock %}", "affectation/index.html.twig", "/Users/hugo/Documents/IPSSI/2024 - 2025/UE 3 - Préparer le déploiment d'une application sécurisée/1 - Masterclass test unitaire PHP & JavaScript/BtpManager/templates/affectation/index.html.twig");
    }
}
