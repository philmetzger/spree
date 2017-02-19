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
        $__internal_2fa950a2d05be27dbec10c024582dbb199187c00e4929d537845e4ba42a2ee25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fa950a2d05be27dbec10c024582dbb199187c00e4929d537845e4ba42a2ee25->enter($__internal_2fa950a2d05be27dbec10c024582dbb199187c00e4929d537845e4ba42a2ee25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_911aa72afa1209d20ed3cf1edc430ab7b61370dd8a613015b033b032532c02c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911aa72afa1209d20ed3cf1edc430ab7b61370dd8a613015b033b032532c02c8->enter($__internal_911aa72afa1209d20ed3cf1edc430ab7b61370dd8a613015b033b032532c02c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                ";
        // line 32
        $this->displayBlock('footer', $context, $blocks);
        // line 33
        echo "            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\">
    </script>
    <script href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/semantic.js"), "html", null, true);
        echo "\" />
    ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "</html>
";
        
        $__internal_2fa950a2d05be27dbec10c024582dbb199187c00e4929d537845e4ba42a2ee25->leave($__internal_2fa950a2d05be27dbec10c024582dbb199187c00e4929d537845e4ba42a2ee25_prof);

        
        $__internal_911aa72afa1209d20ed3cf1edc430ab7b61370dd8a613015b033b032532c02c8->leave($__internal_911aa72afa1209d20ed3cf1edc430ab7b61370dd8a613015b033b032532c02c8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b7ed1f68a592f5a5b1758500317215d6b804f99337aecb5f66cb84ff77613df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7ed1f68a592f5a5b1758500317215d6b804f99337aecb5f66cb84ff77613df->enter($__internal_4b7ed1f68a592f5a5b1758500317215d6b804f99337aecb5f66cb84ff77613df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7be668c103de7d4336f14aefda192626605495a674ff1db38227eaa63a6c3a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be668c103de7d4336f14aefda192626605495a674ff1db38227eaa63a6c3a4e->enter($__internal_7be668c103de7d4336f14aefda192626605495a674ff1db38227eaa63a6c3a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7be668c103de7d4336f14aefda192626605495a674ff1db38227eaa63a6c3a4e->leave($__internal_7be668c103de7d4336f14aefda192626605495a674ff1db38227eaa63a6c3a4e_prof);

        
        $__internal_4b7ed1f68a592f5a5b1758500317215d6b804f99337aecb5f66cb84ff77613df->leave($__internal_4b7ed1f68a592f5a5b1758500317215d6b804f99337aecb5f66cb84ff77613df_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0c195932426e199392789118f6fbcc3997be896dc01c1bb7f8294e722b54a058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c195932426e199392789118f6fbcc3997be896dc01c1bb7f8294e722b54a058->enter($__internal_0c195932426e199392789118f6fbcc3997be896dc01c1bb7f8294e722b54a058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6dc768966f49b3b4bee33ac70117af5acaad53011abff21044ef327409cb9610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc768966f49b3b4bee33ac70117af5acaad53011abff21044ef327409cb9610->enter($__internal_6dc768966f49b3b4bee33ac70117af5acaad53011abff21044ef327409cb9610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6dc768966f49b3b4bee33ac70117af5acaad53011abff21044ef327409cb9610->leave($__internal_6dc768966f49b3b4bee33ac70117af5acaad53011abff21044ef327409cb9610_prof);

        
        $__internal_0c195932426e199392789118f6fbcc3997be896dc01c1bb7f8294e722b54a058->leave($__internal_0c195932426e199392789118f6fbcc3997be896dc01c1bb7f8294e722b54a058_prof);

    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        $__internal_f1a728d8bc9b01e8423281f7c695c8d78a8f8c7184808c9b021f19f144b78d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a728d8bc9b01e8423281f7c695c8d78a8f8c7184808c9b021f19f144b78d4c->enter($__internal_f1a728d8bc9b01e8423281f7c695c8d78a8f8c7184808c9b021f19f144b78d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_0931e80b99a60f767c0cd92176c8befeade18961ff56c9802f61788a164efbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0931e80b99a60f767c0cd92176c8befeade18961ff56c9802f61788a164efbd4->enter($__internal_0931e80b99a60f767c0cd92176c8befeade18961ff56c9802f61788a164efbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 18
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Application\\Header:header"));
        echo "
                ";
        
        $__internal_0931e80b99a60f767c0cd92176c8befeade18961ff56c9802f61788a164efbd4->leave($__internal_0931e80b99a60f767c0cd92176c8befeade18961ff56c9802f61788a164efbd4_prof);

        
        $__internal_f1a728d8bc9b01e8423281f7c695c8d78a8f8c7184808c9b021f19f144b78d4c->leave($__internal_f1a728d8bc9b01e8423281f7c695c8d78a8f8c7184808c9b021f19f144b78d4c_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7466747ba104e2f30b721fdf83c97d944901aa13db89c93371268fc318d0d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7466747ba104e2f30b721fdf83c97d944901aa13db89c93371268fc318d0d0b->enter($__internal_d7466747ba104e2f30b721fdf83c97d944901aa13db89c93371268fc318d0d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12331d00d9e08807c9d583256e12895814ad9aa1311004c5118567ecd262ca85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12331d00d9e08807c9d583256e12895814ad9aa1311004c5118567ecd262ca85->enter($__internal_12331d00d9e08807c9d583256e12895814ad9aa1311004c5118567ecd262ca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12331d00d9e08807c9d583256e12895814ad9aa1311004c5118567ecd262ca85->leave($__internal_12331d00d9e08807c9d583256e12895814ad9aa1311004c5118567ecd262ca85_prof);

        
        $__internal_d7466747ba104e2f30b721fdf83c97d944901aa13db89c93371268fc318d0d0b->leave($__internal_d7466747ba104e2f30b721fdf83c97d944901aa13db89c93371268fc318d0d0b_prof);

    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a32b9cec2ff1f0a51d3be6dd201dcb9d975d894a9dfb8c0cb7f4e66e8bad8fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32b9cec2ff1f0a51d3be6dd201dcb9d975d894a9dfb8c0cb7f4e66e8bad8fe0->enter($__internal_a32b9cec2ff1f0a51d3be6dd201dcb9d975d894a9dfb8c0cb7f4e66e8bad8fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3e7f1a622034618d3061466886152398ca6462f35c918fe1d23b33df3efd22ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7f1a622034618d3061466886152398ca6462f35c918fe1d23b33df3efd22ea->enter($__internal_3e7f1a622034618d3061466886152398ca6462f35c918fe1d23b33df3efd22ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_3e7f1a622034618d3061466886152398ca6462f35c918fe1d23b33df3efd22ea->leave($__internal_3e7f1a622034618d3061466886152398ca6462f35c918fe1d23b33df3efd22ea_prof);

        
        $__internal_a32b9cec2ff1f0a51d3be6dd201dcb9d975d894a9dfb8c0cb7f4e66e8bad8fe0->leave($__internal_a32b9cec2ff1f0a51d3be6dd201dcb9d975d894a9dfb8c0cb7f4e66e8bad8fe0_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14f8abec09721765f8c9cd60753d76c36cfe3ea2a4a842d32d208746ceff8a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f8abec09721765f8c9cd60753d76c36cfe3ea2a4a842d32d208746ceff8a1d->enter($__internal_14f8abec09721765f8c9cd60753d76c36cfe3ea2a4a842d32d208746ceff8a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f351587f74a4891d9be48b580ed208a88bda9bbb56744cd36a43d4ec0f023351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f351587f74a4891d9be48b580ed208a88bda9bbb56744cd36a43d4ec0f023351->enter($__internal_f351587f74a4891d9be48b580ed208a88bda9bbb56744cd36a43d4ec0f023351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f351587f74a4891d9be48b580ed208a88bda9bbb56744cd36a43d4ec0f023351->leave($__internal_f351587f74a4891d9be48b580ed208a88bda9bbb56744cd36a43d4ec0f023351_prof);

        
        $__internal_14f8abec09721765f8c9cd60753d76c36cfe3ea2a4a842d32d208746ceff8a1d->leave($__internal_14f8abec09721765f8c9cd60753d76c36cfe3ea2a4a842d32d208746ceff8a1d_prof);

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
        return array (  206 => 43,  189 => 32,  172 => 26,  159 => 18,  150 => 17,  133 => 9,  115 => 5,  104 => 44,  102 => 43,  98 => 42,  87 => 33,  85 => 32,  78 => 27,  76 => 26,  68 => 20,  66 => 17,  55 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
    <script href=\"{{ asset('bundles/app/js/semantic.js') }}\" />
    {% block javascripts %}{% endblock %}
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
