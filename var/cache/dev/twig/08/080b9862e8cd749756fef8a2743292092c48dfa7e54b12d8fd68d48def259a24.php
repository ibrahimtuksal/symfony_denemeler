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

/* home/index.html.twig */
class __TwigTemplate_b77d251ae356de5b842021973412273867606614e67e50f1ebcdac8fbc273419 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Hello HomeController!";
        
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
        $this->loadTemplate("home/inc/header.html.twig", "home/index.html.twig", 6)->display($context);
        // line 7
        echo "<div class=\"container-fluid\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-12 p-b-zero\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                </div>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img src=\"https://images.hdqwalls.com/wallpapers/cyber-captain-america-5k-aw.jpg\" class=\"d-block w-100 carousel-img\" alt=\"...\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <a href=\"\" class=\"btn btn-purple mb-3\">Hizmete git</a>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"https://via.placeholder.com/1920x500\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>

                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Geri</span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">İleri</span>
                </button>
            </div>
        </div>
    </div>
</div>

    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"fas fa-home features-i\"></i>
                <p class=\"features-t\">Hizmetlerimiz</p>
                <p class=\"features-c\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda debitis dolor natus nostrum rem sequi similique! Accusamus, adipisci animi, commodi consectetur deleniti est ipsam modi molestias, possimus ratione rem repudiandae.
                </p>
                <a href=\"\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> Hizmetler</a>
            </div>
            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"fas fa-question features-i\"></i>
                <p class=\"features-t\">Sıkça Sorulan Sorular</p>
                <p class=\"features-c\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda debitis dolor natus nostrum rem sequi similique! Accusamus, adipisci animi, commodi consectetur deleniti est ipsam modi molestias, possimus ratione rem repudiandae.
                </p>
                <a href=\"\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> S.S.S</a>
            </div>
            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"far fa-id-card features-i\"></i>
                <p class=\"features-t\">İletişim</p>
                <p class=\"features-c\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda debitis dolor natus nostrum rem sequi similique! Accusamus, adipisci animi, commodi consectetur deleniti est ipsam modi molestias, possimus ratione rem repudiandae.
                </p>
                <a href=\"\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> İletişim</a>
            </div>
        </div>
    </div>

    <div class=\"container mt-10\">
        <div class=\"row my-5\">
            <div class=\"col-md-12 text-center border-bottom\">
                <p class=\"display-6 purple\">
                    <i class=\"fas fa-align-left\"></i> Hizmetlerimiz
                </p>
            </div>
        </div>
        <div class=\"row justify-content-md-center my-5\">
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hizmetler"]) || array_key_exists("hizmetler", $context) ? $context["hizmetler"] : (function () { throw new RuntimeError('Variable "hizmetler" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hizmet"]) {
            // line 86
            echo "                <div class=\"col-md-3 my-5 text-center services pb-4\">
                    <p><i class=\"fas fa-tint purple\"></i> ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "isim", [], "any", false, false, false, 87), "html", null, true);
            echo "</p>
                    <hr class=\"mb-2\" style=\"width: 20%;margin: auto;\">
                    <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hizmet", ["slug" => twig_get_attribute($this->env, $this->source, $context["hizmet"], "slug", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" class=\"services-link\">Hizmete Git <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hizmet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
    </div>

    <div class=\"container mt-10\">
        <div class=\"row my-5\">
            <div class=\"col-md-12 text-center border-bottom\">
                <p class=\"display-6 purple\">
                    <i class=\"fas fa-align-left\"></i> Önemli Bilgiler
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
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

            <div class=\"col-md-4\">
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
            <div class=\"col-md-4\">
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

";
        // line 144
        $this->loadTemplate("home/inc/footer.html.twig", "home/index.html.twig", 144)->display($context);
        // line 145
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 145,  246 => 144,  192 => 92,  183 => 89,  178 => 87,  175 => 86,  171 => 85,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
    {% include 'home/inc/header.html.twig' %}
<div class=\"container-fluid\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-12 p-b-zero\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-indicators\">
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
                </div>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img src=\"https://images.hdqwalls.com/wallpapers/cyber-captain-america-5k-aw.jpg\" class=\"d-block w-100 carousel-img\" alt=\"...\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <a href=\"\" class=\"btn btn-purple mb-3\">Hizmete git</a>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"https://via.placeholder.com/1920x500\" class=\"d-block w-100\" alt=\"...\">
                        <div class=\"carousel-caption d-none d-md-block\">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>

                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Geri</span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">İleri</span>
                </button>
            </div>
        </div>
    </div>
</div>

    <div class=\"container my-5\">
        <div class=\"row my-5\">
            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"fas fa-home features-i\"></i>
                <p class=\"features-t\">Hizmetlerimiz</p>
                <p class=\"features-c\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda debitis dolor natus nostrum rem sequi similique! Accusamus, adipisci animi, commodi consectetur deleniti est ipsam modi molestias, possimus ratione rem repudiandae.
                </p>
                <a href=\"\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> Hizmetler</a>
            </div>
            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"fas fa-question features-i\"></i>
                <p class=\"features-t\">Sıkça Sorulan Sorular</p>
                <p class=\"features-c\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda debitis dolor natus nostrum rem sequi similique! Accusamus, adipisci animi, commodi consectetur deleniti est ipsam modi molestias, possimus ratione rem repudiandae.
                </p>
                <a href=\"\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> S.S.S</a>
            </div>
            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"far fa-id-card features-i\"></i>
                <p class=\"features-t\">İletişim</p>
                <p class=\"features-c\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda debitis dolor natus nostrum rem sequi similique! Accusamus, adipisci animi, commodi consectetur deleniti est ipsam modi molestias, possimus ratione rem repudiandae.
                </p>
                <a href=\"\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> İletişim</a>
            </div>
        </div>
    </div>

    <div class=\"container mt-10\">
        <div class=\"row my-5\">
            <div class=\"col-md-12 text-center border-bottom\">
                <p class=\"display-6 purple\">
                    <i class=\"fas fa-align-left\"></i> Hizmetlerimiz
                </p>
            </div>
        </div>
        <div class=\"row justify-content-md-center my-5\">
            {% for hizmet in hizmetler %}
                <div class=\"col-md-3 my-5 text-center services pb-4\">
                    <p><i class=\"fas fa-tint purple\"></i> {{ hizmet.isim }}</p>
                    <hr class=\"mb-2\" style=\"width: 20%;margin: auto;\">
                    <a href=\"{{ path('hizmet', {slug:hizmet.slug}) }}\" class=\"services-link\">Hizmete Git <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"container mt-10\">
        <div class=\"row my-5\">
            <div class=\"col-md-12 text-center border-bottom\">
                <p class=\"display-6 purple\">
                    <i class=\"fas fa-align-left\"></i> Önemli Bilgiler
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-4\">
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

            <div class=\"col-md-4\">
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
            <div class=\"col-md-4\">
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

{% include 'home/inc/footer.html.twig' %}

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\home\\index.html.twig");
    }
}
