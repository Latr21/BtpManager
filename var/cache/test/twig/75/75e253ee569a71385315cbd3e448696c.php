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

/* ouvrier/new.html.twig */
class __TwigTemplate_001be0eb281384ab9d57f9514d857de4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ouvrier/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ouvrier/new.html.twig", 1);
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

        yield "Créer un Nouvel Ouvrier";
        
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
        <h1 class=\"my-4 text-primary\">Créer un Nouvel Ouvrier</h1>

        ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        yield "
            <div class=\"mb-3\">
                ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nom_ouvrier", [], "any", false, false, false, 11), 'label', ["label" => "Nom de l'Ouvrier"]);
        yield "
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nom_ouvrier", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom de l'ouvrier"]]);
        yield "
            </div>

            <!-- Compétence avec un select déroulant -->
            <div class=\"mb-3\">
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "competences", [], "any", false, false, false, 17), 'label', ["label" => "Compétence"]);
        yield "
                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "competences", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Sélectionner une compétence"]]);
        // line 23
        yield "
                <!-- Si vous voulez ajouter un texte par défaut -->
                <option value=\"\" disabled selected>Choisir une compétence</option>
            </div>

            <!-- Rôle avec Dropdown -->
            <div class=\"mb-3\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "role", [], "any", false, false, false, 30), 'label', ["label" => "Rôle"]);
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "role", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-select", "aria-label" => "Sélectionner un rôle"]]);
        // line 36
        yield "
                <!-- Si vous voulez ajouter un texte par défaut -->
                <option value=\"\" disabled selected>Choisir un rôle</option>
            </div>

            <button type=\"submit\" class=\"btn btn-success\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 41, $this->source); })()), "Créer")) : ("Créer")), "html", null, true);
        yield "</button>
        ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        yield "

        <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_index");
        yield "\" class=\"btn btn-secondary mt-3\">Retour à la liste</a>
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
        return "ouvrier/new.html.twig";
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
        return array (  144 => 44,  139 => 42,  135 => 41,  128 => 36,  126 => 31,  122 => 30,  113 => 23,  111 => 18,  107 => 17,  99 => 12,  95 => 11,  90 => 9,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un Nouvel Ouvrier{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"my-4 text-primary\">Créer un Nouvel Ouvrier</h1>

        {{ form_start(form) }}
            <div class=\"mb-3\">
                {{ form_label(form.nom_ouvrier, 'Nom de l\\'Ouvrier') }}
                {{ form_widget(form.nom_ouvrier, {'attr': {'class': 'form-control', 'placeholder': 'Entrez le nom de l\\'ouvrier'}}) }}
            </div>

            <!-- Compétence avec un select déroulant -->
            <div class=\"mb-3\">
                {{ form_label(form.competences, 'Compétence') }}
                {{ form_widget(form.competences, {
                    'attr': {
                        'class': 'form-select', 
                        'aria-label': 'Sélectionner une compétence'
                    }
                }) }}
                <!-- Si vous voulez ajouter un texte par défaut -->
                <option value=\"\" disabled selected>Choisir une compétence</option>
            </div>

            <!-- Rôle avec Dropdown -->
            <div class=\"mb-3\">
                {{ form_label(form.role, 'Rôle') }}
                {{ form_widget(form.role, {
                    'attr': {
                        'class': 'form-select', 
                        'aria-label': 'Sélectionner un rôle'
                    }
                }) }}
                <!-- Si vous voulez ajouter un texte par défaut -->
                <option value=\"\" disabled selected>Choisir un rôle</option>
            </div>

            <button type=\"submit\" class=\"btn btn-success\">{{ button_label|default('Créer') }}</button>
        {{ form_end(form) }}

        <a href=\"{{ path('app_ouvrier_index') }}\" class=\"btn btn-secondary mt-3\">Retour à la liste</a>
    </div>
{% endblock %}
", "ouvrier/new.html.twig", "/Users/louneshelali/BtpManager/templates/ouvrier/new.html.twig");
    }
}
