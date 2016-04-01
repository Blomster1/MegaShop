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
        $__internal_498edcf220813692e40d09a2b0aed8b9d1baee4516d76b0a9756bf6fdcd5348c = $this->env->getExtension("native_profiler");
        $__internal_498edcf220813692e40d09a2b0aed8b9d1baee4516d76b0a9756bf6fdcd5348c->enter($__internal_498edcf220813692e40d09a2b0aed8b9d1baee4516d76b0a9756bf6fdcd5348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_498edcf220813692e40d09a2b0aed8b9d1baee4516d76b0a9756bf6fdcd5348c->leave($__internal_498edcf220813692e40d09a2b0aed8b9d1baee4516d76b0a9756bf6fdcd5348c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d567da6025fa0e70e9d5dc563c5309d0f3bbaf7b78a8a60504687e43ba57389 = $this->env->getExtension("native_profiler");
        $__internal_1d567da6025fa0e70e9d5dc563c5309d0f3bbaf7b78a8a60504687e43ba57389->enter($__internal_1d567da6025fa0e70e9d5dc563c5309d0f3bbaf7b78a8a60504687e43ba57389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d567da6025fa0e70e9d5dc563c5309d0f3bbaf7b78a8a60504687e43ba57389->leave($__internal_1d567da6025fa0e70e9d5dc563c5309d0f3bbaf7b78a8a60504687e43ba57389_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b8fc899f8f6c5053efbb394ebcc1dd43512c577b58e1b1cdf1b03dc5e0bd4fe = $this->env->getExtension("native_profiler");
        $__internal_0b8fc899f8f6c5053efbb394ebcc1dd43512c577b58e1b1cdf1b03dc5e0bd4fe->enter($__internal_0b8fc899f8f6c5053efbb394ebcc1dd43512c577b58e1b1cdf1b03dc5e0bd4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b8fc899f8f6c5053efbb394ebcc1dd43512c577b58e1b1cdf1b03dc5e0bd4fe->leave($__internal_0b8fc899f8f6c5053efbb394ebcc1dd43512c577b58e1b1cdf1b03dc5e0bd4fe_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_104960c2dd48c24c94d0af159caf7a6836fcc4c21c61c28df6080ab80fa522c9 = $this->env->getExtension("native_profiler");
        $__internal_104960c2dd48c24c94d0af159caf7a6836fcc4c21c61c28df6080ab80fa522c9->enter($__internal_104960c2dd48c24c94d0af159caf7a6836fcc4c21c61c28df6080ab80fa522c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_104960c2dd48c24c94d0af159caf7a6836fcc4c21c61c28df6080ab80fa522c9->leave($__internal_104960c2dd48c24c94d0af159caf7a6836fcc4c21c61c28df6080ab80fa522c9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_168f8804edd94ed2bceb2fc55c9a4d95d70378dd4d3b4c362e151800999aa647 = $this->env->getExtension("native_profiler");
        $__internal_168f8804edd94ed2bceb2fc55c9a4d95d70378dd4d3b4c362e151800999aa647->enter($__internal_168f8804edd94ed2bceb2fc55c9a4d95d70378dd4d3b4c362e151800999aa647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_168f8804edd94ed2bceb2fc55c9a4d95d70378dd4d3b4c362e151800999aa647->leave($__internal_168f8804edd94ed2bceb2fc55c9a4d95d70378dd4d3b4c362e151800999aa647_prof);

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
