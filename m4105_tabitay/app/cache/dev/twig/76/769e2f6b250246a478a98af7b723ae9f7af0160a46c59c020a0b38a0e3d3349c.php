<?php

/* s4tabitayVitrineBundle:Default:footer.html.twig */
class __TwigTemplate_fc58c93e9b65f47dee7cd79eb440412c6c9b1da559d6cc0cf57f7ed612d06acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_831a8bcfe1a794b5a3a5df24f0580eb8b3612b8553b21483aa6bc701522f6374 = $this->env->getExtension("native_profiler");
        $__internal_831a8bcfe1a794b5a3a5df24f0580eb8b3612b8553b21483aa6bc701522f6374->enter($__internal_831a8bcfe1a794b5a3a5df24f0580eb8b3612b8553b21483aa6bc701522f6374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "s4tabitayVitrineBundle:Default:footer.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_831a8bcfe1a794b5a3a5df24f0580eb8b3612b8553b21483aa6bc701522f6374->leave($__internal_831a8bcfe1a794b5a3a5df24f0580eb8b3612b8553b21483aa6bc701522f6374_prof);

    }

    public function block_footer($context, array $blocks = array())
    {
        $__internal_9db754289f9c5a65ef8a15c1ec06f15b1d68c55437b95ad1b1fcbe81fa6cf973 = $this->env->getExtension("native_profiler");
        $__internal_9db754289f9c5a65ef8a15c1ec06f15b1d68c55437b95ad1b1fcbe81fa6cf973->enter($__internal_9db754289f9c5a65ef8a15c1ec06f15b1d68c55437b95ad1b1fcbe81fa6cf973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 4
        echo "    <footer class=\"page-footer grey darken-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col l6 s12\">
                    <h5 class=\"white-text\">Footer Content</h5>
                    <p class=\"grey-text text-lighten-4\">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class=\"col l4 offset-l2 s12\">
                    <h5 class=\"white-text\">Links</h5>
                    <ul>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 1</a></li>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 2</a></li>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 3</a></li>
                        <li><a class=\"grey-text text-lighten-3\" href=\"#!\">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"footer-copyright\">
            <div class=\"container\">
                © 2014 Copyright Text
                <a class=\"grey-text text-lighten-4 right\" href=\"#!\">More Links</a>
            </div>
        </div>
    </footer>
";
        
        $__internal_9db754289f9c5a65ef8a15c1ec06f15b1d68c55437b95ad1b1fcbe81fa6cf973->leave($__internal_9db754289f9c5a65ef8a15c1ec06f15b1d68c55437b95ad1b1fcbe81fa6cf973_prof);

    }

    public function getTemplateName()
    {
        return "s4tabitayVitrineBundle:Default:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {% block footer %}*/
/*     <footer class="page-footer grey darken-3">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col l6 s12">*/
/*                     <h5 class="white-text">Footer Content</h5>*/
/*                     <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>*/
/*                 </div>*/
/*                 <div class="col l4 offset-l2 s12">*/
/*                     <h5 class="white-text">Links</h5>*/
/*                     <ul>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>*/
/*                         <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="footer-copyright">*/
/*             <div class="container">*/
/*                 © 2014 Copyright Text*/
/*                 <a class="grey-text text-lighten-4 right" href="#!">More Links</a>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
