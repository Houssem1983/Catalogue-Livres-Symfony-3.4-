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

/* book/show.html.twig */
class __TwigTemplate_f8c90ee86cc2b3ce698193a37bc4ea36770b791a16dcf4d010fa56ca6b17e529 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "book/show.html.twig", 1);
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
\t\t\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
\t\t\t</div>
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<a class=\"btn btn-success\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" role=\"button\">Éditer</a> 
\t\t\t</div>
\t\t  </div>
\t</div>    
\t<div class=\"container no-gutters\">
\t\t<div class=\"row justify-content-start align-items-top\">
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/covers/" . twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "cover", [], "any", false, false, false, 17))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "cover", [], "any", false, false, false, 17), "html", null, true);
        echo "\" />
\t\t\t</div>
\t\t\t<div class=\"col-md-auto\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Année de L'edition</th>
\t\t\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "publishingYear", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>N° ISBN</th>
\t\t\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "isbn", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nombre de pages</th>
\t\t\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "pageCount", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Auteur</th>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["book"] ?? null), "authors", [], "any", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["author"], "getFullName", [], "method", false, false, false, 38), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>\t\t\t\t\t
\t\t\t</div>\t\t\t
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "book/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  109 => 38,  105 => 37,  97 => 32,  90 => 28,  83 => 24,  71 => 17,  61 => 10,  55 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "book/show.html.twig", "C:\\xampp\\htdocs\\catalogue-livre\\app\\Resources\\views\\book\\show.html.twig");
    }
}
