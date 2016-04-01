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
            'sidemenu' => array($this, 'block_sidemenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "s4tabitayVitrineBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9853f87bc29efadb898cd3f2b8b6e68ec7cbf7c6f98a89ff30a5827f4a794fba = $this->env->getExtension("native_profiler");
        $__internal_9853f87bc29efadb898cd3f2b8b6e68ec7cbf7c6f98a89ff30a5827f4a794fba->enter($__internal_9853f87bc29efadb898cd3f2b8b6e68ec7cbf7c6f98a89ff30a5827f4a794fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9853f87bc29efadb898cd3f2b8b6e68ec7cbf7c6f98a89ff30a5827f4a794fba->leave($__internal_9853f87bc29efadb898cd3f2b8b6e68ec7cbf7c6f98a89ff30a5827f4a794fba_prof);

    }

    // line 3
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_97bc4adf7df2a7ca14f9083966ddcccb05c72d9bb5fa6ec7fe14558b85fd0199 = $this->env->getExtension("native_profiler");
        $__internal_97bc4adf7df2a7ca14f9083966ddcccb05c72d9bb5fa6ec7fe14558b85fd0199->enter($__internal_97bc4adf7df2a7ca14f9083966ddcccb05c72d9bb5fa6ec7fe14558b85fd0199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 4
        echo "    ";
        $this->loadTemplate("s4tabitayVitrineBundle:partials:slider.html.twig", "s4tabitayVitrineBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_97bc4adf7df2a7ca14f9083966ddcccb05c72d9bb5fa6ec7fe14558b85fd0199->leave($__internal_97bc4adf7df2a7ca14f9083966ddcccb05c72d9bb5fa6ec7fe14558b85fd0199_prof);

    }

    // line 7
    public function block_sidemenu($context, array $blocks = array())
    {
        $__internal_8cccecafda7f53ee7cf428c45e1e42e5b79d52c353470cb31c7d67c12897ca7e = $this->env->getExtension("native_profiler");
        $__internal_8cccecafda7f53ee7cf428c45e1e42e5b79d52c353470cb31c7d67c12897ca7e->enter($__internal_8cccecafda7f53ee7cf428c45e1e42e5b79d52c353470cb31c7d67c12897ca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidemenu"));

        
        $__internal_8cccecafda7f53ee7cf428c45e1e42e5b79d52c353470cb31c7d67c12897ca7e->leave($__internal_8cccecafda7f53ee7cf428c45e1e42e5b79d52c353470cb31c7d67c12897ca7e_prof);

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
        return array (  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "s4tabitayVitrineBundle:Default:layout.html.twig" %}*/
/* */
/* {% block caroussel %}*/
/*     {% include "s4tabitayVitrineBundle:partials:slider.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block sidemenu %}*/
/* {% endblock %}*/
/* */
/* */
