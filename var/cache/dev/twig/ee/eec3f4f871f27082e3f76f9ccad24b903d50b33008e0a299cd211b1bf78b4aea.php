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
        $__internal_764be334ad2af39efcde3199835f632cedb755c88a2acd266656a28fd90ee546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764be334ad2af39efcde3199835f632cedb755c88a2acd266656a28fd90ee546->enter($__internal_764be334ad2af39efcde3199835f632cedb755c88a2acd266656a28fd90ee546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ff2e4ddd6cf6059bba8b025717edccd2eeef764acad0729d397390c185c6bd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2e4ddd6cf6059bba8b025717edccd2eeef764acad0729d397390c185c6bd55->enter($__internal_ff2e4ddd6cf6059bba8b025717edccd2eeef764acad0729d397390c185c6bd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/semantic.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/default.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/icon.css"), "html", null, true);
        echo "\" />
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        <div class=\"body-container\">
            <!-- Header -->
            <div class=\"header-container\">
                ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 20
        echo "            </div>
            <!-- End of Header -->

            <!-- Page content -->
            <div class=\"page-container ui\">
                ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                ";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\">
    </script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/semantic.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/header.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "</html>
";
        
        $__internal_764be334ad2af39efcde3199835f632cedb755c88a2acd266656a28fd90ee546->leave($__internal_764be334ad2af39efcde3199835f632cedb755c88a2acd266656a28fd90ee546_prof);

        
        $__internal_ff2e4ddd6cf6059bba8b025717edccd2eeef764acad0729d397390c185c6bd55->leave($__internal_ff2e4ddd6cf6059bba8b025717edccd2eeef764acad0729d397390c185c6bd55_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3427ac9d3a7aefe5be28abc529deb0d438516785556a4946f77c9256dd5aa0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3427ac9d3a7aefe5be28abc529deb0d438516785556a4946f77c9256dd5aa0ba->enter($__internal_3427ac9d3a7aefe5be28abc529deb0d438516785556a4946f77c9256dd5aa0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_daf49e18898147f27f6b4f901badd10e761353a241f2f5cd6c581a70bd042ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf49e18898147f27f6b4f901badd10e761353a241f2f5cd6c581a70bd042ea3->enter($__internal_daf49e18898147f27f6b4f901badd10e761353a241f2f5cd6c581a70bd042ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_daf49e18898147f27f6b4f901badd10e761353a241f2f5cd6c581a70bd042ea3->leave($__internal_daf49e18898147f27f6b4f901badd10e761353a241f2f5cd6c581a70bd042ea3_prof);

        
        $__internal_3427ac9d3a7aefe5be28abc529deb0d438516785556a4946f77c9256dd5aa0ba->leave($__internal_3427ac9d3a7aefe5be28abc529deb0d438516785556a4946f77c9256dd5aa0ba_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba2433d5d74ab81b5e0c047e7155a3e5df65e76242261d5bc110a01f6a002e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2433d5d74ab81b5e0c047e7155a3e5df65e76242261d5bc110a01f6a002e91->enter($__internal_ba2433d5d74ab81b5e0c047e7155a3e5df65e76242261d5bc110a01f6a002e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_84054bded2701c8745c23f5f4d903473de83feabc1293d96ab915efaea81f4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84054bded2701c8745c23f5f4d903473de83feabc1293d96ab915efaea81f4de->enter($__internal_84054bded2701c8745c23f5f4d903473de83feabc1293d96ab915efaea81f4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_84054bded2701c8745c23f5f4d903473de83feabc1293d96ab915efaea81f4de->leave($__internal_84054bded2701c8745c23f5f4d903473de83feabc1293d96ab915efaea81f4de_prof);

        
        $__internal_ba2433d5d74ab81b5e0c047e7155a3e5df65e76242261d5bc110a01f6a002e91->leave($__internal_ba2433d5d74ab81b5e0c047e7155a3e5df65e76242261d5bc110a01f6a002e91_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_c1eeaa66413dd9c0904e682a919e41532a3a8581ccdb738e1500da56160dacef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1eeaa66413dd9c0904e682a919e41532a3a8581ccdb738e1500da56160dacef->enter($__internal_c1eeaa66413dd9c0904e682a919e41532a3a8581ccdb738e1500da56160dacef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3dd6f663d2355a85f6f72e505b8f0f2945f684ea1d6ef3a6abf57fce5175a27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd6f663d2355a85f6f72e505b8f0f2945f684ea1d6ef3a6abf57fce5175a27d->enter($__internal_3dd6f663d2355a85f6f72e505b8f0f2945f684ea1d6ef3a6abf57fce5175a27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_3dd6f663d2355a85f6f72e505b8f0f2945f684ea1d6ef3a6abf57fce5175a27d->leave($__internal_3dd6f663d2355a85f6f72e505b8f0f2945f684ea1d6ef3a6abf57fce5175a27d_prof);

        
        $__internal_c1eeaa66413dd9c0904e682a919e41532a3a8581ccdb738e1500da56160dacef->leave($__internal_c1eeaa66413dd9c0904e682a919e41532a3a8581ccdb738e1500da56160dacef_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfd4b0a0676251dc22fb423f71de4dbc0db9d99bcebd10d5ed0e35009037feb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd4b0a0676251dc22fb423f71de4dbc0db9d99bcebd10d5ed0e35009037feb4->enter($__internal_cfd4b0a0676251dc22fb423f71de4dbc0db9d99bcebd10d5ed0e35009037feb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ae22086a5a8ab825068761c6b51b80d8e0a4f1c5ede1630ee55ecf1c746106a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ae22086a5a8ab825068761c6b51b80d8e0a4f1c5ede1630ee55ecf1c746106a->enter($__internal_2ae22086a5a8ab825068761c6b51b80d8e0a4f1c5ede1630ee55ecf1c746106a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ae22086a5a8ab825068761c6b51b80d8e0a4f1c5ede1630ee55ecf1c746106a->leave($__internal_2ae22086a5a8ab825068761c6b51b80d8e0a4f1c5ede1630ee55ecf1c746106a_prof);

        
        $__internal_cfd4b0a0676251dc22fb423f71de4dbc0db9d99bcebd10d5ed0e35009037feb4->leave($__internal_cfd4b0a0676251dc22fb423f71de4dbc0db9d99bcebd10d5ed0e35009037feb4_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_37f8204bf37dd8abe5f223f70d24dd0cb19f49a6f8f754c42216ef46f3352bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f8204bf37dd8abe5f223f70d24dd0cb19f49a6f8f754c42216ef46f3352bfd->enter($__internal_37f8204bf37dd8abe5f223f70d24dd0cb19f49a6f8f754c42216ef46f3352bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_5168959838a1707136c67b4d41d3800f60531192d7c166169f63e886b3692a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5168959838a1707136c67b4d41d3800f60531192d7c166169f63e886b3692a7d->enter($__internal_5168959838a1707136c67b4d41d3800f60531192d7c166169f63e886b3692a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_5168959838a1707136c67b4d41d3800f60531192d7c166169f63e886b3692a7d->leave($__internal_5168959838a1707136c67b4d41d3800f60531192d7c166169f63e886b3692a7d_prof);

        
        $__internal_37f8204bf37dd8abe5f223f70d24dd0cb19f49a6f8f754c42216ef46f3352bfd->leave($__internal_37f8204bf37dd8abe5f223f70d24dd0cb19f49a6f8f754c42216ef46f3352bfd_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_40738c777d74b55f1fe976dcc10542085d4dc89a5a156e8a12f323725e6460e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40738c777d74b55f1fe976dcc10542085d4dc89a5a156e8a12f323725e6460e7->enter($__internal_40738c777d74b55f1fe976dcc10542085d4dc89a5a156e8a12f323725e6460e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_054fb47cb77ff2082dd7483002fde7984ca6e64693c232284b0b1a2a363086de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054fb47cb77ff2082dd7483002fde7984ca6e64693c232284b0b1a2a363086de->enter($__internal_054fb47cb77ff2082dd7483002fde7984ca6e64693c232284b0b1a2a363086de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_054fb47cb77ff2082dd7483002fde7984ca6e64693c232284b0b1a2a363086de->leave($__internal_054fb47cb77ff2082dd7483002fde7984ca6e64693c232284b0b1a2a363086de_prof);

        
        $__internal_40738c777d74b55f1fe976dcc10542085d4dc89a5a156e8a12f323725e6460e7->leave($__internal_40738c777d74b55f1fe976dcc10542085d4dc89a5a156e8a12f323725e6460e7_prof);

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
        return array (  209 => 43,  192 => 31,  175 => 25,  162 => 18,  153 => 17,  136 => 9,  118 => 5,  107 => 44,  105 => 43,  101 => 42,  97 => 41,  86 => 32,  84 => 31,  77 => 26,  75 => 25,  68 => 20,  66 => 17,  55 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
                {% block footer %}{% endblock %}
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
