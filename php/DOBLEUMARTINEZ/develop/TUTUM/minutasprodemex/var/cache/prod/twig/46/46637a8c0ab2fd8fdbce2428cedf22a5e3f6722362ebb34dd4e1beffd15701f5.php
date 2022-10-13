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

/* minuta/audiencia/index.html.twig */
class __TwigTemplate_762ee23e190ba0a44ec88a548de2cf3014742b6a189bb2f0325b66e01d867269 extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/audiencia/index.html.twig", 1);
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
\t<hr class=\"hr-red\">

\t<div id=\"data-table-v1\">

\t<!-- JQUERY DRAG AND DROP -->
  \t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
\t    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
\t        integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>

\t <!-- ALERTAS -->
\t<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
\t<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>


\t<table id=\"mytable\">

\t\t<thead>
\t\t\t<th colspan=\"4\" style=\"border-bottom: 2px solid #000; width:100%;\"> AUDIENCIA </th>
\t\t</thead>

\t\t<thead>
\t\t\t<th style=\"width:20%; text-align:center;\" >Posición</th>
\t\t\t<th style=\"width:40%; text-align:center;\" >Nombre</th>
\t\t\t<th style=\"width:40%; text-align:center;\" >Area</th>
\t\t</thead>

\t\t<tbody class=\"row_position\">
\t\t\t
\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["audiencia"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 40
            echo "
\t\t\t\t<tr id=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" >
\t\t\t\t\t<td style=\"text-align:center;\" >";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "posicion", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"text-align:center;\" >";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuario"], "idUsuario", [], "any", false, false, false, 43), "nombre", [], "any", false, false, false, 43), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuario"], "idUsuario", [], "any", false, false, false, 43), "apellido", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
\t\t\t\t\t<td style=\"text-align:center;\" >";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["usuario"], "idUsuario", [], "any", false, false, false, 44), "area", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
\t\t\t\t</tr>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
\t\t</tbody>

\t</table>

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
        window.location.href = '../../updatepos?newpos='+aData+'&audi=true';
    }

\t</script>

";
    }

    public function getTemplateName()
    {
        return "minuta/audiencia/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 48,  117 => 44,  111 => 43,  107 => 42,  103 => 41,  100 => 40,  96 => 39,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/audiencia/index.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/audiencia/index.html.twig");
    }
}
