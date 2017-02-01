<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c9157e71a82af92154bb6495b62c9da785f18e32d17781ed6ba5244c7a971f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9157e71a82af92154bb6495b62c9da785f18e32d17781ed6ba5244c7a971f2->enter($__internal_6c9157e71a82af92154bb6495b62c9da785f18e32d17781ed6ba5244c7a971f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0f6856875f7d9e4227dedd33687fad2a888942fa52260e4853de91b4a0720760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6856875f7d9e4227dedd33687fad2a888942fa52260e4853de91b4a0720760->enter($__internal_0f6856875f7d9e4227dedd33687fad2a888942fa52260e4853de91b4a0720760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6c9157e71a82af92154bb6495b62c9da785f18e32d17781ed6ba5244c7a971f2->leave($__internal_6c9157e71a82af92154bb6495b62c9da785f18e32d17781ed6ba5244c7a971f2_prof);

        
        $__internal_0f6856875f7d9e4227dedd33687fad2a888942fa52260e4853de91b4a0720760->leave($__internal_0f6856875f7d9e4227dedd33687fad2a888942fa52260e4853de91b4a0720760_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf596d8eefa7033c8a390ddd2ee44038ece5b139415c56cde43643c59972797c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf596d8eefa7033c8a390ddd2ee44038ece5b139415c56cde43643c59972797c->enter($__internal_cf596d8eefa7033c8a390ddd2ee44038ece5b139415c56cde43643c59972797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c87ee4a444042b6842b413170d15230ea79f2569040b6c33ec487ff45df8eaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87ee4a444042b6842b413170d15230ea79f2569040b6c33ec487ff45df8eaf0->enter($__internal_c87ee4a444042b6842b413170d15230ea79f2569040b6c33ec487ff45df8eaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c87ee4a444042b6842b413170d15230ea79f2569040b6c33ec487ff45df8eaf0->leave($__internal_c87ee4a444042b6842b413170d15230ea79f2569040b6c33ec487ff45df8eaf0_prof);

        
        $__internal_cf596d8eefa7033c8a390ddd2ee44038ece5b139415c56cde43643c59972797c->leave($__internal_cf596d8eefa7033c8a390ddd2ee44038ece5b139415c56cde43643c59972797c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c32de02bd9d684ef9fb2c1e07078108323bcf4ca6c8f54f3536b2618dcfda99b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32de02bd9d684ef9fb2c1e07078108323bcf4ca6c8f54f3536b2618dcfda99b->enter($__internal_c32de02bd9d684ef9fb2c1e07078108323bcf4ca6c8f54f3536b2618dcfda99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_30ae0d8af3728a5afbd0a509947a87663b47ae24b859152219094adda4f63c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ae0d8af3728a5afbd0a509947a87663b47ae24b859152219094adda4f63c9d->enter($__internal_30ae0d8af3728a5afbd0a509947a87663b47ae24b859152219094adda4f63c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_30ae0d8af3728a5afbd0a509947a87663b47ae24b859152219094adda4f63c9d->leave($__internal_30ae0d8af3728a5afbd0a509947a87663b47ae24b859152219094adda4f63c9d_prof);

        
        $__internal_c32de02bd9d684ef9fb2c1e07078108323bcf4ca6c8f54f3536b2618dcfda99b->leave($__internal_c32de02bd9d684ef9fb2c1e07078108323bcf4ca6c8f54f3536b2618dcfda99b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_62dde05b6fad97766f5b9094c596b572a95e99390536baecce2027128c65bdaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62dde05b6fad97766f5b9094c596b572a95e99390536baecce2027128c65bdaf->enter($__internal_62dde05b6fad97766f5b9094c596b572a95e99390536baecce2027128c65bdaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_862017b5501b795a1616bdb2a63d7ef219de2b9ee09833807e0be4b391588cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862017b5501b795a1616bdb2a63d7ef219de2b9ee09833807e0be4b391588cee->enter($__internal_862017b5501b795a1616bdb2a63d7ef219de2b9ee09833807e0be4b391588cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_862017b5501b795a1616bdb2a63d7ef219de2b9ee09833807e0be4b391588cee->leave($__internal_862017b5501b795a1616bdb2a63d7ef219de2b9ee09833807e0be4b391588cee_prof);

        
        $__internal_62dde05b6fad97766f5b9094c596b572a95e99390536baecce2027128c65bdaf->leave($__internal_62dde05b6fad97766f5b9094c596b572a95e99390536baecce2027128c65bdaf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_05de65d158103eb7314c809966beb1b1954533b449fa47bc409ade14e66b82e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05de65d158103eb7314c809966beb1b1954533b449fa47bc409ade14e66b82e4->enter($__internal_05de65d158103eb7314c809966beb1b1954533b449fa47bc409ade14e66b82e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_be56e8a47ea647c68be492f107d7237f95c009a1d15b163d5d61ab1f5650cfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be56e8a47ea647c68be492f107d7237f95c009a1d15b163d5d61ab1f5650cfe8->enter($__internal_be56e8a47ea647c68be492f107d7237f95c009a1d15b163d5d61ab1f5650cfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be56e8a47ea647c68be492f107d7237f95c009a1d15b163d5d61ab1f5650cfe8->leave($__internal_be56e8a47ea647c68be492f107d7237f95c009a1d15b163d5d61ab1f5650cfe8_prof);

        
        $__internal_05de65d158103eb7314c809966beb1b1954533b449fa47bc409ade14e66b82e4->leave($__internal_05de65d158103eb7314c809966beb1b1954533b449fa47bc409ade14e66b82e4_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
