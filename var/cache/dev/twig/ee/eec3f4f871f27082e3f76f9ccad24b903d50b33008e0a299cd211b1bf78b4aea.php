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
        $__internal_48821b070656c7b78180bb1b1546b4381499d2274f1c846df01e39ffd49610dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48821b070656c7b78180bb1b1546b4381499d2274f1c846df01e39ffd49610dd->enter($__internal_48821b070656c7b78180bb1b1546b4381499d2274f1c846df01e39ffd49610dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0dc8c62ccb329cb265552c842fc89397c1d56c69960fc0c657d9f0e7aac66418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc8c62ccb329cb265552c842fc89397c1d56c69960fc0c657d9f0e7aac66418->enter($__internal_0dc8c62ccb329cb265552c842fc89397c1d56c69960fc0c657d9f0e7aac66418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_48821b070656c7b78180bb1b1546b4381499d2274f1c846df01e39ffd49610dd->leave($__internal_48821b070656c7b78180bb1b1546b4381499d2274f1c846df01e39ffd49610dd_prof);

        
        $__internal_0dc8c62ccb329cb265552c842fc89397c1d56c69960fc0c657d9f0e7aac66418->leave($__internal_0dc8c62ccb329cb265552c842fc89397c1d56c69960fc0c657d9f0e7aac66418_prof);

    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        $__internal_656347641da78d469b7c2ac49b2ba2c72afa253aee7d1565bab4e83a848b9d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656347641da78d469b7c2ac49b2ba2c72afa253aee7d1565bab4e83a848b9d47->enter($__internal_656347641da78d469b7c2ac49b2ba2c72afa253aee7d1565bab4e83a848b9d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_d3b11aab31cc25937187f8f2eebf9b826ee6423637c156d39c61e47f8dbc21cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b11aab31cc25937187f8f2eebf9b826ee6423637c156d39c61e47f8dbc21cc->enter($__internal_d3b11aab31cc25937187f8f2eebf9b826ee6423637c156d39c61e47f8dbc21cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 13
        echo "            <meta name=\"description\" content=\"\">
        ";
        
        $__internal_d3b11aab31cc25937187f8f2eebf9b826ee6423637c156d39c61e47f8dbc21cc->leave($__internal_d3b11aab31cc25937187f8f2eebf9b826ee6423637c156d39c61e47f8dbc21cc_prof);

        
        $__internal_656347641da78d469b7c2ac49b2ba2c72afa253aee7d1565bab4e83a848b9d47->leave($__internal_656347641da78d469b7c2ac49b2ba2c72afa253aee7d1565bab4e83a848b9d47_prof);

    }

    // line 16
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_61dea27b39ed24538cf88e97277dc8a4b1a998fdb5fb78c26bd53031f93121c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dea27b39ed24538cf88e97277dc8a4b1a998fdb5fb78c26bd53031f93121c5->enter($__internal_61dea27b39ed24538cf88e97277dc8a4b1a998fdb5fb78c26bd53031f93121c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_133a5cf78b637d4a7b800bf3f2b054a3cd68c10e31809eeff052944766ddba29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133a5cf78b637d4a7b800bf3f2b054a3cd68c10e31809eeff052944766ddba29->enter($__internal_133a5cf78b637d4a7b800bf3f2b054a3cd68c10e31809eeff052944766ddba29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 17
        echo "            <meta name=\"keywords\" content=\"\">
        ";
        
        $__internal_133a5cf78b637d4a7b800bf3f2b054a3cd68c10e31809eeff052944766ddba29->leave($__internal_133a5cf78b637d4a7b800bf3f2b054a3cd68c10e31809eeff052944766ddba29_prof);

        
        $__internal_61dea27b39ed24538cf88e97277dc8a4b1a998fdb5fb78c26bd53031f93121c5->leave($__internal_61dea27b39ed24538cf88e97277dc8a4b1a998fdb5fb78c26bd53031f93121c5_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_49b8200e2e10aac29baa1e492176e8eb9da10418759e504212d6be5ff9d743ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b8200e2e10aac29baa1e492176e8eb9da10418759e504212d6be5ff9d743ca->enter($__internal_49b8200e2e10aac29baa1e492176e8eb9da10418759e504212d6be5ff9d743ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_480b4ca5ddc0ff3e61711154c42aa6f19778b2bc979d6a6648140a100fb30188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480b4ca5ddc0ff3e61711154c42aa6f19778b2bc979d6a6648140a100fb30188->enter($__internal_480b4ca5ddc0ff3e61711154c42aa6f19778b2bc979d6a6648140a100fb30188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_480b4ca5ddc0ff3e61711154c42aa6f19778b2bc979d6a6648140a100fb30188->leave($__internal_480b4ca5ddc0ff3e61711154c42aa6f19778b2bc979d6a6648140a100fb30188_prof);

        
        $__internal_49b8200e2e10aac29baa1e492176e8eb9da10418759e504212d6be5ff9d743ca->leave($__internal_49b8200e2e10aac29baa1e492176e8eb9da10418759e504212d6be5ff9d743ca_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03394e4826363cc348b705b8f91fff48712e9d8579123115c313bda23f184c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03394e4826363cc348b705b8f91fff48712e9d8579123115c313bda23f184c37->enter($__internal_03394e4826363cc348b705b8f91fff48712e9d8579123115c313bda23f184c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7fab5a874fd8ca389d402b5e6f6393019e35b6a264597d90c2043734e2c8b75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fab5a874fd8ca389d402b5e6f6393019e35b6a264597d90c2043734e2c8b75c->enter($__internal_7fab5a874fd8ca389d402b5e6f6393019e35b6a264597d90c2043734e2c8b75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7fab5a874fd8ca389d402b5e6f6393019e35b6a264597d90c2043734e2c8b75c->leave($__internal_7fab5a874fd8ca389d402b5e6f6393019e35b6a264597d90c2043734e2c8b75c_prof);

        
        $__internal_03394e4826363cc348b705b8f91fff48712e9d8579123115c313bda23f184c37->leave($__internal_03394e4826363cc348b705b8f91fff48712e9d8579123115c313bda23f184c37_prof);

    }

    // line 35
    public function block_header($context, array $blocks = array())
    {
        $__internal_2aced3614b3d1abe31e8c90c2fa84f6da1280b293fb792146d026fa042226eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aced3614b3d1abe31e8c90c2fa84f6da1280b293fb792146d026fa042226eb5->enter($__internal_2aced3614b3d1abe31e8c90c2fa84f6da1280b293fb792146d026fa042226eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e30245cebb33e769048806be28ff95a235327475457d0baf4caf994cc43faa76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30245cebb33e769048806be28ff95a235327475457d0baf4caf994cc43faa76->enter($__internal_e30245cebb33e769048806be28ff95a235327475457d0baf4caf994cc43faa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 36
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_e30245cebb33e769048806be28ff95a235327475457d0baf4caf994cc43faa76->leave($__internal_e30245cebb33e769048806be28ff95a235327475457d0baf4caf994cc43faa76_prof);

        
        $__internal_2aced3614b3d1abe31e8c90c2fa84f6da1280b293fb792146d026fa042226eb5->leave($__internal_2aced3614b3d1abe31e8c90c2fa84f6da1280b293fb792146d026fa042226eb5_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_f63d4587b5ebd6fbf411e49904ebd2ce6dc235e1ab7713f082a3ff55c52b989f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63d4587b5ebd6fbf411e49904ebd2ce6dc235e1ab7713f082a3ff55c52b989f->enter($__internal_f63d4587b5ebd6fbf411e49904ebd2ce6dc235e1ab7713f082a3ff55c52b989f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6104987fb44923d0a80f0dc8626518ee4b8f80a35a88e44099b4f066508dbdfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6104987fb44923d0a80f0dc8626518ee4b8f80a35a88e44099b4f066508dbdfc->enter($__internal_6104987fb44923d0a80f0dc8626518ee4b8f80a35a88e44099b4f066508dbdfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6104987fb44923d0a80f0dc8626518ee4b8f80a35a88e44099b4f066508dbdfc->leave($__internal_6104987fb44923d0a80f0dc8626518ee4b8f80a35a88e44099b4f066508dbdfc_prof);

        
        $__internal_f63d4587b5ebd6fbf411e49904ebd2ce6dc235e1ab7713f082a3ff55c52b989f->leave($__internal_f63d4587b5ebd6fbf411e49904ebd2ce6dc235e1ab7713f082a3ff55c52b989f_prof);

    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        $__internal_29266a79eaeb8502558327e87c402447b8582fa16c95a9aebab27c36ce392ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29266a79eaeb8502558327e87c402447b8582fa16c95a9aebab27c36ce392ea0->enter($__internal_29266a79eaeb8502558327e87c402447b8582fa16c95a9aebab27c36ce392ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_c17bcad0c169f164d7a631e6704d40384bb90eb9de66a63f24f6653f2f5c8364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17bcad0c169f164d7a631e6704d40384bb90eb9de66a63f24f6653f2f5c8364->enter($__internal_c17bcad0c169f164d7a631e6704d40384bb90eb9de66a63f24f6653f2f5c8364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 50
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Footer:footer"));
        echo "
                ";
        
        $__internal_c17bcad0c169f164d7a631e6704d40384bb90eb9de66a63f24f6653f2f5c8364->leave($__internal_c17bcad0c169f164d7a631e6704d40384bb90eb9de66a63f24f6653f2f5c8364_prof);

        
        $__internal_29266a79eaeb8502558327e87c402447b8582fa16c95a9aebab27c36ce392ea0->leave($__internal_29266a79eaeb8502558327e87c402447b8582fa16c95a9aebab27c36ce392ea0_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a969b91c35a11dbebbe1aa82622e882913d032ca022cc634f94b32938bc09a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a969b91c35a11dbebbe1aa82622e882913d032ca022cc634f94b32938bc09a53->enter($__internal_a969b91c35a11dbebbe1aa82622e882913d032ca022cc634f94b32938bc09a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3b99f304d2817ff164fbbeb2996c8ce86cb2605cbaf791a724795d3f9eadb38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b99f304d2817ff164fbbeb2996c8ce86cb2605cbaf791a724795d3f9eadb38e->enter($__internal_3b99f304d2817ff164fbbeb2996c8ce86cb2605cbaf791a724795d3f9eadb38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b99f304d2817ff164fbbeb2996c8ce86cb2605cbaf791a724795d3f9eadb38e->leave($__internal_3b99f304d2817ff164fbbeb2996c8ce86cb2605cbaf791a724795d3f9eadb38e_prof);

        
        $__internal_a969b91c35a11dbebbe1aa82622e882913d032ca022cc634f94b32938bc09a53->leave($__internal_a969b91c35a11dbebbe1aa82622e882913d032ca022cc634f94b32938bc09a53_prof);

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
