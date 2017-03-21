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
        $__internal_ed52a455e4af90e9eaf908b8f2281cdc036e4afe7d83df0bc7cb67570b657d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed52a455e4af90e9eaf908b8f2281cdc036e4afe7d83df0bc7cb67570b657d77->enter($__internal_ed52a455e4af90e9eaf908b8f2281cdc036e4afe7d83df0bc7cb67570b657d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_644bff82a7f3df274521ba1c7e8981613687fb555089b321c1650e97219d3d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644bff82a7f3df274521ba1c7e8981613687fb555089b321c1650e97219d3d37->enter($__internal_644bff82a7f3df274521ba1c7e8981613687fb555089b321c1650e97219d3d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    <script>
        \$('.checkbox').checkbox();
    </script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/header.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "</html>
";
        
        $__internal_ed52a455e4af90e9eaf908b8f2281cdc036e4afe7d83df0bc7cb67570b657d77->leave($__internal_ed52a455e4af90e9eaf908b8f2281cdc036e4afe7d83df0bc7cb67570b657d77_prof);

        
        $__internal_644bff82a7f3df274521ba1c7e8981613687fb555089b321c1650e97219d3d37->leave($__internal_644bff82a7f3df274521ba1c7e8981613687fb555089b321c1650e97219d3d37_prof);

    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        $__internal_741488ec7f13cd889e3b039e602a465ad29f02a5abaa5409cc42039b60cd1d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_741488ec7f13cd889e3b039e602a465ad29f02a5abaa5409cc42039b60cd1d7a->enter($__internal_741488ec7f13cd889e3b039e602a465ad29f02a5abaa5409cc42039b60cd1d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_565674893bead8ce583ecefded50282a9c3b21614b462a1e244c0546cbb89bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565674893bead8ce583ecefded50282a9c3b21614b462a1e244c0546cbb89bb6->enter($__internal_565674893bead8ce583ecefded50282a9c3b21614b462a1e244c0546cbb89bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 13
        echo "            <meta name=\"description\" content=\"\">
        ";
        
        $__internal_565674893bead8ce583ecefded50282a9c3b21614b462a1e244c0546cbb89bb6->leave($__internal_565674893bead8ce583ecefded50282a9c3b21614b462a1e244c0546cbb89bb6_prof);

        
        $__internal_741488ec7f13cd889e3b039e602a465ad29f02a5abaa5409cc42039b60cd1d7a->leave($__internal_741488ec7f13cd889e3b039e602a465ad29f02a5abaa5409cc42039b60cd1d7a_prof);

    }

    // line 16
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_9dc1654e896ba1bf0ad796a3ae22229b5580ea2c3f122eae276a951c808e5a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc1654e896ba1bf0ad796a3ae22229b5580ea2c3f122eae276a951c808e5a56->enter($__internal_9dc1654e896ba1bf0ad796a3ae22229b5580ea2c3f122eae276a951c808e5a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_261443e354a741f6aada95bfd651d3198ebfcbd0f9754130dff23d6c069c69c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261443e354a741f6aada95bfd651d3198ebfcbd0f9754130dff23d6c069c69c4->enter($__internal_261443e354a741f6aada95bfd651d3198ebfcbd0f9754130dff23d6c069c69c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 17
        echo "            <meta name=\"keywords\" content=\"\">
        ";
        
        $__internal_261443e354a741f6aada95bfd651d3198ebfcbd0f9754130dff23d6c069c69c4->leave($__internal_261443e354a741f6aada95bfd651d3198ebfcbd0f9754130dff23d6c069c69c4_prof);

        
        $__internal_9dc1654e896ba1bf0ad796a3ae22229b5580ea2c3f122eae276a951c808e5a56->leave($__internal_9dc1654e896ba1bf0ad796a3ae22229b5580ea2c3f122eae276a951c808e5a56_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_1473c872e5492f118908aae9ab7fb832900f6c9e00d8cabb945ac6f8063fecc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1473c872e5492f118908aae9ab7fb832900f6c9e00d8cabb945ac6f8063fecc9->enter($__internal_1473c872e5492f118908aae9ab7fb832900f6c9e00d8cabb945ac6f8063fecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_871d2bcd9498f7355bd01dffd7d33120f055c0d5246283269028bd8dbad96462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_871d2bcd9498f7355bd01dffd7d33120f055c0d5246283269028bd8dbad96462->enter($__internal_871d2bcd9498f7355bd01dffd7d33120f055c0d5246283269028bd8dbad96462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_871d2bcd9498f7355bd01dffd7d33120f055c0d5246283269028bd8dbad96462->leave($__internal_871d2bcd9498f7355bd01dffd7d33120f055c0d5246283269028bd8dbad96462_prof);

        
        $__internal_1473c872e5492f118908aae9ab7fb832900f6c9e00d8cabb945ac6f8063fecc9->leave($__internal_1473c872e5492f118908aae9ab7fb832900f6c9e00d8cabb945ac6f8063fecc9_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fc3e7d32b5396d7b2ad3e9225905055cde66ea54a14cc99b6a6d7c3a9271abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc3e7d32b5396d7b2ad3e9225905055cde66ea54a14cc99b6a6d7c3a9271abb->enter($__internal_2fc3e7d32b5396d7b2ad3e9225905055cde66ea54a14cc99b6a6d7c3a9271abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_383d7682cca8ea4844bd1b4554c60bced45313f0e2bf5bbbe332a6314407f503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_383d7682cca8ea4844bd1b4554c60bced45313f0e2bf5bbbe332a6314407f503->enter($__internal_383d7682cca8ea4844bd1b4554c60bced45313f0e2bf5bbbe332a6314407f503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_383d7682cca8ea4844bd1b4554c60bced45313f0e2bf5bbbe332a6314407f503->leave($__internal_383d7682cca8ea4844bd1b4554c60bced45313f0e2bf5bbbe332a6314407f503_prof);

        
        $__internal_2fc3e7d32b5396d7b2ad3e9225905055cde66ea54a14cc99b6a6d7c3a9271abb->leave($__internal_2fc3e7d32b5396d7b2ad3e9225905055cde66ea54a14cc99b6a6d7c3a9271abb_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_f290a46cfb456cd12f306d7bafba938481d7bdde985deb9e770a66e98f584744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f290a46cfb456cd12f306d7bafba938481d7bdde985deb9e770a66e98f584744->enter($__internal_f290a46cfb456cd12f306d7bafba938481d7bdde985deb9e770a66e98f584744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_a934fce604015ae5cf3ce9fbd5775fe48a018f6216f2ec856242944d76fbe16b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a934fce604015ae5cf3ce9fbd5775fe48a018f6216f2ec856242944d76fbe16b->enter($__internal_a934fce604015ae5cf3ce9fbd5775fe48a018f6216f2ec856242944d76fbe16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_a934fce604015ae5cf3ce9fbd5775fe48a018f6216f2ec856242944d76fbe16b->leave($__internal_a934fce604015ae5cf3ce9fbd5775fe48a018f6216f2ec856242944d76fbe16b_prof);

        
        $__internal_f290a46cfb456cd12f306d7bafba938481d7bdde985deb9e770a66e98f584744->leave($__internal_f290a46cfb456cd12f306d7bafba938481d7bdde985deb9e770a66e98f584744_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6aa9780a3a12055e6a9c97f04f0b22836129f9b62f7a6910184dcc587bcbda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6aa9780a3a12055e6a9c97f04f0b22836129f9b62f7a6910184dcc587bcbda2->enter($__internal_f6aa9780a3a12055e6a9c97f04f0b22836129f9b62f7a6910184dcc587bcbda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec65fb31476b7e2f9dd3b8c8be18460282cd046322b2e8e462407f06666a27df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec65fb31476b7e2f9dd3b8c8be18460282cd046322b2e8e462407f06666a27df->enter($__internal_ec65fb31476b7e2f9dd3b8c8be18460282cd046322b2e8e462407f06666a27df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec65fb31476b7e2f9dd3b8c8be18460282cd046322b2e8e462407f06666a27df->leave($__internal_ec65fb31476b7e2f9dd3b8c8be18460282cd046322b2e8e462407f06666a27df_prof);

        
        $__internal_f6aa9780a3a12055e6a9c97f04f0b22836129f9b62f7a6910184dcc587bcbda2->leave($__internal_f6aa9780a3a12055e6a9c97f04f0b22836129f9b62f7a6910184dcc587bcbda2_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_34a44f90822441295ce65d47a2e17d2eae63e573059c5baf8eee3e6fa01845ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a44f90822441295ce65d47a2e17d2eae63e573059c5baf8eee3e6fa01845ed->enter($__internal_34a44f90822441295ce65d47a2e17d2eae63e573059c5baf8eee3e6fa01845ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_eca0af0186651afd1fb278ae823673c62e1ae8121bfe66971b61994e473bc524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca0af0186651afd1fb278ae823673c62e1ae8121bfe66971b61994e473bc524->enter($__internal_eca0af0186651afd1fb278ae823673c62e1ae8121bfe66971b61994e473bc524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Footer:footer"));
        echo "
                ";
        
        $__internal_eca0af0186651afd1fb278ae823673c62e1ae8121bfe66971b61994e473bc524->leave($__internal_eca0af0186651afd1fb278ae823673c62e1ae8121bfe66971b61994e473bc524_prof);

        
        $__internal_34a44f90822441295ce65d47a2e17d2eae63e573059c5baf8eee3e6fa01845ed->leave($__internal_34a44f90822441295ce65d47a2e17d2eae63e573059c5baf8eee3e6fa01845ed_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d3b43af4366b35e17e96306082b9edb99b421aa2b32908e11fb04a91604bea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3b43af4366b35e17e96306082b9edb99b421aa2b32908e11fb04a91604bea7->enter($__internal_8d3b43af4366b35e17e96306082b9edb99b421aa2b32908e11fb04a91604bea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fa56aedf5a90025544b090e802221ea06974b97f4a1ea249c03bebe1e36750c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa56aedf5a90025544b090e802221ea06974b97f4a1ea249c03bebe1e36750c9->enter($__internal_fa56aedf5a90025544b090e802221ea06974b97f4a1ea249c03bebe1e36750c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fa56aedf5a90025544b090e802221ea06974b97f4a1ea249c03bebe1e36750c9->leave($__internal_fa56aedf5a90025544b090e802221ea06974b97f4a1ea249c03bebe1e36750c9_prof);

        
        $__internal_8d3b43af4366b35e17e96306082b9edb99b421aa2b32908e11fb04a91604bea7->leave($__internal_8d3b43af4366b35e17e96306082b9edb99b421aa2b32908e11fb04a91604bea7_prof);

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
        return array (  280 => 66,  267 => 50,  258 => 49,  241 => 43,  228 => 36,  219 => 35,  202 => 26,  184 => 20,  173 => 17,  164 => 16,  153 => 13,  144 => 12,  133 => 67,  131 => 66,  127 => 65,  120 => 61,  109 => 52,  107 => 49,  100 => 44,  98 => 43,  91 => 38,  89 => 35,  79 => 28,  76 => 27,  74 => 26,  69 => 24,  65 => 23,  61 => 22,  56 => 20,  53 => 19,  51 => 16,  48 => 15,  46 => 12,  33 => 1,);
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
    <script>
        \$('.checkbox').checkbox();
    </script>
    <script src=\"{{ asset('bundles/app/js/header.js') }}\"></script>
    {% block javascripts %}{% endblock %}
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
