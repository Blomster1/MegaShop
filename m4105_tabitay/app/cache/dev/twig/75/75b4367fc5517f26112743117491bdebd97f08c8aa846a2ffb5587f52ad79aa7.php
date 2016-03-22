<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_80ab40db76b5aad6bf7827db13f5c6e853dee9c604667e840d8295cf0a1ad84d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03b21af791c6997f3ba4c3919811235dcabb62a580bf79a30d05cef002cab432 = $this->env->getExtension("native_profiler");
        $__internal_03b21af791c6997f3ba4c3919811235dcabb62a580bf79a30d05cef002cab432->enter($__internal_03b21af791c6997f3ba4c3919811235dcabb62a580bf79a30d05cef002cab432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b21af791c6997f3ba4c3919811235dcabb62a580bf79a30d05cef002cab432->leave($__internal_03b21af791c6997f3ba4c3919811235dcabb62a580bf79a30d05cef002cab432_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_adc1dfb97e528b65a636d4de606a2d0338c2bb6b08d10256b75d34c3c94027f0 = $this->env->getExtension("native_profiler");
        $__internal_adc1dfb97e528b65a636d4de606a2d0338c2bb6b08d10256b75d34c3c94027f0->enter($__internal_adc1dfb97e528b65a636d4de606a2d0338c2bb6b08d10256b75d34c3c94027f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_adc1dfb97e528b65a636d4de606a2d0338c2bb6b08d10256b75d34c3c94027f0->leave($__internal_adc1dfb97e528b65a636d4de606a2d0338c2bb6b08d10256b75d34c3c94027f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1592912b5ba5c8abd25561caea0dfc6dd610f4e448eed7025da7b4497c43d4a6 = $this->env->getExtension("native_profiler");
        $__internal_1592912b5ba5c8abd25561caea0dfc6dd610f4e448eed7025da7b4497c43d4a6->enter($__internal_1592912b5ba5c8abd25561caea0dfc6dd610f4e448eed7025da7b4497c43d4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1592912b5ba5c8abd25561caea0dfc6dd610f4e448eed7025da7b4497c43d4a6->leave($__internal_1592912b5ba5c8abd25561caea0dfc6dd610f4e448eed7025da7b4497c43d4a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b334e1aa832842b78b45abcead60be3f752e3960c477bc3fe027c1e0f6b81c83 = $this->env->getExtension("native_profiler");
        $__internal_b334e1aa832842b78b45abcead60be3f752e3960c477bc3fe027c1e0f6b81c83->enter($__internal_b334e1aa832842b78b45abcead60be3f752e3960c477bc3fe027c1e0f6b81c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b334e1aa832842b78b45abcead60be3f752e3960c477bc3fe027c1e0f6b81c83->leave($__internal_b334e1aa832842b78b45abcead60be3f752e3960c477bc3fe027c1e0f6b81c83_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
