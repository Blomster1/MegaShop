<?php

/* s4tabitayVitrineBundle:Default:layout.html.twig */
class __TwigTemplate_25fe9391c774b17fd072ffc31c0814858b6d9a4b753905fd5422137e4089c2d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'caroussel' => array($this, 'block_caroussel'),
            'sidemenu' => array($this, 'block_sidemenu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41aae0d813f14b03af59b515a0aa3142a4c3bcce48a2f1965855c22bcac2a81a = $this->env->getExtension("native_profiler");
        $__internal_41aae0d813f14b03af59b515a0aa3142a4c3bcce48a2f1965855c22bcac2a81a->enter($__internal_41aae0d813f14b03af59b515a0aa3142a4c3bcce48a2f1965855c22bcac2a81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title></title>

        <!-- Compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css\">


        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4tabitayvitrine/css/styleApp.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <header>
        ";
        // line 19
        echo " 
        ";
        // line 20
        $this->loadTemplate("s4tabitayVitrineBundle:partials:navigation.html.twig", "s4tabitayVitrineBundle:Default:layout.html.twig", 20)->display($context);
        // line 21
        echo "        <header>
            <main>
        ";
        // line 23
        $this->displayBlock('caroussel', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('sidemenu', $context, $blocks);
        // line 28
        echo "        <div class=\"container\">
            
            ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "        </div>
        <main>

        ";
        // line 35
        $this->loadTemplate("s4tabitayVitrineBundle:partials:footer.html.twig", "s4tabitayVitrineBundle:Default:layout.html.twig", 35)->display($context);
        // line 36
        echo "        <!-- Compiled and minified JavaScript -->
        <!--Import jQuery before materialize.js-->
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4tabitayvitrine/js/js.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js\"></script>
    </body>
</html>
";
        
        $__internal_41aae0d813f14b03af59b515a0aa3142a4c3bcce48a2f1965855c22bcac2a81a->leave($__internal_41aae0d813f14b03af59b515a0aa3142a4c3bcce48a2f1965855c22bcac2a81a_prof);

    }

    // line 23
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_2554c6dcd2c47475d63683db010a9a30e3fc9668e27c02cfb994f98962075f0b = $this->env->getExtension("native_profiler");
        $__internal_2554c6dcd2c47475d63683db010a9a30e3fc9668e27c02cfb994f98962075f0b->enter($__internal_2554c6dcd2c47475d63683db010a9a30e3fc9668e27c02cfb994f98962075f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 24
        echo "        ";
        
        $__internal_2554c6dcd2c47475d63683db010a9a30e3fc9668e27c02cfb994f98962075f0b->leave($__internal_2554c6dcd2c47475d63683db010a9a30e3fc9668e27c02cfb994f98962075f0b_prof);

    }

    // line 25
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_89fe0955e7d1a39a8a0f1db688ba1dfd31091bfa59e1bd674ff691029891ee72 = $this->env->getExtension("native_profiler");
        $__internal_89fe0955e7d1a39a8a0f1db688ba1dfd31091bfa59e1bd674ff691029891ee72->enter($__internal_89fe0955e7d1a39a8a0f1db688ba1dfd31091bfa59e1bd674ff691029891ee72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        // line 26
        echo "                ";
        $this->loadTemplate("s4tabitayVitrineBundle:partials:sideMenu.html.twig", "s4tabitayVitrineBundle:Default:layout.html.twig", 26)->display($context);
        // line 27
        echo "        ";
        
        $__internal_89fe0955e7d1a39a8a0f1db688ba1dfd31091bfa59e1bd674ff691029891ee72->leave($__internal_89fe0955e7d1a39a8a0f1db688ba1dfd31091bfa59e1bd674ff691029891ee72_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0a4cd2ebe477bcc7887f18ed9cdbe06687901c03709b1f08c70d86d3f89c9a4 = $this->env->getExtension("native_profiler");
        $__internal_e0a4cd2ebe477bcc7887f18ed9cdbe06687901c03709b1f08c70d86d3f89c9a4->enter($__internal_e0a4cd2ebe477bcc7887f18ed9cdbe06687901c03709b1f08c70d86d3f89c9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "            ";
        
        $__internal_e0a4cd2ebe477bcc7887f18ed9cdbe06687901c03709b1f08c70d86d3f89c9a4->leave($__internal_e0a4cd2ebe477bcc7887f18ed9cdbe06687901c03709b1f08c70d86d3f89c9a4_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 31,  120 => 30,  113 => 27,  110 => 26,  104 => 25,  97 => 24,  91 => 23,  79 => 39,  74 => 36,  72 => 35,  67 => 32,  65 => 30,  61 => 28,  58 => 25,  56 => 23,  52 => 21,  50 => 20,  47 => 19,  40 => 15,  25 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title></title>*/
/* */
/*         <!-- Compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">*/
/* */
/* */
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/s4tabitayvitrine/css/styleApp.css') }}">*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*         {# On inclut le template "navigation" #} */
/*         {% include "s4tabitayVitrineBundle:partials:navigation.html.twig" %}*/
/*         <header>*/
/*             <main>*/
/*         {% block caroussel %}*/
/*         {% endblock %}*/
/*         {% block sidemenu %}*/
/*                 {% include "s4tabitayVitrineBundle:partials:sideMenu.html.twig" %}*/
/*         {% endblock %}*/
/*         <div class="container">*/
/*             */
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <main>*/
/* */
/*         {% include "s4tabitayVitrineBundle:partials:footer.html.twig" %}*/
/*         <!-- Compiled and minified JavaScript -->*/
/*         <!--Import jQuery before materialize.js-->*/
/*         <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/s4tabitayvitrine/js/js.js') }}"></script>*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>*/
/*     </body>*/
/* </html>*/
/* */
