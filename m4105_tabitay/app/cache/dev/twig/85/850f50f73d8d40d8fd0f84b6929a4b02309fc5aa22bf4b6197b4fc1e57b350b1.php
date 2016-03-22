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
        );
    }

    protected function doGetParent(array $context)
    {
        return "s4tabitayVitrineBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_664afbb93a8ff5acea1b8e76b74a805c1b7087584f7d6c32fcc0496dbc9387a1 = $this->env->getExtension("native_profiler");
        $__internal_664afbb93a8ff5acea1b8e76b74a805c1b7087584f7d6c32fcc0496dbc9387a1->enter($__internal_664afbb93a8ff5acea1b8e76b74a805c1b7087584f7d6c32fcc0496dbc9387a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_664afbb93a8ff5acea1b8e76b74a805c1b7087584f7d6c32fcc0496dbc9387a1->leave($__internal_664afbb93a8ff5acea1b8e76b74a805c1b7087584f7d6c32fcc0496dbc9387a1_prof);

    }

    // line 3
    public function block_caroussel($context, array $blocks = array())
    {
        $__internal_0d31ea5dd6b73fe059727e2290150f0f503939434098681ba461eee0b3208305 = $this->env->getExtension("native_profiler");
        $__internal_0d31ea5dd6b73fe059727e2290150f0f503939434098681ba461eee0b3208305->enter($__internal_0d31ea5dd6b73fe059727e2290150f0f503939434098681ba461eee0b3208305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "caroussel"));

        // line 4
        echo "    ";
        $this->loadTemplate("s4tabitayVitrineBundle:Default:slider.html.twig", "s4tabitayVitrineBundle:Default:index.html.twig", 4)->display($context);
        
        $__internal_0d31ea5dd6b73fe059727e2290150f0f503939434098681ba461eee0b3208305->leave($__internal_0d31ea5dd6b73fe059727e2290150f0f503939434098681ba461eee0b3208305_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "s4tabitayVitrineBundle:Default:layout.html.twig" %}*/
/* */
/* {% block caroussel %}*/
/*     {% include "s4tabitayVitrineBundle:Default:slider.html.twig" %}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
