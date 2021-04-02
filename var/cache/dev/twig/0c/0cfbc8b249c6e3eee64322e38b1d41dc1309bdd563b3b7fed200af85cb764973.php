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
class __TwigTemplate_fc1c7332f244b2b30513742e7cbcb02a7667b327c09b5c2eb635f9da061173a7 extends Template
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
            <p class=\"display-4\"><a href=\"index.php\" class=\"text-dark\" style=\"text-decoration: none;\">Yönetim Paneli</a></p>
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
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"design.php\" class=\"btn btn-dark\">Genel Ayarlar <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet_home");
        echo "\" class=\"btn btn-dark\">Hizmetler <i class=\"fas fa-bars\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bolgeler_home");
        echo "\" class=\"btn btn-dark\">Semt <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mahalle_home");
        echo "\" class=\"btn btn-dark\">Mahalle <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"qr.php\" class=\"btn btn-dark\">İçerik <i class=\"fas fa-qrcode\"></i></a>
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
        return array (  80 => 24,  74 => 21,  68 => 18,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container pt-5\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-8 text-center\">
            <p class=\"display-4\"><a href=\"index.php\" class=\"text-dark\" style=\"text-decoration: none;\">Yönetim Paneli</a></p>
            <p class=\"h4\">{{ app.user.fullname }}</p>
            <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\"><i class=\"fas fa-power-off\"></i></a>
            <hr>
        </div>
    </div>
</div>

<div class=\"container\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"design.php\" class=\"btn btn-dark\">Genel Ayarlar <i class=\"fas fa-cog\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('hizmet_home') }}\" class=\"btn btn-dark\">Hizmetler <i class=\"fas fa-bars\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('bolgeler_home') }}\" class=\"btn btn-dark\">Semt <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"{{ path('mahalle_home') }}\" class=\"btn btn-dark\">Mahalle <i class=\"fas fa-city\"></i></a>
        </div>
        <div class=\"col-md-2 d-grid gap-2 mb-3\">
            <a href=\"qr.php\" class=\"btn btn-dark\">İçerik <i class=\"fas fa-qrcode\"></i></a>
        </div>
    </div>
</div>", "admin/inc/header.html.twig", "C:\\xampp\\htdocs\\symfony-tesisatarizasi\\templates\\admin\\inc\\header.html.twig");
    }
}
