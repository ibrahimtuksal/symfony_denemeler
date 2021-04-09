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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light tksl-shadow\">
    <div class=\"container-fluid\">
        <div class=\"col-md-2 px-lg-3 mx-auto\">
            <a class=\"navbar-brand brand-title text-uppercase\" href=\"/\">Su Tesisatçısı</a>
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
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hizmetlerHeader"]) || array_key_exists("hizmetlerHeader", $context) ? $context["hizmetlerHeader"] : (function () { throw new RuntimeError('Variable "hizmetlerHeader" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hizmet"]) {
            // line 21
            echo "                                <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet_page", ["slug" => twig_get_attribute($this->env, $this->source, $context["hizmet"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "isim", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hizmet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link menu\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sss_page");
        echo "\">S.S.S <i class=\"fas fa-question\"></i></a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"fas fa-city\"></i> Bölgelerimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bolgelerHeader"]) || array_key_exists("bolgelerHeader", $context) ? $context["bolgelerHeader"] : (function () { throw new RuntimeError('Variable "bolgelerHeader" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bolge"]) {
            // line 34
            echo "                                <li><a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolgeler_page", ["slug" => twig_get_attribute($this->env, $this->source, $context["bolge"], "slug", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bolge"], "isim", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bolge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle menu\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Biz Kimiz
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new RuntimeError('Variable "about" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                                <li><a class=\"dropdown-item\" href=\"/about/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
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
        return array (  133 => 46,  122 => 44,  118 => 43,  109 => 36,  98 => 34,  94 => 33,  84 => 26,  79 => 23,  68 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light tksl-shadow\">
    <div class=\"container-fluid\">
        <div class=\"col-md-2 px-lg-3 mx-auto\">
            <a class=\"navbar-brand brand-title text-uppercase\" href=\"/\">Su Tesisatçısı</a>
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
