<?php

/* s4tabitayVitrineBundle:Default:index.html.twig */
class __TwigTemplate_9a3bf6198c10681aa7809fbdc9aec9fda5a5e8b93740ebab79bf964519191de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("s4tabitayVitrineBundle:Default:layout.html.twig", "s4tabitayVitrineBundle:Default:index.html.twig", 1);
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
        $__internal_c1bd59604e5190e638d9477612f4d384abbc18611f8746aad2e7e4ed2106228f = $this->env->getExtension("native_profiler");
        $__internal_c1bd59604e5190e638d9477612f4d384abbc18611f8746aad2e7e4ed2106228f->enter($__internal_c1bd59604e5190e638d9477612f4d384abbc18611f8746aad2e7e4ed2106228f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1bd59604e5190e638d9477612f4d384abbc18611f8746aad2e7e4ed2106228f->leave($__internal_c1bd59604e5190e638d9477612f4d384abbc18611f8746aad2e7e4ed2106228f_prof);

    }

    // line 3
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_a420d438f527705c1489cab789b10f9f0dbc587c70a1c6eb4f64d9d1b1588092 = $this->env->getExtension("native_profiler");
        $__internal_a420d438f527705c1489cab789b10f9f0dbc587c70a1c6eb4f64d9d1b1588092->enter($__internal_a420d438f527705c1489cab789b10f9f0dbc587c70a1c6eb4f64d9d1b1588092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 4
        echo "    ";
        $this->loadTemplate("s4tabitayVitrineBundle:Default:caroussel.html.twig", "s4tabitayVitrineBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_a420d438f527705c1489cab789b10f9f0dbc587c70a1c6eb4f64d9d1b1588092->leave($__internal_a420d438f527705c1489cab789b10f9f0dbc587c70a1c6eb4f64d9d1b1588092_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4fd414d4b72246bb1864a4d1f5de9dc707e752a7b7322d48cae4e123e170272 = $this->env->getExtension("native_profiler");
        $__internal_a4fd414d4b72246bb1864a4d1f5de9dc707e752a7b7322d48cae4e123e170272->enter($__internal_a4fd414d4b72246bb1864a4d1f5de9dc707e752a7b7322d48cae4e123e170272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <!-- Contenue -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                  <!--Image Card-->
                  <div class=\"card hoverable\">
                      <div class=\"card-image\">
                          <div class=\"view overlay hm-white-slight z-depth-1\">
                              <img src=\"http://mdbootstrap.com/images/reg/reg%20(2).jpg\" class=\"img-responsive\" alt=\"\">
                              <div class=\"mask waves-effect\"></div>
                          </div>
                          <span class=\"card-title\">Electromenager</span>
                      </div>
                      <div class=\"card-action\">
                          <a>Voir les articles</a>
                      </div>
                  </div>
                </div>
                  <!--Image Card-->
                  <div class=\"col-md-4\">
                  <!--Image Card-->
                  <div class=\"card hoverable\">
                      <div class=\"card-image\">
                          <div class=\"view overlay hm-white-slight z-depth-1\">
                              <img src=\"http://mdbootstrap.com/images/reg/reg%20(2).jpg\" class=\"img-responsive\" alt=\"\">
                              <div class=\"mask waves-effect\"></div>
                          </div>
                          <span class=\"card-title\">Informatique</span>
                      </div>
                      <div class=\"card-action\">
                          <a>Voir les articles</a>
                      </div>
                  </div>
                  <!--Image Card-->
                </div>
                  <div class=\"col-md-4\">
                  <!--Image Card-->
                  <div class=\"card hoverable\">
                      <div class=\"card-image\">
                          <div class=\"view overlay hm-white-slight z-depth-1\">
                              <img src=\"http://mdbootstrap.com/images/reg/reg%20(2).jpg\" class=\"img-responsive\" alt=\"\">
                              <div class=\"mask waves-effect\"></div>
                          </div>
                          <span class=\"card-title\">Pret-a-proter</span>
                      </div>
                      <div class=\"card-action\">
                          <a>Voir les articles</a>
                      </div>
                  </div>
                  <!--Image Card-->
                </div>
              </div>
            </div>
        </div>
        <!-- /Contenue -->
";
        
        $__internal_a4fd414d4b72246bb1864a4d1f5de9dc707e752a7b7322d48cae4e123e170272->leave($__internal_a4fd414d4b72246bb1864a4d1f5de9dc707e752a7b7322d48cae4e123e170272_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "s4tabitayVitrineBundle:Default:layout.html.twig" %}*/
/* */
/* {% block caroussel %}*/
/*     {% include "s4tabitayVitrineBundle:Default:caroussel.html.twig" %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <!-- Contenue -->*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                   <!--Image Card-->*/
/*                   <div class="card hoverable">*/
/*                       <div class="card-image">*/
/*                           <div class="view overlay hm-white-slight z-depth-1">*/
/*                               <img src="http://mdbootstrap.com/images/reg/reg%20(2).jpg" class="img-responsive" alt="">*/
/*                               <div class="mask waves-effect"></div>*/
/*                           </div>*/
/*                           <span class="card-title">Electromenager</span>*/
/*                       </div>*/
/*                       <div class="card-action">*/
/*                           <a>Voir les articles</a>*/
/*                       </div>*/
/*                   </div>*/
/*                 </div>*/
/*                   <!--Image Card-->*/
/*                   <div class="col-md-4">*/
/*                   <!--Image Card-->*/
/*                   <div class="card hoverable">*/
/*                       <div class="card-image">*/
/*                           <div class="view overlay hm-white-slight z-depth-1">*/
/*                               <img src="http://mdbootstrap.com/images/reg/reg%20(2).jpg" class="img-responsive" alt="">*/
/*                               <div class="mask waves-effect"></div>*/
/*                           </div>*/
/*                           <span class="card-title">Informatique</span>*/
/*                       </div>*/
/*                       <div class="card-action">*/
/*                           <a>Voir les articles</a>*/
/*                       </div>*/
/*                   </div>*/
/*                   <!--Image Card-->*/
/*                 </div>*/
/*                   <div class="col-md-4">*/
/*                   <!--Image Card-->*/
/*                   <div class="card hoverable">*/
/*                       <div class="card-image">*/
/*                           <div class="view overlay hm-white-slight z-depth-1">*/
/*                               <img src="http://mdbootstrap.com/images/reg/reg%20(2).jpg" class="img-responsive" alt="">*/
/*                               <div class="mask waves-effect"></div>*/
/*                           </div>*/
/*                           <span class="card-title">Pret-a-proter</span>*/
/*                       </div>*/
/*                       <div class="card-action">*/
/*                           <a>Voir les articles</a>*/
/*                       </div>*/
/*                   </div>*/
/*                   <!--Image Card-->*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- /Contenue -->*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
