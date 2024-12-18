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

/* user/login.html.twig */
class __TwigTemplate_b70bd730d484397c4056e87363d2ac84 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 80
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<style>
body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #8a6fe8, #ffb87a);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
}

.login-container {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    max-width: 400px;
    width: 100%;
}

h1 {
    font-size: 2rem;
    color: #6a41cc;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type=\"email\"], input[type=\"password\"] {
    width: 90%;
    padding: 0.8rem;
    margin-top: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
}

input[type=\"email\"]:focus, input[type=\"password\"]:focus {
    outline: none;
    border-color: #8a6fe8;
    box-shadow: 0 0 5px rgba(138, 111, 232, 0.5);
}

.btn-submit {
    background: linear-gradient(135deg, #ffb87a, #8a6fe8);
    color: white;
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-submit:hover {
    background: linear-gradient(135deg, #8a6fe8, #ffb87a);
    box-shadow: 0 4px 10px rgba(138, 111, 232, 0.3);
}

.alert-danger {
    color: #fff;
    background-color: #ff4e4e;
    padding: 0.8rem;
    border-radius: 8px;
    margin-bottom: 1rem;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "<div class=\"login-container\">
    <h1>Se connecter</h1>
    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "flashes", ["error"], "method", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 84
            yield "    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "    <form method=\"POST\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_join");
        yield "\" >

        <div class=\"form-group\">
            <input type=\"email\" name=\"email\" value=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 89, $this->source); })()), "html", null, true);
        yield "\"  placeholder=\"Votre email\" required>
        </div>
        <div class=\"form-group\">
            <input type=\"Password\" name=\"Password\" placeholder=\"Votre mot de passe\" required>
        </div>
           <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"
        >
        <p>

        
    <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\">Mot de passe oublié ?</a>
    </p>


        <button type=\"submit\" class=\"btn-submit\">Se connecter</button>
        
    </form>
</div>
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
        return "user/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  244 => 100,  236 => 95,  227 => 89,  220 => 86,  211 => 84,  207 => 83,  203 => 81,  190 => 80,  105 => 5,  92 => 4,  70 => 3,  59 => 80,  57 => 4,  55 => 3,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block title %}{% endblock %}
{% block stylesheets %}
<style>
body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background: linear-gradient(135deg, #8a6fe8, #ffb87a);
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
}

.login-container {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    max-width: 400px;
    width: 100%;
}

h1 {
    font-size: 2rem;
    color: #6a41cc;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1rem;
    display: flex;
    flex-direction: column;
    align-items: center;
}

input[type=\"email\"], input[type=\"password\"] {
    width: 90%;
    padding: 0.8rem;
    margin-top: 0.5rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
}

input[type=\"email\"]:focus, input[type=\"password\"]:focus {
    outline: none;
    border-color: #8a6fe8;
    box-shadow: 0 0 5px rgba(138, 111, 232, 0.5);
}

.btn-submit {
    background: linear-gradient(135deg, #ffb87a, #8a6fe8);
    color: white;
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-submit:hover {
    background: linear-gradient(135deg, #8a6fe8, #ffb87a);
    box-shadow: 0 4px 10px rgba(138, 111, 232, 0.3);
}

.alert-danger {
    color: #fff;
    background-color: #ff4e4e;
    padding: 0.8rem;
    border-radius: 8px;
    margin-bottom: 1rem;
}
</style>
{% endblock %}
{% block body %}
<div class=\"login-container\">
    <h1>Se connecter</h1>
    {% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">{{ message }}</div>
{% endfor %}
    <form method=\"POST\" action=\"{{ path('app_join') }}\" >

        <div class=\"form-group\">
            <input type=\"email\" name=\"email\" value=\"{{ last_username }}\"  placeholder=\"Votre email\" required>
        </div>
        <div class=\"form-group\">
            <input type=\"Password\" name=\"Password\" placeholder=\"Votre mot de passe\" required>
        </div>
           <input type=\"hidden\" name=\"_csrf_token\"
               value=\"{{ csrf_token('authenticate') }}\"
        >
        <p>

        
    <a href=\"{{ path('app_forgot_password') }}\">Mot de passe oublié ?</a>
    </p>


        <button type=\"submit\" class=\"btn-submit\">Se connecter</button>
        
    </form>
</div>
{% endblock %}", "user/login.html.twig", "C:\\Users\\USER\\ProjetMyUniLife\\templates\\user\\login.html.twig");
    }
}
