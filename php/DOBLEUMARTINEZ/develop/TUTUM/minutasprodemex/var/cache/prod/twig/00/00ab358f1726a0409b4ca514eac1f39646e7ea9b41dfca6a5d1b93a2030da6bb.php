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

/* minuta/minutas/detail-minuta.html.twig */
class __TwigTemplate_f730b32c2deb32feed2f552ba2234b0cc7160640b61b65535fd28e09b7a1c11a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tituloPagina' => [$this, 'block_tituloPagina'],
            'contenido' => [$this, 'block_contenido'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/layoutBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/minutas/detail-minuta.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tituloPagina($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
\t";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
\t<br><br>

\t<!-- TITULO Y FINTRO DE BUSUQEDA -->
\t<div id=\"fitro-busqueda-minuta\">
\t\t<h1><span>";
        // line 13
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " correspondiente a la junta del ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "fechaInicio", [], "any", false, false, false, 13), "d-m-Y"), "html", null, true);
        echo "</span></h1>
\t</div>

\t<br>
\t<hr>

\t<!-- TABLA DE MINUTA -->
\t";
        // line 20
        echo twig_include($this->env, $context, "minuta/minutas/minuta-only-data.html.twig");
        echo "

";
    }

    public function getTemplateName()
    {
        return "minuta/minutas/detail-minuta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  70 => 13,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/minutas/detail-minuta.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/minutas/detail-minuta.html.twig");
    }
}
