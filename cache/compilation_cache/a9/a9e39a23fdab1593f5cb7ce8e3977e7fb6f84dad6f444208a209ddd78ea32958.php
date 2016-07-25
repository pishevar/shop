<?php

/* login.html.twig */
class __TwigTemplate_9dfccc0e4c0bb90eca5c1cb67c498051b8a0c1bb22359ba1c0878f81b14d04b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ( !twig_test_empty((isset($context["message"]) ? $context["message"] : null))) {
            // line 5
            echo "        <strong>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</strong>
    ";
        }
        // line 7
        echo "    <form action=\"\" method=\"post\">
        Email: <input type=\"text\" name=\"email\"><br>
        Password: <input type=\"password\" name=\"password\"><br>
        <input type=\"submit\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {% if message is not empty %}*/
/*         <strong>{{message}}</strong>*/
/*     {% endif %}*/
/*     <form action="" method="post">*/
/*         Email: <input type="text" name="email"><br>*/
/*         Password: <input type="password" name="password"><br>*/
/*         <input type="submit">*/
/*     </form>*/
/* {% endblock %}*/
