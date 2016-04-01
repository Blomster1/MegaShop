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
        $__internal_64e7f176453de484721116ee9cf873f671dcbb84ced8330605966ead54b881fd = $this->env->getExtension("native_profiler");
        $__internal_64e7f176453de484721116ee9cf873f671dcbb84ced8330605966ead54b881fd->enter($__internal_64e7f176453de484721116ee9cf873f671dcbb84ced8330605966ead54b881fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64e7f176453de484721116ee9cf873f671dcbb84ced8330605966ead54b881fd->leave($__internal_64e7f176453de484721116ee9cf873f671dcbb84ced8330605966ead54b881fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96c9d0bb33dc9c763c48d86abf581dc3549d5b9a8cf3fa7c127718d13acfe1b7 = $this->env->getExtension("native_profiler");
        $__internal_96c9d0bb33dc9c763c48d86abf581dc3549d5b9a8cf3fa7c127718d13acfe1b7->enter($__internal_96c9d0bb33dc9c763c48d86abf581dc3549d5b9a8cf3fa7c127718d13acfe1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_96c9d0bb33dc9c763c48d86abf581dc3549d5b9a8cf3fa7c127718d13acfe1b7->leave($__internal_96c9d0bb33dc9c763c48d86abf581dc3549d5b9a8cf3fa7c127718d13acfe1b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be5d82dc9042fad01236d0032e9ed0eba3142e83d5e1ee694eac20d608ac241b = $this->env->getExtension("native_profiler");
        $__internal_be5d82dc9042fad01236d0032e9ed0eba3142e83d5e1ee694eac20d608ac241b->enter($__internal_be5d82dc9042fad01236d0032e9ed0eba3142e83d5e1ee694eac20d608ac241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be5d82dc9042fad01236d0032e9ed0eba3142e83d5e1ee694eac20d608ac241b->leave($__internal_be5d82dc9042fad01236d0032e9ed0eba3142e83d5e1ee694eac20d608ac241b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dedd123566e41abeacb8f338009f2a7bbe0eab9c0b52042edcb097369dc3e4e9 = $this->env->getExtension("native_profiler");
        $__internal_dedd123566e41abeacb8f338009f2a7bbe0eab9c0b52042edcb097369dc3e4e9->enter($__internal_dedd123566e41abeacb8f338009f2a7bbe0eab9c0b52042edcb097369dc3e4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dedd123566e41abeacb8f338009f2a7bbe0eab9c0b52042edcb097369dc3e4e9->leave($__internal_dedd123566e41abeacb8f338009f2a7bbe0eab9c0b52042edcb097369dc3e4e9_prof);

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
