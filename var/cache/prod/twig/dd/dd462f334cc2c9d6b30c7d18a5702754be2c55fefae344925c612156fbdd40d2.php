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

/* author/new.html.twig */
class __TwigTemplate_dc0191cfbdc2936cb66adabc7959b58b88d47abefb3daa9d9a3ed9b7579d755b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "author/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"container no-gutters\" style=\"margin-bottom: 15px\">
\t\t<div class=\"row justify-content-start align-items-center\">
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<h1>Créér un auteur</h1>
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"container no-gutters\" >
\t\t<div class=\"row justify-content-start align-items-center\">\t\t\t
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "\t\t\t
\t\t</div>
\t</div>\t
\t<div class=\"container no-gutters\" style=\"margin-top: 15px\">
\t\t<div class=\"row justify-content-start align-items-center\">
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"create\" value=\"Sauvegarder\" />
\t\t\t</div>
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_index");
        echo "\" role=\"button\">Annuler</a>
\t\t\t</div>
\t\t</div>
\t</div>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/forms.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "author/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 31,  92 => 30,  85 => 27,  78 => 23,  66 => 14,  60 => 11,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "author/new.html.twig", "C:\\xampp\\htdocs\\catalogue-livre\\app\\Resources\\views\\author\\new.html.twig");
    }
}
