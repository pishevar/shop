<?php

/* admin/products/create.html.twig */
class __TwigTemplate_541bac325edbe9e7a445c1cbd46750d2270058474f3b6d72e00deab2bc97a458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/products/create.html.twig", 1);
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
        echo "    <form action=\"\" method=\"post\">
    <table border=\"1\" align=\"center\">
        <tr>
            <td align=\"center\">
        <label>
            نام محصول:
            <input type=\"text\" name=\"name\">
        </label><br>
            </td>
    </tr>
    <tr>
         <td align=\"center\">
        
        <label>
            دسته:
            <select name=\"categories[]\" multiple=\"\">
                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 21
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "</option>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </select>
        </label><br>
        </td>
    </tr>
    <tr>
         <td align=\"center\">
        
        <label>
            SKU:
            <input type=\"text\" name=\"sku\">
        </label><br>
        <label>
            </td>
    </tr>
    <tr>
         <td align=\"center\">
            قیمت:
            <input type=\"text\" name=\"price\">
        </label><br>
        <label>
            </td>
    </tr> 
    <tr>
        <td align=\"center\">
            تعداد:
            <input type=\"text\" name=\"quantity\">
        </label><br>
        </td>
    </tr> 
     <tr>
         <td align=\"center\">
        <label>
            توضیحات:
            <input type=\"text\" name=\"description\">
        </label><br><br>
        </td>
    </tr> 
    <tr>
        <td align=\"center\">
        <input type=\"submit\" value=\"ذخیره\" >
 </td>
    </tr> 
    </form>

    </table>

";
    }

    public function getTemplateName()
    {
        return "admin/products/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <form action="" method="post">*/
/*     <table border="1" align="center">*/
/*         <tr>*/
/*             <td align="center">*/
/*         <label>*/
/*             نام محصول:*/
/*             <input type="text" name="name">*/
/*         </label><br>*/
/*             </td>*/
/*     </tr>*/
/*     <tr>*/
/*          <td align="center">*/
/*         */
/*         <label>*/
/*             دسته:*/
/*             <select name="categories[]" multiple="">*/
/*                 {% for c in categories %}*/
/*                     <option value="{{c.id}}">{{c.name}}</option>*/
/* */
/*                 {% endfor%}*/
/*             </select>*/
/*         </label><br>*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*          <td align="center">*/
/*         */
/*         <label>*/
/*             SKU:*/
/*             <input type="text" name="sku">*/
/*         </label><br>*/
/*         <label>*/
/*             </td>*/
/*     </tr>*/
/*     <tr>*/
/*          <td align="center">*/
/*             قیمت:*/
/*             <input type="text" name="price">*/
/*         </label><br>*/
/*         <label>*/
/*             </td>*/
/*     </tr> */
/*     <tr>*/
/*         <td align="center">*/
/*             تعداد:*/
/*             <input type="text" name="quantity">*/
/*         </label><br>*/
/*         </td>*/
/*     </tr> */
/*      <tr>*/
/*          <td align="center">*/
/*         <label>*/
/*             توضیحات:*/
/*             <input type="text" name="description">*/
/*         </label><br><br>*/
/*         </td>*/
/*     </tr> */
/*     <tr>*/
/*         <td align="center">*/
/*         <input type="submit" value="ذخیره" >*/
/*  </td>*/
/*     </tr> */
/*     </form>*/
/* */
/*     </table>*/
/* */
/* {% endblock %}*/
