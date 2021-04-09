<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/content/index.html.twig */
class __TwigTemplate_1e43516577e2db12c4f1736eb3076905c16214a289876d46f8b882db5bd248f9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/content/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/content/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/content/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Yönetim Paneli";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->loadTemplate("admin/inc/header.html.twig", "admin/content/index.html.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container mt-5\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-5\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashbag", [], "any", false, false, false, 10), "get", [0 => "content_delete"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "
                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            ";
            // line 14
            echo $context["flashMessage"];
            echo "
                        </p>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "flashbag", [], "any", false, false, false, 19), "get", [0 => "content_updated"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 20
            echo "
                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            ";
            // line 23
            echo $context["flashMessage"];
            echo "
                        </p>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "flashbag", [], "any", false, false, false, 28), "get", [0 => "content_already"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "
                    <div class=\"alert alert-danger\">
                        <p class=\"text-center h5\">
                            ";
            // line 32
            echo $context["flashMessage"];
            echo "
                        </p>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-md-2 offset-md-10 d-grid gap-2\">
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content_create");
        echo "\" class=\"btn btn-warning\">Ekle <i class=\"fas fa-plus\"></i></a>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12\">
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th scope=\"col\">İsim</th>
                        <th scope=\"col\">Bolge</th>
                        <th scope=\"col\">Hizmet</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 59
            echo "                        <tr>
                            <td>#</td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "isim", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "bolge", [], "any", false, false, false, 62), "isim", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["content"], "hizmet", [], "any", false, false, false, 63), "isim", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content_update", ["id" => twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["content"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 68,  208 => 65,  204 => 64,  200 => 63,  196 => 62,  192 => 61,  188 => 59,  184 => 58,  164 => 41,  158 => 37,  147 => 32,  142 => 29,  137 => 28,  126 => 23,  121 => 20,  116 => 19,  105 => 14,  100 => 11,  96 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Yönetim Paneli{% endblock %}

{% block body %}
    {% include 'admin/inc/header.html.twig' %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-5\">
                {% for flashMessage in app.session.flashbag.get('content_delete') %}

                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage | raw }}
                        </p>
                    </div>

                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('content_updated') %}

                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage | raw }}
                        </p>
                    </div>

                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('content_already') %}

                    <div class=\"alert alert-danger\">
                        <p class=\"text-center h5\">
                            {{ flashMessage | raw }}
                        </p>
                    </div>

                {% endfor %}
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-md-2 offset-md-10 d-grid gap-2\">
                <a href=\"{{ path('content_create') }}\" class=\"btn btn-warning\">Ekle <i class=\"fas fa-plus\"></i></a>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12\">
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th scope=\"col\">İsim</th>
                        <th scope=\"col\">Bolge</th>
                        <th scope=\"col\">Hizmet</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for content in contents %}
                        <tr>
                            <td>#</td>
                            <td>{{ content.isim }}</td>
                            <td>{{ content.bolge.isim }}</td>
                            <td>{{ content.hizmet.isim }}</td>
                            <td><a href=\"{{ path('content_update', {id:content.id}) }}\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"{{ path('content_delete', {id:content.id}) }}\" class=\"btn btn-sm btn-danger\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/content/index.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\admin\\content\\index.html.twig");
    }
}
