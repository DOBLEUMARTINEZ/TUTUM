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

/* minuta/configuraciones/index.html.twig */
class __TwigTemplate_aeae627f460647fca8eeab61df993958ba466ae0e0ad77ce6987e495b4c76324 extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/configuraciones/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_tituloPagina($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
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
\t<div id=\"fitro-busqueda-minuta\">
\t\t<h1>";
        // line 10
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t</div>
\t<hr class=\"hr-red\"><br><br>

\t<!-- SECCIONES -->
\t<h2>Secciones de la minuta</h2>
\t<hr class=\"hr-red\">
\t<div id=\"data-table-v1\">
\t\t<table>
\t\t  \t<tr>
\t\t    \t<th width=\"3%\">ID</th>
\t\t\t\t<th width=\"85%\">Nombre de seccion</th>
\t\t\t\t<th style=\"background:#444444de;\">
\t\t\t\t\t<i onclick=\"window.location.href='";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nuevo/seccion"), "html", null, true);
        echo "';\" class=\"fas fa-plus\" style=\"color:#fff; display: none;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t\t</th>
\t\t  \t</tr>
\t\t  \t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Secciones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["seccion"]) {
            // line 27
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><center>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seccion"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</center></td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seccion"], "nombre", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"action-icons\">
\t\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/seccion/0/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seccion"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "';\" style=\"color: #053a76;\" class=\"fas fa-edit\"></i>
\t\t\t\t\t\t";
            // line 32
            if ((0 === twig_compare(($context["rol"] ?? null), 1))) {
                // line 33
                echo "\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/seccion/0/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["seccion"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "';\" style=\"color:red;\" class=\"fas fa-trash\"></i>
\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</table>
\t</div>
\t<br><br>

\t<!-- CATEGORIAS -->
\t<h2>Categorias</h2>
\t<hr class=\"hr-red\">
\t<div id=\"data-table-v1\">
\t\t<table>
\t\t  \t<tr>
\t\t    \t<th width=\"3%\">ID</th>
\t\t\t\t<th width=\"35%\">Categoria</th>
\t\t\t\t<th width=\"30%\">Sección asignada</th>
\t\t\t\t<th width=\"10%\">Orden</th>
\t\t\t\t<th width=\"10%\">Color</th>
\t\t\t\t<th style=\"background:#444444de;\">
\t\t\t\t\t<i onclick=\"window.location.href='";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nuevo/categoria"), "html", null, true);
        echo "';\" class=\"fas fa-plus\" style=\"color:#fff;display: none;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t\t</th>
\t\t  \t</tr>
\t\t  \t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categorias"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 58
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><center>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "</center></td>
\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nombre", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoria"], "seccion", [], "any", false, false, false, 61), "nombre", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "ordencategoria", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"background:";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "color", [], "any", false, false, false, 63), "html", null, true);
            echo ";\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "color", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"action-icons\">
\t\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/categoria/0/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "';\" style=\"color: #053a76;\" class=\"fas fa-edit\"></i>
\t\t\t\t\t\t";
            // line 66
            if ((0 === twig_compare(($context["rol"] ?? null), 1))) {
                // line 67
                echo "\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/categoria/0/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "';\" style=\"color:red;\" class=\"fas fa-trash\"></i>
\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t</table>
\t</div>
\t<br><br>

\t<!-- ESTATUS MINUTA -->
\t<h2>Estatus de minuta</h2>
\t<hr class=\"hr-red\">
\t<div id=\"data-table-v1\">

\t\t<table>

\t\t  \t<tr>
\t\t    \t<th width=\"3%\">ID</th>
\t\t\t\t<th width=\"75%\">Estatus</th>
\t\t\t\t<th width=\"10%\">Color</th>
\t\t\t\t<th style=\"background:#444444de;\">
\t\t\t\t\t<i onclick=\"window.location.href='";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nuevo/estatusminuta"), "html", null, true);
        echo "';\" class=\"fas fa-plus\" style=\"color:#fff;display: none;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t\t</th>
\t\t  \t</tr>

\t\t  \t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["EstatusMinuta"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["estatus"]) {
            // line 93
            echo "
\t\t\t\t<tr>
\t\t\t\t\t<td><center>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatus"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "</center></td>
\t\t\t\t\t<td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatus"], "nombre", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"background:";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatus"], "color", [], "any", false, false, false, 97), "html", null, true);
            echo ";\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatus"], "color", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"action-icons\">
\t\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/estatusminuta/0/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatus"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "';\" style=\"color: #053a76;\" class=\"fas fa-edit\"></i>
\t\t\t\t\t\t";
            // line 100
            if ((0 === twig_compare(($context["rol"] ?? null), 1))) {
                // line 101
                echo "\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/estatusminuta/0/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatus"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "';\" style=\"color:red;\" class=\"fas fa-trash\"></i>
\t\t\t\t\t\t";
            }
            // line 103
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estatus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
\t\t</table>

\t</div>
\t<br><br>

\t<!-- ESTATUS FIRMA MINUTA -->
\t<h2>Estatus de firma</h2>
\t<hr class=\"hr-red\">
\t<div id=\"data-table-v1\">

\t\t<table>

\t\t  \t<tr>
\t\t    \t<th width=\"3%\">ID</th>
\t\t\t\t<th width=\"40%\">Opciones</th>
\t\t\t\t<th width=\"45%\">Respuestas</th>
\t\t\t\t<th style=\"background:#444444de;\">
\t\t\t\t\t<i onclick=\"window.location.href='";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nuevo/firma"), "html", null, true);
        echo "';\" class=\"fas fa-plus\" style=\"color:#fff;display: none;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t\t</th>
\t\t  \t</tr>

\t\t  \t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["EstatusFirma"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["estatusfirma"]) {
            // line 130
            echo "
\t\t\t\t<tr>
\t\t\t\t\t<td><center>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatusfirma"], "id", [], "any", false, false, false, 132), "html", null, true);
            echo "</center></td>
\t\t\t\t\t<td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatusfirma"], "opcion", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatusfirma"], "respuesta", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
\t\t\t\t\t<td class=\"action-icons\">
\t\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/firma/0/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatusfirma"], "id", [], "any", false, false, false, 136), "html", null, true);
            echo "';\" style=\"color: #053a76;\" class=\"fas fa-edit\"></i>
\t\t\t\t\t\t";
            // line 137
            if ((0 === twig_compare(($context["rol"] ?? null), 1))) {
                // line 138
                echo "\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/firma/0/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estatusfirma"], "id", [], "any", false, false, false, 138), "html", null, true);
                echo "';\" style=\"color:red;\" class=\"fas fa-trash\"></i>
\t\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estatusfirma'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "
\t\t</table>

\t</div>
\t<br><br>

";
    }

    public function getTemplateName()
    {
        return "minuta/configuraciones/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 144,  335 => 140,  328 => 138,  326 => 137,  321 => 136,  316 => 134,  312 => 133,  308 => 132,  304 => 130,  300 => 129,  293 => 125,  273 => 107,  264 => 103,  257 => 101,  255 => 100,  250 => 99,  243 => 97,  239 => 96,  235 => 95,  231 => 93,  227 => 92,  220 => 88,  202 => 72,  194 => 69,  187 => 67,  185 => 66,  180 => 65,  173 => 63,  169 => 62,  165 => 61,  161 => 60,  157 => 59,  154 => 58,  150 => 57,  144 => 54,  126 => 38,  118 => 35,  111 => 33,  109 => 32,  104 => 31,  99 => 29,  95 => 28,  92 => 27,  88 => 26,  82 => 23,  66 => 10,  62 => 8,  58 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/configuraciones/index.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/configuraciones/index.html.twig");
    }
}
