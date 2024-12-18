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

/* depense/index.html.twig */
class __TwigTemplate_cf3239966868c08a75e8192e7376382f extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "depense.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "depense/index.html.twig"));

        $this->parent = $this->loadTemplate("depense.html.twig", "depense/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dépense Index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Liste des Dépenses</h1>
    
    <a href=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_monthly");
        yield "\" 
       class=\"orange-button\">
        Voir le rapport mensuel
    </a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>
                    <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index", ["sort" => "id", "direction" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "get", ["direction"], "method", false, false, false, 17) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">
                        ID ";
        // line 18
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", ["sort"], "method", false, false, false, 18) == "id")) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", ["direction"], "method", false, false, false, 18) == "asc")) ? ("▲") : ("▼"))) : (""));
        yield "
                    </a>
                </th>
                <th>
                    <a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index", ["sort" => "categorie", "direction" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "get", ["direction"], "method", false, false, false, 22) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">
                        Catégorie ID ";
        // line 23
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "get", ["sort"], "method", false, false, false, 23) == "categorie")) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "get", ["direction"], "method", false, false, false, 23) == "asc")) ? ("▲") : ("▼"))) : (""));
        yield "
                    </a>
                </th>
                <th>
                    <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index", ["sort" => "typeDep", "direction" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "get", ["direction"], "method", false, false, false, 27) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">
                        Type de Dépense ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["sort"], "method", false, false, false, 28) == "typeDep")) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "get", ["direction"], "method", false, false, false, 28) == "asc")) ? ("▲") : ("▼"))) : (""));
        yield "
                    </a>
                </th>
                <th>
                    <a href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index", ["sort" => "montant", "direction" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "get", ["direction"], "method", false, false, false, 32) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">
                        Montant ";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["sort"], "method", false, false, false, 33) == "montant")) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["direction"], "method", false, false, false, 33) == "asc")) ? ("▲") : ("▼"))) : (""));
        yield "
                    </a>
                </th>
                <th>
                    <a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index", ["sort" => "dateDep", "direction" => (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", ["direction"], "method", false, false, false, 37) == "asc")) ? ("desc") : ("asc"))]), "html", null, true);
        yield "\">
                        Date de Dépense ";
        // line 38
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", ["sort"], "method", false, false, false, 38) == "dateDep")) ? ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "get", ["direction"], "method", false, false, false, 38) == "asc")) ? ("▲") : ("▼"))) : (""));
        yield "
                    </a>
                </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["depenses"]) || array_key_exists("depenses", $context) ? $context["depenses"] : (function () { throw new RuntimeError('Variable "depenses" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["depense"]) {
            // line 46
            yield "            <tr>
                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "id", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                <td>";
            // line 48
            ((CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "categorie", [], "any", false, false, false, 48)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "categorie", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true)) : (yield "N/A"));
            yield "</td>
                <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "typeDep", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "montant", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                <td>";
            // line 51
            ((CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "dateDep", [], "any", false, false, false, 51)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "dateDep", [], "any", false, false, false, 51), "Y-m-d"), "html", null, true)) : (yield ""));
            yield "</td>
                <td>
                    <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\">Afficher</a>
                    <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["depense"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            yield "            <tr>
                <td colspan=\"6\">Aucun enregistrement trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['depense'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_new");
        yield "\" class=\"orange-button\">Créer une nouvelle dépense</a>
    <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\" class=\"orange-button\">Gérer les Catégories</a>

    <div style=\"margin-top: 20px;\">
        <div style=\"
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            color: white;
            background-color: ";
        // line 74
        yield ((((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 74, $this->source); })()) >= 0)) ? ("green") : ("red"));
        yield ";
        \">
            Différence : ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 82
        yield "<style>
    .orange-button {
        display: inline-block;
        background-color: orange;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 10px;
    }

    .orange-button:hover {
        background-color: darkorange;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        color: black;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "depense/index.html.twig";
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
        return array (  279 => 82,  266 => 81,  251 => 76,  246 => 74,  235 => 66,  231 => 65,  226 => 62,  217 => 58,  208 => 54,  204 => 53,  199 => 51,  195 => 50,  191 => 49,  187 => 48,  183 => 47,  180 => 46,  175 => 45,  165 => 38,  161 => 37,  154 => 33,  150 => 32,  143 => 28,  139 => 27,  132 => 23,  128 => 22,  121 => 18,  117 => 17,  105 => 8,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'depense.html.twig' %}

{% block title %}Dépense Index{% endblock %}

{% block body %}
    <h1>Liste des Dépenses</h1>
    
    <a href=\"{{ path('report_monthly') }}\" 
       class=\"orange-button\">
        Voir le rapport mensuel
    </a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>
                    <a href=\"{{ path('app_depense_index', {'sort': 'id', 'direction': app.request.get('direction') == 'asc' ? 'desc' : 'asc'}) }}\">
                        ID {{ app.request.get('sort') == 'id' ? (app.request.get('direction') == 'asc' ? '▲' : '▼') : '' }}
                    </a>
                </th>
                <th>
                    <a href=\"{{ path('app_depense_index', {'sort': 'categorie', 'direction': app.request.get('direction') == 'asc' ? 'desc' : 'asc'}) }}\">
                        Catégorie ID {{ app.request.get('sort') == 'categorie' ? (app.request.get('direction') == 'asc' ? '▲' : '▼') : '' }}
                    </a>
                </th>
                <th>
                    <a href=\"{{ path('app_depense_index', {'sort': 'typeDep', 'direction': app.request.get('direction') == 'asc' ? 'desc' : 'asc'}) }}\">
                        Type de Dépense {{ app.request.get('sort') == 'typeDep' ? (app.request.get('direction') == 'asc' ? '▲' : '▼') : '' }}
                    </a>
                </th>
                <th>
                    <a href=\"{{ path('app_depense_index', {'sort': 'montant', 'direction': app.request.get('direction') == 'asc' ? 'desc' : 'asc'}) }}\">
                        Montant {{ app.request.get('sort') == 'montant' ? (app.request.get('direction') == 'asc' ? '▲' : '▼') : '' }}
                    </a>
                </th>
                <th>
                    <a href=\"{{ path('app_depense_index', {'sort': 'dateDep', 'direction': app.request.get('direction') == 'asc' ? 'desc' : 'asc'}) }}\">
                        Date de Dépense {{ app.request.get('sort') == 'dateDep' ? (app.request.get('direction') == 'asc' ? '▲' : '▼') : '' }}
                    </a>
                </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for depense in depenses %}
            <tr>
                <td>{{ depense.id }}</td>
                <td>{{ depense.categorie ? depense.categorie.id : 'N/A' }}</td>
                <td>{{ depense.typeDep }}</td>
                <td>{{ depense.montant }}</td>
                <td>{{ depense.dateDep ? depense.dateDep|date('Y-m-d') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_depense_show', {'id': depense.id}) }}\">Afficher</a>
                    <a href=\"{{ path('app_depense_edit', {'id': depense.id}) }}\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">Aucun enregistrement trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_depense_new') }}\" class=\"orange-button\">Créer une nouvelle dépense</a>
    <a href=\"{{ path('app_categorie_index') }}\" class=\"orange-button\">Gérer les Catégories</a>

    <div style=\"margin-top: 20px;\">
        <div style=\"
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
            color: white;
            background-color: {{ difference >= 0 ? 'green' : 'red' }};
        \">
            Différence : {{ difference }}
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    .orange-button {
        display: inline-block;
        background-color: orange;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        margin-top: 10px;
    }

    .orange-button:hover {
        background-color: darkorange;
    }

    .table th, .table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        color: black;
    }
</style>
{% endblock %}
", "depense/index.html.twig", "C:\\Users\\USER\\ProjetMyUniLife\\templates\\depense\\index.html.twig");
    }
}
