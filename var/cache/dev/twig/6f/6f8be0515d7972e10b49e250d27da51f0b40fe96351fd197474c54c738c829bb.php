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

/* admin/hizmet/index.html.twig */
class __TwigTemplate_a176b2f624ecdc32b9405458e3b6b3067bd7acd2455614ff30ba8b999f29afb3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hizmet/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/hizmet/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/hizmet/index.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/hizmet/index.html.twig", 6)->display($context);
        // line 7
        echo "<div class=\"container mt-5\">

    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-5\">
            <div class=\"alert alert-danger\">
                <p class=\"text-center h5\">
                    Dikkat bir hizmeti silerken dikkat ediniz!
                    <br>
                    Bir hizmeti sildiğinizde. Sildiğiniz hizmet ile bağlı olan bütün içerikler silinir
                </p>
            </div>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashbag", [], "any", false, false, false, 18), "get", [0 => "hizmet_delete"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "
                <div class=\"alert alert-success\">
                    <p class=\"text-center h5\">
                        ";
            // line 22
            echo $context["flashMessage"];
            echo "
                    </p>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "flashbag", [], "any", false, false, false, 27), "get", [0 => "hizmet_updated"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "
                <div class=\"alert alert-success\">
                    <p class=\"text-center h5\">
                        ";
            // line 31
            echo $context["flashMessage"];
            echo "
                    </p>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "session", [], "any", false, false, false, 36), "flashbag", [], "any", false, false, false, 36), "get", [0 => "hizmet_already"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "
                <div class=\"alert alert-danger\">
                    <p class=\"text-center h5\">
                        ";
            // line 40
            echo $context["flashMessage"];
            echo "
                    </p>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>
    <div class=\"row mt-5\">
        <div class=\"col-md-2 offset-md-10 d-grid gap-2\">
            <a href=\"";
        // line 49
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
                    <th scope=\"col\">İsim</th>
                    <th scope=\"col\">Seo İsim</th>
                    <th scope=\"col\">Anahtar Kelimeler</th>
                    <th scope=\"col\">Sayfa Açıklama</th>
                    <th scope=\"col\">Düzenle</th>
                    <th scope=\"col\">Sil</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hizmetler"]) || array_key_exists("hizmetler", $context) ? $context["hizmetler"] : (function () { throw new RuntimeError('Variable "hizmetler" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hizmet"]) {
            // line 68
            echo "                    <tr>
                        <th scope=\"row\">#</th>
                        <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "isim", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                        <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "slug", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "keyword", [], "any", false, false, false, 72), 0, 15), "html", null, true);
            echo "</td>
                        <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "description", [], "any", false, false, false, 73), 0, 15), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet_update", ["id" => twig_get_attribute($this->env, $this->source, $context["hizmet"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                        <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["hizmet"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger\">Bu Hizmet Silinemez! <i class=\"fas fa-trash\"></i></a></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hizmet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </tbody>
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
        return "admin/hizmet/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 78,  220 => 75,  216 => 74,  212 => 73,  208 => 72,  204 => 71,  200 => 70,  196 => 68,  192 => 67,  171 => 49,  165 => 45,  154 => 40,  149 => 37,  144 => 36,  133 => 31,  128 => 28,  123 => 27,  112 => 22,  107 => 19,  103 => 18,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <div class=\"alert alert-danger\">
                <p class=\"text-center h5\">
                    Dikkat bir hizmeti silerken dikkat ediniz!
                    <br>
                    Bir hizmeti sildiğinizde. Sildiğiniz hizmet ile bağlı olan bütün içerikler silinir
                </p>
            </div>
            {% for flashMessage in app.session.flashbag.get('hizmet_delete') %}

                <div class=\"alert alert-success\">
                    <p class=\"text-center h5\">
                        {{ flashMessage | raw }}
                    </p>
                </div>

            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('hizmet_updated') %}

                <div class=\"alert alert-success\">
                    <p class=\"text-center h5\">
                        {{ flashMessage | raw }}
                    </p>
                </div>

            {% endfor %}
            {% for flashMessage in app.session.flashbag.get('hizmet_already') %}

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
            <a href=\"{{ path('hizmet_create') }}\" class=\"btn btn-warning\">Ekle <i class=\"fas fa-plus\"></i></a>
        </div>
    </div>
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-12\">
            <table class=\"table table-responsive table-hover text-center\">
                <thead>
                <tr>
                    <th scope=\"col\">#</th>
                    <th scope=\"col\">İsim</th>
                    <th scope=\"col\">Seo İsim</th>
                    <th scope=\"col\">Anahtar Kelimeler</th>
                    <th scope=\"col\">Sayfa Açıklama</th>
                    <th scope=\"col\">Düzenle</th>
                    <th scope=\"col\">Sil</th>
                </tr>
                </thead>
                <tbody>
                {% for hizmet in hizmetler %}
                    <tr>
                        <th scope=\"row\">#</th>
                        <td>{{ hizmet.isim }}</td>
                        <td>{{ hizmet.slug }}</td>
                        <td>{{ hizmet.keyword | slice(0,15) }}</td>
                        <td>{{ hizmet.description | slice(0,15) }}</td>
                        <td><a href=\"{{ path('hizmet_update',{id:hizmet.id}) }}\" class=\"btn btn-sm btn-primary\">Düzenle <i class=\"fas fa-pencil-alt\"></i></a></td>
                        <td><a href=\"{{ path('hizmet_delete',{id:hizmet.id}) }}\" class=\"btn btn-sm btn-danger\">Bu Hizmet Silinemez! <i class=\"fas fa-trash\"></i></a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "admin/hizmet/index.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\admin\\hizmet\\index.html.twig");
    }
}
