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

/* minuta/temas/index.html.twig */
class __TwigTemplate_05d28152c0c4b452d377ab4709e64010c5d4835754601bbc89f8d9b7b620d77b extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/temas/index.html.twig", 1);
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
\t\t<ol>
\t\t\t<li>
\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t\t\t\t";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t</li>\t
\t\t</ol>
\t</div>

\t<hr class=\"hr-red\">

\t<div id=\"data-table-v1\">
\t<table>

\t\t<tr>
\t\t\t<th width=\"3%\">ID</th>
\t\t\t<th width=\"50%\">Titulo</th>
\t\t\t<th width=\"15%\">Fecha inicio</th>
\t\t\t<th width=\"15%\">Fecha fin</th>
\t\t\t<th style=\"background:#444444de;\">
\t\t\t";
        // line 31
        if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
            // line 32
            echo "\t\t\t\t<i onclick=\"window.location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("nuevo/tema/"), "html", null, true);
            echo "';\" class=\"fas fa-plus\" style=\"color:#fff;\" alt=\"Nuevo\" title=\"Nuevo\"></i>
\t\t\t";
        }
        // line 34
        echo "\t\t\t</th>
\t\t</tr>

\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TemasMinutas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["temas"]) {
            // line 38
            echo "

\t\t\t<tr>
\t\t\t\t<!-- ID -->
\t\t\t\t<td style=\"text-align:center;\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>

\t\t\t\t<!-- TITULO -->
\t\t\t\t<td >";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "titulo", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>

\t\t\t\t<!-- USUARIO EXPOSITOR DE TEMA -->
\t\t\t\t

\t\t\t\t<!-- FECHA INICIO DE COMPROMISO -->
\t\t\t\t<td >";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "compromisoinicio", [], "any", false, false, false, 51), "d-m-Y"), "html", null, true);
            echo "</td>

\t\t\t\t<!-- FECHA FIN DE COMPROMISO -->
\t\t\t\t<td >";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "compromisofin", [], "any", false, false, false, 54), "d-m-Y"), "html", null, true);
            echo "</td>

\t\t\t\t<!-- BOTONES DE ACCION -->
\t\t\t\t<td class=\"action-icons\" style=\"display: revert;text-align: center;\">
\t\t\t\t\t<!-- VER -->
\t\t\t\t\t<i onclick=\"window.location.href='";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ver/tema/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idReunion", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 59), "html", null, true);
            echo "';\" 
\t\t\t\t\t\tstyle=\"color: #333; margin-bottom:10px; margin-right:0px;\"
\t\t\t\t\t\tclass=\"fas fa-eye\">
\t\t\t\t\t</i>

\t\t\t\t\t";
            // line 64
            if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
                // line 65
                echo "
\t\t\t\t\t\t<!-- ACTUALIZAR -->
\t\t\t\t\t\t<i onclick=\"window.location.href='";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("actualizar/tema/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idReunion", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 67), "html", null, true);
                echo "';\" 
\t\t\t\t\t\t\tstyle=\"color: #053a76; margin-bottom:10px; margin-right:0px;\" 
\t\t\t\t\t\t\tclass=\"fas fa-edit\">
\t\t\t\t\t\t</i>

\t\t\t\t\t\t";
                // line 72
                if ((0 === twig_compare(($context["rol"] ?? null), 1))) {
                    // line 73
                    echo "
\t\t\t\t\t\t\t<!-- BORRAR -->
\t\t\t\t\t\t\t<i onclick=\"window.location.href='";
                    // line 75
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("borrar/tema/"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["temas"], "idReunion", [], "any", false, false, false, 75), "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["temas"], "id", [], "any", false, false, false, 75), "html", null, true);
                    echo "';\" 
\t\t\t\t\t\t\t\tstyle=\"color:red; margin-top:5px; margin-right:0px;\" 
\t\t\t\t\t\t\t\tclass=\"fas fa-trash\">
\t\t\t\t\t\t\t</i>

\t\t\t\t\t\t";
                }
                // line 81
                echo "
\t\t\t\t\t";
            }
            // line 83
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
        // line 90
        echo "\t</table>

</div>

";
    }

    public function getTemplateName()
    {
        return "minuta/temas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 90,  202 => 83,  198 => 81,  186 => 75,  182 => 73,  180 => 72,  169 => 67,  165 => 65,  163 => 64,  152 => 59,  144 => 54,  138 => 51,  129 => 45,  123 => 42,  117 => 38,  113 => 37,  108 => 34,  102 => 32,  100 => 31,  81 => 15,  77 => 14,  73 => 13,  67 => 10,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/temas/index.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/temas/index.html.twig");
    }
}
