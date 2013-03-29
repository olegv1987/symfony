<?php

/* MocWeatherBundle:Default:index.html.twig */
class __TwigTemplate_6382ad96b4278669c15775a09b9025cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "city"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "MocWeatherBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
