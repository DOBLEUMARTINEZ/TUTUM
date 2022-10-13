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

/* minuta/temas/temas-minuta.html.twig */
class __TwigTemplate_2bbaf2af710d21a7d5134201c9df25819fc0a33559e24821cb0bfa89875bd2a2 extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/temas/temas-minuta.html.twig", 1);
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
        echo "\t
\t<div id=\"fitro-busqueda-minuta\">
\t\t<h1>";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t</div>

\t<hr class=\"hr-red\">

\t<div id=\"data-table-v1\">
\t<table>

\t\t<tr>
\t\t\t<th width=\"3%\">ID</th>
\t\t\t<th width=\"10%\">Minuta</th>
\t\t\t<th width=\"40%\">Titulo</th>
\t\t\t<th width=\"15%\">Fecha inicio</th>
\t\t\t<th width=\"15%\">Categoria</th>
\t\t\t<th style=\"background:#444444de;\">
\t\t\t";
        // line 25
        if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
            // line 26
            echo "\t\t\t\t<i onclick=\"window.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nuevo/tema/"), "html", null, true);
            echo "';\" class=\"fas fa-plus\" style=\"color:#fff; display: none;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t";
        }
        // line 28
        echo "\t\t\t</th>
\t\t</tr>

\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TemasMinutas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
            // line 32
            echo "
\t\t\t<tr>
\t\t\t\t<!-- ID -->
\t\t\t\t<td style=\"text-align:center;\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>

\t\t\t\t<!-- MINUTA -->
\t\t\t\t<td style=\"text-align:center;\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idReunion", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>

\t\t\t\t<!-- TITULO -->
\t\t\t\t<td >";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "titulo", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>

\t\t\t\t<!-- FECHA INICIO DE COMPROMISO -->
\t\t\t\t<td >";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "compromisoinicio", [], "any", false, false, false, 44), "d-m-Y"), "html", null, true);
            echo "</td>

\t\t\t\t<!-- FECHA FIN DE COMPROMISO -->
\t\t\t\t<td >
\t\t\t\t\t";
            // line 48
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 48), null))) {
                // line 49
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 49), "nombre", [], "any", false, false, false, 49), "html", null, true);
                echo "
\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "titulo", [], "any", false, false, false, 51), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t</td>

\t\t\t\t<!-- BOTONES DE ACCION -->
\t\t\t\t<td class=\"action-icons\" style=\"display: revert;text-align: center;\">
\t\t\t\t\t<!-- VER -->
\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ver/tema/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idReunion", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "';\" 
\t\t\t\t\t\tstyle=\"color: #333; margin-bottom:10px; margin-right:0px;\"
\t\t\t\t\t\tclass=\"fas fa-eye\">
\t\t\t\t\t</i>

\t\t\t\t\t";
            // line 63
            if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
                // line 64
                echo "
\t\t\t\t\t\t<!-- ACTUALIZAR 
\t\t\t\t\t\t<i onclick=\"window.location.href='";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/tema/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idReunion", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 66), "html", null, true);
                echo "';\" 
\t\t\t\t\t\t\tstyle=\"color: #053a76; margin-bottom:10px; margin-right:0px;\" 
\t\t\t\t\t\t\tclass=\"fas fa-edit\">
\t\t\t\t\t\t</i>-->

\t\t\t\t\t\t";
                // line 71
                if ((0 === twig_compare(($context["rol"] ?? null), 1))) {
                    // line 72
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- BORRAR -->
\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/tema/"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idReunion", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 74), "html", null, true);
                    echo "';\" 
\t\t\t\t\t\t\t\tstyle=\"color:red; margin-top:5px; margin-right:0px;\" 
\t\t\t\t\t\t\t\tclass=\"fas fa-trash\">
\t\t\t\t\t\t\t</i>

\t\t\t\t\t\t";
                }
                // line 80
                echo "
\t\t\t\t\t";
            }
            // line 82
            echo "
\t\t\t\t</td>
\t\t\t\t
\t\t\t</tr>

\t\t\t\t\t\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t</table>

</div>

";
    }

    public function getTemplateName()
    {
        return "minuta/temas/temas-minuta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 89,  203 => 82,  199 => 80,  187 => 74,  183 => 72,  181 => 71,  170 => 66,  166 => 64,  164 => 63,  153 => 58,  146 => 53,  140 => 51,  134 => 49,  132 => 48,  125 => 44,  119 => 41,  113 => 38,  107 => 35,  102 => 32,  98 => 31,  93 => 28,  87 => 26,  85 => 25,  67 => 10,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/temas/temas-minuta.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/temas/temas-minuta.html.twig");
    }
}
