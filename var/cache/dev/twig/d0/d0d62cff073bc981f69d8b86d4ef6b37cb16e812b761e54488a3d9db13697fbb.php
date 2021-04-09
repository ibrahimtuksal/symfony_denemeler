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

/* home/inc/header.html.twig */
class __TwigTemplate_59bab0d1a299e53a33982b565b7e11c127c2a8384508d100808bbf4781110a79 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/inc/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/inc/header.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 69
        echo "
<nav class=\"navbar navbar-expand-lg navbar-light bg-light tksl-shadow\">
    <div class=\"container-fluid\">
        <div class=\"col-md-2 px-lg-3 mx-auto\">
            <a class=\"navbar-brand brand-title text-uppercase\" href=\"/\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "</a>
            <button class=\"navbar-toggler text-center\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        </div>
        <div class=\"col-md-7\">
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mx-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link menu\" href=\"/\">&nbsp;<i class=\"fas fa-home\"></i>&nbsp;</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Hizmetlerimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hizmetlerHeader"]) || array_key_exists("hizmetlerHeader", $context) ? $context["hizmetlerHeader"] : (function () { throw new RuntimeError('Variable "hizmetlerHeader" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hizmet"]) {
            // line 90
            echo "                                <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet_page", ["slug" => twig_get_attribute($this->env, $this->source, $context["hizmet"], "slug", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "isim", [], "any", false, false, false, 90), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hizmet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link menu\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sss_page");
        echo "\">S.S.S <i class=\"fas fa-question\"></i></a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-city\"></i> Bölgelerimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bolgelerHeader"]) || array_key_exists("bolgelerHeader", $context) ? $context["bolgelerHeader"] : (function () { throw new RuntimeError('Variable "bolgelerHeader" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bolge"]) {
            // line 103
            echo "                                <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolgeler_page", ["slug" => twig_get_attribute($this->env, $this->source, $context["bolge"], "slug", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bolge"], "isim", [], "any", false, false, false, 103), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bolge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Biz Kimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 113
            echo "                                <li><a class=\"dropdown-item\" href=\"/about/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 113), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 113), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link menu\" href=\"#\">İletişim <i class=\"far fa-id-card\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-2 mx-3 align-self-center align-items-center mx-auto\">
            <form class=\"d-flex\">
                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Hizmet Ara\" aria-label=\"Search\">
                <button class=\"btn btn-purple\" type=\"submit\">Ara</button>
            </form>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <style>
        .navbar-light .navbar-brand {
            color:";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 4, $this->source); })()), "lightColor", [], "any", false, false, false, 4), "html", null, true);
        echo ";
        }
        .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9);
        }
        .navbar-light .navbar-nav .nav-link {
            color:  ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 10, $this->source); })()), "lightColor", [], "any", false, false, false, 10), "html", null, true);
        echo ";
        }
        .purple
        {
            color: ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 14, $this->source); })()), "lightColor", [], "any", false, false, false, 14), "html", null, true);
        echo ";
        }
        .menu{
            font-size: 22px;
            margin-right: 25px;
            border-bottom: 2px solid ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 19, $this->source); })()), "lightColor", [], "any", false, false, false, 19), "html", null, true);
        echo ";
        }
        .btn-purple
        {
            color: #fff;
            background-color: ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 24, $this->source); })()), "lightColor", [], "any", false, false, false, 24), "html", null, true);
        echo ";
            border-color: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 25, $this->source); })()), "lightColor", [], "any", false, false, false, 25), "html", null, true);
        echo ";
        }
        .features-i
        {
            font-size: 25px;
            color:";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 30, $this->source); })()), "lightColor", [], "any", false, false, false, 30), "html", null, true);
        echo ";
        }
        .services
        {
            border-bottom:1px solid ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 34, $this->source); })()), "lightColor", [], "any", false, false, false, 34), "html", null, true);
        echo ";
            border-radius: 100%;
            font-size: 22px;
            -webkit-box-shadow: 0px 10px 16px -15px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 10px 16px -15px rgba(0,0,0,0.75);
            box-shadow: 0px 10px 16px -15px rgba(0,0,0,0.75);
        }
        .services-link
        {
            color: ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 43, $this->source); })()), "darkColor", [], "any", false, false, false, 43), "html", null, true);
        echo ";
            text-decoration: none;
        }
        .content-i
        {
            object-fit: cover;
            width: 500px;
            height: 250px;
            border-radius: 2%;
            -webkit-box-shadow: 0px 10px 16px -15px ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 52, $this->source); })()), "lightColor", [], "any", false, false, false, 52), "html", null, true);
        echo ";
            -moz-box-shadow: 0px 10px 16px -15px ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 53, $this->source); })()), "lightColor", [], "any", false, false, false, 53), "html", null, true);
        echo ";
            box-shadow: 0px 10px 16px -15px ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 54, $this->source); })()), "lightColor", [], "any", false, false, false, 54), "html", null, true);
        echo ";
        }
        .content-t
        {
            color:";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 58, $this->source); })()), "darkColor", [], "any", false, false, false, 58), "html", null, true);
        echo ";
            font-size: 25px;
        }
        .footer-u
        {
            background-color: ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 63, $this->source); })()), "darkColor", [], "any", false, false, false, 63), "html", null, true);
        echo ";
            color:white;

        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 63,  269 => 58,  262 => 54,  258 => 53,  254 => 52,  242 => 43,  230 => 34,  223 => 30,  215 => 25,  211 => 24,  203 => 19,  195 => 14,  188 => 10,  179 => 4,  175 => 2,  165 => 1,  140 => 115,  129 => 113,  125 => 112,  116 => 105,  105 => 103,  101 => 102,  91 => 95,  86 => 92,  75 => 90,  71 => 89,  52 => 73,  46 => 69,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <style>
        .navbar-light .navbar-brand {
            color:{{ generals.lightColor }};
        }
        .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
            color: rgba(0, 0, 0, 0.9);
        }
        .navbar-light .navbar-nav .nav-link {
            color:  {{ generals.lightColor }};
        }
        .purple
        {
            color: {{ generals.lightColor }};
        }
        .menu{
            font-size: 22px;
            margin-right: 25px;
            border-bottom: 2px solid {{ generals.lightColor }};
        }
        .btn-purple
        {
            color: #fff;
            background-color: {{ generals.lightColor }};
            border-color: {{ generals.lightColor }};
        }
        .features-i
        {
            font-size: 25px;
            color:{{ generals.lightColor }};
        }
        .services
        {
            border-bottom:1px solid {{ generals.lightColor }};
            border-radius: 100%;
            font-size: 22px;
            -webkit-box-shadow: 0px 10px 16px -15px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 10px 16px -15px rgba(0,0,0,0.75);
            box-shadow: 0px 10px 16px -15px rgba(0,0,0,0.75);
        }
        .services-link
        {
            color: {{ generals.darkColor }};
            text-decoration: none;
        }
        .content-i
        {
            object-fit: cover;
            width: 500px;
            height: 250px;
            border-radius: 2%;
            -webkit-box-shadow: 0px 10px 16px -15px {{ generals.lightColor }};
            -moz-box-shadow: 0px 10px 16px -15px {{ generals.lightColor }};
            box-shadow: 0px 10px 16px -15px {{ generals.lightColor }};
        }
        .content-t
        {
            color:{{ generals.darkColor }};
            font-size: 25px;
        }
        .footer-u
        {
            background-color: {{ generals.darkColor }};
            color:white;

        }
    </style>
{% endblock %}

<nav class=\"navbar navbar-expand-lg navbar-light bg-light tksl-shadow\">
    <div class=\"container-fluid\">
        <div class=\"col-md-2 px-lg-3 mx-auto\">
            <a class=\"navbar-brand brand-title text-uppercase\" href=\"/\">{{ generals.name }}</a>
            <button class=\"navbar-toggler text-center\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
        </div>
        <div class=\"col-md-7\">
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mx-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link menu\" href=\"/\">&nbsp;<i class=\"fas fa-home\"></i>&nbsp;</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Hizmetlerimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            {% for hizmet in hizmetlerHeader %}
                                <li><a class=\"dropdown-item\" href=\"{{ path('hizmet_page', {slug:hizmet.slug}) }}\">{{ hizmet.isim }}</a></li>
                            {% endfor %}
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link menu\" href=\"{{ path('sss_page') }}\">S.S.S <i class=\"fas fa-question\"></i></a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-city\"></i> Bölgelerimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            {% for bolge in bolgelerHeader %}
                                <li><a class=\"dropdown-item\" href=\"{{ path('bolgeler_page', {slug:bolge.slug}) }}\">{{ bolge.isim }}</a></li>
                            {% endfor %}
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Biz Kimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            {% for item in about %}
                                <li><a class=\"dropdown-item\" href=\"/about/{{ item.slug }}\">{{ item.title }}</a></li>
                            {% endfor %}
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link menu\" href=\"#\">İletişim <i class=\"far fa-id-card\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-2 mx-3 align-self-center align-items-center mx-auto\">
            <form class=\"d-flex\">
                <input class=\"form-control me-2\" type=\"search\" placeholder=\"Hizmet Ara\" aria-label=\"Search\">
                <button class=\"btn btn-purple\" type=\"submit\">Ara</button>
            </form>
        </div>
    </div>
</nav>", "home/inc/header.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\home\\inc\\header.html.twig");
    }
}
