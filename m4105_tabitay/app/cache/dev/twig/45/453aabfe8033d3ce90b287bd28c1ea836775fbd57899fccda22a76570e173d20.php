<?php

/* s4tabitayVitrineBundle:Default:navigation.html.twig */
class __TwigTemplate_3c712065ba3a003db2baa24198984f644389262b20febe07edd13b78c87488dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a3c127fcbb471351667f043bc1d9e81716967169c482ddf2fe69ec88c7e397f = $this->env->getExtension("native_profiler");
        $__internal_6a3c127fcbb471351667f043bc1d9e81716967169c482ddf2fe69ec88c7e397f->enter($__internal_6a3c127fcbb471351667f043bc1d9e81716967169c482ddf2fe69ec88c7e397f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:navigation.html.twig"));

        // line 2
        echo "

";
        // line 4
        $this->displayBlock('navigation', $context, $blocks);
        
        $__internal_6a3c127fcbb471351667f043bc1d9e81716967169c482ddf2fe69ec88c7e397f->leave($__internal_6a3c127fcbb471351667f043bc1d9e81716967169c482ddf2fe69ec88c7e397f_prof);

    }

    public function block_navigation($context, array $blocks = array())
    {
        $__internal_568091bf42b1e62cce531c9f71837072b7701f5cce047c35c7f9a4229c60b629 = $this->env->getExtension("native_profiler");
        $__internal_568091bf42b1e62cce531c9f71837072b7701f5cce047c35c7f9a4229c60b629->enter($__internal_568091bf42b1e62cce531c9f71837072b7701f5cce047c35c7f9a4229c60b629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 5
        echo "    <nav class=\"navbar info-color\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-2\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand waves-effect waves-light\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_homepage");
        echo "\">MegaShop</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_homepage");
        echo "\" class=\"waves-effect waves-light\">Accueil <span class=\"sr-only\">(current)</span></a></li>
                    <li class=\"\"><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_catalogue");
        echo "\" class=\"waves-effect waves-light\">Catalogue <span class=\"sr-only\">(current)</span></a></li>

                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Categories <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li><a href=\"#\">Electromenager</a></li>
                            <li><a href=\"#\">Informatique</a></li>
                            <li><a href=\"#\">Pret-a-Porter</a></li>
                        </ul>
                    </li>
                </ul>
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_panier");
        echo "\" class=\"waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a></li>
                    </ul>
                    <form class=\"navbar-form\" role=\"search\">
                        <div class=\"form-group waves-effect waves-light\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </nav>
";
        
        $__internal_568091bf42b1e62cce531c9f71837072b7701f5cce047c35c7f9a4229c60b629->leave($__internal_568091bf42b1e62cce531c9f71837072b7701f5cce047c35c7f9a4229c60b629_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  62 => 20,  58 => 19,  50 => 14,  39 => 5,  27 => 4,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* {% block navigation %}*/
/*     <nav class="navbar info-color">*/
/*         <div class="container-fluid">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand waves-effect waves-light" href="{{ path('s4tabitay_vitrine_homepage') }}">MegaShop</a>*/
/*             </div>*/
/* */
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="{{ path('s4tabitay_vitrine_homepage') }}" class="waves-effect waves-light">Accueil <span class="sr-only">(current)</span></a></li>*/
/*                     <li class=""><a href="{{ path('s4tabitay_vitrine_catalogue') }}" class="waves-effect waves-light">Catalogue <span class="sr-only">(current)</span></a></li>*/
/* */
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                             <li><a href="#">Electromenager</a></li>*/
/*                             <li><a href="#">Informatique</a></li>*/
/*                             <li><a href="#">Pret-a-Porter</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <div class="navbar-right">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class=""><a href="{{ path('s4tabitay_vitrine_panier') }}" class="waves-effect waves-light"><i class="material-icons">shopping_cart</i></a></li>*/
/*                     </ul>*/
/*                     <form class="navbar-form" role="search">*/
/*                         <div class="form-group waves-effect waves-light">*/
/*                             <input type="text" class="form-control" placeholder="Search">*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </nav>*/
/* {% endblock %}*/
