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
        $__internal_18c19d42bb843b45a3a9a907883e6cd6c858bf1fcd72eae430697ba7624a8985 = $this->env->getExtension("native_profiler");
        $__internal_18c19d42bb843b45a3a9a907883e6cd6c858bf1fcd72eae430697ba7624a8985->enter($__internal_18c19d42bb843b45a3a9a907883e6cd6c858bf1fcd72eae430697ba7624a8985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_18c19d42bb843b45a3a9a907883e6cd6c858bf1fcd72eae430697ba7624a8985->leave($__internal_18c19d42bb843b45a3a9a907883e6cd6c858bf1fcd72eae430697ba7624a8985_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_708a9a1c5ae5549c86da2aa9c1aefb103e55c38e70e8509bd38cd5c196b3b966 = $this->env->getExtension("native_profiler");
        $__internal_708a9a1c5ae5549c86da2aa9c1aefb103e55c38e70e8509bd38cd5c196b3b966->enter($__internal_708a9a1c5ae5549c86da2aa9c1aefb103e55c38e70e8509bd38cd5c196b3b966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_708a9a1c5ae5549c86da2aa9c1aefb103e55c38e70e8509bd38cd5c196b3b966->leave($__internal_708a9a1c5ae5549c86da2aa9c1aefb103e55c38e70e8509bd38cd5c196b3b966_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1acd962ecc9bc645404f01b402e5566d48cd7fc8b77d9bb9e7f58cac75c711f5 = $this->env->getExtension("native_profiler");
        $__internal_1acd962ecc9bc645404f01b402e5566d48cd7fc8b77d9bb9e7f58cac75c711f5->enter($__internal_1acd962ecc9bc645404f01b402e5566d48cd7fc8b77d9bb9e7f58cac75c711f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1acd962ecc9bc645404f01b402e5566d48cd7fc8b77d9bb9e7f58cac75c711f5->leave($__internal_1acd962ecc9bc645404f01b402e5566d48cd7fc8b77d9bb9e7f58cac75c711f5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2221df167013f8d1a413b0ad726df77792a2be052bdcf57fe0020e0103b0e721 = $this->env->getExtension("native_profiler");
        $__internal_2221df167013f8d1a413b0ad726df77792a2be052bdcf57fe0020e0103b0e721->enter($__internal_2221df167013f8d1a413b0ad726df77792a2be052bdcf57fe0020e0103b0e721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2221df167013f8d1a413b0ad726df77792a2be052bdcf57fe0020e0103b0e721->leave($__internal_2221df167013f8d1a413b0ad726df77792a2be052bdcf57fe0020e0103b0e721_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30b65da8db4eb7277b59bfa76d059991d7c4d49c3139950948215bb971fab31d = $this->env->getExtension("native_profiler");
        $__internal_30b65da8db4eb7277b59bfa76d059991d7c4d49c3139950948215bb971fab31d->enter($__internal_30b65da8db4eb7277b59bfa76d059991d7c4d49c3139950948215bb971fab31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30b65da8db4eb7277b59bfa76d059991d7c4d49c3139950948215bb971fab31d->leave($__internal_30b65da8db4eb7277b59bfa76d059991d7c4d49c3139950948215bb971fab31d_prof);

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
