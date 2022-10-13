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

/* home/index.html.twig */
class __TwigTemplate_c59069495322c0a5493d32506550d844ef39306c2527ad3e3158352dc49569df extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "home/index.html.twig", 1);
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
\t<!-- BARRA DE BUSQUEDA -->
\t<div id=\"fitro-busqueda-minuta\">
\t\t<h1><span>";
        // line 11
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " correspondiente a la junta del ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "fechaInicio", [], "any", false, false, false, 11), "d-m-Y"), "html", null, true);
        echo "</span></h1>
\t</div>

\t<hr class=\"hr-red\">

\t<!-- TABLA DE MINUTA -->
\t";
        // line 17
        echo twig_include($this->env, $context, "minuta/minutas/minuta-only-data.html.twig");
        echo "

\t<!-- BOTONES FORMA  Y MODALES -->
\t";
        // line 20
        if ((0 <= twig_compare(($context["rol"] ?? null), 2))) {
            // line 21
            echo "\t\t";
            $this->loadTemplate("layout/modals.html.twig", "home/index.html.twig", 21)->display($context);
            // line 22
            echo "\t";
        }
        // line 23
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 23,  90 => 22,  87 => 21,  85 => 20,  79 => 17,  68 => 11,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/home/index.html.twig");
    }
}
