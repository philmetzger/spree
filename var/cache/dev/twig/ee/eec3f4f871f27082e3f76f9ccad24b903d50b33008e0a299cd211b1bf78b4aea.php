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
        $__internal_8160eea295700847f294f51dc2ce041ef69dfc32896018636e96a516e1e5067c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8160eea295700847f294f51dc2ce041ef69dfc32896018636e96a516e1e5067c->enter($__internal_8160eea295700847f294f51dc2ce041ef69dfc32896018636e96a516e1e5067c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2c17ec3f59a0a0f953fade5f0507e4aaf360571239da8ba9a0d6474c262d60d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c17ec3f59a0a0f953fade5f0507e4aaf360571239da8ba9a0d6474c262d60d0->enter($__internal_2c17ec3f59a0a0f953fade5f0507e4aaf360571239da8ba9a0d6474c262d60d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script>
            \$('.checkbox').checkbox();
        </script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        <div class=\"body-container\">
            <!-- Header -->
            <div class=\"header-container\">
                ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "            </div>
            <!-- End of Header -->

            <!-- Page content -->
            <div class=\"page-container ui\">
                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                ";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/header.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</html>
";
        
        $__internal_8160eea295700847f294f51dc2ce041ef69dfc32896018636e96a516e1e5067c->leave($__internal_8160eea295700847f294f51dc2ce041ef69dfc32896018636e96a516e1e5067c_prof);

        
        $__internal_2c17ec3f59a0a0f953fade5f0507e4aaf360571239da8ba9a0d6474c262d60d0->leave($__internal_2c17ec3f59a0a0f953fade5f0507e4aaf360571239da8ba9a0d6474c262d60d0_prof);

    }

    // line 12
    public function block_description($context, array $blocks = array())
    {
        $__internal_0b6e8e1d196af947b09c7fed0262a21f2318c41642355b6657a6b60590c66ee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b6e8e1d196af947b09c7fed0262a21f2318c41642355b6657a6b60590c66ee3->enter($__internal_0b6e8e1d196af947b09c7fed0262a21f2318c41642355b6657a6b60590c66ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_63b06a682a1839f85378bed91605d497d54fdcf29289b60bb2efdd9cdb72c48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b06a682a1839f85378bed91605d497d54fdcf29289b60bb2efdd9cdb72c48d->enter($__internal_63b06a682a1839f85378bed91605d497d54fdcf29289b60bb2efdd9cdb72c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        // line 13
        echo "            <meta name=\"description\" content=\"\">
        ";
        
        $__internal_63b06a682a1839f85378bed91605d497d54fdcf29289b60bb2efdd9cdb72c48d->leave($__internal_63b06a682a1839f85378bed91605d497d54fdcf29289b60bb2efdd9cdb72c48d_prof);

        
        $__internal_0b6e8e1d196af947b09c7fed0262a21f2318c41642355b6657a6b60590c66ee3->leave($__internal_0b6e8e1d196af947b09c7fed0262a21f2318c41642355b6657a6b60590c66ee3_prof);

    }

    // line 16
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_61c0a462f7d74352b4afd84c1c934a5bc40e4e4009470146702bf09c44efcd86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c0a462f7d74352b4afd84c1c934a5bc40e4e4009470146702bf09c44efcd86->enter($__internal_61c0a462f7d74352b4afd84c1c934a5bc40e4e4009470146702bf09c44efcd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        $__internal_1ee4849b3f00bfb2c78fc24266a9c296244d6d0419a89080cae51c8f5a725114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee4849b3f00bfb2c78fc24266a9c296244d6d0419a89080cae51c8f5a725114->enter($__internal_1ee4849b3f00bfb2c78fc24266a9c296244d6d0419a89080cae51c8f5a725114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        // line 17
        echo "            <meta name=\"keywords\" content=\"\">
        ";
        
        $__internal_1ee4849b3f00bfb2c78fc24266a9c296244d6d0419a89080cae51c8f5a725114->leave($__internal_1ee4849b3f00bfb2c78fc24266a9c296244d6d0419a89080cae51c8f5a725114_prof);

        
        $__internal_61c0a462f7d74352b4afd84c1c934a5bc40e4e4009470146702bf09c44efcd86->leave($__internal_61c0a462f7d74352b4afd84c1c934a5bc40e4e4009470146702bf09c44efcd86_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c3275a07dab2edcaf45dca9dcdacc27ea54e1fad88356651db1457fea51daab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3275a07dab2edcaf45dca9dcdacc27ea54e1fad88356651db1457fea51daab->enter($__internal_0c3275a07dab2edcaf45dca9dcdacc27ea54e1fad88356651db1457fea51daab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75b80087704e33178edd638b8d15b755599ec406fcac73448bcc65a62ebe0b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b80087704e33178edd638b8d15b755599ec406fcac73448bcc65a62ebe0b85->enter($__internal_75b80087704e33178edd638b8d15b755599ec406fcac73448bcc65a62ebe0b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_75b80087704e33178edd638b8d15b755599ec406fcac73448bcc65a62ebe0b85->leave($__internal_75b80087704e33178edd638b8d15b755599ec406fcac73448bcc65a62ebe0b85_prof);

        
        $__internal_0c3275a07dab2edcaf45dca9dcdacc27ea54e1fad88356651db1457fea51daab->leave($__internal_0c3275a07dab2edcaf45dca9dcdacc27ea54e1fad88356651db1457fea51daab_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27d5cecb4fb795945a7d2efe7a7622f75771697cf469372ab8ef7c18e9c967af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d5cecb4fb795945a7d2efe7a7622f75771697cf469372ab8ef7c18e9c967af->enter($__internal_27d5cecb4fb795945a7d2efe7a7622f75771697cf469372ab8ef7c18e9c967af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bcc52f429830f620ed31db22b09f7dfb3faa84d130b06dc61fa383806ce35f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc52f429830f620ed31db22b09f7dfb3faa84d130b06dc61fa383806ce35f5a->enter($__internal_bcc52f429830f620ed31db22b09f7dfb3faa84d130b06dc61fa383806ce35f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bcc52f429830f620ed31db22b09f7dfb3faa84d130b06dc61fa383806ce35f5a->leave($__internal_bcc52f429830f620ed31db22b09f7dfb3faa84d130b06dc61fa383806ce35f5a_prof);

        
        $__internal_27d5cecb4fb795945a7d2efe7a7622f75771697cf469372ab8ef7c18e9c967af->leave($__internal_27d5cecb4fb795945a7d2efe7a7622f75771697cf469372ab8ef7c18e9c967af_prof);

    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        $__internal_85ba9cef24a2217be35991cf5d02f96169ef664c2539bc20bc477c18abbe1a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ba9cef24a2217be35991cf5d02f96169ef664c2539bc20bc477c18abbe1a4b->enter($__internal_85ba9cef24a2217be35991cf5d02f96169ef664c2539bc20bc477c18abbe1a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f1b0d5a5933972af3984780b56fbf25d1d7d13e5a405eafccba7580bc11cfa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b0d5a5933972af3984780b56fbf25d1d7d13e5a405eafccba7580bc11cfa8a->enter($__internal_f1b0d5a5933972af3984780b56fbf25d1d7d13e5a405eafccba7580bc11cfa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 45
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_f1b0d5a5933972af3984780b56fbf25d1d7d13e5a405eafccba7580bc11cfa8a->leave($__internal_f1b0d5a5933972af3984780b56fbf25d1d7d13e5a405eafccba7580bc11cfa8a_prof);

        
        $__internal_85ba9cef24a2217be35991cf5d02f96169ef664c2539bc20bc477c18abbe1a4b->leave($__internal_85ba9cef24a2217be35991cf5d02f96169ef664c2539bc20bc477c18abbe1a4b_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_40cfab3dbf62922c5475d2a2e2706f4646eede6142b52838cd023d07d53f7dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cfab3dbf62922c5475d2a2e2706f4646eede6142b52838cd023d07d53f7dbc->enter($__internal_40cfab3dbf62922c5475d2a2e2706f4646eede6142b52838cd023d07d53f7dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_005903a0df2294e55d7d404d849f9382e4e2186a0f56694e1dfb6ea272bd0cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005903a0df2294e55d7d404d849f9382e4e2186a0f56694e1dfb6ea272bd0cb6->enter($__internal_005903a0df2294e55d7d404d849f9382e4e2186a0f56694e1dfb6ea272bd0cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_005903a0df2294e55d7d404d849f9382e4e2186a0f56694e1dfb6ea272bd0cb6->leave($__internal_005903a0df2294e55d7d404d849f9382e4e2186a0f56694e1dfb6ea272bd0cb6_prof);

        
        $__internal_40cfab3dbf62922c5475d2a2e2706f4646eede6142b52838cd023d07d53f7dbc->leave($__internal_40cfab3dbf62922c5475d2a2e2706f4646eede6142b52838cd023d07d53f7dbc_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c33830f68e6ee5eaf02b7c3430192cdff00f09de378b16cb269abb0560692754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33830f68e6ee5eaf02b7c3430192cdff00f09de378b16cb269abb0560692754->enter($__internal_c33830f68e6ee5eaf02b7c3430192cdff00f09de378b16cb269abb0560692754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5b191fb584cda3a4c44b58cb4739d347f89db63f6c68de1d832b6f4bde1fab93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b191fb584cda3a4c44b58cb4739d347f89db63f6c68de1d832b6f4bde1fab93->enter($__internal_5b191fb584cda3a4c44b58cb4739d347f89db63f6c68de1d832b6f4bde1fab93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Footer:footer"));
        echo "
                ";
        
        $__internal_5b191fb584cda3a4c44b58cb4739d347f89db63f6c68de1d832b6f4bde1fab93->leave($__internal_5b191fb584cda3a4c44b58cb4739d347f89db63f6c68de1d832b6f4bde1fab93_prof);

        
        $__internal_c33830f68e6ee5eaf02b7c3430192cdff00f09de378b16cb269abb0560692754->leave($__internal_c33830f68e6ee5eaf02b7c3430192cdff00f09de378b16cb269abb0560692754_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_683bb58a97850982a4f77dd6750c7ee9f7fc29409f1ebe54e19f47070dbb7779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683bb58a97850982a4f77dd6750c7ee9f7fc29409f1ebe54e19f47070dbb7779->enter($__internal_683bb58a97850982a4f77dd6750c7ee9f7fc29409f1ebe54e19f47070dbb7779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_74fa3ffbe34f7c8acd1538c90d71404c0b0ad712703c0ef7bba738d330203099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fa3ffbe34f7c8acd1538c90d71404c0b0ad712703c0ef7bba738d330203099->enter($__internal_74fa3ffbe34f7c8acd1538c90d71404c0b0ad712703c0ef7bba738d330203099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_74fa3ffbe34f7c8acd1538c90d71404c0b0ad712703c0ef7bba738d330203099->leave($__internal_74fa3ffbe34f7c8acd1538c90d71404c0b0ad712703c0ef7bba738d330203099_prof);

        
        $__internal_683bb58a97850982a4f77dd6750c7ee9f7fc29409f1ebe54e19f47070dbb7779->leave($__internal_683bb58a97850982a4f77dd6750c7ee9f7fc29409f1ebe54e19f47070dbb7779_prof);

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
        return array (  281 => 67,  268 => 59,  259 => 58,  242 => 52,  229 => 45,  220 => 44,  203 => 26,  185 => 20,  174 => 17,  165 => 16,  154 => 13,  145 => 12,  134 => 68,  132 => 67,  128 => 66,  121 => 61,  119 => 58,  112 => 53,  110 => 52,  103 => 47,  101 => 44,  91 => 37,  83 => 32,  76 => 27,  74 => 26,  69 => 24,  65 => 23,  61 => 22,  56 => 20,  53 => 19,  51 => 16,  48 => 15,  46 => 12,  33 => 1,);
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
        <script>
            \$('.checkbox').checkbox();
        </script>

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
