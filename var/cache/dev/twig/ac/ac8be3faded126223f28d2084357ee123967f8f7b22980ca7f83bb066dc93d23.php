<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_60d75854b1d29235530e0a54883630e254c0d4db7dcf75f7b65aaf9d979633fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d75854b1d29235530e0a54883630e254c0d4db7dcf75f7b65aaf9d979633fa->enter($__internal_60d75854b1d29235530e0a54883630e254c0d4db7dcf75f7b65aaf9d979633fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4dac489d5f8921c6e5be3cbeef760163b83fe315b0d19cf1380e5f782eb5e6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dac489d5f8921c6e5be3cbeef760163b83fe315b0d19cf1380e5f782eb5e6c3->enter($__internal_4dac489d5f8921c6e5be3cbeef760163b83fe315b0d19cf1380e5f782eb5e6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d75854b1d29235530e0a54883630e254c0d4db7dcf75f7b65aaf9d979633fa->leave($__internal_60d75854b1d29235530e0a54883630e254c0d4db7dcf75f7b65aaf9d979633fa_prof);

        
        $__internal_4dac489d5f8921c6e5be3cbeef760163b83fe315b0d19cf1380e5f782eb5e6c3->leave($__internal_4dac489d5f8921c6e5be3cbeef760163b83fe315b0d19cf1380e5f782eb5e6c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed011ad524d9ed9b7ef419bc3ec473aba165df1c1e3ce86cd4f5840c06e02693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed011ad524d9ed9b7ef419bc3ec473aba165df1c1e3ce86cd4f5840c06e02693->enter($__internal_ed011ad524d9ed9b7ef419bc3ec473aba165df1c1e3ce86cd4f5840c06e02693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_014b1fda80084ddd2f777d47ac59b24fd17013cdf57c8d639f0fdb98d8f2f1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014b1fda80084ddd2f777d47ac59b24fd17013cdf57c8d639f0fdb98d8f2f1c2->enter($__internal_014b1fda80084ddd2f777d47ac59b24fd17013cdf57c8d639f0fdb98d8f2f1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_014b1fda80084ddd2f777d47ac59b24fd17013cdf57c8d639f0fdb98d8f2f1c2->leave($__internal_014b1fda80084ddd2f777d47ac59b24fd17013cdf57c8d639f0fdb98d8f2f1c2_prof);

        
        $__internal_ed011ad524d9ed9b7ef419bc3ec473aba165df1c1e3ce86cd4f5840c06e02693->leave($__internal_ed011ad524d9ed9b7ef419bc3ec473aba165df1c1e3ce86cd4f5840c06e02693_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e63c6290e42466729b66d952993b59e792dc99a797c0787599f67ce234390ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e63c6290e42466729b66d952993b59e792dc99a797c0787599f67ce234390ac->enter($__internal_9e63c6290e42466729b66d952993b59e792dc99a797c0787599f67ce234390ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_01a97564e6fb679ac2bb800d70cbc1545155f8ed669d38f3761b559946086aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a97564e6fb679ac2bb800d70cbc1545155f8ed669d38f3761b559946086aab->enter($__internal_01a97564e6fb679ac2bb800d70cbc1545155f8ed669d38f3761b559946086aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01a97564e6fb679ac2bb800d70cbc1545155f8ed669d38f3761b559946086aab->leave($__internal_01a97564e6fb679ac2bb800d70cbc1545155f8ed669d38f3761b559946086aab_prof);

        
        $__internal_9e63c6290e42466729b66d952993b59e792dc99a797c0787599f67ce234390ac->leave($__internal_9e63c6290e42466729b66d952993b59e792dc99a797c0787599f67ce234390ac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6bea5445a08b343dc99c02314da93be300a4ac19ca72febfd4a096cc7d6ab3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bea5445a08b343dc99c02314da93be300a4ac19ca72febfd4a096cc7d6ab3ba->enter($__internal_6bea5445a08b343dc99c02314da93be300a4ac19ca72febfd4a096cc7d6ab3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eef4050fed16434a2eceabef66b413abe45c45e243fdd2c72a42e9981b9d3bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef4050fed16434a2eceabef66b413abe45c45e243fdd2c72a42e9981b9d3bbb->enter($__internal_eef4050fed16434a2eceabef66b413abe45c45e243fdd2c72a42e9981b9d3bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eef4050fed16434a2eceabef66b413abe45c45e243fdd2c72a42e9981b9d3bbb->leave($__internal_eef4050fed16434a2eceabef66b413abe45c45e243fdd2c72a42e9981b9d3bbb_prof);

        
        $__internal_6bea5445a08b343dc99c02314da93be300a4ac19ca72febfd4a096cc7d6ab3ba->leave($__internal_6bea5445a08b343dc99c02314da93be300a4ac19ca72febfd4a096cc7d6ab3ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\projects\\spree\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
