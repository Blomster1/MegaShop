<?php

/* s4tabitayVitrineBundle:Default:catalogue.html.twig */
class __TwigTemplate_0727eefabd880612e797014dedb0d161a19b86ab5bcfc8fbc59be24c9efbc24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("s4tabitayVitrineBundle:Default:layout.html.twig", "s4tabitayVitrineBundle:Default:catalogue.html.twig", 2);
        $this->blocks = array(
            'caroussel' => array($this, 'block_caroussel'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "s4tabitayVitrineBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8783bfafdca67670e8bdfd8f9dcf00b26eb80c244588d7d0ebd37349bef5e69d = $this->env->getExtension("native_profiler");
        $__internal_8783bfafdca67670e8bdfd8f9dcf00b26eb80c244588d7d0ebd37349bef5e69d->enter($__internal_8783bfafdca67670e8bdfd8f9dcf00b26eb80c244588d7d0ebd37349bef5e69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8783bfafdca67670e8bdfd8f9dcf00b26eb80c244588d7d0ebd37349bef5e69d->leave($__internal_8783bfafdca67670e8bdfd8f9dcf00b26eb80c244588d7d0ebd37349bef5e69d_prof);

    }

    // line 4
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_6dd7836b4b6eb38dd2eeab4e44e1fd2965e3129389c173153d0cee73c7f59858 = $this->env->getExtension("native_profiler");
        $__internal_6dd7836b4b6eb38dd2eeab4e44e1fd2965e3129389c173153d0cee73c7f59858->enter($__internal_6dd7836b4b6eb38dd2eeab4e44e1fd2965e3129389c173153d0cee73c7f59858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        
        $__internal_6dd7836b4b6eb38dd2eeab4e44e1fd2965e3129389c173153d0cee73c7f59858->leave($__internal_6dd7836b4b6eb38dd2eeab4e44e1fd2965e3129389c173153d0cee73c7f59858_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_bfcf506d9ca0d7c9eccd1faae4a0b80ce92193ffb4bd516ac42417e8db9283df = $this->env->getExtension("native_profiler");
        $__internal_bfcf506d9ca0d7c9eccd1faae4a0b80ce92193ffb4bd516ac42417e8db9283df->enter($__internal_bfcf506d9ca0d7c9eccd1faae4a0b80ce92193ffb4bd516ac42417e8db9283df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 9
            echo "    <!--Card-->
    <div class=\"card card-product hoverable col-md-2 no-padding col-md-offset-2\">

        <!--Image-->
        <div class=\"card-image waves-effect waves-block waves-light view overlay hm-white-slight\">
            <!--Discount label-->
            <a href=\"\"><img src=\"http://mdbootstrap.com/wp-content/uploads/2015/11/product-card.jpg\">
                <div class=\"mask\"> </div>
            </a>
        </div>
        <!--/.Image-->

        <!--Card content: Name and price-->
        <div class=\"card-content text-center\">
            <div class=\"row\">
                <a href=\"\"><h5 class=\"product-title\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</h5></a>
            </div>
            <div class=\"price\">
                <p class=\"green-text medium-500\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "prix", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
        <!--/.Card content: Name and price-->

        <!--Buttons-->
        <div class=\"card-btn text-center\">
            <a href=\"#\" class=\"btn btn-primary btn-sm waves-effect waves-light\">Buy now</a>
            <a href=\"#\" class=\"btn btn-default btn-sm waves-effect waves-light\" data-toggle=\"modal\" data-target=\"#quick-look\">Quick look</a>
        </div>
        <!--/.Buttons-->


    </div>
    <!--/.Card-->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bfcf506d9ca0d7c9eccd1faae4a0b80ce92193ffb4bd516ac42417e8db9283df->leave($__internal_bfcf506d9ca0d7c9eccd1faae4a0b80ce92193ffb4bd516ac42417e8db9283df_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:catalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  74 => 24,  57 => 9,  52 => 8,  46 => 7,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "s4tabitayVitrineBundle:Default:layout.html.twig" %}*/
/* */
/* {% block caroussel %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% for article in produits %}*/
/*     <!--Card-->*/
/*     <div class="card card-product hoverable col-md-2 no-padding col-md-offset-2">*/
/* */
/*         <!--Image-->*/
/*         <div class="card-image waves-effect waves-block waves-light view overlay hm-white-slight">*/
/*             <!--Discount label-->*/
/*             <a href=""><img src="http://mdbootstrap.com/wp-content/uploads/2015/11/product-card.jpg">*/
/*                 <div class="mask"> </div>*/
/*             </a>*/
/*         </div>*/
/*         <!--/.Image-->*/
/* */
/*         <!--Card content: Name and price-->*/
/*         <div class="card-content text-center">*/
/*             <div class="row">*/
/*                 <a href=""><h5 class="product-title">{{ article.name }}</h5></a>*/
/*             </div>*/
/*             <div class="price">*/
/*                 <p class="green-text medium-500">{{ article.prix }}</p>*/
/*             </div>*/
/*         </div>*/
/*         <!--/.Card content: Name and price-->*/
/* */
/*         <!--Buttons-->*/
/*         <div class="card-btn text-center">*/
/*             <a href="#" class="btn btn-primary btn-sm waves-effect waves-light">Buy now</a>*/
/*             <a href="#" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="modal" data-target="#quick-look">Quick look</a>*/
/*         </div>*/
/*         <!--/.Buttons-->*/
/* */
/* */
/*     </div>*/
/*     <!--/.Card-->*/
/*     {% endfor %}*/
/* {% endblock %}*/
