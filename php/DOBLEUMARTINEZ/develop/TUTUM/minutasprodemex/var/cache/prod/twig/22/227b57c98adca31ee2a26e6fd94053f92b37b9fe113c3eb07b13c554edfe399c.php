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

/* usuario/index.html.twig */
class __TwigTemplate_b94717b68e238ae278e40d11bd91ce95bda9863b2624d0b48a80483e6dd2d0bb extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "usuario/index.html.twig", 1);
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
\t\t<h1>";
        // line 13
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t</div>

\t<hr class=\"hr-red\">

\t<div id=\"data-table-v1\">

\t\t<!-- JQUERY DRAG AND DROP -->
  \t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
\t    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
\t        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>

\t\t<!-- ALERTAS -->
\t\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
\t\t<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>

\t\t<table>

\t\t  \t<tr>
\t\t    \t<th width=\"10%\">Posición</th>
\t\t\t\t<th width=\"20%\">Nombre</th>
\t\t\t\t<th width=\"20%\">Área</th>
\t\t\t\t<th width=\"10%\">Rol</th>
\t\t\t\t<th width=\"10%\">Iniciales</th>
\t\t\t\t<th style=\"background:#444444de; width:12%; \">
\t\t\t\t\t";
        // line 40
        if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
            // line 41
            echo "\t\t\t\t\t\t<i onclick=\"window.location.href='./nuevo/usuario/';\" class=\"fas fa-plus\" style=\"color:#fff;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t</th>
\t\t  \t</tr>

\t\t  \t<tbody class=\"row_position\">

\t\t  \t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posiciones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["posicion"]) {
            // line 49
            echo "
\t\t  \t\t<tr id=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50), "html", null, true);
            echo "\" >
\t\t  \t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["posicion"], "posicion", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
\t\t  \t\t\t<td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 52), "nombre", [], "any", false, false, false, 52), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 52), "apellido", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
\t\t  \t\t\t<td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 53), "area", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 54), "rol", [], "any", false, false, false, 54), "rol", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 55), "iniciales", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>

\t\t\t\t\t<!-- BOTONES DE ACCION -->
\t\t\t\t\t<td class=\"action-icons\" style=\"display: revert;text-align: center;\">

\t\t\t\t\t\t<!-- VER -->
\t\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ver/usuario/0"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "';\" 
\t\t\t\t\t\t\tstyle=\"color: #333; margin-bottom:10px; margin-right:0px;\" 
\t\t\t\t\t\t\tclass=\"fas fa-eye\">
\t\t\t\t\t\t</i>

\t\t\t\t\t\t";
            // line 66
            if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
                // line 67
                echo "
\t\t\t\t\t\t\t<!-- ACTUALIZAR -->
\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/usuario/0"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
                echo "';\" 
\t\t\t\t\t\t\t\tstyle=\"color: #053a76; margin-bottom:10px; margin-right:0px;\" 
\t\t\t\t\t\t\t\tclass=\"fas fa-edit\">
\t\t\t\t\t\t\t</i>

\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- BORRAR -->
\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/usuario/0"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["posicion"], "idUsuario", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
                echo "';\" 
\t\t\t\t\t\t\t\tstyle=\"color:red; margin-top:5px; margin-right:0px;\" 
\t\t\t\t\t\t\t\tclass=\"fas fa-trash\">
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t

\t\t\t\t\t\t";
            }
            // line 83
            echo "
\t\t\t\t\t</td>

\t\t  \t\t</tr>

\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['posicion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t
\t\t\t</tbody>

\t\t</table>

\t</div>

\t<!-- javascript DRAG AND DROP -->
  \t<script type=\"text/javascript\">

\t    \$(document).ready(function(){
\t    \t\$(\"#mytable\").DataTable();
\t    });

\t    \$(\".row_position\").sortable({
\t    \tdelay:150,
\t    \tstop:function(){
\t    \t\tvar selectedData = new Array();
\t    \t\t\$(\".row_position>tr\").each(function(){
\t    \t\t\tselectedData.push(\$(this).attr(\"id\"));
\t    \t\t});
\t    \t\tupdateOrder(selectedData);
\t    \t}
\t    });
\t    function updateOrder(aData) {
        window.location.href = 'updatepos?newpos='+aData;
    }

\t</script>
\t
";
    }

    public function getTemplateName()
    {
        return "usuario/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 89,  191 => 83,  179 => 76,  167 => 69,  163 => 67,  161 => 66,  151 => 61,  142 => 55,  138 => 54,  134 => 53,  128 => 52,  124 => 51,  120 => 50,  117 => 49,  113 => 48,  106 => 43,  102 => 41,  100 => 40,  70 => 13,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "usuario/index.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/usuario/index.html.twig");
    }
}
