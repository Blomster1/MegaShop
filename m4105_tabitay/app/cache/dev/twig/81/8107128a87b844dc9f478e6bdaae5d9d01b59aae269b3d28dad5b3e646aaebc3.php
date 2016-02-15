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
        $__internal_40db8e0ef0af526a7f4cc92399981f0ce36e11f3c1d8f2ac151ced62a64c85d1 = $this->env->getExtension("native_profiler");
        $__internal_40db8e0ef0af526a7f4cc92399981f0ce36e11f3c1d8f2ac151ced62a64c85d1->enter($__internal_40db8e0ef0af526a7f4cc92399981f0ce36e11f3c1d8f2ac151ced62a64c85d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40db8e0ef0af526a7f4cc92399981f0ce36e11f3c1d8f2ac151ced62a64c85d1->leave($__internal_40db8e0ef0af526a7f4cc92399981f0ce36e11f3c1d8f2ac151ced62a64c85d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de49a3494f1cd9d5aecf660ab1401202612fbde61b5c4451cdf7a4e79193059c = $this->env->getExtension("native_profiler");
        $__internal_de49a3494f1cd9d5aecf660ab1401202612fbde61b5c4451cdf7a4e79193059c->enter($__internal_de49a3494f1cd9d5aecf660ab1401202612fbde61b5c4451cdf7a4e79193059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de49a3494f1cd9d5aecf660ab1401202612fbde61b5c4451cdf7a4e79193059c->leave($__internal_de49a3494f1cd9d5aecf660ab1401202612fbde61b5c4451cdf7a4e79193059c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cee4d5bd2308da5a7997f2db9b1ae4107ce5970fff87489fa428e0bf13526725 = $this->env->getExtension("native_profiler");
        $__internal_cee4d5bd2308da5a7997f2db9b1ae4107ce5970fff87489fa428e0bf13526725->enter($__internal_cee4d5bd2308da5a7997f2db9b1ae4107ce5970fff87489fa428e0bf13526725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cee4d5bd2308da5a7997f2db9b1ae4107ce5970fff87489fa428e0bf13526725->leave($__internal_cee4d5bd2308da5a7997f2db9b1ae4107ce5970fff87489fa428e0bf13526725_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b2e3f7ac9137a90cdce2106294bd654d9a569bbb9960efff8da98cc8e120664 = $this->env->getExtension("native_profiler");
        $__internal_8b2e3f7ac9137a90cdce2106294bd654d9a569bbb9960efff8da98cc8e120664->enter($__internal_8b2e3f7ac9137a90cdce2106294bd654d9a569bbb9960efff8da98cc8e120664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8b2e3f7ac9137a90cdce2106294bd654d9a569bbb9960efff8da98cc8e120664->leave($__internal_8b2e3f7ac9137a90cdce2106294bd654d9a569bbb9960efff8da98cc8e120664_prof);

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
