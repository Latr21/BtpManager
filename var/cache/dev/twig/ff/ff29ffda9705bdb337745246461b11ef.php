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
class __TwigTemplate_a4fd9c1a8794af121983c104e26fbe74 extends Template
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

        yield "Liste des Ouvriers";
        
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
        <h1 class=\"my-4\">Liste des Ouvriers</h1>

        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_new");
        yield "\" class=\"btn btn-primary mb-3\">Créer un Nouvel Ouvrier</a>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom de l'Ouvrier</th>
                    <th>Compétence</th>
                    <th>Rôle</th>
                    <th>Planning</th>
                    <th>Équipe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ouvriers"]) || array_key_exists("ouvriers", $context) ? $context["ouvriers"] : (function () { throw new RuntimeError('Variable "ouvriers" does not exist.', 24, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ouvrier"]) {
            // line 25
            yield "                    <tr>
                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "nomOuvrier", [], "any", false, false, false, 27), "html", null, true);
            yield "</td> <!-- Utilisez le getter nomOuvrier() -->
                        <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "competance", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                        <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "role", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "planning", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                        <td>";
            // line 31
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "equipe", [], "any", false, true, false, 31), "nom", [], "any", true, true, false, 31) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "equipe", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "equipe", [], "any", false, false, false, 31), "nom", [], "any", false, false, false, 31), "html", null, true)) : ("Aucune équipe"));
            yield "</td>
                        <td>
                            <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet ouvrier ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 36))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 42
            yield "                    <tr>
                        <td colspan=\"7\">Aucun ouvrier trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ouvrier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "            </tbody>
        </table>
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
        return array (  174 => 46,  165 => 42,  163 => 41,  153 => 36,  149 => 35,  145 => 34,  141 => 33,  136 => 31,  132 => 30,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  113 => 25,  108 => 24,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Ouvriers{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"my-4\">Liste des Ouvriers</h1>

        <a href=\"{{ path('app_ouvrier_new') }}\" class=\"btn btn-primary mb-3\">Créer un Nouvel Ouvrier</a>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom de l'Ouvrier</th>
                    <th>Compétence</th>
                    <th>Rôle</th>
                    <th>Planning</th>
                    <th>Équipe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for ouvrier in ouvriers %}
                    <tr>
                        <td>{{ ouvrier.id }}</td>
                        <td>{{ ouvrier.nomOuvrier }}</td> <!-- Utilisez le getter nomOuvrier() -->
                        <td>{{ ouvrier.competance }}</td>
                        <td>{{ ouvrier.role }}</td>
                        <td>{{ ouvrier.planning }}</td>
                        <td>{{ ouvrier.equipe.nom ?? 'Aucune équipe' }}</td>
                        <td>
                            <a href=\"{{ path('app_ouvrier_show', {'id': ouvrier.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                            <a href=\"{{ path('app_ouvrier_edit', {'id': ouvrier.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                            <form method=\"post\" action=\"{{ path('app_ouvrier_delete', {'id': ouvrier.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet ouvrier ?');\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ ouvrier.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\">Aucun ouvrier trouvé</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "ouvrier/index.html.twig", "C:\\Users\\mayac\\BtpManager\\templates\\ouvrier\\index.html.twig");
    }
}
