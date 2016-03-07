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
        $__internal_bfdd06cb267867d2534039255d02d5b8b4f6302390b3e418beeeb3eb1874df28 = $this->env->getExtension("native_profiler");
        $__internal_bfdd06cb267867d2534039255d02d5b8b4f6302390b3e418beeeb3eb1874df28->enter($__internal_bfdd06cb267867d2534039255d02d5b8b4f6302390b3e418beeeb3eb1874df28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdd06cb267867d2534039255d02d5b8b4f6302390b3e418beeeb3eb1874df28->leave($__internal_bfdd06cb267867d2534039255d02d5b8b4f6302390b3e418beeeb3eb1874df28_prof);

    }

    // line 3
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_fc89b8315ffbcc914c743dc674e6a540d5fa1140e900290526e02b6729521269 = $this->env->getExtension("native_profiler");
        $__internal_fc89b8315ffbcc914c743dc674e6a540d5fa1140e900290526e02b6729521269->enter($__internal_fc89b8315ffbcc914c743dc674e6a540d5fa1140e900290526e02b6729521269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 4
        echo "    ";
        $this->loadTemplate("s4tabitayVitrineBundle:Default:caroussel.html.twig", "s4tabitayVitrineBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_fc89b8315ffbcc914c743dc674e6a540d5fa1140e900290526e02b6729521269->leave($__internal_fc89b8315ffbcc914c743dc674e6a540d5fa1140e900290526e02b6729521269_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_115486f727fe247df02c82184270839ed8a9c0b055c0ecb9afb423a0231d5e17 = $this->env->getExtension("native_profiler");
        $__internal_115486f727fe247df02c82184270839ed8a9c0b055c0ecb9afb423a0231d5e17->enter($__internal_115486f727fe247df02c82184270839ed8a9c0b055c0ecb9afb423a0231d5e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_115486f727fe247df02c82184270839ed8a9c0b055c0ecb9afb423a0231d5e17->leave($__internal_115486f727fe247df02c82184270839ed8a9c0b055c0ecb9afb423a0231d5e17_prof);

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
