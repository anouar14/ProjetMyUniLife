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

/* report/monthly_report.html.twig */
class __TwigTemplate_f1188233e75bc04115cd956757e71724 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "Depense.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/monthly_report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report/monthly_report.html.twig"));

        $this->parent = $this->loadTemplate("Depense.html.twig", "report/monthly_report.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depense_index");
        yield "\" class=\"orange-button\">
    Retour à la liste des dépenses
    </a>
    <h1>Rapport mensuel - ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h1>

    <form method=\"get\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_monthly");
        yield "\" style=\"margin-bottom: 20px;\">
        <label for=\"month\">Mois :</label>
        <select name=\"month\" id=\"month\" style=\"padding: 5px; border-radius: 5px;\">
            ";
        // line 12
        $context["months"] = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        // line 16
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if (($context["i"] == (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 17, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                    ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["months"]) || array_key_exists("months", $context) ? $context["months"] : (function () { throw new RuntimeError('Variable "months" does not exist.', 18, $this->source); })()), ($context["i"] - 1), [], "array", false, false, false, 18), "html", null, true);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "        </select>

        <label for=\"year\">Année :</label>
        <select name=\"year\" id=\"year\" style=\"padding: 5px; border-radius: 5px;\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 25, $this->source); })()) - 5), ((isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 25, $this->source); })()) + 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 26
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if (($context["i"] == (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 26, $this->source); })()))) {
                yield "selected";
            }
            yield ">
                    ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        </select>

        <button type=\"submit\" style=\"background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;\">
            Afficher
        </button>
    </form>

    <h3>Total Revenu : ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRevenu"]) || array_key_exists("totalRevenu", $context) ? $context["totalRevenu"] : (function () { throw new RuntimeError('Variable "totalRevenu" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</h3>
    <h3>Total Dépense : ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalDepense"]) || array_key_exists("totalDepense", $context) ? $context["totalDepense"] : (function () { throw new RuntimeError('Variable "totalDepense" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "</h3>
    <h3>Différence : 
        <span style=\"color: ";
        // line 40
        yield ((((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 40, $this->source); })()) < 0)) ? ("red") : ("green"));
        yield "\">
            ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "
        </span>
    </h3>
    
    <canvas id=\"myChart\" style=\"width: 100%; max-width: 600px; margin-top: 30px;\"></canvas>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Revenu', 'Dépense'],
                datasets: [{
                    label: 'Montant en €',
                    data: [";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalRevenu"]) || array_key_exists("totalRevenu", $context) ? $context["totalRevenu"] : (function () { throw new RuntimeError('Variable "totalRevenu" does not exist.', 56, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalDepense"]) || array_key_exists("totalDepense", $context) ? $context["totalDepense"] : (function () { throw new RuntimeError('Variable "totalDepense" does not exist.', 56, $this->source); })()), "html", null, true);
        yield "],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Comparaison Revenu / Dépense'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <div id=\"chat-container\" style=\"border: 1px solid #ccc; padding: 10px; margin-top: 20px; max-width: 400px;\">
    <h3>Assistant Financier</h3>
    <div id=\"chat-messages\" style=\"height: 200px; overflow-y: auto; background-color: #f9f9f9; padding: 10px; margin-bottom: 10px;\">
        <!-- Messages seront ajoutés ici -->
    </div>
    <form id=\"chat-form\">
        <input type=\"text\" id=\"user-message\" placeholder=\"Posez une question...\" style=\"width: 80%; padding: 5px;\">
        <button type=\"submit\" style=\"padding: 5px;\">Envoyer</button>
    </form>
</div>
<script>
document.getElementById('chat-form').addEventListener('submit', async function (e) {
    e.preventDefault();
    const userMessage = document.getElementById('user-message').value;
    if (!userMessage) return;

    // Ajouter le message de l'utilisateur dans l'interface
    const chatMessages = document.getElementById('chat-messages');
    const userMsgElem = document.createElement('div');
    userMsgElem.textContent = \"Vous : \" + userMessage;
    userMsgElem.style.marginBottom = \"10px\";
    chatMessages.appendChild(userMsgElem);

    // Envoyer la requête au serveur
    try {
        const response = await fetch('";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("report_chat");
        yield "', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message: userMessage }),
        });

        if (!response.ok) {
            throw new Error(\"Erreur lors de la communication avec le serveur.\");
        }

        const data = await response.json();

        // Afficher la réponse de l'IA
        const botMsgElem = document.createElement('div');
        botMsgElem.textContent = \"Assistant : \" + data.message;
        botMsgElem.style.marginBottom = \"10px\";
        botMsgElem.style.color = \"blue\";
        chatMessages.appendChild(botMsgElem);
    } catch (error) {
        console.error(\"Erreur :\", error);
        const errorElem = document.createElement('div');
        errorElem.textContent = \"Assistant : Une erreur est survenue.\";
        errorElem.style.color = \"red\";
        chatMessages.appendChild(errorElem);
    }

    // Vider le champ de saisie
    document.getElementById('user-message').value = \"\";
});
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
        return "report/monthly_report.html.twig";
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
        return array (  248 => 110,  189 => 56,  171 => 41,  167 => 40,  162 => 38,  158 => 37,  149 => 30,  140 => 27,  131 => 26,  127 => 25,  121 => 21,  112 => 18,  103 => 17,  98 => 16,  96 => 12,  90 => 9,  83 => 7,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'Depense.html.twig' %}

{% block body %}
    <a href=\"{{ path('app_depense_index') }}\" class=\"orange-button\">
    Retour à la liste des dépenses
    </a>
    <h1>Rapport mensuel - {{ month }}/{{ year }}</h1>

    <form method=\"get\" action=\"{{ path('report_monthly') }}\" style=\"margin-bottom: 20px;\">
        <label for=\"month\">Mois :</label>
        <select name=\"month\" id=\"month\" style=\"padding: 5px; border-radius: 5px;\">
            {% set months = [
                'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 
                'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
            ] %}
            {% for i in 1..12 %}
                <option value=\"{{ i }}\" {% if i == month %}selected{% endif %}>
                    {{ months[i - 1] }}
                </option>
            {% endfor %}
        </select>

        <label for=\"year\">Année :</label>
        <select name=\"year\" id=\"year\" style=\"padding: 5px; border-radius: 5px;\">
            {% for i in (year-5)..(year+5) %}
                <option value=\"{{ i }}\" {% if i == year %}selected{% endif %}>
                    {{ i }}
                </option>
            {% endfor %}
        </select>

        <button type=\"submit\" style=\"background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;\">
            Afficher
        </button>
    </form>

    <h3>Total Revenu : {{ totalRevenu }}</h3>
    <h3>Total Dépense : {{ totalDepense }}</h3>
    <h3>Différence : 
        <span style=\"color: {{ difference < 0 ? 'red' : 'green' }}\">
            {{ difference }}
        </span>
    </h3>
    
    <canvas id=\"myChart\" style=\"width: 100%; max-width: 600px; margin-top: 30px;\"></canvas>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Revenu', 'Dépense'],
                datasets: [{
                    label: 'Montant en €',
                    data: [{{ totalRevenu }}, {{ totalDepense }}],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false },
                    title: {
                        display: true,
                        text: 'Comparaison Revenu / Dépense'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <div id=\"chat-container\" style=\"border: 1px solid #ccc; padding: 10px; margin-top: 20px; max-width: 400px;\">
    <h3>Assistant Financier</h3>
    <div id=\"chat-messages\" style=\"height: 200px; overflow-y: auto; background-color: #f9f9f9; padding: 10px; margin-bottom: 10px;\">
        <!-- Messages seront ajoutés ici -->
    </div>
    <form id=\"chat-form\">
        <input type=\"text\" id=\"user-message\" placeholder=\"Posez une question...\" style=\"width: 80%; padding: 5px;\">
        <button type=\"submit\" style=\"padding: 5px;\">Envoyer</button>
    </form>
</div>
<script>
document.getElementById('chat-form').addEventListener('submit', async function (e) {
    e.preventDefault();
    const userMessage = document.getElementById('user-message').value;
    if (!userMessage) return;

    // Ajouter le message de l'utilisateur dans l'interface
    const chatMessages = document.getElementById('chat-messages');
    const userMsgElem = document.createElement('div');
    userMsgElem.textContent = \"Vous : \" + userMessage;
    userMsgElem.style.marginBottom = \"10px\";
    chatMessages.appendChild(userMsgElem);

    // Envoyer la requête au serveur
    try {
        const response = await fetch('{{ path(\"report_chat\") }}', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message: userMessage }),
        });

        if (!response.ok) {
            throw new Error(\"Erreur lors de la communication avec le serveur.\");
        }

        const data = await response.json();

        // Afficher la réponse de l'IA
        const botMsgElem = document.createElement('div');
        botMsgElem.textContent = \"Assistant : \" + data.message;
        botMsgElem.style.marginBottom = \"10px\";
        botMsgElem.style.color = \"blue\";
        chatMessages.appendChild(botMsgElem);
    } catch (error) {
        console.error(\"Erreur :\", error);
        const errorElem = document.createElement('div');
        errorElem.textContent = \"Assistant : Une erreur est survenue.\";
        errorElem.style.color = \"red\";
        chatMessages.appendChild(errorElem);
    }

    // Vider le champ de saisie
    document.getElementById('user-message').value = \"\";
});
</script>


{% endblock %}
", "report/monthly_report.html.twig", "C:\\Users\\USER\\ProjetMyUniLife\\templates\\report\\monthly_report.html.twig");
    }
}
