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
        echo "<div class=\"site-wrapper\">

      <div class=\"site-wrapper-inner\">

        <div class=\"cover-container\">

          <div class=\"masthead clearfix\">
            <div class=\"inner\">
              <h1 class=\"masthead-brand\">ODYSSEUS</h1>
              <ul class=\"nav masthead-nav\">
                <li class=\"active\"><a href=\"#\">Accueil</a></li>
                <li><a target=\"_new\" href=\"https://drive.google.com/file/d/0BwyUbWdxN8kKVUJVMlB1SzdrUkU/edit?usp=sharing\">Cahier de charge</a></li>
                <li><a href=\"#\">Contact</a></li>
              </ul>
            </div>
          </div>

          <div class=\"inner cover\">
            <h1 class=\"cover-heading\">Projet IP-Formation</h1>
            <p class=\"lead\">Nous allons faire un projet en utilisant de la merde.</p>
            <p class=\"lead\">
              <a target=\"_new\" href=\"https://drive.google.com/file/d/0BwyUbWdxN8kKVUJVMlB1SzdrUkU/edit?usp=sharing\" class=\"btn btn-lg btn-default\">Learn more</a>
            </p>
          </div>

          <div class=\"mastfoot\">
            <div class=\"inner\">
              <p>&copy;2014 eLabs&reg;is a registered trademark of FUCK IE CORPORATION. All Rights Reserved.</p>
            </div>
          </div>

        </div>

      </div>

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
