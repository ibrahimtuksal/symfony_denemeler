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

/* pages/hizmet.html.twig */
class __TwigTemplate_eb6c99bde925aa7599b0c029c1f5816189645f61fb6698904efd8e8f7f085b42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'keywords' => [$this, 'block_keywords'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/hizmet.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/hizmet.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/hizmet.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hizmet"]) || array_key_exists("hizmet", $context) ? $context["hizmet"] : (function () { throw new RuntimeError('Variable "hizmet" does not exist.', 3, $this->source); })()), "isim", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hizmet"]) || array_key_exists("hizmet", $context) ? $context["hizmet"] : (function () { throw new RuntimeError('Variable "hizmet" does not exist.', 4, $this->source); })()), "description", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hizmet"]) || array_key_exists("hizmet", $context) ? $context["hizmet"] : (function () { throw new RuntimeError('Variable "hizmet" does not exist.', 5, $this->source); })()), "keyword", [], "any", false, false, false, 5), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HomeController:header"));
        // line 10
        echo "

    <div class=\"container my-5\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12 text-center mb-5\">
                <p class=\"display-4 text-center my-5 border-bottom\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hizmet"]) || array_key_exists("hizmet", $context) ? $context["hizmet"] : (function () { throw new RuntimeError('Variable "hizmet" does not exist.', 16, $this->source); })()), "isim", [], "any", false, false, false, 16), "html", null, true);
        echo "
                </p>
                <img src=\"/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hizmet"]) || array_key_exists("hizmet", $context) ? $context["hizmet"] : (function () { throw new RuntimeError('Variable "hizmet" does not exist.', 18, $this->source); })()), "photo", [], "any", false, false, false, 18), "html", null, true);
        echo "\" class=\"img-fluid hizmet-img tksl-shadow tksl-radius\"  alt=\"\">
            </div>
            <div class=\"col-md-12 my-5\">
                ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, (isset($context["hizmet"]) || array_key_exists("hizmet", $context) ? $context["hizmet"] : (function () { throw new RuntimeError('Variable "hizmet" does not exist.', 21, $this->source); })()), "text", [], "any", false, false, false, 21);
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"display-5 text-center border-bottom \">
                    Hizmete Bağlı İçerikler
                </p>
                <br>
                <div class=\"owl-carousel owl-theme mt-3\">
                    <div class=\"item mx-3\">
                        <img src=\"https://via.placeholder.com/400x250\" class=\"content-i img-fluid\" alt=\"\">
                        <p class=\"content-t mt-3\">
                            Başlık
                        </p>
                        <p class=\"content-c\">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut blanditiis deserunt enim, et explicabo in magni natus neque nesciunt nobis odio officiis omnis pariatur repellat sequi tempore totam unde.
                        </p>
                        <div class=\"d-grid gap-2\">
                            <a href=\"\" class=\"btn btn-purple\">Devamını Oku <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-5 text-center\">
                <p class=\"h3\">İletişim</p>
                <hr>
                <div class=\"d-grid gap-2 my-3\">
                    <a href=\"\" class=\"btn btn-purple\">Tıkla Ara <i class=\"fas fa-phone\"></i></a>
                </div>
                <div class=\"d-grid gap-2 my-3\">
                    <a href=\"\" class=\"btn btn-success\">Whatsapp İletişim <i class=\"fab fa-whatsapp\"></i></a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 59
        $this->loadTemplate("home/inc/footer.html.twig", "pages/hizmet.html.twig", 59)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/hizmet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 59,  150 => 21,  144 => 18,  139 => 16,  131 => 10,  128 => 8,  118 => 7,  99 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ hizmet.isim }}{% endblock %}
{% block description %}{{ hizmet.description }}{% endblock %}
{% block keywords %}{{ hizmet.keyword }}{% endblock %}

{% block body %}
    {{ render(controller(
        'App\\\\Controller\\\\HomeController:header'
    )) }}

    <div class=\"container my-5\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12 text-center mb-5\">
                <p class=\"display-4 text-center my-5 border-bottom\">
                    {{ hizmet.isim }}
                </p>
                <img src=\"/{{ hizmet.photo }}\" class=\"img-fluid hizmet-img tksl-shadow tksl-radius\"  alt=\"\">
            </div>
            <div class=\"col-md-12 my-5\">
                {{ hizmet.text | raw }}
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <p class=\"display-5 text-center border-bottom \">
                    Hizmete Bağlı İçerikler
                </p>
                <br>
                <div class=\"owl-carousel owl-theme mt-3\">
                    <div class=\"item mx-3\">
                        <img src=\"https://via.placeholder.com/400x250\" class=\"content-i img-fluid\" alt=\"\">
                        <p class=\"content-t mt-3\">
                            Başlık
                        </p>
                        <p class=\"content-c\">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut blanditiis deserunt enim, et explicabo in magni natus neque nesciunt nobis odio officiis omnis pariatur repellat sequi tempore totam unde.
                        </p>
                        <div class=\"d-grid gap-2\">
                            <a href=\"\" class=\"btn btn-purple\">Devamını Oku <i class=\"fas fa-arrow-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-5 text-center\">
                <p class=\"h3\">İletişim</p>
                <hr>
                <div class=\"d-grid gap-2 my-3\">
                    <a href=\"\" class=\"btn btn-purple\">Tıkla Ara <i class=\"fas fa-phone\"></i></a>
                </div>
                <div class=\"d-grid gap-2 my-3\">
                    <a href=\"\" class=\"btn btn-success\">Whatsapp İletişim <i class=\"fab fa-whatsapp\"></i></a>
                </div>
            </div>
        </div>
    </div>
    {% include 'home/inc/footer.html.twig' %}
{% endblock %}
", "pages/hizmet.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\pages\\hizmet.html.twig");
    }
}
