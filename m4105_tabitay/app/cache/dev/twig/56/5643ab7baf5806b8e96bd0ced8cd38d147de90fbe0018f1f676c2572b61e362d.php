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
        $__internal_c06b22016799372480a16f798a769863ad6f9c11c53b27db75cca48e75969b0b = $this->env->getExtension("native_profiler");
        $__internal_c06b22016799372480a16f798a769863ad6f9c11c53b27db75cca48e75969b0b->enter($__internal_c06b22016799372480a16f798a769863ad6f9c11c53b27db75cca48e75969b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c06b22016799372480a16f798a769863ad6f9c11c53b27db75cca48e75969b0b->leave($__internal_c06b22016799372480a16f798a769863ad6f9c11c53b27db75cca48e75969b0b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1474797d8c00e6e7c57a06c5b03834697b735cd1af17c9b574ecfbf401b0721d = $this->env->getExtension("native_profiler");
        $__internal_1474797d8c00e6e7c57a06c5b03834697b735cd1af17c9b574ecfbf401b0721d->enter($__internal_1474797d8c00e6e7c57a06c5b03834697b735cd1af17c9b574ecfbf401b0721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1474797d8c00e6e7c57a06c5b03834697b735cd1af17c9b574ecfbf401b0721d->leave($__internal_1474797d8c00e6e7c57a06c5b03834697b735cd1af17c9b574ecfbf401b0721d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_88f4e45e7a2f10002ee002b73314ee8ff5fae7de6669491880b1396d2c5c78f2 = $this->env->getExtension("native_profiler");
        $__internal_88f4e45e7a2f10002ee002b73314ee8ff5fae7de6669491880b1396d2c5c78f2->enter($__internal_88f4e45e7a2f10002ee002b73314ee8ff5fae7de6669491880b1396d2c5c78f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_88f4e45e7a2f10002ee002b73314ee8ff5fae7de6669491880b1396d2c5c78f2->leave($__internal_88f4e45e7a2f10002ee002b73314ee8ff5fae7de6669491880b1396d2c5c78f2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_794ffe4065b50d1ef682a7c3023c1924331de2ace9889210c38012afc8e1ad32 = $this->env->getExtension("native_profiler");
        $__internal_794ffe4065b50d1ef682a7c3023c1924331de2ace9889210c38012afc8e1ad32->enter($__internal_794ffe4065b50d1ef682a7c3023c1924331de2ace9889210c38012afc8e1ad32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_794ffe4065b50d1ef682a7c3023c1924331de2ace9889210c38012afc8e1ad32->leave($__internal_794ffe4065b50d1ef682a7c3023c1924331de2ace9889210c38012afc8e1ad32_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99107e3c36c24338b6eda67e29e04fa0efd520830683022d9e55033c5951aaa9 = $this->env->getExtension("native_profiler");
        $__internal_99107e3c36c24338b6eda67e29e04fa0efd520830683022d9e55033c5951aaa9->enter($__internal_99107e3c36c24338b6eda67e29e04fa0efd520830683022d9e55033c5951aaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_99107e3c36c24338b6eda67e29e04fa0efd520830683022d9e55033c5951aaa9->leave($__internal_99107e3c36c24338b6eda67e29e04fa0efd520830683022d9e55033c5951aaa9_prof);

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
