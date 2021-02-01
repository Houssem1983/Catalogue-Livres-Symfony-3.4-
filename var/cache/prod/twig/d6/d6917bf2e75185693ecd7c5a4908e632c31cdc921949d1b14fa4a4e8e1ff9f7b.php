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

/* book/edit.html.twig */
class __TwigTemplate_25912252861cd19e2ba029763ec6e178420274295300f4527ae4b2bd14b10761 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "book/edit.html.twig", 1);
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
\t\t\t\t<h1></h1>
\t\t\t\t<h1 class=\"ml1\">
  <span class=\"text-wrapper\">
    <span class=\"line line1\"></span>
    <span class=\"letters\">Modifier un livre</span>
    <span class=\"line line2\"></span>
  </span>
</h1>


\t\t\t</div>\t\t
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
\t\t\t\t<input class=\"btn btn-outline-danger\" type=\"submit\" name=\"delete\" value=\"Effacer\" />
\t\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
\t<div class=\"container no-gutters\" >
\t\t<div class=\"row justify-content-start align-items-center\">\t\t\t
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "\t\t\t
\t\t</div>
\t</div>\t
\t<div class=\"container no-gutters\" style=\"margin-top: 15px\">
\t\t<div class=\"row justify-content-start align-items-center\">
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" name=\"edit\" value=\"Sauvegarder\" />
\t\t\t</div>
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<a class=\"btn btn-outline-primary\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_index");
        echo "\" role=\"button\">Annuler</a>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
\t
\t\t
";
    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/forms.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "book/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  114 => 46,  106 => 42,  98 => 37,  86 => 28,  80 => 25,  73 => 21,  68 => 19,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "book/edit.html.twig", "C:\\xampp\\htdocs\\catalogue-livre\\app\\Resources\\views\\book\\edit.html.twig");
    }
}
