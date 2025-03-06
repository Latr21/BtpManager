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

/* chantier/edit.html.twig */
class __TwigTemplate_0ef07aa17e6ffc6cc7f12cd453f00887 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chantier/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chantier/edit.html.twig", 1);
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

        yield "Modifier un Chantier";
        
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
    <h2 class=\"text-center mb-4\">✏️ Modifier le Chantier</h2>

    <div class=\"card shadow-lg border-0\">
        <div class=\"card-body\">
            ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 11, $this->source); })()), "image", [], "any", false, false, false, 11)) {
            // line 12
            yield "                <div class=\"text-center mb-3\">
                    <img src=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["chantier"]) || array_key_exists("chantier", $context) ? $context["chantier"] : (function () { throw new RuntimeError('Variable "chantier" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" class=\"img-fluid rounded shadow\" alt=\"Image du Chantier\">
                </div>
            ";
        } else {
            // line 16
            yield "                <p class=\"text-center text-muted\">Pas d'image disponible</p>
            ";
        }
        // line 18
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "chantier/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
        </div>
    </div>

    <div class=\"mt-4 text-center\">
        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        ";
        // line 26
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
        return "chantier/edit.html.twig";
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
        return array (  122 => 26,  116 => 23,  107 => 18,  103 => 16,  97 => 13,  94 => 12,  92 => 11,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un Chantier{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\">✏️ Modifier le Chantier</h2>

    <div class=\"card shadow-lg border-0\">
        <div class=\"card-body\">
            {% if chantier.image %}
                <div class=\"text-center mb-3\">
                    <img src=\"{{ asset('uploads/images/' ~ chantier.image) }}\" class=\"img-fluid rounded shadow\" alt=\"Image du Chantier\">
                </div>
            {% else %}
                <p class=\"text-center text-muted\">Pas d'image disponible</p>
            {% endif %}
            {{ include('chantier/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
        </div>
    </div>

    <div class=\"mt-4 text-center\">
        <a href=\"{{ path('app_chantier_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
        </a>
        {{ include('chantier/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}", "chantier/edit.html.twig", "/Users/louneshelali/BtpManager/templates/chantier/edit.html.twig");
    }
}
