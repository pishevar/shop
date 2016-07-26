<?php

/* admin/products/view.html.twig */
class __TwigTemplate_6ed40093423ef841024b226f918c2b63cf683c9ec525eef0b527cf0f8b1a32b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/products/view.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</div>

    <div>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array()), "html", null, true);
        echo "</div>
    ";
        // line 7
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "categories", array())) > 0)) {
            // line 8
            echo "        <div>
            <ul>
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 11
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </ul>
        </div>
    ";
        } else {
            // line 16
            echo "        دسته ای انتخاب نشده
    ";
        }
        // line 18
        echo "    <div>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "</div>
    <div>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo "</div>
    <div>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity", array()), "html", null, true);
        echo "</div>
    <div>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "status", array()), "html", null, true);
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "admin/products/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  78 => 20,  74 => 19,  69 => 18,  65 => 16,  60 => 13,  51 => 11,  47 => 10,  43 => 8,  41 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <div>{{product.name}}</div>*/
/* */
/*     <div>{{product.name}}</div>*/
/*     {% if product.categories|length >0 %}*/
/*         <div>*/
/*             <ul>*/
/*                 {% for c in product.categories %}*/
/*                     <li>{{c.name}}</li>*/
/*                     {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     {% else %}*/
/*         دسته ای انتخاب نشده*/
/*     {% endif %}*/
/*     <div>{{product.description}}</div>*/
/*     <div>{{product.price}}</div>*/
/*     <div>{{product.quantity}}</div>*/
/*     <div>{{product.status}}</div>*/
/* */
/* {% endblock %}*/
