<?php

/* pay.html.twig */
class __TwigTemplate_b4267d8d94d30c1fa0a4f320eb440e48e9395aa2722a8793c4c8e3d1083f49e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "pay.html.twig", 1);
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
        echo "    <form action=\"https://sep.shaparak.ir/Payment.aspx\" method=\"post\">
        Amount: <input type=\"text\" name=\"Amount\"><br>
        ResNum: <input type=\"text\" name=\"lastname\"><br>
        MID: <input type=\"text\" name=\"MID\" value=\"10002741\"><br>
        Redirect: <input type=\"text\" name=\"RedirectURL\" value=\"\"><br>

        <input type=\"submit\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "pay.html.twig";
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
/*     <form action="https://sep.shaparak.ir/Payment.aspx" method="post">*/
/*         Amount: <input type="text" name="Amount"><br>*/
/*         ResNum: <input type="text" name="lastname"><br>*/
/*         MID: <input type="text" name="MID" value="10002741"><br>*/
/*         Redirect: <input type="text" name="RedirectURL" value=""><br>*/
/* */
/*         <input type="submit">*/
/*     </form>*/
/* {% endblock %}*/
