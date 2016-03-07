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
        $__internal_3cc013982c55cdf58961b608ea21c1e2deb616ce88bebccf46a93532ebeb2e1f = $this->env->getExtension("native_profiler");
        $__internal_3cc013982c55cdf58961b608ea21c1e2deb616ce88bebccf46a93532ebeb2e1f->enter($__internal_3cc013982c55cdf58961b608ea21c1e2deb616ce88bebccf46a93532ebeb2e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cc013982c55cdf58961b608ea21c1e2deb616ce88bebccf46a93532ebeb2e1f->leave($__internal_3cc013982c55cdf58961b608ea21c1e2deb616ce88bebccf46a93532ebeb2e1f_prof);

    }

    // line 4
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_2ed9b4a27b09107196f5b17a0c9ed9e30ca6252355f8942db9e7f7efc7a5abd7 = $this->env->getExtension("native_profiler");
        $__internal_2ed9b4a27b09107196f5b17a0c9ed9e30ca6252355f8942db9e7f7efc7a5abd7->enter($__internal_2ed9b4a27b09107196f5b17a0c9ed9e30ca6252355f8942db9e7f7efc7a5abd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        
        $__internal_2ed9b4a27b09107196f5b17a0c9ed9e30ca6252355f8942db9e7f7efc7a5abd7->leave($__internal_2ed9b4a27b09107196f5b17a0c9ed9e30ca6252355f8942db9e7f7efc7a5abd7_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_919e336beac531b4ec3b7ffae97045c07c7823d60b5047d6a704b4a0db8ab563 = $this->env->getExtension("native_profiler");
        $__internal_919e336beac531b4ec3b7ffae97045c07c7823d60b5047d6a704b4a0db8ab563->enter($__internal_919e336beac531b4ec3b7ffae97045c07c7823d60b5047d6a704b4a0db8ab563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"text-center\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "        <div class=\"col-md-3\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "intitulé", array()), "html", null, true);
            echo "</span>
                    <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</p>
                </div>
                <a class=\"btn btn-default waves-effect waves-light\" href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_articleParCategorie", array("cat" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Visiter</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
";
        
        $__internal_919e336beac531b4ec3b7ffae97045c07c7823d60b5047d6a704b4a0db8ab563->leave($__internal_919e336beac531b4ec3b7ffae97045c07c7823d60b5047d6a704b4a0db8ab563_prof);

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
        return array (  83 => 20,  73 => 16,  68 => 14,  64 => 13,  59 => 10,  55 => 9,  52 => 8,  46 => 7,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "s4tabitayVitrineBundle:Default:layout.html.twig" %}*/
/* */
/* {% block caroussel %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="text-center">*/
/*     {% for category in categories %}*/
/*         <div class="col-md-3">*/
/*             <div class="card blue-grey darken-1">*/
/*                 <div class="card-content white-text">*/
/*                     <span class="card-title">{{ category.intitulé }}</span>*/
/*                     <p>{{category.description}}</p>*/
/*                 </div>*/
/*                 <a class="btn btn-default waves-effect waves-light" href="{{ path('s4tabitay_vitrine_articleParCategorie',{cat:category.id}) }}">Visiter</a>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
