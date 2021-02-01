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

/* author/edit.html.twig */
class __TwigTemplate_72e0d22139d83421ba6a1ed641453f0bca70cf00fd39c72094c3f1775736e54e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "author/edit.html.twig", 1);
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
\t\t\t\t<h1>Édition de l'auteur</h1>
\t\t\t</div>\t\t
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" name=\"delete\" value=\"Effacer\" />
\t\t\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
\t<div class=\"container no-gutters\" >
\t\t<div class=\"row justify-content-start align-items-center\">\t\t\t
\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "\t\t\t
\t\t</div>
\t</div>\t
\t<div class=\"container no-gutters\" style=\"margin-top: 15px\">
\t\t<div class=\"row justify-content-start align-items-center\">
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<input class=\"btn btn-success\" type=\"submit\" name=\"edit\" value=\"Sauvegarder\" />
\t\t\t</div>
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<a class=\"btn btn-outline-primary\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_index");
        echo "\" role=\"button\">Annuler</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
\t
";
    }

    // line 36
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/forms.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "author/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  104 => 36,  97 => 33,  89 => 28,  77 => 19,  71 => 16,  64 => 12,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "author/edit.html.twig", "C:\\xampp\\htdocs\\catalogue-livre\\app\\Resources\\views\\author\\edit.html.twig");
    }
}
