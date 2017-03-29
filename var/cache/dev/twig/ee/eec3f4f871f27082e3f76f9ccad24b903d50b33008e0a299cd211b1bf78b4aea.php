<?php

/* base.html.twig */
class __TwigTemplate_4121a87bcfe731533423ab6c3c7ef40f0f275283f6f10104a91411921f8965f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ef9ca77b11ac66654e0d46abf874e1444ff123f8e45163607f7d515e3a763a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef9ca77b11ac66654e0d46abf874e1444ff123f8e45163607f7d515e3a763a4->enter($__internal_8ef9ca77b11ac66654e0d46abf874e1444ff123f8e45163607f7d515e3a763a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f225c64d43541864cfcdf8b8cbb91da4aa0ef2f9f6944a8d6221054fb1d95e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f225c64d43541864cfcdf8b8cbb91da4aa0ef2f9f6944a8d6221054fb1d95e7b->enter($__internal_f225c64d43541864cfcdf8b8cbb91da4aa0ef2f9f6944a8d6221054fb1d95e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"referrer\" content=\"origin-when-cross-origin\">
        <meta name=\"theme-color\" content=\"#4a5a66\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
        <meta property=\"og:type\" content=\"website\">
        <meta name=\"description\" content=\"\">

        ";
        // line 12
        $this->displayBlock('description', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('keywords', $context, $blocks);
        // line 19
        echo "
        <title>";
        // line 20
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/semantic.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/default.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/icon.css"), "html", null, true);
        echo "\" />

        ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
                integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
                crossorigin=\"anonymous\">
        </script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/semantic.js"), "html", null, true);
        echo "\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        <div class=\"body-container\">
            <!-- Header -->
            <div class=\"header-container\">
                ";
        // line 41
        $this->displayBlock('header', $context, $blocks);
        // line 44
        echo "            </div>
            <!-- End of Header -->

            <!-- Page content -->
            <div class=\"page-container ui\">
                ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/header.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</html>
";
        
        $__internal_8ef9ca77b11ac66654e0d46abf874e1444ff123f8e45163607f7d515e3a763a4->leave($__internal_8ef9ca77b11ac66654e0d46abf874e1444ff123f8e45163607f7d515e3a763a4_prof);

        
        $__internal_f225c64d43541864cfcdf8b8cbb91da4aa0ef2f9f6944a8d6221054fb1d95e7b->leave($__internal_f225c64d43541864cfcdf8b8cbb91da4aa0ef2f9f6944a8d6221054fb1d95e7b_prof);

    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        $__internal_d5c11359b5eb1d9b534d0db45aa3fa25ea30be9f88a938d2750a0c63e042ff27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c11359b5eb1d9b534d0db45aa3fa25ea30be9f88a938d2750a0c63e042ff27->enter($__internal_d5c11359b5eb1d9b534d0db45aa3fa25ea30be9f88a938d2750a0c63e042ff27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_571d44f11544ca126b37c6ac91b89e14b2458f1f8992dc9931db20dbd8ac0cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571d44f11544ca126b37c6ac91b89e14b2458f1f8992dc9931db20dbd8ac0cdf->enter($__internal_571d44f11544ca126b37c6ac91b89e14b2458f1f8992dc9931db20dbd8ac0cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 13
        echo "            <meta name=\"description\" content=\"\">
        ";
        
        $__internal_571d44f11544ca126b37c6ac91b89e14b2458f1f8992dc9931db20dbd8ac0cdf->leave($__internal_571d44f11544ca126b37c6ac91b89e14b2458f1f8992dc9931db20dbd8ac0cdf_prof);

        
        $__internal_d5c11359b5eb1d9b534d0db45aa3fa25ea30be9f88a938d2750a0c63e042ff27->leave($__internal_d5c11359b5eb1d9b534d0db45aa3fa25ea30be9f88a938d2750a0c63e042ff27_prof);

    }

    // line 16
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_9b1a2b93278497b20a931d87b7bd5ad43a4cc1afb6ad7391387d63acea838191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1a2b93278497b20a931d87b7bd5ad43a4cc1afb6ad7391387d63acea838191->enter($__internal_9b1a2b93278497b20a931d87b7bd5ad43a4cc1afb6ad7391387d63acea838191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_7e64b1c2e1579da1205a47eada5e984dd7a6f9dfe43442eadca20defbbf8fed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e64b1c2e1579da1205a47eada5e984dd7a6f9dfe43442eadca20defbbf8fed6->enter($__internal_7e64b1c2e1579da1205a47eada5e984dd7a6f9dfe43442eadca20defbbf8fed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 17
        echo "            <meta name=\"keywords\" content=\"\">
        ";
        
        $__internal_7e64b1c2e1579da1205a47eada5e984dd7a6f9dfe43442eadca20defbbf8fed6->leave($__internal_7e64b1c2e1579da1205a47eada5e984dd7a6f9dfe43442eadca20defbbf8fed6_prof);

        
        $__internal_9b1a2b93278497b20a931d87b7bd5ad43a4cc1afb6ad7391387d63acea838191->leave($__internal_9b1a2b93278497b20a931d87b7bd5ad43a4cc1afb6ad7391387d63acea838191_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dcabf89f6d9f54f6ce84c72445be200baa1aa6fa90f0b171e758089f8693563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcabf89f6d9f54f6ce84c72445be200baa1aa6fa90f0b171e758089f8693563->enter($__internal_9dcabf89f6d9f54f6ce84c72445be200baa1aa6fa90f0b171e758089f8693563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42b2d4ea6820c06ff86c7b98aea4717c37876f0576aed4dfafc36fcaf471600c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b2d4ea6820c06ff86c7b98aea4717c37876f0576aed4dfafc36fcaf471600c->enter($__internal_42b2d4ea6820c06ff86c7b98aea4717c37876f0576aed4dfafc36fcaf471600c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_42b2d4ea6820c06ff86c7b98aea4717c37876f0576aed4dfafc36fcaf471600c->leave($__internal_42b2d4ea6820c06ff86c7b98aea4717c37876f0576aed4dfafc36fcaf471600c_prof);

        
        $__internal_9dcabf89f6d9f54f6ce84c72445be200baa1aa6fa90f0b171e758089f8693563->leave($__internal_9dcabf89f6d9f54f6ce84c72445be200baa1aa6fa90f0b171e758089f8693563_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a65b7df96ba3e9b8c7a3b16d8116a7099bd346665b8a3cc9c63b9ecb2e9908e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65b7df96ba3e9b8c7a3b16d8116a7099bd346665b8a3cc9c63b9ecb2e9908e3->enter($__internal_a65b7df96ba3e9b8c7a3b16d8116a7099bd346665b8a3cc9c63b9ecb2e9908e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b15b03d37d091dbf92cbc8b0b9f715af0e874aba812e5e855570e236459714ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15b03d37d091dbf92cbc8b0b9f715af0e874aba812e5e855570e236459714ff->enter($__internal_b15b03d37d091dbf92cbc8b0b9f715af0e874aba812e5e855570e236459714ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b15b03d37d091dbf92cbc8b0b9f715af0e874aba812e5e855570e236459714ff->leave($__internal_b15b03d37d091dbf92cbc8b0b9f715af0e874aba812e5e855570e236459714ff_prof);

        
        $__internal_a65b7df96ba3e9b8c7a3b16d8116a7099bd346665b8a3cc9c63b9ecb2e9908e3->leave($__internal_a65b7df96ba3e9b8c7a3b16d8116a7099bd346665b8a3cc9c63b9ecb2e9908e3_prof);

    }

    // line 41
    public function block_header($context, array $blocks = array())
    {
        $__internal_59c814b34071f14bb9c4102aa93aba7e8a85dd5ca4858e1262893eb3d2da09a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c814b34071f14bb9c4102aa93aba7e8a85dd5ca4858e1262893eb3d2da09a0->enter($__internal_59c814b34071f14bb9c4102aa93aba7e8a85dd5ca4858e1262893eb3d2da09a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7d66d85a19d6ec962ee4fc8915bf67cea7f31ef18585b59b41086e86951f7ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d66d85a19d6ec962ee4fc8915bf67cea7f31ef18585b59b41086e86951f7ee5->enter($__internal_7d66d85a19d6ec962ee4fc8915bf67cea7f31ef18585b59b41086e86951f7ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 42
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_7d66d85a19d6ec962ee4fc8915bf67cea7f31ef18585b59b41086e86951f7ee5->leave($__internal_7d66d85a19d6ec962ee4fc8915bf67cea7f31ef18585b59b41086e86951f7ee5_prof);

        
        $__internal_59c814b34071f14bb9c4102aa93aba7e8a85dd5ca4858e1262893eb3d2da09a0->leave($__internal_59c814b34071f14bb9c4102aa93aba7e8a85dd5ca4858e1262893eb3d2da09a0_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8ad2fb89078e70610a0c0ae50db75e7350957e11c77b631bec7d5d9f3e6fd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ad2fb89078e70610a0c0ae50db75e7350957e11c77b631bec7d5d9f3e6fd66->enter($__internal_d8ad2fb89078e70610a0c0ae50db75e7350957e11c77b631bec7d5d9f3e6fd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_abdc9402457ac349621f86e879dd9ac761fcbbe97498477d261235a031c3e901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abdc9402457ac349621f86e879dd9ac761fcbbe97498477d261235a031c3e901->enter($__internal_abdc9402457ac349621f86e879dd9ac761fcbbe97498477d261235a031c3e901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_abdc9402457ac349621f86e879dd9ac761fcbbe97498477d261235a031c3e901->leave($__internal_abdc9402457ac349621f86e879dd9ac761fcbbe97498477d261235a031c3e901_prof);

        
        $__internal_d8ad2fb89078e70610a0c0ae50db75e7350957e11c77b631bec7d5d9f3e6fd66->leave($__internal_d8ad2fb89078e70610a0c0ae50db75e7350957e11c77b631bec7d5d9f3e6fd66_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2f7a82cdb188f6c3a3b6d66ffd62e0604ba8a11e4c576f1658f18e3068ecf3f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f7a82cdb188f6c3a3b6d66ffd62e0604ba8a11e4c576f1658f18e3068ecf3f4->enter($__internal_2f7a82cdb188f6c3a3b6d66ffd62e0604ba8a11e4c576f1658f18e3068ecf3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_8fedbb515b56d42b70b940c83552d20f68ef51fb754dfecaff65269d472a1ded = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fedbb515b56d42b70b940c83552d20f68ef51fb754dfecaff65269d472a1ded->enter($__internal_8fedbb515b56d42b70b940c83552d20f68ef51fb754dfecaff65269d472a1ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Footer:footer"));
        echo "
                ";
        
        $__internal_8fedbb515b56d42b70b940c83552d20f68ef51fb754dfecaff65269d472a1ded->leave($__internal_8fedbb515b56d42b70b940c83552d20f68ef51fb754dfecaff65269d472a1ded_prof);

        
        $__internal_2f7a82cdb188f6c3a3b6d66ffd62e0604ba8a11e4c576f1658f18e3068ecf3f4->leave($__internal_2f7a82cdb188f6c3a3b6d66ffd62e0604ba8a11e4c576f1658f18e3068ecf3f4_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f104aa8970f7aa1cacc212c9f26bc73e264225371749cc19140adf218064bd8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f104aa8970f7aa1cacc212c9f26bc73e264225371749cc19140adf218064bd8d->enter($__internal_f104aa8970f7aa1cacc212c9f26bc73e264225371749cc19140adf218064bd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f89763ca96baa19c0535daaa07078bdb19da042f47f51c4275e29c83485c370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f89763ca96baa19c0535daaa07078bdb19da042f47f51c4275e29c83485c370->enter($__internal_5f89763ca96baa19c0535daaa07078bdb19da042f47f51c4275e29c83485c370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f89763ca96baa19c0535daaa07078bdb19da042f47f51c4275e29c83485c370->leave($__internal_5f89763ca96baa19c0535daaa07078bdb19da042f47f51c4275e29c83485c370_prof);

        
        $__internal_f104aa8970f7aa1cacc212c9f26bc73e264225371749cc19140adf218064bd8d->leave($__internal_f104aa8970f7aa1cacc212c9f26bc73e264225371749cc19140adf218064bd8d_prof);

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
        return array (  278 => 64,  265 => 56,  256 => 55,  239 => 49,  226 => 42,  217 => 41,  200 => 26,  182 => 20,  171 => 17,  162 => 16,  151 => 13,  142 => 12,  131 => 65,  129 => 64,  125 => 63,  118 => 58,  116 => 55,  109 => 50,  107 => 49,  100 => 44,  98 => 41,  88 => 34,  83 => 32,  76 => 27,  74 => 26,  69 => 24,  65 => 23,  61 => 22,  56 => 20,  53 => 19,  51 => 16,  48 => 15,  46 => 12,  33 => 1,);
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
        <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"referrer\" content=\"origin-when-cross-origin\">
        <meta name=\"theme-color\" content=\"#4a5a66\">
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
        <meta property=\"og:type\" content=\"website\">
        <meta name=\"description\" content=\"\">

        {% block description %}
            <meta name=\"description\" content=\"\">
        {% endblock %}

        {% block keywords %}
            <meta name=\"keywords\" content=\"\">
        {% endblock %}

        <title>{% block title %}Welcome!{% endblock %}</title>

        <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/semantic.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/default.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/app/css/icon.css') }}\" />

        {% block stylesheets %}{% endblock %}

        <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
                integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
                crossorigin=\"anonymous\">
        </script>
        <script src=\"{{ asset('bundles/app/js/semantic.js') }}\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>
        <div class=\"body-container\">
            <!-- Header -->
            <div class=\"header-container\">
                {% block header %}
                    {{ render(controller(\"AppBundle:Application\\\\Header:header\")) }}
                {% endblock %}
            </div>
            <!-- End of Header -->

            <!-- Page content -->
            <div class=\"page-container ui\">
                {% block body %}{% endblock %}
            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                {% block footer %}
                    {{ render(controller(\"AppBundle:Application\\\\Footer:footer\")) }}
                {% endblock %}
            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    <script src=\"{{ asset('bundles/app/js/header.js') }}\"></script>
    {% block javascripts %}{% endblock %}
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
