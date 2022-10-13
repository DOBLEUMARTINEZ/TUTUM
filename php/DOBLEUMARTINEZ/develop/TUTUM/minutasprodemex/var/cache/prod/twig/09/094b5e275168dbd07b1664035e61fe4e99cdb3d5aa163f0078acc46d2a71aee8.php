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

/* minuta/minutas/all-minutas.html.twig */
class __TwigTemplate_771f97989ad460270f4a21072b78ab46f54417e6c38473113cbf000b29bb39e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"data-table-v1\">
\t<table>
\t\t
\t\t<tr>
\t\t\t<th width=\"3%\">ID</th>
\t\t\t<th width=\"52%\">Objetivo</th>
\t\t\t<th width=\"15%\">Fecha inicio</th> 
\t\t\t<th width=\"15%\">Estatus</th>
\t\t\t<th style=\"background:#444444de;\">
\t\t\t\t";
        // line 10
        if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
            // line 11
            echo "\t\t\t\t\t<i onclick=\"window.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nuevo/minuta"), "html", null, true);
            echo "';\" class=\"fas fa-plus\" style=\"color:#fff;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t\t";
        }
        // line 13
        echo "\t\t\t</th>
\t\t</tr>

\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Minutas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["minuta"]) {
            // line 17
            echo "
\t\t\t<tr>
\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "objetivo", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "fechaInicio", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 23
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["minuta"], "estatus", [], "any", false, false, false, 23), 1))) {
                // line 24
                echo "\t\t\t\t\t\tPublicada
\t\t\t\t\t";
            } else {
                // line 25
                echo "\t
\t\t\t\t\t\tNo publicada
\t\t\t\t\t";
            }
            // line 28
            echo "\t\t\t\t</td>

\t\t\t\t<!-- BOTONES DE ACCION -->
\t\t\t\t\t<td class=\"action-icons\" style=\"display: revert;text-align: center;\">

\t\t\t\t\t\t<!-- VER -->
\t\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ver/minuta/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "';\" 
\t\t\t\t\t\t\tstyle=\"color: #333; margin-bottom:10px; margin-right:0px;\" 
\t\t\t\t\t\t\tclass=\"fas fa-eye\"
\t\t\t\t\t\t\ttitle=\"ver\">
\t\t\t\t\t\t</i>

\t\t\t\t\t\t";
            // line 40
            if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
                // line 41
                echo "
\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ver/temas-minuta/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "';\"
\t\t\t\t\t\t\t\tclass=\"fas fa-list\"
\t\t\t\t\t\t\t\tstyle=\"color:#eb814f; margin-bottom:10px; margin-right:0px;\"
\t\t\t\t\t\t\t\ttitle=\"Temas\">
\t\t\t\t\t\t\t</i>

\t\t\t\t\t\t\t<!-- AUDIENCIA -->
\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ver/audiencia/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "';\"
\t\t\t\t\t\t\t\tstyle=\"color: #009550; margin-bottom:10px; margin-right:0px;\"
\t\t\t\t\t\t\t\tclass=\"fas fa-users\"
\t\t\t\t\t\t\t\ttitle=\"Asistencias\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</i>

\t\t\t\t\t\t\t<!-- ACTUALIZAR -->
\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/minuta/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "';\" 
\t\t\t\t\t\t\t\tstyle=\"color: #053a76; margin-bottom:10px; margin-right:0px;\" 
\t\t\t\t\t\t\t\tclass=\"fas fa-edit\"
\t\t\t\t\t\t\t\ttitle=\"Actualizar\">
\t\t\t\t\t\t\t</i>

\t\t\t\t\t\t\t";
                // line 63
                if ((0 === twig_compare(($context["rol"] ?? null), 1))) {
                    // line 64
                    echo "
\t\t\t\t\t\t\t\t<!-- BORRAR -->
\t\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/minuta/"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["minuta"], "id", [], "any", false, false, false, 66), "html", null, true);
                    echo "';\" 
\t\t\t\t\t\t\t\t\tstyle=\"color:red; margin-top:5px; margin-right:0px;\" 
\t\t\t\t\t\t\t\t\tclass=\"fas fa-trash\"
\t\t\t\t\t\t\t\t\ttitle=\"Eliminar\">
\t\t\t\t\t\t\t\t</i>

\t\t\t\t\t\t\t";
                }
                // line 73
                echo "
\t\t\t\t\t\t";
            }
            // line 75
            echo "
\t\t\t\t\t</td>
\t\t\t</tr>

\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minuta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
\t</table>
</div>";
    }

    public function getTemplateName()
    {
        return "minuta/minutas/all-minutas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 80,  170 => 75,  166 => 73,  155 => 66,  151 => 64,  149 => 63,  139 => 57,  127 => 49,  116 => 42,  113 => 41,  111 => 40,  101 => 34,  93 => 28,  88 => 25,  84 => 24,  82 => 23,  77 => 21,  73 => 20,  69 => 19,  65 => 17,  61 => 16,  56 => 13,  50 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/minutas/all-minutas.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/minutas/all-minutas.html.twig");
    }
}
