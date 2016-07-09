<?php

/* index.html.twig */
class __TwigTemplate_7c6d160e2ed8d6ffd20dee98437a23a776f69749f392a372f76242c91edd43d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>HELLO</h1>
";
        // line 2
        if (((isset($context["eradat"]) ? $context["eradat"] : null) == 1)) {
            // line 3
            echo "
hello ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <h1>HELLO</h1>*/
/* {% if eradat==1 %}*/
/* */
/* hello {{name}}*/
/* */
/* {%endif %}*/
