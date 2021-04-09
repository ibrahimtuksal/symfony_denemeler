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

/* pages/bolge.html.twig */
class __TwigTemplate_64a513c81760a107b06017348a32526048b1b93788556fe38ba7e62596590cdd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/bolge.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/bolge.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/bolge.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HomeController:header"));
        // line 7
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 mt-5\">
                <p class=\"text-center display-5 border-bottom\">
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["bolgeler"]) || array_key_exists("bolgeler", $context) ? $context["bolgeler"] : (function () { throw new RuntimeError('Variable "bolgeler" does not exist.', 12, $this->source); })()), "isim", [], "any", false, false, false, 12), "html", null, true);
        echo " Su Tesisatı
                </p>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mahalle"]) || array_key_exists("mahalle", $context) ? $context["mahalle"] : (function () { throw new RuntimeError('Variable "mahalle" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mahalles"]) {
            // line 18
            echo "                <div class=\"col-md-5 mx-5 my-2\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">
                            ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mahalles"], "isim", [], "any", false, false, false, 21), "html", null, true);
            echo "
                        </li>
                    </ul>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mahalles'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
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
        // line 40
        $this->loadTemplate("home/inc/footer.html.twig", "pages/bolge.html.twig", 40)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/bolge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 40,  106 => 26,  95 => 21,  90 => 18,  86 => 17,  78 => 12,  71 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    {{ render(controller(
        'App\\\\Controller\\\\HomeController:header'
    )) }}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 mt-5\">
                <p class=\"text-center display-5 border-bottom\">
                    {{ bolgeler.isim }} Su Tesisatı
                </p>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            {% for mahalles in mahalle %}
                <div class=\"col-md-5 mx-5 my-2\">
                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">
                            {{ mahalles.isim }}
                        </li>
                    </ul>
                </div>
            {% endfor %}
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
", "pages/bolge.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\pages\\bolge.html.twig");
    }
}
