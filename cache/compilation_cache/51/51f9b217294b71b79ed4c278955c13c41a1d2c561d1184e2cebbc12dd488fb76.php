<?php

/* register.html.twig */
class __TwigTemplate_1b85109a1361d4ab65c4453166c7e1ee105a4ceb3a565f4e281ee73fdd318d0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register.html.twig", 1);
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
        Firstname: <input type=\"text\" name=\"firstname\"><br>
        Lastname: <input type=\"text\" name=\"lastname\"><br>
        Email: <input type=\"text\" name=\"email\"><br>
        Password: <input type=\"password\" name=\"password\"><br>
        Confirm Password: <input type=\"password\" name=\"cpassword\"><br>
        <input type=\"submit\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
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
/*         Firstname: <input type="text" name="firstname"><br>*/
/*         Lastname: <input type="text" name="lastname"><br>*/
/*         Email: <input type="text" name="email"><br>*/
/*         Password: <input type="password" name="password"><br>*/
/*         Confirm Password: <input type="password" name="cpassword"><br>*/
/*         <input type="submit">*/
/*     </form>*/
/* {% endblock %}*/
