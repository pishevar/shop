<?php

/* layout.html.twig */
class __TwigTemplate_64a495d0831492dbac0b534137aca4de4cee7e4f3e05cfe2feeda22db1d2b06f extends Twig_Template
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
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "        </div>
    </body>
</html>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  44 => 14,  37 => 16,  35 => 14,  20 => 1,);
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
/* */
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
