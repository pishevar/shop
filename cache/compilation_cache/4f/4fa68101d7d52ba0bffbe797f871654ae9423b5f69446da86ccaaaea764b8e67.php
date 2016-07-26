<?php

/* admin/products/category-create.html.twig */
class __TwigTemplate_609fa79a9a8078b719c68cc5cb87f63b5bbffbf992aa1f25891bb21024bf384e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/products/category-create.html.twig", 1);
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
    <form action=\"\" method=\"post\">
        ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["parentName"]) ? $context["parentName"] : null), "html", null, true);
        echo "<br>

        <label>
            نام دسته:
            <input type=\"text\" name=\"name\">
        </label><br>

        <input type=\"submit\" value=\"ذخیره\" >

    </form>


";
    }

    public function getTemplateName()
    {
        return "admin/products/category-create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "admin/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* */
/*     <form action="" method="post">*/
/*         {{parentName}}<br>*/
/* */
/*         <label>*/
/*             نام دسته:*/
/*             <input type="text" name="name">*/
/*         </label><br>*/
/* */
/*         <input type="submit" value="ذخیره" >*/
/* */
/*     </form>*/
/* */
/* */
/* {% endblock %}*/
