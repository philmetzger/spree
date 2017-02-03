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
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dbc7da9e1bf2ffb4c5991ef37e91fea94f786a1d852e0373cbcb5eb75cb2ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbc7da9e1bf2ffb4c5991ef37e91fea94f786a1d852e0373cbcb5eb75cb2ef6->enter($__internal_0dbc7da9e1bf2ffb4c5991ef37e91fea94f786a1d852e0373cbcb5eb75cb2ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3eb980b4c211d31b8b428897d974be14bde8472d59343d5ac58166cb5c4d388d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb980b4c211d31b8b428897d974be14bde8472d59343d5ac58166cb5c4d388d->enter($__internal_3eb980b4c211d31b8b428897d974be14bde8472d59343d5ac58166cb5c4d388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <!-- Header -->
        <div class=\"header-container\">
            ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 14
        echo "        </div>
        <!-- End of Header -->

        <!-- Page content -->
        <div class=\"page-container\" style=\"max-width: 1564px;\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
        <!-- End of Page content -->

        <!-- Footer -->
        <footer class=\"footer-container\">
            ";
        // line 25
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "        </footer>
        <!-- End of Footer -->

        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "    </body>
</html>
";
        
        $__internal_0dbc7da9e1bf2ffb4c5991ef37e91fea94f786a1d852e0373cbcb5eb75cb2ef6->leave($__internal_0dbc7da9e1bf2ffb4c5991ef37e91fea94f786a1d852e0373cbcb5eb75cb2ef6_prof);

        
        $__internal_3eb980b4c211d31b8b428897d974be14bde8472d59343d5ac58166cb5c4d388d->leave($__internal_3eb980b4c211d31b8b428897d974be14bde8472d59343d5ac58166cb5c4d388d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85cf0c79ccb6b825020a6eb501129b256d91e2c76ba63d134846905e0b6bdda8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cf0c79ccb6b825020a6eb501129b256d91e2c76ba63d134846905e0b6bdda8->enter($__internal_85cf0c79ccb6b825020a6eb501129b256d91e2c76ba63d134846905e0b6bdda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecec3cade04ea3755a9abb81dfcf0f25a0869a1280f44a0a8a969672615a24a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecec3cade04ea3755a9abb81dfcf0f25a0869a1280f44a0a8a969672615a24a7->enter($__internal_ecec3cade04ea3755a9abb81dfcf0f25a0869a1280f44a0a8a969672615a24a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ecec3cade04ea3755a9abb81dfcf0f25a0869a1280f44a0a8a969672615a24a7->leave($__internal_ecec3cade04ea3755a9abb81dfcf0f25a0869a1280f44a0a8a969672615a24a7_prof);

        
        $__internal_85cf0c79ccb6b825020a6eb501129b256d91e2c76ba63d134846905e0b6bdda8->leave($__internal_85cf0c79ccb6b825020a6eb501129b256d91e2c76ba63d134846905e0b6bdda8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a6e9f5746d86617b50342e458713866821f073e2f2698447c006d1a4c4937e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6e9f5746d86617b50342e458713866821f073e2f2698447c006d1a4c4937e9->enter($__internal_7a6e9f5746d86617b50342e458713866821f073e2f2698447c006d1a4c4937e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_45a5256a89996673aef2f12cc6c77750b8994284b60e4a56c6f3201b9728b423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a5256a89996673aef2f12cc6c77750b8994284b60e4a56c6f3201b9728b423->enter($__internal_45a5256a89996673aef2f12cc6c77750b8994284b60e4a56c6f3201b9728b423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_45a5256a89996673aef2f12cc6c77750b8994284b60e4a56c6f3201b9728b423->leave($__internal_45a5256a89996673aef2f12cc6c77750b8994284b60e4a56c6f3201b9728b423_prof);

        
        $__internal_7a6e9f5746d86617b50342e458713866821f073e2f2698447c006d1a4c4937e9->leave($__internal_7a6e9f5746d86617b50342e458713866821f073e2f2698447c006d1a4c4937e9_prof);

    }

    // line 13
    public function block_header($context, array $blocks = array())
    {
        $__internal_ca7c5d00aa3c0739981521b69720b1d609b73a5837de237d8959a9a1ed4b6995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7c5d00aa3c0739981521b69720b1d609b73a5837de237d8959a9a1ed4b6995->enter($__internal_ca7c5d00aa3c0739981521b69720b1d609b73a5837de237d8959a9a1ed4b6995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_97343babf2e397e6ed0aa93c1f8303cabd4e0222833d423c8f9bd3eb5faf9d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97343babf2e397e6ed0aa93c1f8303cabd4e0222833d423c8f9bd3eb5faf9d71->enter($__internal_97343babf2e397e6ed0aa93c1f8303cabd4e0222833d423c8f9bd3eb5faf9d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_97343babf2e397e6ed0aa93c1f8303cabd4e0222833d423c8f9bd3eb5faf9d71->leave($__internal_97343babf2e397e6ed0aa93c1f8303cabd4e0222833d423c8f9bd3eb5faf9d71_prof);

        
        $__internal_ca7c5d00aa3c0739981521b69720b1d609b73a5837de237d8959a9a1ed4b6995->leave($__internal_ca7c5d00aa3c0739981521b69720b1d609b73a5837de237d8959a9a1ed4b6995_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_a814eef9aa5a5fc86e42da1201c83cccfbd336eceb4bfb1eed39700f5c1884ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a814eef9aa5a5fc86e42da1201c83cccfbd336eceb4bfb1eed39700f5c1884ad->enter($__internal_a814eef9aa5a5fc86e42da1201c83cccfbd336eceb4bfb1eed39700f5c1884ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fdbd9fa80ed7fca21071afe86fc374b6fc8b2229635378f2b136795606d8c3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbd9fa80ed7fca21071afe86fc374b6fc8b2229635378f2b136795606d8c3d1->enter($__internal_fdbd9fa80ed7fca21071afe86fc374b6fc8b2229635378f2b136795606d8c3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fdbd9fa80ed7fca21071afe86fc374b6fc8b2229635378f2b136795606d8c3d1->leave($__internal_fdbd9fa80ed7fca21071afe86fc374b6fc8b2229635378f2b136795606d8c3d1_prof);

        
        $__internal_a814eef9aa5a5fc86e42da1201c83cccfbd336eceb4bfb1eed39700f5c1884ad->leave($__internal_a814eef9aa5a5fc86e42da1201c83cccfbd336eceb4bfb1eed39700f5c1884ad_prof);

    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        $__internal_97d997a00032802540ea1c279b0339d8c32768cee210d11244b58b8958ff65db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d997a00032802540ea1c279b0339d8c32768cee210d11244b58b8958ff65db->enter($__internal_97d997a00032802540ea1c279b0339d8c32768cee210d11244b58b8958ff65db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_eab187ed09625db1d24d5fc6b782501b00d7e9b509d2830673b97eccfa2248fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab187ed09625db1d24d5fc6b782501b00d7e9b509d2830673b97eccfa2248fb->enter($__internal_eab187ed09625db1d24d5fc6b782501b00d7e9b509d2830673b97eccfa2248fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_eab187ed09625db1d24d5fc6b782501b00d7e9b509d2830673b97eccfa2248fb->leave($__internal_eab187ed09625db1d24d5fc6b782501b00d7e9b509d2830673b97eccfa2248fb_prof);

        
        $__internal_97d997a00032802540ea1c279b0339d8c32768cee210d11244b58b8958ff65db->leave($__internal_97d997a00032802540ea1c279b0339d8c32768cee210d11244b58b8958ff65db_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7855b6d222eeeb31fe3a299c20b67cc428a3ae5872b041ca6b7132fd7b79a7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7855b6d222eeeb31fe3a299c20b67cc428a3ae5872b041ca6b7132fd7b79a7c->enter($__internal_c7855b6d222eeeb31fe3a299c20b67cc428a3ae5872b041ca6b7132fd7b79a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5325b62ceecd1d87b103563e5baedae9fcb5dfff4ed466ce63281f701a497b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5325b62ceecd1d87b103563e5baedae9fcb5dfff4ed466ce63281f701a497b7b->enter($__internal_5325b62ceecd1d87b103563e5baedae9fcb5dfff4ed466ce63281f701a497b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5325b62ceecd1d87b103563e5baedae9fcb5dfff4ed466ce63281f701a497b7b->leave($__internal_5325b62ceecd1d87b103563e5baedae9fcb5dfff4ed466ce63281f701a497b7b_prof);

        
        $__internal_c7855b6d222eeeb31fe3a299c20b67cc428a3ae5872b041ca6b7132fd7b79a7c->leave($__internal_c7855b6d222eeeb31fe3a299c20b67cc428a3ae5872b041ca6b7132fd7b79a7c_prof);

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
        return array (  178 => 29,  161 => 25,  144 => 19,  127 => 13,  110 => 6,  92 => 5,  80 => 30,  78 => 29,  73 => 26,  71 => 25,  64 => 20,  62 => 19,  55 => 14,  53 => 13,  43 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
        <!-- Header -->
        <div class=\"header-container\">
            {% block header %}{% endblock %}
        </div>
        <!-- End of Header -->

        <!-- Page content -->
        <div class=\"page-container\" style=\"max-width: 1564px;\">
            {% block body %}{% endblock %}
        </div>
        <!-- End of Page content -->

        <!-- Footer -->
        <footer class=\"footer-container\">
            {% block footer %}{% endblock %}
        </footer>
        <!-- End of Footer -->

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
