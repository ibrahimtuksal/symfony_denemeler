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

/* admin/general_information/icon.html.twig */
class __TwigTemplate_bec4f83eeea5afd665b28d2d550b0ae2439ad6bc6d9b7ef35a5c5dbef0eef06b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/general_information/icon.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/general_information/icon.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/general_information/icon.html.twig", 1);
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
        $this->loadTemplate("admin/inc/header.html.twig", "admin/general_information/icon.html.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container my-5\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12 text-center\">
                <p class=\"display-3 text-center\">İkon Bilgi</p>
                <p class=\"h4\">İlk öncelikle şu siteye gidip icon seçiniz -> <a href=\"https://fontawesome.com/icons?d=gallery&p=2&m=free\" target=\"_blank\">Font Awesome</a></p>
                <p class=\"h4\">Seçtiğiniz ikon'a tıkladıktan sonrasında sizi şöyle bir sayfa karşılayacaktır</p>
                <img src=\"/images/info1.png\" class=\"img-fluid shadow\" alt=\"\">
                <p class=\"my-5 h4\">Hemen Ardından Ok ile işaretlenen yere tıklayınız. tıklama işlemi ikonu kopyalayacaktır.</p>
                <img src=\"/images/info2.png\" class=\"img-fluid shadow\" alt=\"\">
                <p class=\"my-5 h4\">Kopyaladığımız yazının hepsini kullanmayacağız yalnızca üstte ki fotoğrafta bulunan yazı da ki kalın kısmı kullanacağız.</p>
                <p class=\"my-5 h4\">Şimdi tek yapmanız gereken seçilen/kopyalanan ikonun <font class=\"text-danger\">sadece çift tırnaklar arasında ki yazıyı Ok ile işaretlenen yere</font> Ekleyiniz</p>
                <img src=\"/images/info3.png\" class=\"img-fluid shadow\" alt=\"\">

                <div class=\"d-grid gap-2\">
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generali_create");
        echo "\" class=\"btn btn-dark my-5 btn-lg\">Genel Bilgi Ekle</a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/general_information/icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Yönetim Paneli{% endblock %}

{% block body %}
    {% include 'admin/inc/header.html.twig' %}
    <div class=\"container my-5\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-12 text-center\">
                <p class=\"display-3 text-center\">İkon Bilgi</p>
                <p class=\"h4\">İlk öncelikle şu siteye gidip icon seçiniz -> <a href=\"https://fontawesome.com/icons?d=gallery&p=2&m=free\" target=\"_blank\">Font Awesome</a></p>
                <p class=\"h4\">Seçtiğiniz ikon'a tıkladıktan sonrasında sizi şöyle bir sayfa karşılayacaktır</p>
                <img src=\"/images/info1.png\" class=\"img-fluid shadow\" alt=\"\">
                <p class=\"my-5 h4\">Hemen Ardından Ok ile işaretlenen yere tıklayınız. tıklama işlemi ikonu kopyalayacaktır.</p>
                <img src=\"/images/info2.png\" class=\"img-fluid shadow\" alt=\"\">
                <p class=\"my-5 h4\">Kopyaladığımız yazının hepsini kullanmayacağız yalnızca üstte ki fotoğrafta bulunan yazı da ki kalın kısmı kullanacağız.</p>
                <p class=\"my-5 h4\">Şimdi tek yapmanız gereken seçilen/kopyalanan ikonun <font class=\"text-danger\">sadece çift tırnaklar arasında ki yazıyı Ok ile işaretlenen yere</font> Ekleyiniz</p>
                <img src=\"/images/info3.png\" class=\"img-fluid shadow\" alt=\"\">

                <div class=\"d-grid gap-2\">
                    <a href=\"{{ path('generali_create') }}\" class=\"btn btn-dark my-5 btn-lg\">Genel Bilgi Ekle</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/general_information/icon.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\admin\\general_information\\icon.html.twig");
    }
}
