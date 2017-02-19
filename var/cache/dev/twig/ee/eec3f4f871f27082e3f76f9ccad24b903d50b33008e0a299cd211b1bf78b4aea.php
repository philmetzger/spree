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
        $__internal_63fb79283fa5b4ae134b22b0f47e678ad64c9f6aa67a5ec5b63f5d2d81f338be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fb79283fa5b4ae134b22b0f47e678ad64c9f6aa67a5ec5b63f5d2d81f338be->enter($__internal_63fb79283fa5b4ae134b22b0f47e678ad64c9f6aa67a5ec5b63f5d2d81f338be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d78b3e0c80f47d47d5bca9be49bdc9d3edfa0190ec1237830648d12298022c12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78b3e0c80f47d47d5bca9be49bdc9d3edfa0190ec1237830648d12298022c12->enter($__internal_d78b3e0c80f47d47d5bca9be49bdc9d3edfa0190ec1237830648d12298022c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_63fb79283fa5b4ae134b22b0f47e678ad64c9f6aa67a5ec5b63f5d2d81f338be->leave($__internal_63fb79283fa5b4ae134b22b0f47e678ad64c9f6aa67a5ec5b63f5d2d81f338be_prof);

        
        $__internal_d78b3e0c80f47d47d5bca9be49bdc9d3edfa0190ec1237830648d12298022c12->leave($__internal_d78b3e0c80f47d47d5bca9be49bdc9d3edfa0190ec1237830648d12298022c12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f91f4195e1550e97088d1b01fb79c28ee61842fab0ac60fd6a90a17b5ab59ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f91f4195e1550e97088d1b01fb79c28ee61842fab0ac60fd6a90a17b5ab59ae->enter($__internal_7f91f4195e1550e97088d1b01fb79c28ee61842fab0ac60fd6a90a17b5ab59ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba737a4ce0b94d69c1c08bf8963156b1ea872c1c485534571da4c055ce515297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba737a4ce0b94d69c1c08bf8963156b1ea872c1c485534571da4c055ce515297->enter($__internal_ba737a4ce0b94d69c1c08bf8963156b1ea872c1c485534571da4c055ce515297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ba737a4ce0b94d69c1c08bf8963156b1ea872c1c485534571da4c055ce515297->leave($__internal_ba737a4ce0b94d69c1c08bf8963156b1ea872c1c485534571da4c055ce515297_prof);

        
        $__internal_7f91f4195e1550e97088d1b01fb79c28ee61842fab0ac60fd6a90a17b5ab59ae->leave($__internal_7f91f4195e1550e97088d1b01fb79c28ee61842fab0ac60fd6a90a17b5ab59ae_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b3aef92e386cc3aeb6e23dd4293c8579ee62a317d82cacf4498e52cc18c674f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aef92e386cc3aeb6e23dd4293c8579ee62a317d82cacf4498e52cc18c674f2->enter($__internal_b3aef92e386cc3aeb6e23dd4293c8579ee62a317d82cacf4498e52cc18c674f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3f75353d83640494651efb0a93c5ff202f55ba12a3cc4a2afcfed4998a86c4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f75353d83640494651efb0a93c5ff202f55ba12a3cc4a2afcfed4998a86c4eb->enter($__internal_3f75353d83640494651efb0a93c5ff202f55ba12a3cc4a2afcfed4998a86c4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f75353d83640494651efb0a93c5ff202f55ba12a3cc4a2afcfed4998a86c4eb->leave($__internal_3f75353d83640494651efb0a93c5ff202f55ba12a3cc4a2afcfed4998a86c4eb_prof);

        
        $__internal_b3aef92e386cc3aeb6e23dd4293c8579ee62a317d82cacf4498e52cc18c674f2->leave($__internal_b3aef92e386cc3aeb6e23dd4293c8579ee62a317d82cacf4498e52cc18c674f2_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_0afe85245ed5362cbadc2118d46a7d4b9224a52fb1284055fa20fec40141b3de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afe85245ed5362cbadc2118d46a7d4b9224a52fb1284055fa20fec40141b3de->enter($__internal_0afe85245ed5362cbadc2118d46a7d4b9224a52fb1284055fa20fec40141b3de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f85d20b8e44e68d9376fcafc670872ae1c0dcb6ccc05ca542badf3950dd6a08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85d20b8e44e68d9376fcafc670872ae1c0dcb6ccc05ca542badf3950dd6a08c->enter($__internal_f85d20b8e44e68d9376fcafc670872ae1c0dcb6ccc05ca542badf3950dd6a08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_f85d20b8e44e68d9376fcafc670872ae1c0dcb6ccc05ca542badf3950dd6a08c->leave($__internal_f85d20b8e44e68d9376fcafc670872ae1c0dcb6ccc05ca542badf3950dd6a08c_prof);

        
        $__internal_0afe85245ed5362cbadc2118d46a7d4b9224a52fb1284055fa20fec40141b3de->leave($__internal_0afe85245ed5362cbadc2118d46a7d4b9224a52fb1284055fa20fec40141b3de_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_478197953e593c89c6a17e14162e910cd352ce8e35e3dbedef54cead2c8e2b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_478197953e593c89c6a17e14162e910cd352ce8e35e3dbedef54cead2c8e2b64->enter($__internal_478197953e593c89c6a17e14162e910cd352ce8e35e3dbedef54cead2c8e2b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0142bf868cbc215f4e2b2d728c0ea3224f41038a0f773e43aa7547d6bce05afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0142bf868cbc215f4e2b2d728c0ea3224f41038a0f773e43aa7547d6bce05afa->enter($__internal_0142bf868cbc215f4e2b2d728c0ea3224f41038a0f773e43aa7547d6bce05afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0142bf868cbc215f4e2b2d728c0ea3224f41038a0f773e43aa7547d6bce05afa->leave($__internal_0142bf868cbc215f4e2b2d728c0ea3224f41038a0f773e43aa7547d6bce05afa_prof);

        
        $__internal_478197953e593c89c6a17e14162e910cd352ce8e35e3dbedef54cead2c8e2b64->leave($__internal_478197953e593c89c6a17e14162e910cd352ce8e35e3dbedef54cead2c8e2b64_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_72c1c3663846a2bb9f5d55f3c376c523d26d9864d6e33d719a226b71c2a12fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c1c3663846a2bb9f5d55f3c376c523d26d9864d6e33d719a226b71c2a12fa6->enter($__internal_72c1c3663846a2bb9f5d55f3c376c523d26d9864d6e33d719a226b71c2a12fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_44f5c5789ea9f1246c77ce68c44e19008574b85d3e966599f364813032fa413b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44f5c5789ea9f1246c77ce68c44e19008574b85d3e966599f364813032fa413b->enter($__internal_44f5c5789ea9f1246c77ce68c44e19008574b85d3e966599f364813032fa413b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_44f5c5789ea9f1246c77ce68c44e19008574b85d3e966599f364813032fa413b->leave($__internal_44f5c5789ea9f1246c77ce68c44e19008574b85d3e966599f364813032fa413b_prof);

        
        $__internal_72c1c3663846a2bb9f5d55f3c376c523d26d9864d6e33d719a226b71c2a12fa6->leave($__internal_72c1c3663846a2bb9f5d55f3c376c523d26d9864d6e33d719a226b71c2a12fa6_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97da6053b6efbb97970d63a717f9ce66a438af49e6bc8eeb44fb2467fbceb501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97da6053b6efbb97970d63a717f9ce66a438af49e6bc8eeb44fb2467fbceb501->enter($__internal_97da6053b6efbb97970d63a717f9ce66a438af49e6bc8eeb44fb2467fbceb501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a5b6005a4c8e258b33cd4e59f9e57e15017cfca2beb2090c7e25c102d8d9b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5b6005a4c8e258b33cd4e59f9e57e15017cfca2beb2090c7e25c102d8d9b92->enter($__internal_2a5b6005a4c8e258b33cd4e59f9e57e15017cfca2beb2090c7e25c102d8d9b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a5b6005a4c8e258b33cd4e59f9e57e15017cfca2beb2090c7e25c102d8d9b92->leave($__internal_2a5b6005a4c8e258b33cd4e59f9e57e15017cfca2beb2090c7e25c102d8d9b92_prof);

        
        $__internal_97da6053b6efbb97970d63a717f9ce66a438af49e6bc8eeb44fb2467fbceb501->leave($__internal_97da6053b6efbb97970d63a717f9ce66a438af49e6bc8eeb44fb2467fbceb501_prof);

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
