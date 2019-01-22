<?php

/* layout.html */
class __TwigTemplate_8f848478ad8d6a96e80027f3b12bcab86ac75fd1a2e296a50a2e54949df1a8e6 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
</head>
<body>
<header>header</header>
<content>
    ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "</content>

<footer>footer</footer>
</body>
</html>";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  40 => 9,  32 => 12,  30 => 9,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
</head>
<body>
<header>header</header>
<content>
    {% block content %}

    {% endblock %}
</content>

<footer>footer</footer>
</body>
</html>", "layout.html", "/Users/sunshibao/Desktop/www/keen/app/view/layout.html");
    }
}
