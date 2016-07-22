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
        echo "
<html>
    <head>
        <title>MYSHOP</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <div>
            <h1> Header</h1>
        </div>
        <div>
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 14
            echo "    <div>
        ";
            // line 15
            echo twig_escape_filter($this->env, $context["m"], "html", null, true);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "            ";
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
        return array (  63 => 19,  60 => 18,  53 => 20,  50 => 18,  41 => 15,  38 => 14,  34 => 13,  20 => 1,);
    }
}
/* */
/* <html>*/
/*     <head>*/
/*         <title>MYSHOP</title>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             <h1> Header</h1>*/
/*         </div>*/
/*         <div>*/
/* {% for m in messages %}*/
/*     <div>*/
/*         {{m}}*/
/*     </div>*/
/*     {% endfor %}*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
