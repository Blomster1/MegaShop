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
        $__internal_b9939164a45b452bf161e6e81fe1372764efd848ca2f5e96c8e260b4e362feba = $this->env->getExtension("native_profiler");
        $__internal_b9939164a45b452bf161e6e81fe1372764efd848ca2f5e96c8e260b4e362feba->enter($__internal_b9939164a45b452bf161e6e81fe1372764efd848ca2f5e96c8e260b4e362feba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:catalogue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9939164a45b452bf161e6e81fe1372764efd848ca2f5e96c8e260b4e362feba->leave($__internal_b9939164a45b452bf161e6e81fe1372764efd848ca2f5e96c8e260b4e362feba_prof);

    }

    // line 4
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_6ac10b0596b043ae56d8a6664238808ff4e43ff97093003b4fdc0540b2dc20c1 = $this->env->getExtension("native_profiler");
        $__internal_6ac10b0596b043ae56d8a6664238808ff4e43ff97093003b4fdc0540b2dc20c1->enter($__internal_6ac10b0596b043ae56d8a6664238808ff4e43ff97093003b4fdc0540b2dc20c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        
        $__internal_6ac10b0596b043ae56d8a6664238808ff4e43ff97093003b4fdc0540b2dc20c1->leave($__internal_6ac10b0596b043ae56d8a6664238808ff4e43ff97093003b4fdc0540b2dc20c1_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_3256559d83340e8e5cee6829cfaaaf2cfe93defb7c0bede17adc45fc63303362 = $this->env->getExtension("native_profiler");
        $__internal_3256559d83340e8e5cee6829cfaaaf2cfe93defb7c0bede17adc45fc63303362->enter($__internal_3256559d83340e8e5cee6829cfaaaf2cfe93defb7c0bede17adc45fc63303362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    <span class=\"card-title\">Card Title</span>
                    <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>
                </div>
                <div class=\"card-action\">
                    <a href=\"#\">This is a link</a>
                    <a href=\"#\">This is a link</a>
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
        
        $__internal_3256559d83340e8e5cee6829cfaaaf2cfe93defb7c0bede17adc45fc63303362->leave($__internal_3256559d83340e8e5cee6829cfaaaf2cfe93defb7c0bede17adc45fc63303362_prof);

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
        return array (  77 => 23,  59 => 10,  55 => 9,  52 => 8,  46 => 7,  35 => 4,  11 => 2,);
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
/*                     <span class="card-title">Card Title</span>*/
/*                     <p>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis. Maecenas malesuada elit lectus felis, malesuada ultricies. Curabitur et ligula.</p>*/
/*                 </div>*/
/*                 <div class="card-action">*/
/*                     <a href="#">This is a link</a>*/
/*                     <a href="#">This is a link</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
