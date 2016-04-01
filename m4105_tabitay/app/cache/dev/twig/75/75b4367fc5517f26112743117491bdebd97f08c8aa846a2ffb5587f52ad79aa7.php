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
        $__internal_efef78940ef1d682c5a19b48deed2d4745209e35adf9005181e42132cb363e4c = $this->env->getExtension("native_profiler");
        $__internal_efef78940ef1d682c5a19b48deed2d4745209e35adf9005181e42132cb363e4c->enter($__internal_efef78940ef1d682c5a19b48deed2d4745209e35adf9005181e42132cb363e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efef78940ef1d682c5a19b48deed2d4745209e35adf9005181e42132cb363e4c->leave($__internal_efef78940ef1d682c5a19b48deed2d4745209e35adf9005181e42132cb363e4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7307e69f0708f92f7435125f1133082d178e6574123e2773e178ead8605a15a4 = $this->env->getExtension("native_profiler");
        $__internal_7307e69f0708f92f7435125f1133082d178e6574123e2773e178ead8605a15a4->enter($__internal_7307e69f0708f92f7435125f1133082d178e6574123e2773e178ead8605a15a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7307e69f0708f92f7435125f1133082d178e6574123e2773e178ead8605a15a4->leave($__internal_7307e69f0708f92f7435125f1133082d178e6574123e2773e178ead8605a15a4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_23d54be4690a912de0c7a1d2d1af2d35a0c0203e161c49aa2e2b64c8b1d18847 = $this->env->getExtension("native_profiler");
        $__internal_23d54be4690a912de0c7a1d2d1af2d35a0c0203e161c49aa2e2b64c8b1d18847->enter($__internal_23d54be4690a912de0c7a1d2d1af2d35a0c0203e161c49aa2e2b64c8b1d18847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_23d54be4690a912de0c7a1d2d1af2d35a0c0203e161c49aa2e2b64c8b1d18847->leave($__internal_23d54be4690a912de0c7a1d2d1af2d35a0c0203e161c49aa2e2b64c8b1d18847_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c76afc00e036cbc1530602e0ad097d85d0253655fda0d7ecd355a3e68ae4278b = $this->env->getExtension("native_profiler");
        $__internal_c76afc00e036cbc1530602e0ad097d85d0253655fda0d7ecd355a3e68ae4278b->enter($__internal_c76afc00e036cbc1530602e0ad097d85d0253655fda0d7ecd355a3e68ae4278b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c76afc00e036cbc1530602e0ad097d85d0253655fda0d7ecd355a3e68ae4278b->leave($__internal_c76afc00e036cbc1530602e0ad097d85d0253655fda0d7ecd355a3e68ae4278b_prof);

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
