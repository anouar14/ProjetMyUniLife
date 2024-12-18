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

/* report/index.html.twig */
class __TwigTemplate_2c6a7bdcae83214bb4fc67824c5b0d94 extends Template
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
        return "depense.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/index.html.twig"));

        $this->parent = $this->loadTemplate("depense.html.twig", "report/index.html.twig", 1);
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

        yield "Rapport Mensuel";
        
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
        yield "    <h1 class=\"text-center mt-4\">Rapport Mensuel</h1>

    <div class=\"container mt-5\">
        <!-- Tableau récapitulatif -->
        <h3>Résumé des dépenses et revenus mensuels</h3>
        <table class=\"table table-striped table-bordered mt-4\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Mois</th>
                    <th>Revenu (DT)</th>
                    <th>Dépense (DT)</th>
                    <th>Solde (DT)</th>
                    <th>Conseil</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["month"] => $context["data"]) {
            // line 23
            yield "                    <tr>
                        <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["month"], "html", null, true);
            yield "</td>
                        <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "revenu", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "depense", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td class=\"";
            // line 27
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "revenu", [], "any", false, false, false, 27) - CoreExtension::getAttribute($this->env, $this->source, $context["data"], "depense", [], "any", false, false, false, 27)) < 0)) ? ("text-danger") : ("text-success"));
            yield "\">
                            ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["data"], "revenu", [], "any", false, false, false, 28) - CoreExtension::getAttribute($this->env, $this->source, $context["data"], "depense", [], "any", false, false, false, 28)), "html", null, true);
            yield "
                        </td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["advices"]) || array_key_exists("advices", $context) ? $context["advices"] : (function () { throw new RuntimeError('Variable "advices" does not exist.', 30, $this->source); })()), $context["month"], [], "array", false, false, false, 30), "html", null, true);
            yield "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['month'], $context['data'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "            </tbody>
        </table>

        <!-- Section des graphiques -->
        <div class=\"row mt-5\">
            <div class=\"col-md-6\">
                <h4>Graphique des revenus et dépenses</h4>
                <canvas id=\"revenueExpenseChart\"></canvas>
            </div>
            <div class=\"col-md-6\">
                <h4>Évolution du solde mensuel</h4>
                <canvas id=\"balanceChart\"></canvas>
            </div>
        </div>
    </div>

    <!-- Inclusion de Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Préparation des données pour les graphiques
        const months = ";
        // line 53
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 53, $this->source); })())));
        yield ";
        const revenus = ";
        // line 54
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 54, $this->source); })()), function ($__data__) use ($context, $macros) { $context["data"] = $__data__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 54, $this->source); })()), "revenu", [], "any", false, false, false, 54); }));
        yield ";
        const depenses = ";
        // line 55
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["monthlyData"]) || array_key_exists("monthlyData", $context) ? $context["monthlyData"] : (function () { throw new RuntimeError('Variable "monthlyData" does not exist.', 55, $this->source); })()), function ($__data__) use ($context, $macros) { $context["data"] = $__data__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "depense", [], "any", false, false, false, 55); }));
        yield ";
        const balances = revenus.map((revenu, index) => revenu - depenses[index]);

        // Graphique Revenus vs Dépenses
        const revenueExpenseChart = new Chart(
            document.getElementById('revenueExpenseChart').getContext('2d'),
            {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'Revenus (DT)',
                            data: revenus,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                        },
                        {
                            label: 'Dépenses (DT)',
                            data: depenses,
                            backgroundColor: 'rgba(255, 99, 132, 0.6)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        title: {
                            display: true,
                            text: 'Revenus vs Dépenses (Mensuel)',
                        },
                    },
                },
            }
        );

        // Graphique Solde Mensuel
        const balanceChart = new Chart(
            document.getElementById('balanceChart').getContext('2d'),
            {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'Solde (DT)',
                            data: balances,
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            fill: true,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        title: {
                            display: true,
                            text: 'Évolution du Solde Mensuel',
                        },
                    },
                },
            }
        );
    </script>
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
        return "report/index.html.twig";
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
        return array (  185 => 55,  181 => 54,  177 => 53,  155 => 33,  146 => 30,  141 => 28,  137 => 27,  133 => 26,  129 => 25,  125 => 24,  122 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'depense.html.twig' %}

{% block title %}Rapport Mensuel{% endblock %}

{% block body %}
    <h1 class=\"text-center mt-4\">Rapport Mensuel</h1>

    <div class=\"container mt-5\">
        <!-- Tableau récapitulatif -->
        <h3>Résumé des dépenses et revenus mensuels</h3>
        <table class=\"table table-striped table-bordered mt-4\">
            <thead class=\"table-dark\">
                <tr>
                    <th>Mois</th>
                    <th>Revenu (DT)</th>
                    <th>Dépense (DT)</th>
                    <th>Solde (DT)</th>
                    <th>Conseil</th>
                </tr>
            </thead>
            <tbody>
                {% for month, data in monthlyData %}
                    <tr>
                        <td>{{ month }}</td>
                        <td>{{ data.revenu }}</td>
                        <td>{{ data.depense }}</td>
                        <td class=\"{{ (data.revenu - data.depense) < 0 ? 'text-danger' : 'text-success' }}\">
                            {{ data.revenu - data.depense }}
                        </td>
                        <td>{{ advices[month] }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <!-- Section des graphiques -->
        <div class=\"row mt-5\">
            <div class=\"col-md-6\">
                <h4>Graphique des revenus et dépenses</h4>
                <canvas id=\"revenueExpenseChart\"></canvas>
            </div>
            <div class=\"col-md-6\">
                <h4>Évolution du solde mensuel</h4>
                <canvas id=\"balanceChart\"></canvas>
            </div>
        </div>
    </div>

    <!-- Inclusion de Chart.js -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Préparation des données pour les graphiques
        const months = {{ monthlyData|keys|json_encode|raw }};
        const revenus = {{ monthlyData|map(data => data.revenu)|json_encode|raw }};
        const depenses = {{ monthlyData|map(data => data.depense)|json_encode|raw }};
        const balances = revenus.map((revenu, index) => revenu - depenses[index]);

        // Graphique Revenus vs Dépenses
        const revenueExpenseChart = new Chart(
            document.getElementById('revenueExpenseChart').getContext('2d'),
            {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'Revenus (DT)',
                            data: revenus,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                        },
                        {
                            label: 'Dépenses (DT)',
                            data: depenses,
                            backgroundColor: 'rgba(255, 99, 132, 0.6)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        title: {
                            display: true,
                            text: 'Revenus vs Dépenses (Mensuel)',
                        },
                    },
                },
            }
        );

        // Graphique Solde Mensuel
        const balanceChart = new Chart(
            document.getElementById('balanceChart').getContext('2d'),
            {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'Solde (DT)',
                            data: balances,
                            backgroundColor: 'rgba(54, 162, 235, 0.6)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            fill: true,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { position: 'top' },
                        title: {
                            display: true,
                            text: 'Évolution du Solde Mensuel',
                        },
                    },
                },
            }
        );
    </script>
{% endblock %}
", "report/index.html.twig", "C:\\Users\\USER\\ProjetMyUniLife\\templates\\report\\index.html.twig");
    }
}
