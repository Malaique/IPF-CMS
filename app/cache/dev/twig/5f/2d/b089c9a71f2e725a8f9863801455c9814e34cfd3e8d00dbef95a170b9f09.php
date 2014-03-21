<?php

/* CMSBoutiqueBundle:Default:index.html.twig */
class __TwigTemplate_5f2db089c9a71f2e725a8f9863801455c9814e34cfd3e8d00dbef95a170b9f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"jumbotron\">
        <h1>Hello</h1>
        <p>Nullam ante est, ornare id ullamcorper quis, ultrices ac purus. Duis semper mattis turpis sit amet commodo. Nulla placerat leo vitae pulvinar auctor. Maecenas nec diam nisl. Pellentesque eleifend hendrerit vestibulum. Etiam eu purus sollicitudin, convallis sapien in, ultricies sapien. Nam bibendum venenatis commodo.</p>
        <p><a href=\"#\" class=\"btn btn-primary btn-lg\" role=\"button\">Learn more »</a></p>
      </div>
";
    }

    public function getTemplateName()
    {
        return "CMSBoutiqueBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  37 => 3,  29 => 2,);
    }
}
