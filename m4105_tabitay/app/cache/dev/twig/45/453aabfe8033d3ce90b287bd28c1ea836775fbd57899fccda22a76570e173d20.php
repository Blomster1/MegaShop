<?php

/* s4tabitayVitrineBundle:Default:navigation.html.twig */
class __TwigTemplate_3c712065ba3a003db2baa24198984f644389262b20febe07edd13b78c87488dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1170cb29fee39d08f93729792831684ea57097d42656e8283e1e8a923aa65b57 = $this->env->getExtension("native_profiler");
        $__internal_1170cb29fee39d08f93729792831684ea57097d42656e8283e1e8a923aa65b57->enter($__internal_1170cb29fee39d08f93729792831684ea57097d42656e8283e1e8a923aa65b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:navigation.html.twig"));

        // line 2
        $this->displayBlock('navigation', $context, $blocks);
        
        $__internal_1170cb29fee39d08f93729792831684ea57097d42656e8283e1e8a923aa65b57->leave($__internal_1170cb29fee39d08f93729792831684ea57097d42656e8283e1e8a923aa65b57_prof);

    }

    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ad0847d1038df5477381252a2d31fc63c2f78ef601efd567007f5c7f545f2380 = $this->env->getExtension("native_profiler");
        $__internal_ad0847d1038df5477381252a2d31fc63c2f78ef601efd567007f5c7f545f2380->enter($__internal_ad0847d1038df5477381252a2d31fc63c2f78ef601efd567007f5c7f545f2380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 3
        echo "    <!-- Dropdown Structure -->
    <ul id=\"dropdown1\" class=\"dropdown-content\">
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_panier");
        echo "\">Panier</a></li>
        <li class=\"divider\"></li>
        ";
        // line 7
        if ( !(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 8
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("client_authentification");
            echo "\">Connexion</a></li>
        ";
        } else {
            // line 10
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_profil", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">Mon profil</a></li>
            <li><a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("client_logout");
            echo "\">Deconnexion</a></li>
        ";
        }
        // line 13
        echo "    </ul>
    <nav class=\"light-blue accent-3\">
        <div class=\"nav-wrapper\">
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_homepage");
        echo "\" class=\"brand-logo\">Smplify</a>
            <ul class=\"right hide-on-med-and-down\">
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("s4tabitay_vitrine_catalogue");
        echo "\">Catalogue</a></li>
                <!-- Dropdown Trigger -->
                ";
        // line 20
        if ( !(isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 21
            echo "                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">Dropdown<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                ";
        } else {
            // line 23
            echo "                    <li><a class=\"dropdown-button\" href=\"#!\" data-activates=\"dropdown1\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
            echo "<i class=\"material-icons right\">arrow_drop_down</i></a></li>
                ";
        }
        // line 25
        echo "            </ul>
        </div>
    </nav>

";
        
        $__internal_ad0847d1038df5477381252a2d31fc63c2f78ef601efd567007f5c7f545f2380->leave($__internal_ad0847d1038df5477381252a2d31fc63c2f78ef601efd567007f5c7f545f2380_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:navigation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  83 => 23,  79 => 21,  77 => 20,  72 => 18,  67 => 16,  62 => 13,  57 => 11,  52 => 10,  46 => 8,  44 => 7,  39 => 5,  35 => 3,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% block navigation %}*/
/*     <!-- Dropdown Structure -->*/
/*     <ul id="dropdown1" class="dropdown-content">*/
/*         <li><a href="{{ path('s4tabitay_vitrine_panier') }}">Panier</a></li>*/
/*         <li class="divider"></li>*/
/*         {% if not user %}*/
/*             <li><a href="{{ path('client_authentification') }}">Connexion</a></li>*/
/*         {% else %}*/
/*             <li><a href="{{ path('client_profil',{id:user.id}) }}">Mon profil</a></li>*/
/*             <li><a href="{{ path('client_logout') }}">Deconnexion</a></li>*/
/*         {% endif %}*/
/*     </ul>*/
/*     <nav class="light-blue accent-3">*/
/*         <div class="nav-wrapper">*/
/*             <a href="{{ path('s4tabitay_vitrine_homepage') }}" class="brand-logo">Smplify</a>*/
/*             <ul class="right hide-on-med-and-down">*/
/*                 <li><a href="{{ path('s4tabitay_vitrine_catalogue') }}">Catalogue</a></li>*/
/*                 <!-- Dropdown Trigger -->*/
/*                 {% if not user %}*/
/*                     <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>*/
/*                 {% else %}*/
/*                     <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ user.prenom }}<i class="material-icons right">arrow_drop_down</i></a></li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* */
/* {% endblock %}*/
/* */
