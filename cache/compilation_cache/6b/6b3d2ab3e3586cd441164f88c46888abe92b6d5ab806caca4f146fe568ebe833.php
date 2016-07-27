<?php

/* index.html.twig */
class __TwigTemplate_001d4afa73e5d113b6538ced87febf51b7b0db55f43b16226b6218409887a7e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 6
            echo "        <div class=\"prd\" align=\"center\">
            <h3>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</h3>
            <div align=\"center\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
            echo "</div>
            <br>
            <a href=\"add2cart.php?id=";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">خرید</a>
            <a href=\"view.php?id=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">نمایش محصول</a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 14,  54 => 11,  50 => 10,  45 => 8,  41 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     {% for p in products %}*/
/*         <div class="prd" align="center">*/
/*             <h3>{{p.name}}</h3>*/
/*             <div align="center">{{p.price}}</div>*/
/*             <br>*/
/*             <a href="add2cart.php?id={{p.id}}">خرید</a>*/
/*             <a href="view.php?id={{p.id}}">نمایش محصول</a>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
