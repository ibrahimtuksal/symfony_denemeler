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

/* pages/sss.html.twig */
class __TwigTemplate_f11b655879584ad3b9257eafa1c6860533db8f532cde0edb3853374c9648c859 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/sss.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/sss.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/sss.html.twig", 1);
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\HomeController:header"));
        // line 8
        echo "
    <div class=\"container-fluid my-5\">
        <div class=\"row my-5 justify-content-md-center\">
            <div class=\"col-md-1 text-start\">
                <img src=\"/images/sss.png\" class=\"img-fluid\" width=\"200\" alt=\"\">
            </div>
            <div class=\"col-md-5 border-bottom\">
                <p class=\"display-6 text-center\">
                    Sıkça Sorulan Sorular
                </p>
            </div>
            <div class=\"col-md-1\">
                <img src=\"/images/sss.png\" class=\"img-fluid\" width=\"200\" alt=\"\">
            </div>
        </div>
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-6 tksl-shadow\">
                <div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
                    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sss"]) || array_key_exists("sss", $context) ? $context["sss"] : (function () { throw new RuntimeError('Variable "sss" does not exist.', 26, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header \" id=\"flush-heading";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                                <button class=\"accordion-button collapsed text-center\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapse";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"flush-collapse";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                                    <h5 class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</h5>
                                </button>
                            </h2>
                            <div id=\"flush-collapse";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-heading";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 34), "html", null, true);
            echo "\" data-bs-parent=\"#accordionFlushExample\">
                                <div class=\"accordion-body\">
                                    ";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 36);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>
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
        // line 58
        $this->loadTemplate("home/inc/footer.html.twig", "pages/sss.html.twig", 58)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/sss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  174 => 42,  154 => 36,  147 => 34,  141 => 31,  135 => 30,  131 => 29,  127 => 27,  110 => 26,  90 => 8,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    {{ render(controller(
        'App\\\\Controller\\\\HomeController:header'
    )) }}
    <div class=\"container-fluid my-5\">
        <div class=\"row my-5 justify-content-md-center\">
            <div class=\"col-md-1 text-start\">
                <img src=\"/images/sss.png\" class=\"img-fluid\" width=\"200\" alt=\"\">
            </div>
            <div class=\"col-md-5 border-bottom\">
                <p class=\"display-6 text-center\">
                    Sıkça Sorulan Sorular
                </p>
            </div>
            <div class=\"col-md-1\">
                <img src=\"/images/sss.png\" class=\"img-fluid\" width=\"200\" alt=\"\">
            </div>
        </div>
        <div class=\"row justify-content-md-center my-5\">
            <div class=\"col-md-6 tksl-shadow\">
                <div class=\"accordion accordion-flush\" id=\"accordionFlushExample\">
                    {% for item in sss %}

                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header \" id=\"flush-heading{{ loop.index }}\">
                                <button class=\"accordion-button collapsed text-center\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#flush-collapse{{ loop.index }}\" aria-expanded=\"false\" aria-controls=\"flush-collapse{{ loop.index }}\">
                                    <h5 class=\"text-center\">{{ item.title }}</h5>
                                </button>
                            </h2>
                            <div id=\"flush-collapse{{ loop.index }}\" class=\"accordion-collapse collapse\" aria-labelledby=\"flush-heading{{ loop.index }}\" data-bs-parent=\"#accordionFlushExample\">
                                <div class=\"accordion-body\">
                                    {{ item.description | raw }}
                                </div>
                            </div>
                        </div>

                    {% endfor %}
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
{% endblock %}", "pages/sss.html.twig", "C:\\xampp\\htdocs\\symfony_denemeler\\templates\\pages\\sss.html.twig");
    }
}
