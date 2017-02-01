<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_fbf598c7f12aa7a0d654c73192cbd1a9866931e5c470aea81040e1555b77d73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e3436bbb92922a7f71bb82213c4bd6eb1777c8f3831a2f86600f44790e745eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3436bbb92922a7f71bb82213c4bd6eb1777c8f3831a2f86600f44790e745eb->enter($__internal_6e3436bbb92922a7f71bb82213c4bd6eb1777c8f3831a2f86600f44790e745eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_3a7cce07aaedb77f3535fcc8329a6347a043e7bd4659ed4c286da88db7a99a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7cce07aaedb77f3535fcc8329a6347a043e7bd4659ed4c286da88db7a99a60->enter($__internal_3a7cce07aaedb77f3535fcc8329a6347a043e7bd4659ed4c286da88db7a99a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3436bbb92922a7f71bb82213c4bd6eb1777c8f3831a2f86600f44790e745eb->leave($__internal_6e3436bbb92922a7f71bb82213c4bd6eb1777c8f3831a2f86600f44790e745eb_prof);

        
        $__internal_3a7cce07aaedb77f3535fcc8329a6347a043e7bd4659ed4c286da88db7a99a60->leave($__internal_3a7cce07aaedb77f3535fcc8329a6347a043e7bd4659ed4c286da88db7a99a60_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7599cc6e76d758d989ab1e4cf8e97b132db04bb7e160c993cb5b92f8ed1bf250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7599cc6e76d758d989ab1e4cf8e97b132db04bb7e160c993cb5b92f8ed1bf250->enter($__internal_7599cc6e76d758d989ab1e4cf8e97b132db04bb7e160c993cb5b92f8ed1bf250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b627fe5a07b13f763100f8083cc5f98efde1736828da22bfb18eea9503134d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b627fe5a07b13f763100f8083cc5f98efde1736828da22bfb18eea9503134d0c->enter($__internal_b627fe5a07b13f763100f8083cc5f98efde1736828da22bfb18eea9503134d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_b627fe5a07b13f763100f8083cc5f98efde1736828da22bfb18eea9503134d0c->leave($__internal_b627fe5a07b13f763100f8083cc5f98efde1736828da22bfb18eea9503134d0c_prof);

        
        $__internal_7599cc6e76d758d989ab1e4cf8e97b132db04bb7e160c993cb5b92f8ed1bf250->leave($__internal_7599cc6e76d758d989ab1e4cf8e97b132db04bb7e160c993cb5b92f8ed1bf250_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\projects\\spree\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
