<?php

/* admin/layout.html.twig */
class __TwigTemplate_322909a587ad76ae3ec942c8c9492a31240cc5f16868e748411cee51ab16a40a extends Twig_Template
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
    </head>
    <body>
        <div>
            <h1>مدیریت فروشگاه</h1>
        </div>
        <div>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/index.php\">محصولات</a>
            <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/create.php\">اضافه کردن محصول جدید</a>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/index.php\">بازگشت</a>
            <br>
            <br>
        </div>
        <div>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 22
            echo "                <div>
                    ";
            // line 23
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "        </div>

    </body>
</html>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  78 => 26,  70 => 29,  67 => 26,  58 => 23,  55 => 22,  51 => 21,  43 => 16,  39 => 15,  35 => 14,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html dir="rtl"> */
/*     <head>*/
/*         <title>Shop</title>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             <h1>مدیریت فروشگاه</h1>*/
/*         </div>*/
/*         <div>*/
/*             <a href="{{path}}/admin/products/index.php">محصولات</a>*/
/*             <a href="{{path}}/admin/products/create.php">اضافه کردن محصول جدید</a>*/
/*             <a href="{{path}}/admin/products/index.php">بازگشت</a>*/
/*             <br>*/
/*             <br>*/
/*         </div>*/
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
