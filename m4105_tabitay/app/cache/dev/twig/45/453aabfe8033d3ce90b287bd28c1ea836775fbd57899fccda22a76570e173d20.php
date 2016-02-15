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
        $__internal_ac8062b505338d267d48c065013b18098cd17bfdbb8696404587f484dc0c4b7d = $this->env->getExtension("native_profiler");
        $__internal_ac8062b505338d267d48c065013b18098cd17bfdbb8696404587f484dc0c4b7d->enter($__internal_ac8062b505338d267d48c065013b18098cd17bfdbb8696404587f484dc0c4b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:navigation.html.twig"));

        // line 2
        echo "

";
        // line 4
        $this->displayBlock('navigation', $context, $blocks);
        
        $__internal_ac8062b505338d267d48c065013b18098cd17bfdbb8696404587f484dc0c4b7d->leave($__internal_ac8062b505338d267d48c065013b18098cd17bfdbb8696404587f484dc0c4b7d_prof);

    }

    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bbbac0b567065d30226dbe7b90c5e0cfcbcd906551ea3ed660297fd461e4e87a = $this->env->getExtension("native_profiler");
        $__internal_bbbac0b567065d30226dbe7b90c5e0cfcbcd906551ea3ed660297fd461e4e87a->enter($__internal_bbbac0b567065d30226dbe7b90c5e0cfcbcd906551ea3ed660297fd461e4e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                <a class=\"navbar-brand waves-effect waves-light\" href=\"#\">MegaShop</a>
            </div>

            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-2\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\" class=\"waves-effect waves-light\">Accueil <span class=\"sr-only\">(current)</span></a></li>

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
                        <li class=\"\"><a href=\"#\" class=\"waves-effect waves-light\"><i class=\"material-icons\">shopping_cart</i></a></li>
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
        
        $__internal_bbbac0b567065d30226dbe7b90c5e0cfcbcd906551ea3ed660297fd461e4e87a->leave($__internal_bbbac0b567065d30226dbe7b90c5e0cfcbcd906551ea3ed660297fd461e4e87a_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  27 => 4,  23 => 2,);
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
/*                 <a class="navbar-brand waves-effect waves-light" href="#">MegaShop</a>*/
/*             </div>*/
/* */
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">*/
/*                 <ul class="nav navbar-nav">*/
/*                     <li class="active"><a href="#" class="waves-effect waves-light">Accueil <span class="sr-only">(current)</span></a></li>*/
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
/*                         <li class=""><a href="#" class="waves-effect waves-light"><i class="material-icons">shopping_cart</i></a></li>*/
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
