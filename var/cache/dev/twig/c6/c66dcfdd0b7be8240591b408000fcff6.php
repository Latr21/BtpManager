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
        yield "    <h1 class=\"text-primary mt-5 mb-3\">Liste des chantiers</h1>
    <div class=\"row\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chantiers"]) || array_key_exists("chantiers", $context) ? $context["chantiers"] : (function () { throw new RuntimeError('Variable "chantiers" does not exist.', 8, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["chantier"]) {
            // line 9
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-lg border-0\">
                    ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "image", [], "any", false, false, false, 11)) {
                // line 12
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "image", [], "any", false, false, false, 12))), "html", null, true);
                yield "\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Image du Chantier\">
                    ";
            } else {
                // line 14
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/default-placeholder.png"), "html", null, true);
                yield "\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Pas d'image\">
                    ";
            }
            // line 16
            yield "                    <div class=\"card-body\">
                        <h4 class=\"card-title text-primary\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "nom", [], "any", false, false, false, 17), "html", null, true);
            yield "</h4>
                        <p class=\"text-muted\">
                            <i class=\"fas fa-users\"></i> Effectif requis : <strong>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "effectifRequis", [], "any", false, false, false, 19), "html", null, true);
            yield "</strong>
                        </p>
                        <p>
                            📅 Début : <strong>";
            // line 22
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateDebut", [], "any", false, false, false, 22)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateDebut", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</strong><br>
                            ⏳ Fin : <strong>";
            // line 23
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateFin", [], "any", false, false, false, 23)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "dateFin", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</strong>
                        </p>
                    </div>
                        <a href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["chantier"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-user-plus\"></i> Affecter
                        </a>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">🚧 Aucun chantier disponible.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['chantier'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    </div>

    <h1 class=\"text-primary mt-5 mb-3\">Liste des affectations</h1>
    <div class=\"row\">
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["affectations"]) || array_key_exists("affectations", $context) ? $context["affectations"] : (function () { throw new RuntimeError('Variable "affectations" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["affectation"]) {
            // line 41
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-lg border-0\">
                    ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "chantier", [], "any", false, false, false, 43), "image", [], "any", false, false, false, 43)) {
                // line 44
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "chantier", [], "any", false, false, false, 44), "image", [], "any", false, false, false, 44))), "html", null, true);
                yield "\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Image du Chantier\">
                    ";
            } else {
                // line 46
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/default-placeholder.png"), "html", null, true);
                yield "\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Pas d'image\">
                    ";
            }
            // line 48
            yield "                    <div class=\"card-body\">
                        <h4 class=\"card-title text-primary\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "nom", [], "any", false, false, false, 49), "html", null, true);
            yield "</h4>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\"><strong>Equipe :</strong> ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "equipe", [], "any", false, false, false, 51), "nomEquipe", [], "any", false, false, false, 51), "html", null, true);
            yield "</li>
                            <li class=\"list-group-item\"><strong>Chantier :</strong> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "chantier", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            yield "</li>
                            <li class=\"list-group-item\"><strong>Date de Début :</strong> ";
            // line 53
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateDebut", [], "any", false, false, false, 53)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateDebut", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</li>
                            <li class=\"list-group-item\"><strong>Date de Fin :</strong> ";
            // line 54
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateFin", [], "any", false, false, false, 54)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "dateFin", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true)) : ("-"));
            yield "</li>
                        </ul>
                        <div class=\"mt-3 text-center\">
                            <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-eye\"></i> Show
                            </a>
                            <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_affectation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["affectation"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 67
        if (!$context['_iterated']) {
            // line 68
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center\">No records found</div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['affectation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        return array (  241 => 72,  232 => 68,  230 => 67,  218 => 60,  212 => 57,  206 => 54,  202 => 53,  198 => 52,  194 => 51,  189 => 49,  186 => 48,  180 => 46,  174 => 44,  172 => 43,  168 => 41,  163 => 40,  157 => 36,  148 => 32,  146 => 31,  136 => 26,  130 => 23,  126 => 22,  120 => 19,  115 => 17,  112 => 16,  106 => 14,  100 => 12,  98 => 11,  94 => 9,  89 => 8,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Affectation index{% endblock %}

{% block body %}
    <h1 class=\"text-primary mt-5 mb-3\">Liste des chantiers</h1>
    <div class=\"row\">
        {% for chantier in chantiers %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-lg border-0\">
                    {% if chantier.image %}
                        <img src=\"{{ asset('uploads/images/' ~ chantier.image) }}\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Image du Chantier\">
                    {% else %}
                        <img src=\"{{ asset('uploads/images/default-placeholder.png') }}\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Pas d'image\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h4 class=\"card-title text-primary\">{{ chantier.nom }}</h4>
                        <p class=\"text-muted\">
                            <i class=\"fas fa-users\"></i> Effectif requis : <strong>{{ chantier.effectifRequis }}</strong>
                        </p>
                        <p>
                            📅 Début : <strong>{{ chantier.dateDebut ? chantier.dateDebut|date('d/m/Y') : '-' }}</strong><br>
                            ⏳ Fin : <strong>{{ chantier.dateFin ? chantier.dateFin|date('d/m/Y') : '-' }}</strong>
                        </p>
                    </div>
                        <a href=\"{{ path('app_affectation_new', {'id': chantier.id}) }}\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-user-plus\"></i> Affecter
                        </a>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">🚧 Aucun chantier disponible.</p>
            </div>
        {% endfor %}
    </div>

    <h1 class=\"text-primary mt-5 mb-3\">Liste des affectations</h1>
    <div class=\"row\">
        {% for affectation in affectations %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-lg border-0\">
                    {% if affectation.chantier.image %}
                        <img src=\"{{ asset('uploads/images/' ~ affectation.chantier.image) }}\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Image du Chantier\">
                    {% else %}
                        <img src=\"{{ asset('uploads/images/default-placeholder.png') }}\" class=\"card-img-top img-fluid\" style=\"max-height: 200px; object-fit: cover;\" alt=\"Pas d'image\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h4 class=\"card-title text-primary\">{{ affectation.nom }}</h4>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\"><strong>Equipe :</strong> {{ affectation.equipe.nomEquipe }}</li>
                            <li class=\"list-group-item\"><strong>Chantier :</strong> {{ affectation.chantier.nom }}</li>
                            <li class=\"list-group-item\"><strong>Date de Début :</strong> {{ affectation.dateDebut ? affectation.dateDebut|date('d/m/Y') : '-' }}</li>
                            <li class=\"list-group-item\"><strong>Date de Fin :</strong> {{ affectation.dateFin ? affectation.dateFin|date('d/m/Y') : '-' }}</li>
                        </ul>
                        <div class=\"mt-3 text-center\">
                            <a href=\"{{ path('app_affectation_show', {'id': affectation.id}) }}\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-eye\"></i> Show
                            </a>
                            <a href=\"{{ path('app_affectation_edit', {'id': affectation.id}) }}\" class=\"btn btn-warning btn-sm\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"alert alert-warning text-center\">No records found</div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "affectation/index.html.twig", "/Users/hugo/Documents/IPSSI/2024 - 2025/UE 3 - Préparer le déploiment d'une application sécurisée/1 - Masterclass test unitaire PHP & JavaScript/BtpManager/templates/affectation/index.html.twig");
    }
}
