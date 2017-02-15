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
        $__internal_8f49aad403ad2c028672519e2f6ea10b5369d41eb981b171965774f81982da4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f49aad403ad2c028672519e2f6ea10b5369d41eb981b171965774f81982da4b->enter($__internal_8f49aad403ad2c028672519e2f6ea10b5369d41eb981b171965774f81982da4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e670d439e290542bec088a0458840dec33f8bcd88df0c5001533f229c5204e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e670d439e290542bec088a0458840dec33f8bcd88df0c5001533f229c5204e2a->enter($__internal_e670d439e290542bec088a0458840dec33f8bcd88df0c5001533f229c5204e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        <div class=\"body-container\">
            <!-- Header -->
            <div class=\"header-container\">
                ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "            </div>
            <!-- End of Header -->

            <!-- Page content -->
            <div class=\"page-container ui container\">
                ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                ";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
        // line 31
        echo "            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\">
    </script>
    <script href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/semantic.js"), "html", null, true);
        echo "\" />
</html>
";
        
        $__internal_8f49aad403ad2c028672519e2f6ea10b5369d41eb981b171965774f81982da4b->leave($__internal_8f49aad403ad2c028672519e2f6ea10b5369d41eb981b171965774f81982da4b_prof);

        
        $__internal_e670d439e290542bec088a0458840dec33f8bcd88df0c5001533f229c5204e2a->leave($__internal_e670d439e290542bec088a0458840dec33f8bcd88df0c5001533f229c5204e2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22aaada545f3958b4c44f535a3271eff2cb919a97ef58da866ab2fe74d80cdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22aaada545f3958b4c44f535a3271eff2cb919a97ef58da866ab2fe74d80cdd4->enter($__internal_22aaada545f3958b4c44f535a3271eff2cb919a97ef58da866ab2fe74d80cdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8955d0d8c43e41e56e77fdecbbefef4e6f86cdcb1c469309892aa8e4751fba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8955d0d8c43e41e56e77fdecbbefef4e6f86cdcb1c469309892aa8e4751fba3->enter($__internal_f8955d0d8c43e41e56e77fdecbbefef4e6f86cdcb1c469309892aa8e4751fba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f8955d0d8c43e41e56e77fdecbbefef4e6f86cdcb1c469309892aa8e4751fba3->leave($__internal_f8955d0d8c43e41e56e77fdecbbefef4e6f86cdcb1c469309892aa8e4751fba3_prof);

        
        $__internal_22aaada545f3958b4c44f535a3271eff2cb919a97ef58da866ab2fe74d80cdd4->leave($__internal_22aaada545f3958b4c44f535a3271eff2cb919a97ef58da866ab2fe74d80cdd4_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d3e7ed16b755ed6df8339c3f796e2dd775cd1833ea35bf9a647b0d61e7279ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3e7ed16b755ed6df8339c3f796e2dd775cd1833ea35bf9a647b0d61e7279ca->enter($__internal_3d3e7ed16b755ed6df8339c3f796e2dd775cd1833ea35bf9a647b0d61e7279ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e1ad27d11aef204236f65f0536b42e7d2ba7230216276ea3765299262be4dbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ad27d11aef204236f65f0536b42e7d2ba7230216276ea3765299262be4dbcb->enter($__internal_e1ad27d11aef204236f65f0536b42e7d2ba7230216276ea3765299262be4dbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e1ad27d11aef204236f65f0536b42e7d2ba7230216276ea3765299262be4dbcb->leave($__internal_e1ad27d11aef204236f65f0536b42e7d2ba7230216276ea3765299262be4dbcb_prof);

        
        $__internal_3d3e7ed16b755ed6df8339c3f796e2dd775cd1833ea35bf9a647b0d61e7279ca->leave($__internal_3d3e7ed16b755ed6df8339c3f796e2dd775cd1833ea35bf9a647b0d61e7279ca_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_f5436159670c0fb89c5ca531ba213eb597fc17f40a4b2c9a061a09431023ac24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5436159670c0fb89c5ca531ba213eb597fc17f40a4b2c9a061a09431023ac24->enter($__internal_f5436159670c0fb89c5ca531ba213eb597fc17f40a4b2c9a061a09431023ac24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_de19de6451da1959c45babb4c0494315cdcb8bca10aa9a9d91b5cfe5bcc76dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de19de6451da1959c45babb4c0494315cdcb8bca10aa9a9d91b5cfe5bcc76dc6->enter($__internal_de19de6451da1959c45babb4c0494315cdcb8bca10aa9a9d91b5cfe5bcc76dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_de19de6451da1959c45babb4c0494315cdcb8bca10aa9a9d91b5cfe5bcc76dc6->leave($__internal_de19de6451da1959c45babb4c0494315cdcb8bca10aa9a9d91b5cfe5bcc76dc6_prof);

        
        $__internal_f5436159670c0fb89c5ca531ba213eb597fc17f40a4b2c9a061a09431023ac24->leave($__internal_f5436159670c0fb89c5ca531ba213eb597fc17f40a4b2c9a061a09431023ac24_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_85344b1252f3185fe36eefc550a19a4ef0a1295e5e886c18fbe3a175a4b092cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85344b1252f3185fe36eefc550a19a4ef0a1295e5e886c18fbe3a175a4b092cb->enter($__internal_85344b1252f3185fe36eefc550a19a4ef0a1295e5e886c18fbe3a175a4b092cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dee9fae2473f96a43a1e878d0bb715d483800440f6f4ff9560de520c9b973f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee9fae2473f96a43a1e878d0bb715d483800440f6f4ff9560de520c9b973f01->enter($__internal_dee9fae2473f96a43a1e878d0bb715d483800440f6f4ff9560de520c9b973f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dee9fae2473f96a43a1e878d0bb715d483800440f6f4ff9560de520c9b973f01->leave($__internal_dee9fae2473f96a43a1e878d0bb715d483800440f6f4ff9560de520c9b973f01_prof);

        
        $__internal_85344b1252f3185fe36eefc550a19a4ef0a1295e5e886c18fbe3a175a4b092cb->leave($__internal_85344b1252f3185fe36eefc550a19a4ef0a1295e5e886c18fbe3a175a4b092cb_prof);

    }

    // line 30
    public function block_footer($context, array $blocks = array())
    {
        $__internal_801cbc9a3b2a8a6d65a0718ecf9ad5f8d50149cbd90a63a02f1be99f8217cca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801cbc9a3b2a8a6d65a0718ecf9ad5f8d50149cbd90a63a02f1be99f8217cca6->enter($__internal_801cbc9a3b2a8a6d65a0718ecf9ad5f8d50149cbd90a63a02f1be99f8217cca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_35f791d8423c4456a3aac8aea7b0678e0bcee2a81bbc66f9d5dbd52c7f7b8558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f791d8423c4456a3aac8aea7b0678e0bcee2a81bbc66f9d5dbd52c7f7b8558->enter($__internal_35f791d8423c4456a3aac8aea7b0678e0bcee2a81bbc66f9d5dbd52c7f7b8558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_35f791d8423c4456a3aac8aea7b0678e0bcee2a81bbc66f9d5dbd52c7f7b8558->leave($__internal_35f791d8423c4456a3aac8aea7b0678e0bcee2a81bbc66f9d5dbd52c7f7b8558_prof);

        
        $__internal_801cbc9a3b2a8a6d65a0718ecf9ad5f8d50149cbd90a63a02f1be99f8217cca6->leave($__internal_801cbc9a3b2a8a6d65a0718ecf9ad5f8d50149cbd90a63a02f1be99f8217cca6_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c984425ae1876024bbe02dae809095156c009402f5c8a8e1044b3141625e960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c984425ae1876024bbe02dae809095156c009402f5c8a8e1044b3141625e960->enter($__internal_3c984425ae1876024bbe02dae809095156c009402f5c8a8e1044b3141625e960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15fefe6fb432afa1a4dc86941186f9c2144c2a69dd557ef5e4c014a23d96e8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15fefe6fb432afa1a4dc86941186f9c2144c2a69dd557ef5e4c014a23d96e8cb->enter($__internal_15fefe6fb432afa1a4dc86941186f9c2144c2a69dd557ef5e4c014a23d96e8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15fefe6fb432afa1a4dc86941186f9c2144c2a69dd557ef5e4c014a23d96e8cb->leave($__internal_15fefe6fb432afa1a4dc86941186f9c2144c2a69dd557ef5e4c014a23d96e8cb_prof);

        
        $__internal_3c984425ae1876024bbe02dae809095156c009402f5c8a8e1044b3141625e960->leave($__internal_3c984425ae1876024bbe02dae809095156c009402f5c8a8e1044b3141625e960_prof);

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
        return array (  201 => 36,  184 => 30,  167 => 24,  154 => 17,  145 => 16,  128 => 8,  110 => 5,  97 => 41,  91 => 37,  89 => 36,  82 => 31,  80 => 30,  73 => 25,  71 => 24,  64 => 19,  62 => 16,  51 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
            <div class=\"page-container ui container\">
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

    {% block javascripts %}{% endblock %}
    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\">
    </script>
    <script href=\"{{ asset('bundles/app/js/semantic.js') }}\" />
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
