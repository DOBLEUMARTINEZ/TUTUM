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

/* minuta/temas/detail-tema.html.twig */
class __TwigTemplate_2ec4da582b290aafd12f25a6fc2f4ff12ad84b438bb20d46fa0beb190e82d77e extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/temas/detail-tema.html.twig", 1);
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
\t<br><br><br><br>

\t<div id=\"data-table-v1\">

\t\t<table>
\t\t\t<tr>
\t\t\t\t<th colspan=\"4\" width=\"100%;\">Tema: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "titulo", [], "any", false, false, false, 15), "html", null, true);
        echo "</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td colspan=\"1\" width=\"25%\" class=\"title-strog\" >Titulo</td>
\t\t\t\t<td colspan=\"3\" width=\"75%\" >";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "titulo", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td width=\"25%\" class=\"title-strog\">Compromiso inicio</td>
\t\t\t\t<td width=\"25%\" >";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "compromisoinicio", [], "any", false, false, false, 23), "d-m-Y"), "html", null, true);
        echo "</td>
\t\t\t\t<td width=\"25%\" class=\"title-strog\">Compromiso Fin</td>
\t\t\t\t<td width=\"25%\" >";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "compromisofin", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
        echo "</td>
\t\t\t</tr>

\t\t\t<!-- ESTATUS -->
\t\t\t<tr>
\t\t\t\t<td width=\"25%\" class=\"title-strog\">Estatus</td>
\t\t\t\t";
        // line 31
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "idEstatus", [], "any", false, false, false, 31), null))) {
            // line 32
            echo "\t\t\t\t\t<td width=\"25%\" style=\"background:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "idEstatus", [], "any", false, false, false, 32), "color", [], "any", false, false, false, 32), "html", null, true);
            echo ";\">
\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "idEstatus", [], "any", false, false, false, 33), "nombre", [], "any", false, false, false, 33), "html", null, true);
            echo "
\t\t\t\t\t</td>
\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t<td width=\"25%\">
\t\t\t\t\t\tNo
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 40
        echo "
\t\t\t\t<td  width=\"25%\" class=\"title-strog\">id Minuta</td>
\t\t\t\t<td  width=\"25%\" >";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "idReunion", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>

\t\t\t</tr>

\t\t\t<!-- CATEGORIA  -->
\t\t\t<tr>
\t\t\t\t<td width=\"25%\" class=\"title-strog\">Categoria</td>
\t\t\t\t";
        // line 49
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "idCategoria", [], "any", false, false, false, 49), null))) {
            // line 50
            echo "\t\t\t\t\t<td colspan=\"3\" style=\"background:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "idCategoria", [], "any", false, false, false, 50), "color", [], "any", false, false, false, 50), "html", null, true);
            echo ";\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "idCategoria", [], "any", false, false, false, 50), "nombre", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
\t\t\t\t";
        } else {
            // line 52
            echo "\t\t\t\t\t<td colspan=\"3\" width=\"25%\">
\t\t\t\t\t\tNo
\t\t\t\t\t</td>
\t\t\t\t";
        }
        // line 56
        echo "\t\t\t</tr>

\t\t\t<!-- REQUERIMINETO -->
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<span class=\"title-strog\">Requeriemeinto</span>
\t\t\t\t\t<hr class=\"hr-red\">
\t\t\t\t\t";
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "requerimiento", [], "any", false, false, false, 63);
        echo "
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<!-- LINEAMIENTOS -->
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<span class=\"title-strog\">Lineamientos</span>
\t\t\t\t\t<hr class=\"hr-red\">
\t\t\t\t\t";
        // line 72
        echo twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "lineaguia", [], "any", false, false, false, 72);
        echo "
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<!-- ACCIONES -->
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<span class=\"title-strog\">Acciones</span>
\t\t\t\t\t<hr class=\"hr-red\">
\t\t\t\t\t";
        // line 81
        echo twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "compromisoaccion", [], "any", false, false, false, 81);
        echo "
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<!-- ACUERDOS -->
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<span class=\"title-strog\">Acuerdos</span>
\t\t\t\t\t<hr class=\"hr-red\">
\t\t\t\t\t";
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "compromiso", [], "any", false, false, false, 90);
        echo "
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<!-- OBSERVACION -->
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<span class=\"title-strog\">Observación</span>
\t\t\t\t\t<hr class=\"hr-red\">
\t\t\t\t\t";
        // line 99
        echo twig_get_attribute($this->env, $this->source, ($context["Tema"] ?? null), "observacion", [], "any", false, false, false, 99);
        echo "
\t\t\t\t</td>
\t\t\t</tr>

\t\t</table>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "minuta/temas/detail-tema.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 99,  196 => 90,  184 => 81,  172 => 72,  160 => 63,  151 => 56,  145 => 52,  137 => 50,  135 => 49,  125 => 42,  121 => 40,  115 => 36,  109 => 33,  104 => 32,  102 => 31,  93 => 25,  88 => 23,  81 => 19,  72 => 15,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/temas/detail-tema.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/temas/detail-tema.html.twig");
    }
}
