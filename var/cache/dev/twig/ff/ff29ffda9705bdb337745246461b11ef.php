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
        <h1 class=\"my-4 text-primary\">Liste des Ouvriers</h1>

        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_new");
        yield "\" class=\"btn btn-primary mb-3\">Créer un Nouvel Ouvrier</a>

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom de l'Ouvrier</th>
                        <th>Compétence</th>
                        <th>Rôle</th>
                        <th>Equipe</th>
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
            yield "                        <tr>
                            <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                            <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "nomOuvrier", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "competences", [], "any", false, false, false, 29));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
                // line 30
                yield "                                    <span class=\"badge bg-info text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["competence"], "html", null, true);
                yield "</span>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                    yield ", ";
                }
                // line 31
                yield "                                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 32
                yield "                                    Aucune compétence
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent'], $context['_iterated'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "                            </td>
                            <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "role", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                            <td>";
            // line 36
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "equipe", [], "any", false, true, false, 36), "nom", [], "any", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "equipe", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "equipe", [], "any", false, false, false, 36), "nom", [], "any", false, false, false, 36), "html", null, true)) : ("Aucune équipe"));
            yield "</td>
                            <td>
                                <a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                                <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <form method=\"post\" action=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ouvrier"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet ouvrier ?');\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center\">Aucun ouvrier trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ouvrier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "                </tbody>
            </table>
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
        return array (  211 => 50,  202 => 46,  200 => 45,  190 => 40,  186 => 39,  182 => 38,  177 => 36,  173 => 35,  170 => 34,  163 => 32,  150 => 31,  143 => 30,  125 => 29,  120 => 27,  116 => 26,  113 => 25,  108 => 24,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Ouvriers{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"my-4 text-primary\">Liste des Ouvriers</h1>

        <a href=\"{{ path('app_ouvrier_new') }}\" class=\"btn btn-primary mb-3\">Créer un Nouvel Ouvrier</a>

        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom de l'Ouvrier</th>
                        <th>Compétence</th>
                        <th>Rôle</th>
                        <th>Equipe</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for ouvrier in ouvriers %}
                        <tr>
                            <td>{{ ouvrier.id }}</td>
                            <td>{{ ouvrier.nomOuvrier }}</td>
                            <td>
                                {% for competence in ouvrier.competences %}
                                    <span class=\"badge bg-info text-dark\">{{ competence }}</span>{% if not loop.last %}, {% endif %}
                                {% else %}
                                    Aucune compétence
                                {% endfor %}
                            </td>
                            <td>{{ ouvrier.role }}</td>
                            <td>{{ ouvrier.equipe.nom ?? 'Aucune équipe' }}</td>
                            <td>
                                <a href=\"{{ path('app_ouvrier_show', {'id': ouvrier.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                                <a href=\"{{ path('app_ouvrier_edit', {'id': ouvrier.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                <form method=\"post\" action=\"{{ path('app_ouvrier_delete', {'id': ouvrier.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet ouvrier ?');\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" class=\"text-center\">Aucun ouvrier trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "ouvrier/index.html.twig", "C:\\Users\\helal\\BtpManager\\templates\\ouvrier\\index.html.twig");
    }
}
