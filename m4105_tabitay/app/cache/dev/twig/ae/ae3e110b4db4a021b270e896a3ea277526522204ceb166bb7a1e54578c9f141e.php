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
        $__internal_a65f43bf9156d36574fc4bbf602010f70b8cc6d82c022966818c94e6f81efb35 = $this->env->getExtension("native_profiler");
        $__internal_a65f43bf9156d36574fc4bbf602010f70b8cc6d82c022966818c94e6f81efb35->enter($__internal_a65f43bf9156d36574fc4bbf602010f70b8cc6d82c022966818c94e6f81efb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a65f43bf9156d36574fc4bbf602010f70b8cc6d82c022966818c94e6f81efb35->leave($__internal_a65f43bf9156d36574fc4bbf602010f70b8cc6d82c022966818c94e6f81efb35_prof);

    }

    // line 4
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_20ecaf479435d07ca8ab5dd53f6e63c93f9d055b69e8ccb9dde28a085344c165 = $this->env->getExtension("native_profiler");
        $__internal_20ecaf479435d07ca8ab5dd53f6e63c93f9d055b69e8ccb9dde28a085344c165->enter($__internal_20ecaf479435d07ca8ab5dd53f6e63c93f9d055b69e8ccb9dde28a085344c165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        
        $__internal_20ecaf479435d07ca8ab5dd53f6e63c93f9d055b69e8ccb9dde28a085344c165->leave($__internal_20ecaf479435d07ca8ab5dd53f6e63c93f9d055b69e8ccb9dde28a085344c165_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba7a72a2661ea9466b13523a117fadf6303ebe275c2af862cbdf371242cc7760 = $this->env->getExtension("native_profiler");
        $__internal_ba7a72a2661ea9466b13523a117fadf6303ebe275c2af862cbdf371242cc7760->enter($__internal_ba7a72a2661ea9466b13523a117fadf6303ebe275c2af862cbdf371242cc7760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"row\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "        
      
        <div class=\"col s12 m3\">
          <div class=\"card blue-grey darken-1\">
            <div class=\"card-content white-text\">
              <span class=\"card-title\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "intitulé", array()), "html", null, true);
            echo "</span>
              <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"card-action\">
              <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_articleParCategorie", array("cat" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Visiter</a>
            </div>
          </div>
        </div>      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
";
        
        $__internal_ba7a72a2661ea9466b13523a117fadf6303ebe275c2af862cbdf371242cc7760->leave($__internal_ba7a72a2661ea9466b13523a117fadf6303ebe275c2af862cbdf371242cc7760_prof);

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
        return array (  87 => 24,  76 => 19,  70 => 16,  66 => 15,  59 => 10,  55 => 9,  52 => 8,  46 => 7,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "s4tabitayVitrineBundle:Default:layout.html.twig" %}*/
/* */
/* {% block caroussel %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="row">*/
/*     {% for category in categories %}*/
/*         */
/*       */
/*         <div class="col s12 m3">*/
/*           <div class="card blue-grey darken-1">*/
/*             <div class="card-content white-text">*/
/*               <span class="card-title">{{ category.intitulé }}</span>*/
/*               <p>{{category.description}}</p>*/
/*             </div>*/
/*             <div class="card-action">*/
/*               <a href="{{ path('s4tabitay_vitrine_articleParCategorie',{cat:category.id}) }}">Visiter</a>*/
/*             </div>*/
/*           </div>*/
/*         </div>      */
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
