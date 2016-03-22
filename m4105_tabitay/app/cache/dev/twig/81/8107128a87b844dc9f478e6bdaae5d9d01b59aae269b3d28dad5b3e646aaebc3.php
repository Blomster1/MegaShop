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
        $__internal_d38673196e02b6ed6ab73c82f38f937574029568bb0dd7b8e016570363cb60e5 = $this->env->getExtension("native_profiler");
        $__internal_d38673196e02b6ed6ab73c82f38f937574029568bb0dd7b8e016570363cb60e5->enter($__internal_d38673196e02b6ed6ab73c82f38f937574029568bb0dd7b8e016570363cb60e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d38673196e02b6ed6ab73c82f38f937574029568bb0dd7b8e016570363cb60e5->leave($__internal_d38673196e02b6ed6ab73c82f38f937574029568bb0dd7b8e016570363cb60e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3a2c8b18d8b3b47b6534f06fa902d23d17dad233f5afbce1ec1e8a0649348d92 = $this->env->getExtension("native_profiler");
        $__internal_3a2c8b18d8b3b47b6534f06fa902d23d17dad233f5afbce1ec1e8a0649348d92->enter($__internal_3a2c8b18d8b3b47b6534f06fa902d23d17dad233f5afbce1ec1e8a0649348d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3a2c8b18d8b3b47b6534f06fa902d23d17dad233f5afbce1ec1e8a0649348d92->leave($__internal_3a2c8b18d8b3b47b6534f06fa902d23d17dad233f5afbce1ec1e8a0649348d92_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc1a082efcb82c7e38506ae50f50708c627f41ca5009ded1ffc1e14390c6fdeb = $this->env->getExtension("native_profiler");
        $__internal_dc1a082efcb82c7e38506ae50f50708c627f41ca5009ded1ffc1e14390c6fdeb->enter($__internal_dc1a082efcb82c7e38506ae50f50708c627f41ca5009ded1ffc1e14390c6fdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc1a082efcb82c7e38506ae50f50708c627f41ca5009ded1ffc1e14390c6fdeb->leave($__internal_dc1a082efcb82c7e38506ae50f50708c627f41ca5009ded1ffc1e14390c6fdeb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7484dae58fafbf1a56ee096bc743fa333d05b58d00c4f6d5ce344433d2aa290 = $this->env->getExtension("native_profiler");
        $__internal_e7484dae58fafbf1a56ee096bc743fa333d05b58d00c4f6d5ce344433d2aa290->enter($__internal_e7484dae58fafbf1a56ee096bc743fa333d05b58d00c4f6d5ce344433d2aa290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e7484dae58fafbf1a56ee096bc743fa333d05b58d00c4f6d5ce344433d2aa290->leave($__internal_e7484dae58fafbf1a56ee096bc743fa333d05b58d00c4f6d5ce344433d2aa290_prof);

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
