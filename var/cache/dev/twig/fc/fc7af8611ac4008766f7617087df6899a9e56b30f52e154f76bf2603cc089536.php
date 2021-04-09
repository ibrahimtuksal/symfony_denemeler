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

/* admin/inc/header.html.twig */
class __TwigTemplate_61c2576f769b38512fdb89890bf418f8e3b3876a99f1caecfe763b835aace4d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inc/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/inc/header.html.twig"));

        // line 1
        echo "<div class=\"container pt-5\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-8 text-center\">
            <p class=\"display-4\"><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"text-dark\" style=\"text-decoration: none;\">Yönetim Paneli</a></p>
            <p class=\"h4\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "fullname", [], "any", false, false, false, 5), "html", null, true);
        echo "</p>
            <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-danger\"><i class=\"fas fa-power-off\"></i></a>
            <hr>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-2 mb-3\">
            <div class=\"dropdown d-grid gap-2\">
                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fas fa-cog\"></i> Genel Ayarlar
                </button>
                <ul class=\"dropdown-menu text-center\" aria-labelledby=\"dropdownMenuButton1\">
                    <li><a class=\"dropdown-item\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("general_home");
        echo "\">Genel Ayarlar <i class=\"fas fa-cog\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("banner_home");
        echo "\">Banner Ayarları <i class=\"fas fa-images\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generali_home");
        echo "\">Genel Bilgi Ayarları <i class=\"fas fa-cog\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about_home");
        echo "\">Biz Kimiz Ayarları <i class=\"fas fa-cog\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("number_home");
        echo "\">Numara Ayarlar <i class=\"fas fa-phone\"></i></a></li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet_home");
        echo "\" class=\"btn btn-dark\">Hizmetler <i class=\"fas fa-bars\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sss_home");
        echo "\" class=\"btn btn-dark\">S.S.S <i class=\"fas fa-question\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolgeler_home");
        echo "\" class=\"btn btn-dark\">Semt <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mahalle_home");
        echo "\" class=\"btn btn-dark\">Mahalle <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content_home");
        echo "\" class=\"btn btn-dark\">İçerik <i class=\"fas fa-qrcode\"></i></a>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/inc/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  115 => 38,  109 => 35,  103 => 32,  97 => 29,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  56 => 6,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container pt-5\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-8 text-center\">
            <p class=\"display-4\"><a href=\"{{ path('admin') }}\" class=\"text-dark\" style=\"text-decoration: none;\">Yönetim Paneli</a></p>
            <p class=\"h4\">{{ app.user.fullname }}</p>
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\"><i class=\"fas fa-power-off\"></i></a>
            <hr>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-2 mb-3\">
            <div class=\"dropdown d-grid gap-2\">
                <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fas fa-cog\"></i> Genel Ayarlar
                </button>
                <ul class=\"dropdown-menu text-center\" aria-labelledby=\"dropdownMenuButton1\">
                    <li><a class=\"dropdown-item\" href=\"{{ path('general_home') }}\">Genel Ayarlar <i class=\"fas fa-cog\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('banner_home') }}\">Banner Ayarları <i class=\"fas fa-images\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('generali_home') }}\">Genel Bilgi Ayarları <i class=\"fas fa-cog\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('about_home') }}\">Biz Kimiz Ayarları <i class=\"fas fa-cog\"></i></a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('number_home') }}\">Numara Ayarlar <i class=\"fas fa-phone\"></i></a></li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('hizmet_home') }}\" class=\"btn btn-dark\">Hizmetler <i class=\"fas fa-bars\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('sss_home') }}\" class=\"btn btn-dark\">S.S.S <i class=\"fas fa-question\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('bolgeler_home') }}\" class=\"btn btn-dark\">Semt <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('mahalle_home') }}\" class=\"btn btn-dark\">Mahalle <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('content_home') }}\" class=\"btn btn-dark\">İçerik <i class=\"fas fa-qrcode\"></i></a>
        </div>
    </div>
</div>", "admin/inc/header.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\admin\\inc\\header.html.twig");
    }
}
