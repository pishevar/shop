<?php

/* admin/products/index.html.twig */
class __TwigTemplate_5fe6bd2798239a6df6f7e262b5b2b837a5a3b599ee4bc644ddb34e733bae7c3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/products/index.html.twig", 1);
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
        echo "   
    <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/admin/products/category-list.php\">لیست دسته ها</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true);
        echo "/index.php\">لیست محصولات</a>
    <table border=\"2\" align=\"center\">
        <tr>
            <th>#</th>
            <th>نام </th>
            <th>دسته </th>
            <th>قیمت</th>
            <th>مقدار</th>
            <th>وضعیت</th>
        </tr>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                <td><a href=\"view.php?id=";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</a></td>
                <td></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "quantity", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "status", array()), "html", null, true);
            echo "</td>
            </tr>


        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </table>

";
    }

    public function getTemplateName()
    {
        return "admin/products/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  90 => 23,  86 => 22,  82 => 21,  75 => 19,  71 => 18,  68 => 17,  51 => 16,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*    */
/*     <a href="{{path}}/admin/products/category-list.php">لیست دسته ها</a>*/
/*     <a href="{{path}}/index.php">لیست محصولات</a>*/
/*     <table border="2" align="center">*/
/*         <tr>*/
/*             <th>#</th>*/
/*             <th>نام </th>*/
/*             <th>دسته </th>*/
/*             <th>قیمت</th>*/
/*             <th>مقدار</th>*/
/*             <th>وضعیت</th>*/
/*         </tr>*/
/*         {% for p in products %}*/
/*             <tr>*/
/*                 <td>{{loop.index}}</td>*/
/*                 <td><a href="view.php?id={{p.id}}">{{p.name}}</a></td>*/
/*                 <td></td>*/
/*                 <td>{{p.price}}</td>*/
/*                 <td>{{p.quantity}}</td>*/
/*                 <td>{{p.status}}</td>*/
/*             </tr>*/
/* */
/* */
/*         {% endfor %}*/
/*     </table>*/
/* */
/* {% endblock %}*/
