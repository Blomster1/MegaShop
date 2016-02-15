<?php

/* s4tabitayVitrineBundle:Default:caroussel.html.twig */
class __TwigTemplate_c8036560d5d83e801731474245343a5f81e92ab6fa349bcaa33eb59f0a8c1672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'caroussel' => array($this, 'block_caroussel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebffb39c198ec369fd38e53d27e50d20e738615e2ec86e8118e375fd69868645 = $this->env->getExtension("native_profiler");
        $__internal_ebffb39c198ec369fd38e53d27e50d20e738615e2ec86e8118e375fd69868645->enter($__internal_ebffb39c198ec369fd38e53d27e50d20e738615e2ec86e8118e375fd69868645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:caroussel.html.twig"));

        // line 2
        $this->displayBlock('caroussel', $context, $blocks);
        
        $__internal_ebffb39c198ec369fd38e53d27e50d20e738615e2ec86e8118e375fd69868645->leave($__internal_ebffb39c198ec369fd38e53d27e50d20e738615e2ec86e8118e375fd69868645_prof);

    }

    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_7d14cd48e8b67dce5621686284a15d342b04e8f6c7b14c6b4f6ef1a7f2683d73 = $this->env->getExtension("native_profiler");
        $__internal_7d14cd48e8b67dce5621686284a15d342b04e8f6c7b14c6b4f6ef1a7f2683d73->enter($__internal_7d14cd48e8b67dce5621686284a15d342b04e8f6c7b14c6b4f6ef1a7f2683d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 3
        echo "    <!-- Carousel -->
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\" role=\"listbox\">
                <div class=\"item active\">
                  <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4tabitayvitrine/images/1.jpg"), "html", null, true);
        echo "\" alt=\"Chania\">
                </div>

                <div class=\"item\">
                  <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4tabitayvitrine/images/1.jpg"), "html", null, true);
        echo "\" alt=\"Chania\">
                </div>

                <div class=\"item\">
                  <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4tabitayvitrine/images/1.jpg"), "html", null, true);
        echo "\" alt=\"Flower\">
                </div>

                <div class=\"item\">
                  <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/s4tabitayvitrine/images/1.jpg"), "html", null, true);
        echo "\" alt=\"Flower\">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
        </div>
";
        
        $__internal_7d14cd48e8b67dce5621686284a15d342b04e8f6c7b14c6b4f6ef1a7f2683d73->leave($__internal_7d14cd48e8b67dce5621686284a15d342b04e8f6c7b14c6b4f6ef1a7f2683d73_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:caroussel.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  64 => 24,  57 => 20,  50 => 16,  35 => 3,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% block caroussel %}*/
/*     <!-- Carousel -->*/
/*         <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*             <!-- Indicators -->*/
/*             <ol class="carousel-indicators">*/
/*                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="1"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                 <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*             </ol>*/
/* */
/*             <!-- Wrapper for slides -->*/
/*             <div class="carousel-inner" role="listbox">*/
/*                 <div class="item active">*/
/*                   <img src="{{ asset('bundles/s4tabitayvitrine/images/1.jpg') }}" alt="Chania">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="{{ asset('bundles/s4tabitayvitrine/images/1.jpg') }}" alt="Chania">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="{{ asset('bundles/s4tabitayvitrine/images/1.jpg') }}" alt="Flower">*/
/*                 </div>*/
/* */
/*                 <div class="item">*/
/*                   <img src="{{ asset('bundles/s4tabitayvitrine/images/1.jpg') }}" alt="Flower">*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <!-- Left and right controls -->*/
/*             <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                 <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                 <span class="sr-only">Previous</span>*/
/*             </a>*/
/*             <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                 <span class="sr-only">Next</span>*/
/*             </a>*/
/*         </div>*/
/* {% endblock %}*/
