<?php

/* s4tabitayVitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_da78b1a3e966ecb9f12ed549b1420b39eaf9c20d4f921271d0f2a884961f7d75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("s4tabitayVitrineBundle:Default:layout.html.twig", "s4tabitayVitrineBundle:Default:mentions.html.twig", 3);
        $this->blocks = array(
            'carousel' => array($this, 'block_carousel'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "s4tabitayVitrineBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1363084738c23d566076d5c19f0d89523c1f95e6aafdf6bda41cf268789e55f = $this->env->getExtension("native_profiler");
        $__internal_c1363084738c23d566076d5c19f0d89523c1f95e6aafdf6bda41cf268789e55f->enter($__internal_c1363084738c23d566076d5c19f0d89523c1f95e6aafdf6bda41cf268789e55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:mentions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1363084738c23d566076d5c19f0d89523c1f95e6aafdf6bda41cf268789e55f->leave($__internal_c1363084738c23d566076d5c19f0d89523c1f95e6aafdf6bda41cf268789e55f_prof);

    }

    // line 5
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_ccde30ce9e8438fe9cc343e70f59e14b1ef0be998ad9e401b4869a636c3abf93 = $this->env->getExtension("native_profiler");
        $__internal_ccde30ce9e8438fe9cc343e70f59e14b1ef0be998ad9e401b4869a636c3abf93->enter($__internal_ccde30ce9e8438fe9cc343e70f59e14b1ef0be998ad9e401b4869a636c3abf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_ccde30ce9e8438fe9cc343e70f59e14b1ef0be998ad9e401b4869a636c3abf93->leave($__internal_ccde30ce9e8438fe9cc343e70f59e14b1ef0be998ad9e401b4869a636c3abf93_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_60d46354579c485178d22241a741b917056a99ae3a9cf26952bfff9cb9da2b21 = $this->env->getExtension("native_profiler");
        $__internal_60d46354579c485178d22241a741b917056a99ae3a9cf26952bfff9cb9da2b21->enter($__internal_60d46354579c485178d22241a741b917056a99ae3a9cf26952bfff9cb9da2b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <p>Mention légales</p>
";
        
        $__internal_60d46354579c485178d22241a741b917056a99ae3a9cf26952bfff9cb9da2b21->leave($__internal_60d46354579c485178d22241a741b917056a99ae3a9cf26952bfff9cb9da2b21_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:mentions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  46 => 8,  35 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% extends "s4tabitayVitrineBundle:Default:layout.html.twig" %}*/
/* */
/* {% block carousel %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <p>Mention légales</p>*/
/* {% endblock %}*/
