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
        $__internal_28a09378be428d43ce200a01bb5ac6d97ea5823b5f02f956634b8ee80a92d38f = $this->env->getExtension("native_profiler");
        $__internal_28a09378be428d43ce200a01bb5ac6d97ea5823b5f02f956634b8ee80a92d38f->enter($__internal_28a09378be428d43ce200a01bb5ac6d97ea5823b5f02f956634b8ee80a92d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28a09378be428d43ce200a01bb5ac6d97ea5823b5f02f956634b8ee80a92d38f->leave($__internal_28a09378be428d43ce200a01bb5ac6d97ea5823b5f02f956634b8ee80a92d38f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afee01534163ca468d6c8dfcafefa4eb4de7f9da19136e513077b09b92808d64 = $this->env->getExtension("native_profiler");
        $__internal_afee01534163ca468d6c8dfcafefa4eb4de7f9da19136e513077b09b92808d64->enter($__internal_afee01534163ca468d6c8dfcafefa4eb4de7f9da19136e513077b09b92808d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afee01534163ca468d6c8dfcafefa4eb4de7f9da19136e513077b09b92808d64->leave($__internal_afee01534163ca468d6c8dfcafefa4eb4de7f9da19136e513077b09b92808d64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49f0d905f092eb0b46aef3d47e7df8b4a95ff5aa42738f30581267c1357fee83 = $this->env->getExtension("native_profiler");
        $__internal_49f0d905f092eb0b46aef3d47e7df8b4a95ff5aa42738f30581267c1357fee83->enter($__internal_49f0d905f092eb0b46aef3d47e7df8b4a95ff5aa42738f30581267c1357fee83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49f0d905f092eb0b46aef3d47e7df8b4a95ff5aa42738f30581267c1357fee83->leave($__internal_49f0d905f092eb0b46aef3d47e7df8b4a95ff5aa42738f30581267c1357fee83_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f18b36264e5765bb8fe0a6676a49f24418437416c2e47074959c86e2d15b11c2 = $this->env->getExtension("native_profiler");
        $__internal_f18b36264e5765bb8fe0a6676a49f24418437416c2e47074959c86e2d15b11c2->enter($__internal_f18b36264e5765bb8fe0a6676a49f24418437416c2e47074959c86e2d15b11c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f18b36264e5765bb8fe0a6676a49f24418437416c2e47074959c86e2d15b11c2->leave($__internal_f18b36264e5765bb8fe0a6676a49f24418437416c2e47074959c86e2d15b11c2_prof);

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
