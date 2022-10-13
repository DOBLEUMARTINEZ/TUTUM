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

/* minuta/minutas/minuta-only-data.html.twig */
class __TwigTemplate_a92ca134bf30f60d4ca256d5de6c42e7dbc883eb0da92c21e7e6ad569d0485a5 extends Template
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
        echo "<!-- TABLA DE MINUTA -->
\t<div id=\"data-table-v1\"> 

\t\t<!-- DATOS GENERALES -->
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t    \t<th rowspan=\"3\" style=\"background-color:#00000014; width:25%;\">
\t\t\t    \t\t<img width=\"60%\" src='";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/prodemex-2.png"), "html", null, true);
        echo "'>
\t\t\t    \t</th>
\t\t\t\t\t<th colspan=\"3\"> MINUTA  </th>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"3\" style=\"width:75%;\"><center><strong>Reunión Semanal de Construcción con Áreas Transversales</strong></center></td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"3\" style=\"width:75%;\"><center><strong>Objetivo:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "objetivo", [], "any", false, false, false, 18), "html", null, true);
        echo "</center></td>
\t\t\t  \t</tr>
\t\t\t\t

\t\t\t  \t<tr>
\t\t\t  \t\t<td style=\"width:25%;text-align:center;\" >Fecha de reunión:<br><strong>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "fechaInicio", [], "any", false, false, false, 23), "d-m-Y"), "html", null, true);
        echo "</strong></td>
\t\t\t  \t\t<td style=\"width:25%;text-align:center;\" >Inicio de Reunión:<br><strong>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "fechaInicio", [], "any", false, false, false, 24), "H:i"), "html", null, true);
        echo " hrs</strong></td>
\t\t\t  \t\t<td style=\"width:25%;text-align:center;\" >Fin de reunión:<br><strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "fechaFin", [], "any", false, false, false, 25), "H:i"), "html", null, true);
        echo " hrs</strong></td>
\t\t\t  \t\t<td style=\"width:25%;text-align:center;\" >Fecha de Próxima Reunión:<br><strong>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "proximaReunion", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true);
        echo "</strong></td>
\t\t\t  \t</tr>
\t\t\t</table>

\t\t\t<br><br>

\t\t<!-- ASISTENTES -->
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"4\" style=\"border-bottom: 2px solid #000; width:100%;\"> ASISTENTES </th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th style=\"width:30%; text-align:center;\" >Nombre</th>
\t\t\t\t\t<th style=\"width:10%; text-align:center;\" >Iniciales </th>
\t\t\t\t\t<th style=\"width:30%; text-align:center;\" >Área / Empresa</th>
\t\t\t\t\t<th style=\"width:30%; text-align:center;\" >Firma</th>
\t\t\t\t</tr>

\t\t\t\t
\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "audiencia", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["audiencia"]) {
            // line 46
            echo "\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["audiencia"], "asistencia", [], "any", false, false, false, 46), true))) {
                // line 47
                echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- NOMBRE -->
\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\">
\t\t\t\t\t\t\t\t\t";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 51), "nombre", [], "any", false, false, false, 51), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 51), "apellido", [], "any", false, false, false, 51), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- INICIALES -->
\t\t\t\t\t\t\t\t<td style=\"width:10%; text-align:center;\">
\t\t\t\t\t\t\t\t\t";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 56), "iniciales", [], "any", false, false, false, 56), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- AREA -->
\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\">
\t\t\t\t\t\t\t\t\t";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 61), "area", [], "any", false, false, false, 61), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- ESTATUS -->
\t\t\t\t\t\t\t\t";
                // line 65
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["audiencia"], "estatus", [], "any", false, false, false, 65), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "estatus", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), 2)))) {
                    // line 66
                    echo "
\t\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\" class=\"estatus-asistencia-on\" >
\t\t\t\t\t\t\t\t\t\t<center><i class=\"fas fa-check-circle\"></i></center>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
                } else {
                    // line 72
                    echo "
\t\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\" class=\"estatus-asistencia-neutro\" >
\t\t\t\t\t\t\t\t\t\t<center><i class=\"fas fa-minus\"></i></center>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                }
                // line 78
                echo "\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audiencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "

\t\t\t</table>

\t\t\t<br><br>

\t\t<!-- AUSENTES -->
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"4\" class=\"th-ausentes\" style=\"border-bottom: 2px solid #000; width:100%;\" ><strong>AUSENTES</strong></th>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th style=\"width:30%; text-align:center;\" class=\"th-ausentes\">Nombre</th>
\t\t\t\t\t<th style=\"width:10%; text-align:center;\" class=\"th-ausentes\">Iniciales </th>
\t\t\t\t\t<th style=\"width:30%; text-align:center;\" class=\"th-ausentes\">Área / Empresa</th>
\t\t\t\t\t<th style=\"width:30%; text-align:center;\" class=\"th-ausentes\">Firma</th>
\t\t\t\t</tr>

\t\t\t\t
\t\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "audiencia", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["audiencia"]) {
            // line 102
            echo "\t\t\t\t\t\t";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["audiencia"], "asistencia", [], "any", false, false, false, 102), false))) {
                // line 103
                echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- NOMBRE -->
\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\">
\t\t\t\t\t\t\t\t\t";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 107), "nombre", [], "any", false, false, false, 107), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 107), "apellido", [], "any", false, false, false, 107), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- INICIALES -->
\t\t\t\t\t\t\t\t<td style=\"width:10%; text-align:center;\">
\t\t\t\t\t\t\t\t\t";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 112), "iniciales", [], "any", false, false, false, 112), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- AREA -->
\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\">
\t\t\t\t\t\t\t\t\t";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idusuario", [], "any", false, false, false, 117), "area", [], "any", false, false, false, 117), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- ESTATUS -->
\t\t\t\t\t\t\t\t";
                // line 121
                if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["audiencia"], "estatus", [], "any", false, false, false, 121), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "estatus", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), 2)))) {
                    // line 122
                    echo "
\t\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\" class=\"estatus-asistencia-on\" >
\t\t\t\t\t\t\t\t\t\t<center><i class=\"fas fa-check-circle\"></i></center>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
                } else {
                    // line 128
                    echo "
\t\t\t\t\t\t\t\t\t<td style=\"width:30%; text-align:center;\" class=\"estatus-asistencia-neutro\" >
\t\t\t\t\t\t\t\t\t\t<center><i class=\"fas fa-minus\"></i></center>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audiencia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t
\t\t\t</table>

\t\t\t<br><br>

\t\t<!-- AGENDA DE MINUTA -->
\t\t\t<table style=\"width: 80%;margin: 0 auto;\">
\t\t\t  \t<tr>
\t\t\t    \t<th> AGENDA </th>
\t\t\t  \t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
        // line 149
        echo twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "itinerario", [], "any", false, false, false, 149);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>

\t\t\t<br><br>

\t\t<!-- PRINCIPALES ACUERDOS -->
\t\t\t";
        // line 156
        $context["num_temas_b1"] = 0;
        // line 157
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "temasMinuta", [], "any", false, false, false, 157));
        foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
            // line 158
            echo "\t\t\t\t";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "titulo", [], "any", false, false, false, 158), "Principales acuerdos de la reunión")) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "bloque", [], "any", false, false, false, 158), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 158), null))))) {
                // line 159
                echo "\t\t\t\t\t";
                $context["num_temas_b1"] = (($context["num_temas_b1"] ?? null) + 1);
                // line 160
                echo "\t\t\t\t";
            }
            echo "\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
\t\t\t";
        // line 163
        if ((0 <= twig_compare(($context["num_temas_b1"] ?? null), 1))) {
            // line 164
            echo "
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan=\"3\" style=\"background-color:#00000014;color:#000;\">
\t\t\t\t\t\t    ACUERDOS PRINCIPALES DE LA REUNIÓN 
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<table style=\"border-top: 15px solid #861717; border-bottom: 15px solid #861717;\" >
\t\t\t\t\t";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "temasMinuta", [], "any", false, false, false, 174));
            foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
                // line 175
                echo "\t\t\t\t\t\t";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "titulo", [], "any", false, false, false, 175), "Principales acuerdos de la reunión")) || ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "bloque", [], "any", false, false, false, 175), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 175), null))))) {
                    // line 176
                    echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t  \t\t<tr>
\t\t\t\t\t\t  \t\t\t<td valign=\"top\">
\t\t\t\t\t\t  \t\t\t\t";
                    // line 179
                    echo twig_get_attribute($this->env, $this->source, $context["temas"], "observacion", [], "any", false, false, false, 179);
                    echo "
\t\t\t\t\t\t  \t\t\t</td>
\t\t\t\t\t\t  \t\t</tr>
\t\t\t\t\t\t  \t
\t\t\t\t\t\t";
                }
                // line 184
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "\t\t\t\t</table>
\t\t\t\t<br><br>

\t\t\t";
        }
        // line 189
        echo "\t\t\t\t
\t\t<!-- AGENDA DIRECCION GENERAL-->
\t\t\t";
        // line 191
        $context["num_temas_b2"] = 0;
        // line 192
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "temasMinuta", [], "any", false, false, false, 192));
        foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
            // line 193
            echo "\t\t\t\t";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "bloque", [], "any", false, false, false, 193), 2)) || ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 193), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193), 9))))) {
                // line 194
                echo "\t\t\t\t\t";
                $context["num_temas_b2"] = (($context["num_temas_b2"] ?? null) + 1);
                // line 195
                echo "\t\t\t\t";
            }
            echo "\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "
\t\t\t";
        // line 198
        if ((0 <= twig_compare(($context["num_temas_b2"] ?? null), 1))) {
            // line 199
            echo "
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t    <th colspan=\"3\" style=\"background-color:#00000014;color:#000; width:100%;\" >AGENDA DE DIRECCIÓN GENERAL</th>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t";
            // line 206
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categorias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                // line 207
                echo "
\t\t\t\t\t";
                // line 208
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 208), 9))) {
                    // line 209
                    echo "
\t\t\t\t\t\t";
                    // line 210
                    $context["cont_temas"] = false;
                    // line 211
                    echo "
\t\t\t\t\t\t<!--TEMAS -->
\t\t\t\t\t\t";
                    // line 213
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "temasMinuta", [], "any", false, false, false, 213));
                    foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
                        // line 214
                        echo "
\t\t\t\t\t\t\t";
                        // line 215
                        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "bloque", [], "any", false, false, false, 215), 2)) || ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 215), null)) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 215), "id", [], "any", false, false, false, 215), 9))))) {
                            // line 216
                            echo "
\t\t\t\t\t\t\t\t";
                            // line 217
                            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 217), "id", [], "any", false, false, false, 217), twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 217)))) {
                                // line 218
                                echo "
\t\t\t\t\t\t\t\t\t<!-- CATEGORIA -->
\t\t\t\t\t\t\t\t\t";
                                // line 220
                                if ((0 === twig_compare(($context["cont_temas"] ?? null), 0))) {
                                    // line 221
                                    echo "\t\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\"
\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-color:";
                                    // line 225
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "color", [], "any", false, false, false, 225), "html", null, true);
                                    echo ";
\t\t\t\t\t\t\t\t\t\t\t\t\tcolor:#fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                                    // line 228
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nombre", [], "any", false, false, false, 228), "html", null, true);
                                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t";
                                }
                                // line 233
                                echo "
\t\t\t\t\t\t\t\t\t<!-- INFO BASICA -->
\t\t\t\t\t\t\t\t\t<table style=\"border-top: 15px solid #861717;\" >

\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<!-- TITULO -->
\t\t\t\t\t\t\t\t\t\t\t<th colspan=\"3\" width=\"50%\">";
                                // line 239
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "titulo", [], "any", false, false, false, 239), "html", null, true);
                                echo "</th>

\t\t\t\t\t\t\t\t\t\t\t<!-- ESTATUS -->
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 242
                                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idEstatus", [], "any", false, false, false, 242), null))) {
                                    // line 243
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<td style=\"background-color: ";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idEstatus", [], "any", false, false, false, 243), "color", [], "any", false, false, false, 243), "html", null, true);
                                    echo "; width:50%; \" colspan=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t<strong>";
                                    // line 244
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idEstatus", [], "any", false, false, false, 244), "nombre", [], "any", false, false, false, 244), "html", null, true);
                                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 247
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<td style=\" width:50%; \" colspan=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t  \t<strong></strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 251
                                echo "
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<!-- RESPONSABLE -->
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" width=\"50%\"><strong>Responsable: </strong>

\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 258
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "temasUsuarios", [], "any", false, false, false, 258));
                                foreach ($context['_seq'] as $context["_key"] => $context["temaUsuario"]) {
                                    // line 259
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 259), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temaUsuario"], "idTema", [], "any", false, false, false, 259), "id", [], "any", false, false, false, 259)))) {
                                        // line 260
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t-";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temaUsuario"], "idUsuario", [], "any", false, false, false, 260), "nombre", [], "any", false, false, false, 260), "html", null, true);
                                        echo " ";
                                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temaUsuario"], "idUsuario", [], "any", false, false, false, 260), "apellido", [], "any", false, false, false, 260), "html", null, true);
                                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 262
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temaUsuario'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                echo "\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<!-- FECHA -->
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"1\" width=\"25%\"><strong>Inicio: </strong> ";
                                // line 266
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "compromisoinicio", [], "any", false, false, false, 266), "d-m-Y"), "html", null, true);
                                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"1\" width=\"25%\"><strong>Conclusión: </strong>Actualización Semanal</td>

\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t<!-- DETALLE DEL TEMA -->
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t  \t<td width=\"50%\" valign=\"top\">
\t\t\t\t\t\t\t\t\t\t  \t\t<h3>Requerimeintos</h3>
\t\t\t\t\t\t\t\t\t\t  \t\t\t";
                                // line 277
                                echo twig_get_attribute($this->env, $this->source, $context["temas"], "requerimiento", [], "any", false, false, false, 277);
                                echo "
\t\t\t\t\t\t\t\t\t\t  \t</td>
\t\t\t\t\t\t\t\t\t\t  \t<td width=\"50%\" valign=\"top\">
\t\t\t\t\t\t\t\t\t\t  \t\t<h3>Acuerdos</h3>
\t\t\t\t\t\t\t\t\t\t  \t\t";
                                // line 281
                                echo twig_get_attribute($this->env, $this->source, $context["temas"], "compromiso", [], "any", false, false, false, 281);
                                echo "
\t\t\t\t\t\t\t\t\t\t  \t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t  \t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t  \t\t<h3>Lineamientos</h3>
\t\t\t\t\t\t\t\t\t\t  \t\t";
                                // line 287
                                echo twig_get_attribute($this->env, $this->source, $context["temas"], "lineaguia", [], "any", false, false, false, 287);
                                echo "
\t\t\t\t\t\t\t\t\t\t  \t</td>
\t\t\t\t\t\t\t\t\t\t  \t<td valign=\"top\">
\t\t\t\t\t\t\t\t\t\t  \t\t<h3>Acciones</h3>
\t\t\t\t\t\t\t\t\t\t  \t\t";
                                // line 291
                                echo twig_get_attribute($this->env, $this->source, $context["temas"], "compromisoaccion", [], "any", false, false, false, 291);
                                echo "
\t\t\t\t\t\t\t\t\t\t  \t</td>
\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t  \t<td colspan=\"2\" valign=\"top\">
\t\t\t\t\t\t\t\t\t\t  \t\t<h3>Observaciónes / Comentarios</h3>
\t\t\t\t\t\t\t\t\t\t  \t\t";
                                // line 298
                                echo twig_get_attribute($this->env, $this->source, $context["temas"], "observacion", [], "any", false, false, false, 298);
                                echo "
\t\t\t\t\t\t\t\t\t\t  \t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>

\t\t\t\t\t\t\t\t\t";
                                // line 303
                                $context["cont_temas"] = (($context["cont_temas"] ?? null) + 1);
                                // line 304
                                echo "
\t\t\t\t\t\t\t\t";
                            }
                            // line 305
                            echo "\t

\t\t\t\t\t\t\t";
                        }
                        // line 308
                        echo "
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temas'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 310
                    echo "
\t\t\t\t\t";
                }
                // line 312
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "

\t\t\t";
        }
        // line 315
        echo "\t
\t\t\t
\t\t\t<br><br>

\t\t<!-- REVISIÓN DE TEMAS -->
\t\t\t";
        // line 320
        $context["num_temas_b3"] = 0;
        // line 321
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "temasMinuta", [], "any", false, false, false, 321));
        foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
            // line 322
            echo "\t\t\t\t";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "bloque", [], "any", false, false, false, 322), 3)) || ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 322), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 322), "id", [], "any", false, false, false, 322), 9))))) {
                // line 323
                echo "\t\t\t\t\t";
                $context["num_temas_b3"] = (($context["num_temas_b3"] ?? null) + 1);
                // line 324
                echo "\t\t\t\t";
            }
            echo "\t\t
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temas'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "
\t\t\t";
        // line 327
        if ((0 <= twig_compare(($context["num_temas_b3"] ?? null), 1))) {
            // line 328
            echo "\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t    <th colspan=\"3\" style=\"background-color:#00000014;color:#000; width:100%;\" >REVISIÓN DE TEMAS</th>
\t\t\t\t\t</tr>
\t\t\t\t</table>

\t\t\t\t<!-- TEMAS -->
\t\t\t\t";
            // line 335
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "temasMinuta", [], "any", false, false, false, 335));
            foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
                // line 336
                echo "\t\t\t\t\t";
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "bloque", [], "any", false, false, false, 336), 3)) || ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 336), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idCategoria", [], "any", false, false, false, 336), "id", [], "any", false, false, false, 336), 9))))) {
                    // line 337
                    echo "
\t\t\t\t\t\t<!-- INFO BASICA -->
\t\t\t\t\t\t<table style=\"border-top: 15px solid #861717;\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- TITULO -->
\t\t\t\t\t\t\t\t<th colspan=\"3\" width=\"100%\">";
                    // line 342
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "titulo", [], "any", false, false, false, 342), "html", null, true);
                    echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>

\t\t\t\t\t\t<!-- DETALLE DEL TEMA -->
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t  \t<td width=\"100%\" valign=\"top\">
\t\t\t\t\t\t\t  \t\t";
                    // line 350
                    echo twig_get_attribute($this->env, $this->source, $context["temas"], "observacion", [], "any", false, false, false, 350);
                    echo "
\t\t\t\t\t\t\t  \t\t";
                    // line 351
                    echo twig_get_attribute($this->env, $this->source, $context["temas"], "requerimiento", [], "any", false, false, false, 351);
                    echo "
\t\t\t\t\t\t\t  \t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>

\t\t\t\t\t";
                }
                // line 357
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
            echo "
\t\t\t";
        }
        // line 360
        echo "\t\t\t
\t</div>";
    }

    public function getTemplateName()
    {
        return "minuta/minutas/minuta-only-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 360,  691 => 358,  685 => 357,  676 => 351,  672 => 350,  661 => 342,  654 => 337,  651 => 336,  647 => 335,  638 => 328,  636 => 327,  633 => 326,  624 => 324,  621 => 323,  618 => 322,  613 => 321,  611 => 320,  604 => 315,  599 => 313,  593 => 312,  589 => 310,  582 => 308,  577 => 305,  573 => 304,  571 => 303,  563 => 298,  553 => 291,  546 => 287,  537 => 281,  530 => 277,  516 => 266,  505 => 262,  497 => 260,  494 => 259,  490 => 258,  481 => 251,  475 => 247,  469 => 244,  464 => 243,  462 => 242,  456 => 239,  448 => 233,  440 => 228,  434 => 225,  428 => 221,  426 => 220,  422 => 218,  420 => 217,  417 => 216,  415 => 215,  412 => 214,  408 => 213,  404 => 211,  402 => 210,  399 => 209,  397 => 208,  394 => 207,  390 => 206,  381 => 199,  379 => 198,  376 => 197,  367 => 195,  364 => 194,  361 => 193,  356 => 192,  354 => 191,  350 => 189,  344 => 185,  338 => 184,  330 => 179,  325 => 176,  322 => 175,  318 => 174,  306 => 164,  304 => 163,  301 => 162,  292 => 160,  289 => 159,  286 => 158,  281 => 157,  279 => 156,  269 => 149,  256 => 138,  250 => 137,  245 => 134,  237 => 128,  229 => 122,  227 => 121,  220 => 117,  212 => 112,  202 => 107,  196 => 103,  193 => 102,  189 => 101,  168 => 82,  162 => 81,  157 => 78,  149 => 72,  141 => 66,  139 => 65,  132 => 61,  124 => 56,  114 => 51,  108 => 47,  105 => 46,  101 => 45,  79 => 26,  75 => 25,  71 => 24,  67 => 23,  59 => 18,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/minutas/minuta-only-data.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/minutas/minuta-only-data.html.twig");
    }
}
