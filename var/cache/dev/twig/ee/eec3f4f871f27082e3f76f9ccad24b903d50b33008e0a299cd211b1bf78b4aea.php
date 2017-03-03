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
        $__internal_6561ae781606dc92edaa68f29b1ec14d688161251040e84a688a33e62e34a3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6561ae781606dc92edaa68f29b1ec14d688161251040e84a688a33e62e34a3a9->enter($__internal_6561ae781606dc92edaa68f29b1ec14d688161251040e84a688a33e62e34a3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5cc049d8adbcd7a29f5bd5ac8bb3872d32505fb642f03f79174830b47f40ce13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc049d8adbcd7a29f5bd5ac8bb3872d32505fb642f03f79174830b47f40ce13->enter($__internal_5cc049d8adbcd7a29f5bd5ac8bb3872d32505fb642f03f79174830b47f40ce13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        <div class=\"body-container\">
            <!-- Header -->
            <div class=\"header-container\">
                ";
        // line 35
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "            </div>
            <!-- End of Header -->

            <!-- Page content -->
            <div class=\"page-container ui\">
                ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\">
    </script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/semantic.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/header.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "</html>
";
        
        $__internal_6561ae781606dc92edaa68f29b1ec14d688161251040e84a688a33e62e34a3a9->leave($__internal_6561ae781606dc92edaa68f29b1ec14d688161251040e84a688a33e62e34a3a9_prof);

        
        $__internal_5cc049d8adbcd7a29f5bd5ac8bb3872d32505fb642f03f79174830b47f40ce13->leave($__internal_5cc049d8adbcd7a29f5bd5ac8bb3872d32505fb642f03f79174830b47f40ce13_prof);

    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        $__internal_5c6a943e3f4df511937ec588d2f4ab1f72591da70be4e206a19df8736d9dc403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6a943e3f4df511937ec588d2f4ab1f72591da70be4e206a19df8736d9dc403->enter($__internal_5c6a943e3f4df511937ec588d2f4ab1f72591da70be4e206a19df8736d9dc403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_934197d6271ca3a76a5692cb4c48d36d8314594957b5a7174c95686165525a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934197d6271ca3a76a5692cb4c48d36d8314594957b5a7174c95686165525a1a->enter($__internal_934197d6271ca3a76a5692cb4c48d36d8314594957b5a7174c95686165525a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 13
        echo "            <meta name=\"description\" content=\"\">
        ";
        
        $__internal_934197d6271ca3a76a5692cb4c48d36d8314594957b5a7174c95686165525a1a->leave($__internal_934197d6271ca3a76a5692cb4c48d36d8314594957b5a7174c95686165525a1a_prof);

        
        $__internal_5c6a943e3f4df511937ec588d2f4ab1f72591da70be4e206a19df8736d9dc403->leave($__internal_5c6a943e3f4df511937ec588d2f4ab1f72591da70be4e206a19df8736d9dc403_prof);

    }

    // line 16
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_d45c0971a76e0e81ada6a7f408434ef9fdc9001f65028c777bc3df8149125e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45c0971a76e0e81ada6a7f408434ef9fdc9001f65028c777bc3df8149125e42->enter($__internal_d45c0971a76e0e81ada6a7f408434ef9fdc9001f65028c777bc3df8149125e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_05cab2beb898dbea6001322b925b65cefd9898077af213b1adccdd6e923d8fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cab2beb898dbea6001322b925b65cefd9898077af213b1adccdd6e923d8fe8->enter($__internal_05cab2beb898dbea6001322b925b65cefd9898077af213b1adccdd6e923d8fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 17
        echo "            <meta name=\"keywords\" content=\"\">
        ";
        
        $__internal_05cab2beb898dbea6001322b925b65cefd9898077af213b1adccdd6e923d8fe8->leave($__internal_05cab2beb898dbea6001322b925b65cefd9898077af213b1adccdd6e923d8fe8_prof);

        
        $__internal_d45c0971a76e0e81ada6a7f408434ef9fdc9001f65028c777bc3df8149125e42->leave($__internal_d45c0971a76e0e81ada6a7f408434ef9fdc9001f65028c777bc3df8149125e42_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebfdc89633d150e98f606b9342650638a1603e5630b4c427e4a364779101c703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebfdc89633d150e98f606b9342650638a1603e5630b4c427e4a364779101c703->enter($__internal_ebfdc89633d150e98f606b9342650638a1603e5630b4c427e4a364779101c703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99ea41cfcd2ccb604a80e4bdd7e3c101161b12aa96e055d09999b05653e2ce5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ea41cfcd2ccb604a80e4bdd7e3c101161b12aa96e055d09999b05653e2ce5e->enter($__internal_99ea41cfcd2ccb604a80e4bdd7e3c101161b12aa96e055d09999b05653e2ce5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_99ea41cfcd2ccb604a80e4bdd7e3c101161b12aa96e055d09999b05653e2ce5e->leave($__internal_99ea41cfcd2ccb604a80e4bdd7e3c101161b12aa96e055d09999b05653e2ce5e_prof);

        
        $__internal_ebfdc89633d150e98f606b9342650638a1603e5630b4c427e4a364779101c703->leave($__internal_ebfdc89633d150e98f606b9342650638a1603e5630b4c427e4a364779101c703_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e00e2bf2ce67664b3ae8a5fa683106467db536775f54e9fe5bba894bc6694654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00e2bf2ce67664b3ae8a5fa683106467db536775f54e9fe5bba894bc6694654->enter($__internal_e00e2bf2ce67664b3ae8a5fa683106467db536775f54e9fe5bba894bc6694654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8640e3102685a3be04ad78a0df7c885d716e9ea384698590e08a11bc910c3872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8640e3102685a3be04ad78a0df7c885d716e9ea384698590e08a11bc910c3872->enter($__internal_8640e3102685a3be04ad78a0df7c885d716e9ea384698590e08a11bc910c3872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8640e3102685a3be04ad78a0df7c885d716e9ea384698590e08a11bc910c3872->leave($__internal_8640e3102685a3be04ad78a0df7c885d716e9ea384698590e08a11bc910c3872_prof);

        
        $__internal_e00e2bf2ce67664b3ae8a5fa683106467db536775f54e9fe5bba894bc6694654->leave($__internal_e00e2bf2ce67664b3ae8a5fa683106467db536775f54e9fe5bba894bc6694654_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_29786b89d14f8e115c5fc85d69375cda4a5bc8b8c9b6de1568a46131e9a005b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29786b89d14f8e115c5fc85d69375cda4a5bc8b8c9b6de1568a46131e9a005b1->enter($__internal_29786b89d14f8e115c5fc85d69375cda4a5bc8b8c9b6de1568a46131e9a005b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_8025842192553d832692e002e53a05553da5b79cf355c4a18d1eb3844e46728e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8025842192553d832692e002e53a05553da5b79cf355c4a18d1eb3844e46728e->enter($__internal_8025842192553d832692e002e53a05553da5b79cf355c4a18d1eb3844e46728e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_8025842192553d832692e002e53a05553da5b79cf355c4a18d1eb3844e46728e->leave($__internal_8025842192553d832692e002e53a05553da5b79cf355c4a18d1eb3844e46728e_prof);

        
        $__internal_29786b89d14f8e115c5fc85d69375cda4a5bc8b8c9b6de1568a46131e9a005b1->leave($__internal_29786b89d14f8e115c5fc85d69375cda4a5bc8b8c9b6de1568a46131e9a005b1_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da7b104a528d9bddf4e90c492a35e0da10853061137b618571d763c16fa5a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da7b104a528d9bddf4e90c492a35e0da10853061137b618571d763c16fa5a83->enter($__internal_1da7b104a528d9bddf4e90c492a35e0da10853061137b618571d763c16fa5a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e749afdb4046cf3067de5fe93a06db8f23e74c7b57e122c2bb7311a8e73f72dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e749afdb4046cf3067de5fe93a06db8f23e74c7b57e122c2bb7311a8e73f72dc->enter($__internal_e749afdb4046cf3067de5fe93a06db8f23e74c7b57e122c2bb7311a8e73f72dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e749afdb4046cf3067de5fe93a06db8f23e74c7b57e122c2bb7311a8e73f72dc->leave($__internal_e749afdb4046cf3067de5fe93a06db8f23e74c7b57e122c2bb7311a8e73f72dc_prof);

        
        $__internal_1da7b104a528d9bddf4e90c492a35e0da10853061137b618571d763c16fa5a83->leave($__internal_1da7b104a528d9bddf4e90c492a35e0da10853061137b618571d763c16fa5a83_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_d1265b25e6a22fd80a6f4df32a552301f2066808a8a08add2cb37ca8f0620927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1265b25e6a22fd80a6f4df32a552301f2066808a8a08add2cb37ca8f0620927->enter($__internal_d1265b25e6a22fd80a6f4df32a552301f2066808a8a08add2cb37ca8f0620927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_56662a52492b7efe63e46f42cb40cbb69135788fbac7239d495e5894b0870562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56662a52492b7efe63e46f42cb40cbb69135788fbac7239d495e5894b0870562->enter($__internal_56662a52492b7efe63e46f42cb40cbb69135788fbac7239d495e5894b0870562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Footer:footer"));
        echo "
                ";
        
        $__internal_56662a52492b7efe63e46f42cb40cbb69135788fbac7239d495e5894b0870562->leave($__internal_56662a52492b7efe63e46f42cb40cbb69135788fbac7239d495e5894b0870562_prof);

        
        $__internal_d1265b25e6a22fd80a6f4df32a552301f2066808a8a08add2cb37ca8f0620927->leave($__internal_d1265b25e6a22fd80a6f4df32a552301f2066808a8a08add2cb37ca8f0620927_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a5f2356e3bc5b71b7e4ffbeeb52cf2041ac5366266b9f5f00986a90385adce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5f2356e3bc5b71b7e4ffbeeb52cf2041ac5366266b9f5f00986a90385adce7->enter($__internal_4a5f2356e3bc5b71b7e4ffbeeb52cf2041ac5366266b9f5f00986a90385adce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_110314f8fd1318c4c6c6f15f4c9f8abc1eaaf3c963a0ab326b103a7d81601e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110314f8fd1318c4c6c6f15f4c9f8abc1eaaf3c963a0ab326b103a7d81601e20->enter($__internal_110314f8fd1318c4c6c6f15f4c9f8abc1eaaf3c963a0ab326b103a7d81601e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_110314f8fd1318c4c6c6f15f4c9f8abc1eaaf3c963a0ab326b103a7d81601e20->leave($__internal_110314f8fd1318c4c6c6f15f4c9f8abc1eaaf3c963a0ab326b103a7d81601e20_prof);

        
        $__internal_4a5f2356e3bc5b71b7e4ffbeeb52cf2041ac5366266b9f5f00986a90385adce7->leave($__internal_4a5f2356e3bc5b71b7e4ffbeeb52cf2041ac5366266b9f5f00986a90385adce7_prof);

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
        return array (  277 => 63,  264 => 50,  255 => 49,  238 => 43,  225 => 36,  216 => 35,  199 => 26,  181 => 20,  170 => 17,  161 => 16,  150 => 13,  141 => 12,  130 => 64,  128 => 63,  124 => 62,  120 => 61,  109 => 52,  107 => 49,  100 => 44,  98 => 43,  91 => 38,  89 => 35,  79 => 28,  76 => 27,  74 => 26,  69 => 24,  65 => 23,  61 => 22,  56 => 20,  53 => 19,  51 => 16,  48 => 15,  46 => 12,  33 => 1,);
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

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\">
    </script>
    <script src=\"{{ asset('bundles/app/js/semantic.js') }}\"></script>
    <script src=\"{{ asset('bundles/app/js/header.js') }}\"></script>
    {% block javascripts %}{% endblock %}
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
