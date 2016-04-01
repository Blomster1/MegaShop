<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_90c30d19b6abb10318e2ea55a3ac798e4df04ded3ef35e665fb86ff47e748df5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_433e5561b907df83c0279ce7c0385ec7198ab0a3b588abdb9bb4e2785d556f18 = $this->env->getExtension("native_profiler");
        $__internal_433e5561b907df83c0279ce7c0385ec7198ab0a3b588abdb9bb4e2785d556f18->enter($__internal_433e5561b907df83c0279ce7c0385ec7198ab0a3b588abdb9bb4e2785d556f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_433e5561b907df83c0279ce7c0385ec7198ab0a3b588abdb9bb4e2785d556f18->leave($__internal_433e5561b907df83c0279ce7c0385ec7198ab0a3b588abdb9bb4e2785d556f18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7961fd082125241523d0a3c75d2a9397e02a63e4a1318ef19d67d381bded48f = $this->env->getExtension("native_profiler");
        $__internal_a7961fd082125241523d0a3c75d2a9397e02a63e4a1318ef19d67d381bded48f->enter($__internal_a7961fd082125241523d0a3c75d2a9397e02a63e4a1318ef19d67d381bded48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a7961fd082125241523d0a3c75d2a9397e02a63e4a1318ef19d67d381bded48f->leave($__internal_a7961fd082125241523d0a3c75d2a9397e02a63e4a1318ef19d67d381bded48f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13f0d8af130f36f3dd27b2df6d037a0626ebd1ae2fc6df6fa982f51597e95beb = $this->env->getExtension("native_profiler");
        $__internal_13f0d8af130f36f3dd27b2df6d037a0626ebd1ae2fc6df6fa982f51597e95beb->enter($__internal_13f0d8af130f36f3dd27b2df6d037a0626ebd1ae2fc6df6fa982f51597e95beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_13f0d8af130f36f3dd27b2df6d037a0626ebd1ae2fc6df6fa982f51597e95beb->leave($__internal_13f0d8af130f36f3dd27b2df6d037a0626ebd1ae2fc6df6fa982f51597e95beb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e13685ddd75d461434c45c6b07ed6c2324becd48f8de63d3a1af58c218fb7c37 = $this->env->getExtension("native_profiler");
        $__internal_e13685ddd75d461434c45c6b07ed6c2324becd48f8de63d3a1af58c218fb7c37->enter($__internal_e13685ddd75d461434c45c6b07ed6c2324becd48f8de63d3a1af58c218fb7c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e13685ddd75d461434c45c6b07ed6c2324becd48f8de63d3a1af58c218fb7c37->leave($__internal_e13685ddd75d461434c45c6b07ed6c2324becd48f8de63d3a1af58c218fb7c37_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
