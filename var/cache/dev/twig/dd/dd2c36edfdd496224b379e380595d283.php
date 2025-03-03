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

/* ouvrier/show.html.twig */
class __TwigTemplate_85fea8e37485218d28d1228475939f0b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ouvrier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ouvrier/show.html.twig", 1);
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

        yield "Détails Ouvrier";
        
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
        yield "    <div class=\"container\">
        <h1 class=\"page-title\">Détails de l'Ouvrier</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 17, $this->source); })()), "nomOuvrier", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Compétence</th>
                    <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 21, $this->source); })()), "competance", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Rôle</th>
                    <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 25, $this->source); })()), "role", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Planning</th>
                    <td>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 29, $this->source); })()), "planning", [], "any", false, false, false, 29), "html", null, true);
        yield "</td>
                </tr>
            </tbody>
        </table>

        <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
        <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
        ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "ouvrier/_delete_form.html.twig");
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
        return "ouvrier/show.html.twig";
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
        return array (  138 => 36,  134 => 35,  130 => 34,  122 => 29,  115 => 25,  108 => 21,  101 => 17,  94 => 13,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails Ouvrier{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"page-title\">Détails de l'Ouvrier</h1>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ ouvrier.id }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ ouvrier.nomOuvrier }}</td>
                </tr>
                <tr>
                    <th>Compétence</th>
                    <td>{{ ouvrier.competance }}</td>
                </tr>
                <tr>
                    <th>Rôle</th>
                    <td>{{ ouvrier.role }}</td>
                </tr>
                <tr>
                    <th>Planning</th>
                    <td>{{ ouvrier.planning }}</td>
                </tr>
            </tbody>
        </table>

        <a href=\"{{ path('app_ouvrier_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
        <a href=\"{{ path('app_ouvrier_edit', {'id': ouvrier.id}) }}\" class=\"btn btn-warning\">Modifier</a>
        {{ include('ouvrier/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "ouvrier/show.html.twig", "C:\\Users\\helal\\BtpManager\\templates\\ouvrier\\show.html.twig");
    }
}
