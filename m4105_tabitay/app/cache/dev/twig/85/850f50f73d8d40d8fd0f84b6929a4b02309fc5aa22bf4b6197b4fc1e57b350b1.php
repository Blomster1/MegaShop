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
        $__internal_e21d00ea3f5c8b5af1a1effd678486321f5f78090f56f9c8a8b177b39e54abaa = $this->env->getExtension("native_profiler");
        $__internal_e21d00ea3f5c8b5af1a1effd678486321f5f78090f56f9c8a8b177b39e54abaa->enter($__internal_e21d00ea3f5c8b5af1a1effd678486321f5f78090f56f9c8a8b177b39e54abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e21d00ea3f5c8b5af1a1effd678486321f5f78090f56f9c8a8b177b39e54abaa->leave($__internal_e21d00ea3f5c8b5af1a1effd678486321f5f78090f56f9c8a8b177b39e54abaa_prof);

    }

    // line 3
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_a374bbd908d8d9ee1fd87687fe226f2715b602af2dea45a1009d2c11ab93a620 = $this->env->getExtension("native_profiler");
        $__internal_a374bbd908d8d9ee1fd87687fe226f2715b602af2dea45a1009d2c11ab93a620->enter($__internal_a374bbd908d8d9ee1fd87687fe226f2715b602af2dea45a1009d2c11ab93a620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 4
        echo "    ";
        $this->loadTemplate("s4tabitayVitrineBundle:Default:caroussel.html.twig", "s4tabitayVitrineBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_a374bbd908d8d9ee1fd87687fe226f2715b602af2dea45a1009d2c11ab93a620->leave($__internal_a374bbd908d8d9ee1fd87687fe226f2715b602af2dea45a1009d2c11ab93a620_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6aad0cb6d85431448c11e0b82cca3873fe55844c8704ce56142ce07589dfe50 = $this->env->getExtension("native_profiler");
        $__internal_a6aad0cb6d85431448c11e0b82cca3873fe55844c8704ce56142ce07589dfe50->enter($__internal_a6aad0cb6d85431448c11e0b82cca3873fe55844c8704ce56142ce07589dfe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a6aad0cb6d85431448c11e0b82cca3873fe55844c8704ce56142ce07589dfe50->leave($__internal_a6aad0cb6d85431448c11e0b82cca3873fe55844c8704ce56142ce07589dfe50_prof);

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
