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
class __TwigTemplate_61a45756365dbcd1968ccb458afdb2def5c151f30301c0372e8a861616f08f94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HomeController:header"));
        // line 6
        echo "
<div class=\"container-fluid\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-12 p-b-zero\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-indicators\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) || array_key_exists("banners", $context) ? $context["banners"] : (function () { throw new RuntimeError('Variable "banners" does not exist.', 12, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 13
            echo "                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13), 0))) {
                echo " class=\"active\" ";
            }
            echo " aria-current=\"true\" aria-label=\"Slide ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13), "html", null, true);
            echo "\"></button>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </div>
                <div class=\"carousel-inner\">

                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) || array_key_exists("banners", $context) ? $context["banners"] : (function () { throw new RuntimeError('Variable "banners" does not exist.', 18, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 19
            echo "                        <div";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 19), 0))) {
                echo " class=\"carousel-item active\"";
            } else {
                echo " class=\"carousel-item\"";
            }
            echo ">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banner"], "photo", [], "any", false, false, false, 20), "html", null, true);
            echo "\" class=\"d-block w-100 carousel-img\" alt=\"...\">
                            <div class=\"carousel-caption d-none d-md-block carousel-text-bg\">
                                <h5 class=\"carousel-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 22), "html", null, true);
            echo "</h5>
                                <p class=\"carousel-text\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                                ";
            // line 24
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["banner"], "path", [], "any", false, false, false, 24), "yok"))) {
                // line 25
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["banner"], "path", [], "any", false, false, false, 25), "html", null, true);
                echo "\" class=\"btn btn-purple mb-3\">????eri??e Git <i class=\"fas fa-arrow-right\"></i></a>
                                ";
            }
            // line 27
            echo "                                <div class=\"d-grid gap-2\">
                                    <a href=\"\" class=\"btn btn-success mb-3\">Hemen T??kla Ara <i class=\"fas fa-phone\"></i></a>
                                </div>
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Geri</span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">??leri</span>
                </button>
            </div>
        </div>
    </div>
</div>
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generals"]) || array_key_exists("generals", $context) ? $context["generals"] : (function () { throw new RuntimeError('Variable "generals" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            echo "            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 51), "html", null, true);
            echo " features-i\"></i>
                <p class=\"features-t\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 52), "html", null, true);
            echo "</p>
                <p class=\"features-c\">
                    ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 54), "html", null, true);
            echo "
                </p>
                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 56), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 56), "html", null, true);
            echo "</a>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </div>
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
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hizmetler"]) || array_key_exists("hizmetler", $context) ? $context["hizmetler"] : (function () { throw new RuntimeError('Variable "hizmetler" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hizmet"]) {
            // line 72
            echo "                <div class=\"col-md-3 my-5 text-center services pb-4\">
                    <p><i class=\"fas fa-tint purple\"></i> ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hizmet"], "isim", [], "any", false, false, false, 73), "html", null, true);
            echo "</p>
                    <hr class=\"mb-2\" style=\"width: 20%;margin: auto;\">
                    <a href=\"\" class=\"services-link\">Hizmete Git <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hizmet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </div>
    </div>

    <div class=\"container mt-10\">
        <div class=\"row my-5\">
            <div class=\"col-md-12 text-center border-bottom\">
                <p class=\"display-6 purple\">
                    <i class=\"fas fa-align-left\"></i> ??nemli Bilgiler
                </p>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contents"]) || array_key_exists("contents", $context) ? $context["contents"] : (function () { throw new RuntimeError('Variable "contents" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 91
            echo "            <div class=\"col-md-4 mb-5\">
                <img src=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "photo", [], "any", false, false, false, 92), "html", null, true);
            echo "\" class=\"content-i img-fluid\" alt=\"\">
                <p class=\"content-t mt-3\">
                    ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "isim", [], "any", false, false, false, 94), "html", null, true);
            echo "
                </p>
                <p class=\"content-c\">
                    ";
            // line 97
            echo (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "icerik", [], "any", false, false, false, 97)), 320))) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["content"], "icerik", [], "any", false, false, false, 97), 0, 320)) : (twig_get_attribute($this->env, $this->source, $context["content"], "icerik", [], "any", false, false, false, 97)));
            echo "
                </p>
                <div class=\"d-grid gap-2\">
                    <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("content_page", ["slug" => twig_get_attribute($this->env, $this->source, $context["content"], "slug", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\" class=\"btn btn-purple\">Devam??n?? Oku <i class=\"fas fa-arrow-right\"></i></a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </div>
    </div>

";
        // line 107
        $this->loadTemplate("home/inc/footer.html.twig", "home/index.html.twig", 107)->display($context);
        // line 108
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
        return array (  327 => 108,  325 => 107,  320 => 104,  310 => 100,  304 => 97,  298 => 94,  293 => 92,  290 => 91,  286 => 90,  272 => 78,  261 => 73,  258 => 72,  254 => 71,  240 => 59,  229 => 56,  224 => 54,  219 => 52,  215 => 51,  212 => 50,  208 => 49,  190 => 33,  171 => 27,  165 => 25,  163 => 24,  159 => 23,  155 => 22,  150 => 20,  141 => 19,  124 => 18,  119 => 15,  96 => 13,  79 => 12,  71 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ render(controller(
        'App\\\\Controller\\\\HomeController:header'
    )) }}
<div class=\"container-fluid\">
    <div class=\"row justify-content-md-center\">
        <div class=\"col-md-12 p-b-zero\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                <div class=\"carousel-indicators\">
                    {% for banner in banners %}
                    <button type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide-to=\"{{ loop.index0 }}\" {% if loop.index0 == 0 %} class=\"active\" {% endif %} aria-current=\"true\" aria-label=\"Slide {{ loop.index0 }}\"></button>
                    {% endfor %}
                </div>
                <div class=\"carousel-inner\">

                    {% for banner in banners %}
                        <div{% if loop.index0 == 0 %} class=\"carousel-item active\"{% else %} class=\"carousel-item\"{% endif %}>
                            <img src=\"{{ banner.photo }}\" class=\"d-block w-100 carousel-img\" alt=\"...\">
                            <div class=\"carousel-caption d-none d-md-block carousel-text-bg\">
                                <h5 class=\"carousel-text\">{{ banner.title }}</h5>
                                <p class=\"carousel-text\">{{ banner.description }}</p>
                                {% if banner.path != \"yok\" %}
                                    <a href=\"{{ banner.path }}\" class=\"btn btn-purple mb-3\">????eri??e Git <i class=\"fas fa-arrow-right\"></i></a>
                                {% endif %}
                                <div class=\"d-grid gap-2\">
                                    <a href=\"\" class=\"btn btn-success mb-3\">Hemen T??kla Ara <i class=\"fas fa-phone\"></i></a>
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                </div>
                <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">Geri</span>
                </button>
                <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleCaptions\" data-bs-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"visually-hidden\">??leri</span>
                </button>
            </div>
        </div>
    </div>
</div>
    <div class=\"container my-5\">
        <div class=\"row my-5\">
            {% for item in generals %}
            <div class=\"col-md-4 my-5 text-center\">
                <i class=\"{{ item.icon }} features-i\"></i>
                <p class=\"features-t\">{{ item.title }}</p>
                <p class=\"features-c\">
                    {{ item.description }}
                </p>
                <a href=\"{{ item.path }}\" target=\"_blank\" class=\"btn btn-purple\"><i class=\"fas fa-align-left\"></i> {{ item.title }}</a>
            </div>
            {% endfor %}
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
                    <a href=\"\" class=\"services-link\">Hizmete Git <i class=\"fas fa-chevron-right\"></i></a>
                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"container mt-10\">
        <div class=\"row my-5\">
            <div class=\"col-md-12 text-center border-bottom\">
                <p class=\"display-6 purple\">
                    <i class=\"fas fa-align-left\"></i> ??nemli Bilgiler
                </p>
            </div>
        </div>
        <div class=\"row\">
            {% for content in contents %}
            <div class=\"col-md-4 mb-5\">
                <img src=\"{{ content.photo }}\" class=\"content-i img-fluid\" alt=\"\">
                <p class=\"content-t mt-3\">
                    {{ content.isim }}
                </p>
                <p class=\"content-c\">
                    {{ content.icerik|length > 320 ? content.icerik|slice(0,320)|raw : content.icerik|raw }}
                </p>
                <div class=\"d-grid gap-2\">
                    <a href=\"{{ path('content_page', {slug:content.slug}) }}\" class=\"btn btn-purple\">Devam??n?? Oku <i class=\"fas fa-arrow-right\"></i></a>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>

{% include 'home/inc/footer.html.twig' %}

{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\home\\index.html.twig");
    }
}
