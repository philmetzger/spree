<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff5666b54eeb58bde3b46470e15c23a03bdb551f9a0b2aaae28f96d01725ef5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5666b54eeb58bde3b46470e15c23a03bdb551f9a0b2aaae28f96d01725ef5e->enter($__internal_ff5666b54eeb58bde3b46470e15c23a03bdb551f9a0b2aaae28f96d01725ef5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6539b5f348398f2af2466b610da754c7880163ace32fa0c1aea6a20e79c07c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6539b5f348398f2af2466b610da754c7880163ace32fa0c1aea6a20e79c07c37->enter($__internal_6539b5f348398f2af2466b610da754c7880163ace32fa0c1aea6a20e79c07c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff5666b54eeb58bde3b46470e15c23a03bdb551f9a0b2aaae28f96d01725ef5e->leave($__internal_ff5666b54eeb58bde3b46470e15c23a03bdb551f9a0b2aaae28f96d01725ef5e_prof);

        
        $__internal_6539b5f348398f2af2466b610da754c7880163ace32fa0c1aea6a20e79c07c37->leave($__internal_6539b5f348398f2af2466b610da754c7880163ace32fa0c1aea6a20e79c07c37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_147be915a67ef1e0c988f6f5c6a921010731dca46b13f43dd1603449dfe58210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147be915a67ef1e0c988f6f5c6a921010731dca46b13f43dd1603449dfe58210->enter($__internal_147be915a67ef1e0c988f6f5c6a921010731dca46b13f43dd1603449dfe58210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0a1c8f8f89c41216d12bb76531587a4785fff13f5c49db18d9b518d3ac68413d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1c8f8f89c41216d12bb76531587a4785fff13f5c49db18d9b518d3ac68413d->enter($__internal_0a1c8f8f89c41216d12bb76531587a4785fff13f5c49db18d9b518d3ac68413d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0a1c8f8f89c41216d12bb76531587a4785fff13f5c49db18d9b518d3ac68413d->leave($__internal_0a1c8f8f89c41216d12bb76531587a4785fff13f5c49db18d9b518d3ac68413d_prof);

        
        $__internal_147be915a67ef1e0c988f6f5c6a921010731dca46b13f43dd1603449dfe58210->leave($__internal_147be915a67ef1e0c988f6f5c6a921010731dca46b13f43dd1603449dfe58210_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34937e6a9c0a5be236ed5825e945bab52f21bdb0b041da7f9748dcb900465470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34937e6a9c0a5be236ed5825e945bab52f21bdb0b041da7f9748dcb900465470->enter($__internal_34937e6a9c0a5be236ed5825e945bab52f21bdb0b041da7f9748dcb900465470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3508c5dc28defa4b12c4a5d46e62636b7a99e4625a1cb0d0e01d9eade78c56a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3508c5dc28defa4b12c4a5d46e62636b7a99e4625a1cb0d0e01d9eade78c56a5->enter($__internal_3508c5dc28defa4b12c4a5d46e62636b7a99e4625a1cb0d0e01d9eade78c56a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3508c5dc28defa4b12c4a5d46e62636b7a99e4625a1cb0d0e01d9eade78c56a5->leave($__internal_3508c5dc28defa4b12c4a5d46e62636b7a99e4625a1cb0d0e01d9eade78c56a5_prof);

        
        $__internal_34937e6a9c0a5be236ed5825e945bab52f21bdb0b041da7f9748dcb900465470->leave($__internal_34937e6a9c0a5be236ed5825e945bab52f21bdb0b041da7f9748dcb900465470_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6ac80beb16ed80ff7595904ea2aafc3a403a0a4ce7c86d2f91319d0cb7fb849e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac80beb16ed80ff7595904ea2aafc3a403a0a4ce7c86d2f91319d0cb7fb849e->enter($__internal_6ac80beb16ed80ff7595904ea2aafc3a403a0a4ce7c86d2f91319d0cb7fb849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_86e62c46fc88c00e4963c3a9ea3266beba6ce9917a195b91cf5d6dda0fc8019f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e62c46fc88c00e4963c3a9ea3266beba6ce9917a195b91cf5d6dda0fc8019f->enter($__internal_86e62c46fc88c00e4963c3a9ea3266beba6ce9917a195b91cf5d6dda0fc8019f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_86e62c46fc88c00e4963c3a9ea3266beba6ce9917a195b91cf5d6dda0fc8019f->leave($__internal_86e62c46fc88c00e4963c3a9ea3266beba6ce9917a195b91cf5d6dda0fc8019f_prof);

        
        $__internal_6ac80beb16ed80ff7595904ea2aafc3a403a0a4ce7c86d2f91319d0cb7fb849e->leave($__internal_6ac80beb16ed80ff7595904ea2aafc3a403a0a4ce7c86d2f91319d0cb7fb849e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\projects\\spree\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
