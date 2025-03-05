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

/* chantier/index.html.twig */
class __TwigTemplate_7f38d9035f8fc56a79d0152dd8545d66 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chantier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chantier/index.html.twig", 1);
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

        yield "Liste des Chantiers";
        
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
    <h1 class=\"text-center mb-4\">🏗️ Liste des Chantiers</h1>

    <!-- Barre de recherche -->
    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"🔍 Rechercher un chantier...\">
        </div>
        <div class=\"col-md-6 text-end\">
            <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un Chantier
            </a>
        </div>
    </div>

    <!-- Affichage sous forme de cartes -->
    <div class=\"row\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 24
            yield "            <div class=\"col-md-4\">
                <div class=\"card shadow-lg mb-4 border-0\">
                    ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "image", [], "any", false, false, false, 26)) {
                // line 27
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "image", [], "any", false, false, false, 27))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Image du Chantier\">
                    ";
            } else {
                // line 29
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/default-placeholder.png"), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Pas d'image\">
                    ";
            }
            // line 31
            yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "</h5>
                        <p class=\"text-muted\">
                            <i class=\"fas fa-users\"></i> Effectif requis : <strong>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "effectifRequis", [], "any", false, false, false, 34), "html", null, true);
            yield "</strong>
                        </p>
                        <p>
                            📅 Début : <strong>";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateDebut", [], "any", false, false, false, 37)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateDebut", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</strong><br>
                            ⏳ Fin : <strong>";
            // line 38
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateFin", [], "any", false, false, false, 38)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateFin", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</strong>
                        </p>
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chantier_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            ";
            // line 47
            yield Twig\Extension\CoreExtension::include($this->env, $context, "chantier/_delete_form.html.twig");
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
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
        // line 52
        if (!$context['_iterated']) {
            // line 53
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">🚧 Aucun chantier disponible.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "    </div>
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
        return "chantier/index.html.twig";
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
        return array (  208 => 57,  199 => 53,  197 => 52,  179 => 47,  173 => 44,  167 => 41,  161 => 38,  157 => 37,  151 => 34,  146 => 32,  143 => 31,  137 => 29,  131 => 27,  129 => 26,  125 => 24,  107 => 23,  96 => 15,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Chantiers{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">🏗️ Liste des Chantiers</h1>

    <!-- Barre de recherche -->
    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"search\" class=\"form-control\" placeholder=\"🔍 Rechercher un chantier...\">
        </div>
        <div class=\"col-md-6 text-end\">
            <a href=\"{{ path('app_chantier_new') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Ajouter un Chantier
            </a>
        </div>
    </div>

    <!-- Affichage sous forme de cartes -->
    <div class=\"row\">
        {% for chantier in chantiers %}
            <div class=\"col-md-4\">
                <div class=\"card shadow-lg mb-4 border-0\">
                    {% if chantier.image %}
                        <img src=\"{{ asset('uploads/images/' ~ chantier.image) }}\" class=\"card-img-top\" alt=\"Image du Chantier\">
                    {% else %}
                        <img src=\"{{ asset('uploads/images/default-placeholder.png') }}\" class=\"card-img-top\" alt=\"Pas d'image\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">{{ chantier.nom }}</h5>
                        <p class=\"text-muted\">
                            <i class=\"fas fa-users\"></i> Effectif requis : <strong>{{ chantier.effectifRequis }}</strong>
                        </p>
                        <p>
                            📅 Début : <strong>{{ chantier.dateDebut ? chantier.dateDebut|date('d/m/Y') : '-' }}</strong><br>
                            ⏳ Fin : <strong>{{ chantier.dateFin ? chantier.dateFin|date('d/m/Y') : '-' }}</strong>
                        </p>
                        <div class=\"d-flex justify-content-between\">
                            <a href=\"{{ path('app_chantier_show', {'id': chantier.id}) }}\" class=\"btn btn-info btn-sm\">
                                <i class=\"fas fa-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('app_chantier_edit', {'id': chantier.id}) }}\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            {{ include('chantier/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">🚧 Aucun chantier disponible.</p>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "chantier/index.html.twig", "/Users/hugo/Documents/IPSSI/2024 - 2025/UE 3 - Préparer le déploiment d'une application sécurisée/1 - Masterclass test unitaire PHP & JavaScript/BtpManager/templates/chantier/index.html.twig");
    }
}
