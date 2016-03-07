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
        $__internal_cd673367021afae0fe5a7f829d5eeb0ce81f163b508e30000fc2bcc9ee69f740 = $this->env->getExtension("native_profiler");
        $__internal_cd673367021afae0fe5a7f829d5eeb0ce81f163b508e30000fc2bcc9ee69f740->enter($__internal_cd673367021afae0fe5a7f829d5eeb0ce81f163b508e30000fc2bcc9ee69f740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd673367021afae0fe5a7f829d5eeb0ce81f163b508e30000fc2bcc9ee69f740->leave($__internal_cd673367021afae0fe5a7f829d5eeb0ce81f163b508e30000fc2bcc9ee69f740_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_93a592741b1b2295012f4d4239c2b53b63df3ce19d535e0f82ecf713723dc833 = $this->env->getExtension("native_profiler");
        $__internal_93a592741b1b2295012f4d4239c2b53b63df3ce19d535e0f82ecf713723dc833->enter($__internal_93a592741b1b2295012f4d4239c2b53b63df3ce19d535e0f82ecf713723dc833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_93a592741b1b2295012f4d4239c2b53b63df3ce19d535e0f82ecf713723dc833->leave($__internal_93a592741b1b2295012f4d4239c2b53b63df3ce19d535e0f82ecf713723dc833_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7e27044dba466d6a3fd337f07f05d98714aef7adcc35a8cb55dbcac9d84b512 = $this->env->getExtension("native_profiler");
        $__internal_a7e27044dba466d6a3fd337f07f05d98714aef7adcc35a8cb55dbcac9d84b512->enter($__internal_a7e27044dba466d6a3fd337f07f05d98714aef7adcc35a8cb55dbcac9d84b512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7e27044dba466d6a3fd337f07f05d98714aef7adcc35a8cb55dbcac9d84b512->leave($__internal_a7e27044dba466d6a3fd337f07f05d98714aef7adcc35a8cb55dbcac9d84b512_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5f12fdb73c28dc09d5982215d6e8d6c7d59baf03f37d451596d5b38970e61894 = $this->env->getExtension("native_profiler");
        $__internal_5f12fdb73c28dc09d5982215d6e8d6c7d59baf03f37d451596d5b38970e61894->enter($__internal_5f12fdb73c28dc09d5982215d6e8d6c7d59baf03f37d451596d5b38970e61894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5f12fdb73c28dc09d5982215d6e8d6c7d59baf03f37d451596d5b38970e61894->leave($__internal_5f12fdb73c28dc09d5982215d6e8d6c7d59baf03f37d451596d5b38970e61894_prof);

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
