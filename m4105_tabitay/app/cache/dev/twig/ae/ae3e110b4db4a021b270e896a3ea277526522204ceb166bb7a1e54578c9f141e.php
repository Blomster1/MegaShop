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
        $__internal_f6aba7f3e18a071427cc72d92ba39ac46f432df7b2c764bbf7e2e6bb4211a9a5 = $this->env->getExtension("native_profiler");
        $__internal_f6aba7f3e18a071427cc72d92ba39ac46f432df7b2c764bbf7e2e6bb4211a9a5->enter($__internal_f6aba7f3e18a071427cc72d92ba39ac46f432df7b2c764bbf7e2e6bb4211a9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6aba7f3e18a071427cc72d92ba39ac46f432df7b2c764bbf7e2e6bb4211a9a5->leave($__internal_f6aba7f3e18a071427cc72d92ba39ac46f432df7b2c764bbf7e2e6bb4211a9a5_prof);

    }

    // line 4
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_82f7b159a4120ef3902134edab447d19490c6e7bae5951a41af5e25af5dc0e68 = $this->env->getExtension("native_profiler");
        $__internal_82f7b159a4120ef3902134edab447d19490c6e7bae5951a41af5e25af5dc0e68->enter($__internal_82f7b159a4120ef3902134edab447d19490c6e7bae5951a41af5e25af5dc0e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        
        $__internal_82f7b159a4120ef3902134edab447d19490c6e7bae5951a41af5e25af5dc0e68->leave($__internal_82f7b159a4120ef3902134edab447d19490c6e7bae5951a41af5e25af5dc0e68_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab726f6986cf0a176fde5ead220714afce57f3ce2c85b97c2bef838f6570dce8 = $this->env->getExtension("native_profiler");
        $__internal_ab726f6986cf0a176fde5ead220714afce57f3ce2c85b97c2bef838f6570dce8->enter($__internal_ab726f6986cf0a176fde5ead220714afce57f3ce2c85b97c2bef838f6570dce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "intitule", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"card-action\">
              <a href=\"";
            // line 18
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
        // line 23
        echo "    </div>
";
        
        $__internal_ab726f6986cf0a176fde5ead220714afce57f3ce2c85b97c2bef838f6570dce8->leave($__internal_ab726f6986cf0a176fde5ead220714afce57f3ce2c85b97c2bef838f6570dce8_prof);

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
        return array (  83 => 23,  72 => 18,  66 => 15,  59 => 10,  55 => 9,  52 => 8,  46 => 7,  35 => 4,  11 => 2,);
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
/*               <span class="card-title">{{ category.intitule }}</span>*/
/*             </div>*/
/*             <div class="card-action">*/
/*               <a href="{{ path('s4tabitay_vitrine_articleParCategorie',{cat:category.id}) }}">Visiter</a>*/
/*             </div>*/
/*           </div>*/
/*         </div>      */
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
