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

/* admin/general_information/index.html.twig */
class __TwigTemplate_54ece83a2f0fb1773d03e508fe9a0ab291f5c955085d43c48c68cebf12517811 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/general_information/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/general_information/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/general_information/index.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/general_information/index.html.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container mt-5\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-5\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "session", [], "any", false, false, false, 10), "flashbag", [], "any", false, false, false, 10), "get", [0 => "generali_create"], "method", false, false, false, 10));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "session", [], "any", false, false, false, 19), "flashbag", [], "any", false, false, false, 19), "get", [0 => "generali_update"], "method", false, false, false, 19));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "flashbag", [], "any", false, false, false, 28), "get", [0 => "generali_remove"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "
                    <div class=\"alert alert-success\">
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
            <div class=\"col-md-4 d-grid gap-2\">
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generali_info");
        echo "\" class=\"btn btn-danger\">İkon Nasıl Eklenir Nereden Eklenir Bilgi İçin Tıklayınız</a>
            </div>
            <div class=\"col-md-4 d-grid gap-2\">
                <a target=\"_blank\" class=\"btn btn-dark\" href=\"https://fontawesome.com/icons?d=gallery&p=2&m=free\">İkonlar <i class=\"fas fa-arrow-right\"></i></a>
            </div>
            <div class=\"col-md-4 d-grid gap-2\">
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generali_create");
        echo "\" class=\"btn btn-warning\">Ekle <i class=\"fas fa-plus\"></i></a>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12\">
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th scope=\"col\">İkon</th>
                        <th scope=\"col\">Başlık</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "                        <tr>
                            <td>#</td>
                            <td><i class=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 66), "html", null, true);
            echo "\"></i></td>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generali_update", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generali_remove", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
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
        return "admin/general_information/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 72,  212 => 69,  208 => 68,  204 => 67,  200 => 66,  196 => 64,  192 => 63,  173 => 47,  164 => 41,  158 => 37,  147 => 32,  142 => 29,  137 => 28,  126 => 23,  121 => 20,  116 => 19,  105 => 14,  100 => 11,  96 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                {% for flashMessage in app.session.flashbag.get('generali_create') %}

                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage | raw }}
                        </p>
                    </div>

                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('generali_update') %}

                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage | raw }}
                        </p>
                    </div>

                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('generali_remove') %}

                    <div class=\"alert alert-success\">
                        <p class=\"text-center h5\">
                            {{ flashMessage | raw }}
                        </p>
                    </div>

                {% endfor %}
            </div>
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-md-4 d-grid gap-2\">
                <a href=\"{{ path('generali_info') }}\" class=\"btn btn-danger\">İkon Nasıl Eklenir Nereden Eklenir Bilgi İçin Tıklayınız</a>
            </div>
            <div class=\"col-md-4 d-grid gap-2\">
                <a target=\"_blank\" class=\"btn btn-dark\" href=\"https://fontawesome.com/icons?d=gallery&p=2&m=free\">İkonlar <i class=\"fas fa-arrow-right\"></i></a>
            </div>
            <div class=\"col-md-4 d-grid gap-2\">
                <a href=\"{{ path('generali_create') }}\" class=\"btn btn-warning\">Ekle <i class=\"fas fa-plus\"></i></a>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12\">
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th scope=\"col\">İkon</th>
                        <th scope=\"col\">Başlık</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for item in generals %}
                        <tr>
                            <td>#</td>
                            <td><i class=\"{{ item.icon }}\"></i></td>
                            <td>{{ item.title }}</td>
                            <td><a href=\"{{ path('generali_update', {id:item.id}) }}\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"{{ path('generali_remove', {id:item.id}) }}\" class=\"btn btn-sm btn-danger\">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/general_information/index.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\admin\\general_information\\index.html.twig");
    }
}
