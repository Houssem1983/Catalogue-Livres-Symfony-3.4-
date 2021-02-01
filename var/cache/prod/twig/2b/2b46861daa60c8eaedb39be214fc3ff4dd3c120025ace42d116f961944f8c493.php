<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Security/Collector/icon.svg */
class __TwigTemplate_ddd55336643019e5712a43e47200b49d3441c8926a214a6e26ae35845a2cb66a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M21,20.4V22H3v-1.6c0-3.7,2.4-6.9,5.8-8c-1.7-1.1-2.9-3-2.9-5.2c0-3.4,2.7-6.1,6.1-6.1s6.1,2.7,6.1,6.1c0,2.2-1.2,4.1-2.9,5.2C18.6,13.5,21,16.7,21,20.4z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@Security/Collector/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Security/Collector/icon.svg", "C:\\xampp\\htdocs\\catalogue-livre\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle\\Resources\\views\\Collector\\icon.svg");
    }
}
