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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c199fa994df91885b12f6b5852bcc8b45660b21e24a0a4f65e03b6b81918e17 = $this->env->getExtension("native_profiler");
        $__internal_3c199fa994df91885b12f6b5852bcc8b45660b21e24a0a4f65e03b6b81918e17->enter($__internal_3c199fa994df91885b12f6b5852bcc8b45660b21e24a0a4f65e03b6b81918e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title></title>

        <!-- Bootstrap core CSS -->
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <!-- MDB core CSS -->
        <link href=\"http://mdbootstrap.com/mdbcdn/mdb.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4tabitayvitrine/css/styleApp.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        ";
        // line 18
        echo " 
        ";
        // line 19
        $this->loadTemplate("s4tabitayVitrineBundle:Default:navigation.html.twig", "s4tabitayVitrineBundle:Default:layout.html.twig", 19)->display($context);
        // line 20
        echo "        
            ";
        // line 21
        $this->displayBlock('caroussel', $context, $blocks);
        // line 23
        echo "        
        <div class=\"container-fluid\">
            ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "        </div>
        
        ";
        // line 29
        $this->loadTemplate("s4tabitayVitrineBundle:Default:footer.html.twig", "s4tabitayVitrineBundle:Default:layout.html.twig", 29)->display($context);
        // line 30
        echo "        
    </body>
</html>
";
        
        $__internal_3c199fa994df91885b12f6b5852bcc8b45660b21e24a0a4f65e03b6b81918e17->leave($__internal_3c199fa994df91885b12f6b5852bcc8b45660b21e24a0a4f65e03b6b81918e17_prof);

    }

    // line 21
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_eee99dfa29a405607f12ec75e94a8a664116ffdec0eb7e5327fcf82bbbbe8827 = $this->env->getExtension("native_profiler");
        $__internal_eee99dfa29a405607f12ec75e94a8a664116ffdec0eb7e5327fcf82bbbbe8827->enter($__internal_eee99dfa29a405607f12ec75e94a8a664116ffdec0eb7e5327fcf82bbbbe8827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 22
        echo "            ";
        
        $__internal_eee99dfa29a405607f12ec75e94a8a664116ffdec0eb7e5327fcf82bbbbe8827->leave($__internal_eee99dfa29a405607f12ec75e94a8a664116ffdec0eb7e5327fcf82bbbbe8827_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_845752f6f0fc6bb772591fdb6661e3f59f71c6d194b484bea56d17e13097d950 = $this->env->getExtension("native_profiler");
        $__internal_845752f6f0fc6bb772591fdb6661e3f59f71c6d194b484bea56d17e13097d950->enter($__internal_845752f6f0fc6bb772591fdb6661e3f59f71c6d194b484bea56d17e13097d950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "            ";
        
        $__internal_845752f6f0fc6bb772591fdb6661e3f59f71c6d194b484bea56d17e13097d950->leave($__internal_845752f6f0fc6bb772591fdb6661e3f59f71c6d194b484bea56d17e13097d950_prof);

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
        return array (  96 => 26,  90 => 25,  83 => 22,  77 => 21,  67 => 30,  65 => 29,  61 => 27,  59 => 25,  55 => 23,  53 => 21,  50 => 20,  48 => 19,  45 => 18,  39 => 15,  24 => 2,);
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
/*         <!-- Bootstrap core CSS -->*/
/*         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*         <!-- MDB core CSS -->*/
/*         <link href="http://mdbootstrap.com/mdbcdn/mdb.min.css" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/s4tabitayvitrine/css/styleApp.css') }}">*/
/*     </head>*/
/*     <body>*/
/*         {# On inclut le template "navigation" #} */
/*         {% include "s4tabitayVitrineBundle:Default:navigation.html.twig" %}*/
/*         */
/*             {% block caroussel %}*/
/*             {% endblock %}*/
/*         */
/*         <div class="container-fluid">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         */
/*         {% include "s4tabitayVitrineBundle:Default:footer.html.twig" %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */