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
        $__internal_68c7e699e4601cda1ba0c2650a4e2262ba43a3bda930fb07913687dbf543c513 = $this->env->getExtension("native_profiler");
        $__internal_68c7e699e4601cda1ba0c2650a4e2262ba43a3bda930fb07913687dbf543c513->enter($__internal_68c7e699e4601cda1ba0c2650a4e2262ba43a3bda930fb07913687dbf543c513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:mentions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68c7e699e4601cda1ba0c2650a4e2262ba43a3bda930fb07913687dbf543c513->leave($__internal_68c7e699e4601cda1ba0c2650a4e2262ba43a3bda930fb07913687dbf543c513_prof);

    }

    // line 5
    public function block_carousel($context, array $blocks = array())
    {
        $__internal_6c125f6cc61ed357766b25cf68142f33283645a99f08f291fbc1ba82494a5381 = $this->env->getExtension("native_profiler");
        $__internal_6c125f6cc61ed357766b25cf68142f33283645a99f08f291fbc1ba82494a5381->enter($__internal_6c125f6cc61ed357766b25cf68142f33283645a99f08f291fbc1ba82494a5381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_6c125f6cc61ed357766b25cf68142f33283645a99f08f291fbc1ba82494a5381->leave($__internal_6c125f6cc61ed357766b25cf68142f33283645a99f08f291fbc1ba82494a5381_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_08ace20fd7d8ccd67a2f20c72ad8003215e6cbbc6a66f123f842fd8e9cd765ac = $this->env->getExtension("native_profiler");
        $__internal_08ace20fd7d8ccd67a2f20c72ad8003215e6cbbc6a66f123f842fd8e9cd765ac->enter($__internal_08ace20fd7d8ccd67a2f20c72ad8003215e6cbbc6a66f123f842fd8e9cd765ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <p>Mention légales</p>
";
        
        $__internal_08ace20fd7d8ccd67a2f20c72ad8003215e6cbbc6a66f123f842fd8e9cd765ac->leave($__internal_08ace20fd7d8ccd67a2f20c72ad8003215e6cbbc6a66f123f842fd8e9cd765ac_prof);

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
