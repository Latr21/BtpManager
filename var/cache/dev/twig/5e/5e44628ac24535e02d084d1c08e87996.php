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

/* ouvrier/index.html.twig */
class __TwigTemplate_eda3253a973e053ba7d5ff3691f5ac09 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ouvrier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ouvrier/index.html.twig", 1);
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

        yield "Ouvriers - Liste";
        
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
        <h1 class=\"page-title\">Liste des Ouvriers</h1>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Compétence</th>
                    <th>Rôle</th>
                    <th>Planning</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ouvriers"]) || array_key_exists("ouvriers", $context) ? $context["ouvriers"] : (function () { throw new RuntimeError('Variable "ouvriers" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ouvrier"]) {
            // line 22
            yield "                    <tr>
                        <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                        <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "nomOuvrier", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "competance", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "role", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "planning", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                        <td>
                            <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Voir</a>
                            <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Éditer</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 33
        if (!$context['_iterated']) {
            // line 34
            yield "                    <tr>
                        <td colspan=\"6\">Aucun ouvrier trouvé.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ouvrier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "            </tbody>
        </table>

        <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_new");
        yield "\" class=\"btn btn-success\">Ajouter un ouvrier</a>
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
        return "ouvrier/index.html.twig";
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
        return array (  159 => 41,  154 => 38,  145 => 34,  143 => 33,  135 => 30,  131 => 29,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  107 => 22,  102 => 21,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ouvriers - Liste{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"page-title\">Liste des Ouvriers</h1>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Compétence</th>
                    <th>Rôle</th>
                    <th>Planning</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for ouvrier in ouvriers %}
                    <tr>
                        <td>{{ ouvrier.id }}</td>
                        <td>{{ ouvrier.nomOuvrier }}</td>
                        <td>{{ ouvrier.competance }}</td>
                        <td>{{ ouvrier.role }}</td>
                        <td>{{ ouvrier.planning }}</td>
                        <td>
                            <a href=\"{{ path('app_ouvrier_show', {'id': ouvrier.id}) }}\" class=\"btn btn-info\">Voir</a>
                            <a href=\"{{ path('app_ouvrier_edit', {'id': ouvrier.id}) }}\" class=\"btn btn-warning\">Éditer</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\">Aucun ouvrier trouvé.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <a href=\"{{ path('app_ouvrier_new') }}\" class=\"btn btn-success\">Ajouter un ouvrier</a>
    </div>
{% endblock %}
", "ouvrier/index.html.twig", "C:\\Users\\helal\\BtpManager\\templates\\ouvrier\\index.html.twig");
    }
}
