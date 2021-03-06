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

/* default/index.html.twig */
class __TwigTemplate_99a8d62648ed68d7ba34dda2cc268129fb6f7ff4817eb4c4380dbde8db753912 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link href=\"carousel.css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
    <div class=\"col-md-12\">
    ";
        // line 17
        echo " <nav class=\"navbar navbar-default bd-green\">
 \t\t\t<ul class=\"nav\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_index");
        echo "\">Livres</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_index");
        echo "\">Auteurs</a>
\t\t\t\t</li>
        <form class=\"form-inline my-2 my-lg-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Rechercher\" aria-label=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Rechercher</button>
        </form>
\t\t\t</ul>

      </nav>
\t\t\t<h3 class=\"text-center\">
\t\t\t\t<b>Projet Developemment Web Avancé </b><br>Catalogue de livres
\t\t\t</h3>

        <img alt=\"Brand\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bibliotheque.jpg"), "html", null, true);
        echo "\" width=100% height=40%>

\t\t\t  ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 44
        echo "\t
\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.js"), "html", null, true);
        echo "\"></script> 
\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script>
            function myFunction() {
  // Declare variables
             var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName(\"td\")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = \"\";
      } else {
        tr[i].style.display = \"none\";
      }
    }
  }
}
</script>
     
        ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "
\t
\t<!-- Footer -->
<footer class=\"bg-light text-center text-lg-start navbar-fixed-bottom \">

  <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
    
    <p><b>© 2021 Copyright Developpé Par : </b><br>
\t<a href=\"mailto:houssemeddin.labidi@esen.tn\" rel=\"nofollow\">Houssem Eddin LABIDI </a> & <a href=\"mailto:jamel.haddouchi@esen.tn\" rel=\"nofollow\">Jamel Hadouchi</a></p>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Catalogue de livres";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "        
        ";
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 71,  184 => 42,  180 => 41,  174 => 9,  167 => 5,  147 => 72,  145 => 71,  117 => 46,  113 => 45,  110 => 44,  108 => 41,  103 => 39,  87 => 26,  81 => 23,  75 => 20,  70 => 17,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/index.html.twig", "C:\\xampp\\htdocs\\catalogue-livre\\app\\Resources\\views\\default\\index.html.twig");
    }
}
