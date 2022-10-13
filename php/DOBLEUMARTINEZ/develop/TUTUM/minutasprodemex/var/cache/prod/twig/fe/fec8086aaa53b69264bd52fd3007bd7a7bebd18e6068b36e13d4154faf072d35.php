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

/* layout/login.html.twig */
class __TwigTemplate_c93184b2e4a8f4e65922d5308fe0e6b180a39d945f68249b925ddf6d2e94834c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contenido' => [$this, 'block_contenido'],
            'piePagina' => [$this, 'block_piePagina'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>

\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<meta name=\"theme-color\" content=\"#111\">
\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />

\t\t<title>
\t\t\tPRODEMEX | INICIO DE SESION
\t\t</title>

\t\t<!-- icons CDN -->
  \t\t<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  \t\t<!-- BOOTSTRAP -->
  \t\t<link href=\"https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
  \t\t<link href=\"https://getbootstrap.com/docs/5.0/assets/css/docs.css\" rel=\"stylesheet\">

  \t\t<!-- Estilos css  -->
  \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">

  \t\t<!-- ALERTAS -->
    \t";
        // line 28
        $this->loadTemplate("layout/alertas.html.twig", "layout/login.html.twig", 28)->display($context);
        // line 29
        echo "
\t</head>

\t<body>
\t\t
\t\t<div id=\"head\">
\t\t\t
\t\t\t<img id=\"logo-login\" src='";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/prodemex.png"), "html", null, true);
        echo "'>
\t
\t\t</div>

\t\t<br><br>

\t\t<section id=\"content\">
\t\t\t<div id=\"formularios\">
\t\t\t\t<center>
\t\t\t\t\t<h2>Iniciar sesión</h2>
\t\t\t\t\t";
        // line 46
        $this->displayBlock('contenido', $context, $blocks);
        // line 47
        echo "\t\t\t\t</center>
\t\t\t</div>
\t\t</section>

\t\t<br><br>

\t\t<footer id=\"footer\" style=\"position:fixed; bottom:0; width:100%;\">
\t\t\t";
        // line 54
        $this->displayBlock('piePagina', $context, $blocks);
        // line 55
        echo "\t\t\t<p>© Copyright2022 PRODEMEX Todos los derechos reservados.</p>
\t\t</footer>

\t</body>

\t<!-- javascript -->
  \t<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/js.js"), "html", null, true);
        echo "\" ></script>

  \t<!-- BOOTSTRAP JS -->
  \t<script src=\"https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js\"></script>
\t<script src=\"https://getbootstrap.com/docs/5.0/assets/js/docs.min.js\"></script>

</html>";
    }

    // line 46
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_piePagina($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  134 => 46,  122 => 61,  114 => 55,  112 => 54,  103 => 47,  101 => 46,  88 => 36,  79 => 29,  77 => 28,  71 => 25,  67 => 24,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/login.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/layout/login.html.twig");
    }
}
