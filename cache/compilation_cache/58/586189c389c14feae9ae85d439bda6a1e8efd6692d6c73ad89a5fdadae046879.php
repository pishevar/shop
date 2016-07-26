<?php

/* cart.html.twig */
class __TwigTemplate_79d0776ad552a9471f251429a0c4ab019f4eea1a0f8127de3b20eeef405378d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "cart.html.twig", 1);
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
        echo "
    <table border=\"1\">
        <tr>
            <td>#</td>
            <td>نام</td>
            <td>قیمت</td>
            <td>تعداد</td>
            <td>قیمت کل</td>
        </tr>
        ";
        // line 13
        $context["totalPrice"] = 0;
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "get", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["c"], "price", array())), "html", null, true);
            echo "تومان</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "count", array()), "html", null, true);
            echo " (
                    ";
            // line 20
            if (($this->getAttribute($context["c"], "count", array()) < $this->getAttribute($context["c"], "quantity", array()))) {
                // line 21
                echo "                        <a href=\"add2cart.php?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "\">+</a>
                    ";
            } else {
                // line 23
                echo "                        +
                    ";
            }
            // line 25
            echo "                    /
                    ";
            // line 26
            if (($this->getAttribute($context["c"], "count", array()) > 0)) {
                // line 27
                echo "                        <a href=\"add2cart.php?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                echo "&count=-1\">-</a>
                    ";
            } else {
                // line 29
                echo "                        -
                    ";
            }
            // line 31
            echo "                    )
                </td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, ($this->getAttribute($context["c"], "count", array()) * twig_number_format_filter($this->env, $this->getAttribute($context["c"], "price", array()))), "html", null, true);
            echo "تومان</td>
            </tr>
            ";
            // line 35
            $context["totalPrice"] = ((isset($context["totalPrice"]) ? $context["totalPrice"] : null) + ($this->getAttribute($context["c"], "count", array()) * $this->getAttribute($context["c"], "price", array())));
            // line 36
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>
    قیمت نهایی: ";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null)), "html", null, true);
        echo "تومان
    <br>
    <br>

    ";
        // line 42
        if (array_key_exists("user", $context)) {
            // line 43
            echo "        <a href=\"checkout.php\">تایید نهایی</a>
    ";
        } else {
            // line 45
            echo "        جهت تایید نهایی وارد شودید
    ";
        }
    }

    public function getTemplateName()
    {
        return "cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 45,  145 => 43,  143 => 42,  136 => 38,  133 => 37,  119 => 36,  117 => 35,  112 => 33,  108 => 31,  104 => 29,  98 => 27,  96 => 26,  93 => 25,  89 => 23,  83 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  62 => 15,  44 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <table border="1">*/
/*         <tr>*/
/*             <td>#</td>*/
/*             <td>نام</td>*/
/*             <td>قیمت</td>*/
/*             <td>تعداد</td>*/
/*             <td>قیمت کل</td>*/
/*         </tr>*/
/*         {% set totalPrice = 0 %}*/
/*         {% for c in cart.get() %}*/
/*             <tr>*/
/*                 <td>{{loop.index}}</td>*/
/*                 <td>{{c.name}}</td>*/
/*                 <td>{{c.price|number_format}}تومان</td>*/
/*                 <td>{{c.count}} (*/
/*                     {% if c.count < c.quantity %}*/
/*                         <a href="add2cart.php?id={{c.id}}">+</a>*/
/*                     {% else %}*/
/*                         +*/
/*                     {% endif %}*/
/*                     /*/
/*                     {% if c.count > 0 %}*/
/*                         <a href="add2cart.php?id={{c.id}}&count=-1">-</a>*/
/*                     {% else %}*/
/*                         -*/
/*                     {% endif %}*/
/*                     )*/
/*                 </td>*/
/*                 <td>{{c.count * c.price|number_format}}تومان</td>*/
/*             </tr>*/
/*             {% set totalPrice = totalPrice + (c.count * c.price) %}*/
/*         {% endfor %}*/
/*     </table>*/
/*     قیمت نهایی: {{totalPrice|number_format}}تومان*/
/*     <br>*/
/*     <br>*/
/* */
/*     {% if user is defined %}*/
/*         <a href="checkout.php">تایید نهایی</a>*/
/*     {% else %}*/
/*         جهت تایید نهایی وارد شودید*/
/*     {% endif %}*/
/* {% endblock %}*/
