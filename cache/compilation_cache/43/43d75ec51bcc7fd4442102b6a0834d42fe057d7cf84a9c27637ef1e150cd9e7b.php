<?php

/* layout.html.twig */
class __TwigTemplate_983500945b3c37e230aa2490e03251dadd37b35f1a43ee196ab3b83cd16be61f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html dir=\"rtl\">
    <head>
        <title>Shop</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
    </head>
    <body>
        <div>
            <h1> فروشگاه عکس برتر</h1>
        </div>

        <hr>
        <div>
            ";
        // line 17
        if (($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "getItemCount", array()) > 0)) {
            // line 18
            echo "                <a href=\"cart.php\">Cart: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "getItemCount", array(), "method"), "html", null, true);
            echo "</a>
            ";
        }
        // line 20
        echo "
            ";
        // line 21
        if (array_key_exists("user", $context)) {
            // line 22
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/logout.php\">خروج</a>
            ";
        } else {
            // line 24
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/login.php\">ورود به سايت</a>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
            echo "/register.php\">ثبت نام در سايت</a>
            ";
        }
        // line 27
        echo "        </div>
        <hr>
        <div>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 31
            echo "                <div>
                    ";
            // line 32
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "        </div>

    </body>
</html>
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  102 => 35,  94 => 38,  91 => 35,  82 => 32,  79 => 31,  75 => 30,  70 => 27,  65 => 25,  60 => 24,  54 => 22,  52 => 21,  49 => 20,  43 => 18,  41 => 17,  29 => 8,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html dir="rtl">*/
/*     <head>*/
/*         <title>Shop</title>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link href="{{path}}/css/style.css" rel="stylesheet" type="text/css">*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             <h1> فروشگاه عکس برتر</h1>*/
/*         </div>*/
/* */
/*         <hr>*/
/*         <div>*/
/*             {% if cart.getItemCount>0 %}*/
/*                 <a href="cart.php">Cart: {{cart.getItemCount()}}</a>*/
/*             {% endif %}*/
/* */
/*             {% if user is defined %}*/
/*                 <a href="{{path}}/logout.php">خروج</a>*/
/*             {% else %}*/
/*                 <a href="{{path}}/login.php">ورود به سايت</a>*/
/*                 <a href="{{path}}/register.php">ثبت نام در سايت</a>*/
/*             {% endif %}*/
/*         </div>*/
/*         <hr>*/
/*         <div>*/
/*             {% for m in messages %}*/
/*                 <div>*/
/*                     {{m}}*/
/*                 </div>*/
/*             {% endfor %}*/
/*             {% block content %}*/
/* */
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     </body>*/
/* </html>*/
/* */
