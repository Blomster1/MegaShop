<?php

/* base.html.twig */
class __TwigTemplate_b0a53f7759f3555f165e072673f315684a34fcc2d39b6096196988d85f0f0fde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc2bebdf449b7dd74a1d5dfcc40bacd1362cf7b7ddb7d1f5dfcaa542745e8e5d = $this->env->getExtension("native_profiler");
        $__internal_bc2bebdf449b7dd74a1d5dfcc40bacd1362cf7b7ddb7d1f5dfcaa542745e8e5d->enter($__internal_bc2bebdf449b7dd74a1d5dfcc40bacd1362cf7b7ddb7d1f5dfcaa542745e8e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_bc2bebdf449b7dd74a1d5dfcc40bacd1362cf7b7ddb7d1f5dfcaa542745e8e5d->leave($__internal_bc2bebdf449b7dd74a1d5dfcc40bacd1362cf7b7ddb7d1f5dfcaa542745e8e5d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_844aa0b51daba64bf70a491ef33d663d066ea997b2685444000af516a914cce4 = $this->env->getExtension("native_profiler");
        $__internal_844aa0b51daba64bf70a491ef33d663d066ea997b2685444000af516a914cce4->enter($__internal_844aa0b51daba64bf70a491ef33d663d066ea997b2685444000af516a914cce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_844aa0b51daba64bf70a491ef33d663d066ea997b2685444000af516a914cce4->leave($__internal_844aa0b51daba64bf70a491ef33d663d066ea997b2685444000af516a914cce4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a693b55bf626f3f182ab926113fe2a70d570d2839ffec584ad38e97a8955b6e = $this->env->getExtension("native_profiler");
        $__internal_7a693b55bf626f3f182ab926113fe2a70d570d2839ffec584ad38e97a8955b6e->enter($__internal_7a693b55bf626f3f182ab926113fe2a70d570d2839ffec584ad38e97a8955b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a693b55bf626f3f182ab926113fe2a70d570d2839ffec584ad38e97a8955b6e->leave($__internal_7a693b55bf626f3f182ab926113fe2a70d570d2839ffec584ad38e97a8955b6e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6325875ba11345a71a7a50195d9c7c638aa5223036bcea879b86f6bfa584fd1 = $this->env->getExtension("native_profiler");
        $__internal_c6325875ba11345a71a7a50195d9c7c638aa5223036bcea879b86f6bfa584fd1->enter($__internal_c6325875ba11345a71a7a50195d9c7c638aa5223036bcea879b86f6bfa584fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c6325875ba11345a71a7a50195d9c7c638aa5223036bcea879b86f6bfa584fd1->leave($__internal_c6325875ba11345a71a7a50195d9c7c638aa5223036bcea879b86f6bfa584fd1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a36a35295bd7dac54b873b89decff623b3ed4f7fc55bdf9fee92b8151478c031 = $this->env->getExtension("native_profiler");
        $__internal_a36a35295bd7dac54b873b89decff623b3ed4f7fc55bdf9fee92b8151478c031->enter($__internal_a36a35295bd7dac54b873b89decff623b3ed4f7fc55bdf9fee92b8151478c031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a36a35295bd7dac54b873b89decff623b3ed4f7fc55bdf9fee92b8151478c031->leave($__internal_a36a35295bd7dac54b873b89decff623b3ed4f7fc55bdf9fee92b8151478c031_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
