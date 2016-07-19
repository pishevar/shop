<?php

/* password-reset.html.twig */
class __TwigTemplate_063fc07abd824ea5090332b5dcd4d31c43d21b2a3f4539c9a167de12dc9b8601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "password-reset.html.twig", 1);
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if ( !twig_test_empty((isset($context["message"]) ? $context["message"] : null))) {
            // line 4
            echo "        <strong> ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "</strong>
    ";
        }
        // line 6
        echo "    <form action=\"\" method=\"post\"> 
        password:<input type=\"password\" name=\"password\"><br>
        Confirm password:<input type=\"password\" name=\"cpassword\"><br>
      
        <input type=\"submit\">
    </form>

";
    }

    public function getTemplateName()
    {
        return "password-reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* {% block content %}*/
/*     {%if message is not empty %}*/
/*         <strong> {{message}}</strong>*/
/*     {% endif %}*/
/*     <form action="" method="post"> */
/*         password:<input type="password" name="password"><br>*/
/*         Confirm password:<input type="password" name="cpassword"><br>*/
/*       */
/*         <input type="submit">*/
/*     </form>*/
/* */
/* {% endblock %}*/
