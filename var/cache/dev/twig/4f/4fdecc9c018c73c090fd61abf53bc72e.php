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

/* ouvrier/_delete_form.html.twig */
class __TwigTemplate_779667b0df4beaf8ebd9812948339832 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ouvrier/_delete_form.html.twig"));

        // line 2
        yield "
<form method=\"post\" action=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ouvrier_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        yield "\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet ouvrier ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["ouvrier"]) || array_key_exists("ouvrier", $context) ? $context["ouvrier"] : (function () { throw new RuntimeError('Variable "ouvrier" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))), "html", null, true);
        yield "\">
    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "ouvrier/_delete_form.html.twig";
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
        return array (  52 => 4,  48 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/ouvrier/_delete_form.html.twig #}

<form method=\"post\" action=\"{{ path('app_ouvrier_delete', {'id': ouvrier.id}) }}\" class=\"d-inline\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cet ouvrier ?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ ouvrier.id) }}\">
    <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
</form>
", "ouvrier/_delete_form.html.twig", "C:\\Users\\mayac\\BtpManager\\templates\\ouvrier\\_delete_form.html.twig");
    }
}
