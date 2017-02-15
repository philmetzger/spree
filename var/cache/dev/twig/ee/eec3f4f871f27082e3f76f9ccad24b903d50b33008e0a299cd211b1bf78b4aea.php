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
        $__internal_a7f3596ef165557a098bdd91b3fc476f956d5e15b36bce0b348e7b5c22f297b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f3596ef165557a098bdd91b3fc476f956d5e15b36bce0b348e7b5c22f297b7->enter($__internal_a7f3596ef165557a098bdd91b3fc476f956d5e15b36bce0b348e7b5c22f297b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c7d8dc4263a06bbba0795a0078ac71d5869e56feb870697e28bf638aeeaee629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7d8dc4263a06bbba0795a0078ac71d5869e56feb870697e28bf638aeeaee629->enter($__internal_c7d8dc4263a06bbba0795a0078ac71d5869e56feb870697e28bf638aeeaee629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 34
        echo "            </div>
            <!-- End of Header -->

            <!-- Page content -->
            <div class=\"page-container ui container\">
                ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "            </div>
            <!-- End of Page content -->

            <!-- Footer -->
            <footer class=\"footer-container\">
                ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 46
        echo "            </footer>
            <!-- End of Footer -->
        </div>
    </body>

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"
            integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"
            crossorigin=\"anonymous\">
    </script>
    <script href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/semantic.js"), "html", null, true);
        echo "\" />
    ";
        // line 58
        echo "</html>
";
        
        $__internal_a7f3596ef165557a098bdd91b3fc476f956d5e15b36bce0b348e7b5c22f297b7->leave($__internal_a7f3596ef165557a098bdd91b3fc476f956d5e15b36bce0b348e7b5c22f297b7_prof);

        
        $__internal_c7d8dc4263a06bbba0795a0078ac71d5869e56feb870697e28bf638aeeaee629->leave($__internal_c7d8dc4263a06bbba0795a0078ac71d5869e56feb870697e28bf638aeeaee629_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d173d51d4fc44d779402714e1c75ba201aa9e6565c833ff3673ad8d84028871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d173d51d4fc44d779402714e1c75ba201aa9e6565c833ff3673ad8d84028871->enter($__internal_9d173d51d4fc44d779402714e1c75ba201aa9e6565c833ff3673ad8d84028871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4de86e9a8abd5601cfd44c98188d939f9ae4253a3f820ef34cfdffd932ee837e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de86e9a8abd5601cfd44c98188d939f9ae4253a3f820ef34cfdffd932ee837e->enter($__internal_4de86e9a8abd5601cfd44c98188d939f9ae4253a3f820ef34cfdffd932ee837e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4de86e9a8abd5601cfd44c98188d939f9ae4253a3f820ef34cfdffd932ee837e->leave($__internal_4de86e9a8abd5601cfd44c98188d939f9ae4253a3f820ef34cfdffd932ee837e_prof);

        
        $__internal_9d173d51d4fc44d779402714e1c75ba201aa9e6565c833ff3673ad8d84028871->leave($__internal_9d173d51d4fc44d779402714e1c75ba201aa9e6565c833ff3673ad8d84028871_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d8a59989671d9d024dc09eba653dc3f223b1c5075870ba1a33488c2461cbb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8a59989671d9d024dc09eba653dc3f223b1c5075870ba1a33488c2461cbb05->enter($__internal_0d8a59989671d9d024dc09eba653dc3f223b1c5075870ba1a33488c2461cbb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_436b01d7f7c7701f60ffd2b0d92eb765a9c0f928db4848ac36e88e56f4e3917e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436b01d7f7c7701f60ffd2b0d92eb765a9c0f928db4848ac36e88e56f4e3917e->enter($__internal_436b01d7f7c7701f60ffd2b0d92eb765a9c0f928db4848ac36e88e56f4e3917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_436b01d7f7c7701f60ffd2b0d92eb765a9c0f928db4848ac36e88e56f4e3917e->leave($__internal_436b01d7f7c7701f60ffd2b0d92eb765a9c0f928db4848ac36e88e56f4e3917e_prof);

        
        $__internal_0d8a59989671d9d024dc09eba653dc3f223b1c5075870ba1a33488c2461cbb05->leave($__internal_0d8a59989671d9d024dc09eba653dc3f223b1c5075870ba1a33488c2461cbb05_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_107c1dd51be9fad5875eddf1cec81387d82f856f4a6b85b5650d22dd8139c2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107c1dd51be9fad5875eddf1cec81387d82f856f4a6b85b5650d22dd8139c2a6->enter($__internal_107c1dd51be9fad5875eddf1cec81387d82f856f4a6b85b5650d22dd8139c2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_de998902ca34fe60ca6a66f0fe7e60da94d34a990d939ad7b903943891d031ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de998902ca34fe60ca6a66f0fe7e60da94d34a990d939ad7b903943891d031ad->enter($__internal_de998902ca34fe60ca6a66f0fe7e60da94d34a990d939ad7b903943891d031ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 17
        echo "                    <div class=\"ui top fixed menu\">
                        <div class=\"item\">
                            <img src=\"/images/logo.png\">
                        </div>
                        <a class=\"item\">Features</a>
                        <a class=\"item\">Testimonials</a>
                        <a class=\"item\">Sign-in</a>
                    </div>
                    <div class=\"ui bottom fixed menu\">
                        <div class=\"item\">
                            <img src=\"/images/logo.png\">
                        </div>
                        <a class=\"item\">Features</a>
                        <a class=\"item\">Testimonials</a>
                        <a class=\"item\">Sign-in</a>
                    </div>
                ";
        
        $__internal_de998902ca34fe60ca6a66f0fe7e60da94d34a990d939ad7b903943891d031ad->leave($__internal_de998902ca34fe60ca6a66f0fe7e60da94d34a990d939ad7b903943891d031ad_prof);

        
        $__internal_107c1dd51be9fad5875eddf1cec81387d82f856f4a6b85b5650d22dd8139c2a6->leave($__internal_107c1dd51be9fad5875eddf1cec81387d82f856f4a6b85b5650d22dd8139c2a6_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a1109ea428ece795140773a705f15943a64208bbfb3e218ff6e61f8b51c6a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1109ea428ece795140773a705f15943a64208bbfb3e218ff6e61f8b51c6a23->enter($__internal_0a1109ea428ece795140773a705f15943a64208bbfb3e218ff6e61f8b51c6a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_563fb0455b24cf8650ed20e8fdc226f130931c45ebe7a090be5939225ca731db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563fb0455b24cf8650ed20e8fdc226f130931c45ebe7a090be5939225ca731db->enter($__internal_563fb0455b24cf8650ed20e8fdc226f130931c45ebe7a090be5939225ca731db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_563fb0455b24cf8650ed20e8fdc226f130931c45ebe7a090be5939225ca731db->leave($__internal_563fb0455b24cf8650ed20e8fdc226f130931c45ebe7a090be5939225ca731db_prof);

        
        $__internal_0a1109ea428ece795140773a705f15943a64208bbfb3e218ff6e61f8b51c6a23->leave($__internal_0a1109ea428ece795140773a705f15943a64208bbfb3e218ff6e61f8b51c6a23_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a1b6797b4bb6d99d3f5b452c65d73c424b6b078f6e8872c29931ee241a22b451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b6797b4bb6d99d3f5b452c65d73c424b6b078f6e8872c29931ee241a22b451->enter($__internal_a1b6797b4bb6d99d3f5b452c65d73c424b6b078f6e8872c29931ee241a22b451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_17e59d5c22eaa3c9ed7425b5e53d0e5ca8c84e2885f687802bbb846f6c917e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e59d5c22eaa3c9ed7425b5e53d0e5ca8c84e2885f687802bbb846f6c917e33->enter($__internal_17e59d5c22eaa3c9ed7425b5e53d0e5ca8c84e2885f687802bbb846f6c917e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_17e59d5c22eaa3c9ed7425b5e53d0e5ca8c84e2885f687802bbb846f6c917e33->leave($__internal_17e59d5c22eaa3c9ed7425b5e53d0e5ca8c84e2885f687802bbb846f6c917e33_prof);

        
        $__internal_a1b6797b4bb6d99d3f5b452c65d73c424b6b078f6e8872c29931ee241a22b451->leave($__internal_a1b6797b4bb6d99d3f5b452c65d73c424b6b078f6e8872c29931ee241a22b451_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0dc1ad8adf3910d68ebdd3aa63a79c3c19f2e85f10aaf15ac6f7a56b9dc31db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc1ad8adf3910d68ebdd3aa63a79c3c19f2e85f10aaf15ac6f7a56b9dc31db4->enter($__internal_0dc1ad8adf3910d68ebdd3aa63a79c3c19f2e85f10aaf15ac6f7a56b9dc31db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b50c92d148bf682f6f45920789c226015d4c2f62cbe0b5ef30715a68ad13532a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50c92d148bf682f6f45920789c226015d4c2f62cbe0b5ef30715a68ad13532a->enter($__internal_b50c92d148bf682f6f45920789c226015d4c2f62cbe0b5ef30715a68ad13532a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b50c92d148bf682f6f45920789c226015d4c2f62cbe0b5ef30715a68ad13532a->leave($__internal_b50c92d148bf682f6f45920789c226015d4c2f62cbe0b5ef30715a68ad13532a_prof);

        
        $__internal_0dc1ad8adf3910d68ebdd3aa63a79c3c19f2e85f10aaf15ac6f7a56b9dc31db4->leave($__internal_0dc1ad8adf3910d68ebdd3aa63a79c3c19f2e85f10aaf15ac6f7a56b9dc31db4_prof);

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
        return array (  216 => 51,  199 => 45,  182 => 39,  156 => 17,  147 => 16,  130 => 8,  112 => 5,  101 => 58,  97 => 56,  91 => 52,  89 => 51,  82 => 46,  80 => 45,  73 => 40,  71 => 39,  64 => 34,  62 => 16,  51 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  31 => 1,);
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
                    <div class=\"ui top fixed menu\">
                        <div class=\"item\">
                            <img src=\"/images/logo.png\">
                        </div>
                        <a class=\"item\">Features</a>
                        <a class=\"item\">Testimonials</a>
                        <a class=\"item\">Sign-in</a>
                    </div>
                    <div class=\"ui bottom fixed menu\">
                        <div class=\"item\">
                            <img src=\"/images/logo.png\">
                        </div>
                        <a class=\"item\">Features</a>
                        <a class=\"item\">Testimonials</a>
                        <a class=\"item\">Sign-in</a>
                    </div>
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
    {#<script src=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.js\"></script>#}
</html>
", "base.html.twig", "C:\\projects\\spree\\app\\Resources\\views\\base.html.twig");
    }
}
