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
class __TwigTemplate_cf47f76eaa933ad0c5f35260510d7a41 extends Template
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

        yield "Détails de l'Ouvrier";
        
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
        <h1 class=\"my-4 text-center text-primary\">Détails de l'Ouvrier</h1>

        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <table class=\"table table-bordered table-hover\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Nom de l'Ouvrier</th>
                            <td>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 19, $this->source); })()), "nomOuvrier", [], "any", false, false, false, 19), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Compétence</th>
                            <td>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 24, $this->source); })()), "competences", [], "any", false, false, false, 24));
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
            // line 25
            yield "                                    <span class=\"badge bg-info text-dark\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["competence"], "html", null, true);
            yield "</span>";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 25)) {
                yield ", ";
            }
            // line 26
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
            // line 27
            yield "                                    <span class=\"badge bg-secondary\">Aucune compétence</span>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['competence'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "                            </td>
                        </tr>
                        <tr>
                            <th>Rôle</th>
                            <td>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 33, $this->source); })()), "role", [], "any", false, false, false, 33), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Équipe</th>
                            <td>";
        // line 37
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ouvrier"] ?? null), "equipe", [], "any", false, true, false, 37), "nom", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 37, $this->source); })()), "equipe", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 37, $this->source); })()), "equipe", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true)) : ("Aucune équipe"));
        yield "</td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex justify-content-between mt-4\">
                    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_index");
        yield "\" class=\"btn btn-secondary\">Retour à la liste</a>
                    <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
                </div>

                ";
        // line 47
        yield Twig\Extension\CoreExtension::include($this->env, $context, "ouvrier/_delete_form.html.twig");
        yield "
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
        return array (  188 => 47,  182 => 44,  178 => 43,  169 => 37,  162 => 33,  156 => 29,  149 => 27,  136 => 26,  129 => 25,  111 => 24,  103 => 19,  96 => 15,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'Ouvrier{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"my-4 text-center text-primary\">Détails de l'Ouvrier</h1>

        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <table class=\"table table-bordered table-hover\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ ouvrier.id }}</td>
                        </tr>
                        <tr>
                            <th>Nom de l'Ouvrier</th>
                            <td>{{ ouvrier.nomOuvrier }}</td>
                        </tr>
                        <tr>
                            <th>Compétence</th>
                            <td>
                                {% for competence in ouvrier.competences %}
                                    <span class=\"badge bg-info text-dark\">{{ competence }}</span>{% if not loop.last %}, {% endif %}
                                {% else %}
                                    <span class=\"badge bg-secondary\">Aucune compétence</span>
                                {% endfor %}
                            </td>
                        </tr>
                        <tr>
                            <th>Rôle</th>
                            <td>{{ ouvrier.role }}</td>
                        </tr>
                        <tr>
                            <th>Équipe</th>
                            <td>{{ ouvrier.equipe.nom ?? 'Aucune équipe' }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class=\"d-flex justify-content-between mt-4\">
                    <a href=\"{{ path('app_ouvrier_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
                    <a href=\"{{ path('app_ouvrier_edit', {'id': ouvrier.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                </div>

                {{ include('ouvrier/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}
", "ouvrier/show.html.twig", "C:\\Users\\helal\\BtpManager\\templates\\ouvrier\\show.html.twig");
    }
}
