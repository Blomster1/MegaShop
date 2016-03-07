<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_470fe904856e40c2867079a53652f966826ba34c79aacace76049c2ad24e553d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb629e5278579fbd034cc958123e836e127904a08b784a170129e2e4f7c488c2 = $this->env->getExtension("native_profiler");
        $__internal_bb629e5278579fbd034cc958123e836e127904a08b784a170129e2e4f7c488c2->enter($__internal_bb629e5278579fbd034cc958123e836e127904a08b784a170129e2e4f7c488c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb629e5278579fbd034cc958123e836e127904a08b784a170129e2e4f7c488c2->leave($__internal_bb629e5278579fbd034cc958123e836e127904a08b784a170129e2e4f7c488c2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b23826dc78f2c51469037bc01166647c9bdf595103cc6ca81490aa152f61b930 = $this->env->getExtension("native_profiler");
        $__internal_b23826dc78f2c51469037bc01166647c9bdf595103cc6ca81490aa152f61b930->enter($__internal_b23826dc78f2c51469037bc01166647c9bdf595103cc6ca81490aa152f61b930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b23826dc78f2c51469037bc01166647c9bdf595103cc6ca81490aa152f61b930->leave($__internal_b23826dc78f2c51469037bc01166647c9bdf595103cc6ca81490aa152f61b930_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d7638e16a66c89f520d3ff4a859562794f17b653962bfdf2b8a2e6c12a8dbd1 = $this->env->getExtension("native_profiler");
        $__internal_8d7638e16a66c89f520d3ff4a859562794f17b653962bfdf2b8a2e6c12a8dbd1->enter($__internal_8d7638e16a66c89f520d3ff4a859562794f17b653962bfdf2b8a2e6c12a8dbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8d7638e16a66c89f520d3ff4a859562794f17b653962bfdf2b8a2e6c12a8dbd1->leave($__internal_8d7638e16a66c89f520d3ff4a859562794f17b653962bfdf2b8a2e6c12a8dbd1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d55e6a437e7f71c44c196d2d1a2a4e730f148a6a64443e98487e87c23bb3bb8d = $this->env->getExtension("native_profiler");
        $__internal_d55e6a437e7f71c44c196d2d1a2a4e730f148a6a64443e98487e87c23bb3bb8d->enter($__internal_d55e6a437e7f71c44c196d2d1a2a4e730f148a6a64443e98487e87c23bb3bb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d55e6a437e7f71c44c196d2d1a2a4e730f148a6a64443e98487e87c23bb3bb8d->leave($__internal_d55e6a437e7f71c44c196d2d1a2a4e730f148a6a64443e98487e87c23bb3bb8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
