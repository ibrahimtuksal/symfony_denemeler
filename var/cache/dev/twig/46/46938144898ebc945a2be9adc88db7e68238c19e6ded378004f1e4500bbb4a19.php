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

/* admin/banner/index.html.twig */
class __TwigTemplate_5449f0af769aae0539d21c83d33e9be908f3e3d127d0e38ffa148f8c22c676f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/banner/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/banner/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/banner/index.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/banner/index.html.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container mt-5\">

        <div class=\"row mt-5\">
            <div class=\"col-md-2 offset-md-10 d-grid gap-2\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet_create");
        echo "\" class=\"btn btn-warning\">Ekle <i class=\"fas fa-plus\"></i></a>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12\">
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Başlık</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                        <tr>
                            <td><img src=\"/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "photo", [], "any", false, false, false, 28), "html", null, true);
            echo "\" class=\"admin-img img-fluid\"></td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("banner_update", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("banner_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger \">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return "admin/banner/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  134 => 31,  130 => 30,  126 => 29,  122 => 28,  119 => 27,  115 => 26,  97 => 11,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Yönetim Paneli{% endblock %}

{% block body %}
    {% include 'admin/inc/header.html.twig' %}
    <div class=\"container mt-5\">

        <div class=\"row mt-5\">
            <div class=\"col-md-2 offset-md-10 d-grid gap-2\">
                <a href=\"{{ path('hizmet_create') }}\" class=\"btn btn-warning\">Ekle <i class=\"fas fa-plus\"></i></a>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12\">
                <table class=\"table table-responsive table-hover text-center\">
                    <thead>
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Başlık</th>
                        <th scope=\"col\">Düzenle</th>
                        <th scope=\"col\">Sil</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for item in banner %}
                        <tr>
                            <td><img src=\"/{{ item.photo }}\" class=\"admin-img img-fluid\"></td>
                            <td>{{ item.title }}</td>
                            <td><a href=\"{{ path('banner_update', {id:item.id}) }}\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                            <td><a href=\"{{ path('banner_delete', {id:item.id}) }}\" class=\"btn btn-sm btn-danger \">Sil <i class=\"fas fa-trash\"></i></a></td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/banner/index.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\admin\\banner\\index.html.twig");
    }
}
