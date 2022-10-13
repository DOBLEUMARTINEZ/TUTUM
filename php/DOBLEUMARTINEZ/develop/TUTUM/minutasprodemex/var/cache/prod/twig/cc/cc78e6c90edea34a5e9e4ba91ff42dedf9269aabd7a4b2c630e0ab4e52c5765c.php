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

/* minuta/temas/update.html.twig */
class __TwigTemplate_46d6311f44bfb82d585083a11887d12ecb77604cda85e6d5461fea3875d35327 extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/temas/update.html.twig", 1);
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
\t\t\t<table style=\"width:90%; margin-left:5%;\" >
\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-control"]]);
        echo "

\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\"> ";
        // line 16
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " tema </th>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"50%\">
\t\t\t  \t\t\t<strong>Minuta</strong>
\t\t\t  \t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id_reunion", [], "any", false, false, false, 22), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t\t<td>
\t\t\t  \t\t\t<strong>Bloque de minuta</strong>
\t\t\t  \t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "seccion", [], "any", false, false, false, 26), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t\t
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">
\t\t\t  \t\t\t<strong>Tema</strong>
\t\t\t  \t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titulo", [], "any", false, false, false, 34), 'widget');
        echo "
\t\t\t  \t\t</td>  \t\t
\t\t\t  \t</tr>

\t\t\t</table>
\t\t\t<table id=\"tema-normal\" style=\"width:90%; margin-left:5%; display: none;\" >
\t\t\t  \t<tr>
\t\t\t  \t\t<td>
\t\t\t  \t\t\t<strong>Categoria</strong>
\t\t\t  \t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id_categoria", [], "any", false, false, false, 43), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t\t<td>
\t\t\t  \t\t\t<strong>Estatus</strong>
\t\t\t  \t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "id_estatus", [], "any", false, false, false, 47), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"50%\">
\t\t\t  \t\t\t<strong>Fecha inicio</strong>
\t\t\t  \t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "compromiso_inicio", [], "any", false, false, false, 54), 'widget');
        echo "
\t\t\t  \t\t</td>

\t\t\t  \t\t<td>
\t\t\t  \t\t\t<strong>Fecha fin</strong>
\t\t\t  \t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "compromiso_fin", [], "any", false, false, false, 59), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">
\t\t\t  \t\t\t<strong>Responsables</strong>
\t\t\t  \t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "usuario", [], "any", false, false, false, 66), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">
\t\t\t  \t\t\t<strong>Requerimeintos</strong>
\t\t\t  \t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "requerimiento", [], "any", false, false, false, 73), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">
\t\t\t  \t\t\t<strong>Lineamientos</strong>
\t\t\t  \t\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "linea_guia", [], "any", false, false, false, 80), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">
\t\t\t  \t\t\t<strong>Acciones</strong>
\t\t\t  \t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "compromiso_accion", [], "any", false, false, false, 87), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">
\t\t\t  \t\t\t<strong>Acuerdos</strong>
\t\t\t  \t\t\t";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "compromiso", [], "any", false, false, false, 94), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>
\t\t\t</table>
\t\t\t<table style=\"width:90%; margin-left:5%;\" >
\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">
\t\t\t  \t\t\t<strong>Observaciones / comentarios</strong>
\t\t\t  \t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "observacion", [], "any", false, false, false, 102), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 107), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t\t";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t</table>\t
\t\t\t
\t
\t</div>


";
    }

    public function getTemplateName()
    {
        return "minuta/temas/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 110,  209 => 107,  201 => 102,  190 => 94,  180 => 87,  170 => 80,  160 => 73,  150 => 66,  140 => 59,  132 => 54,  122 => 47,  115 => 43,  103 => 34,  92 => 26,  85 => 22,  76 => 16,  70 => 13,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/temas/update.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/temas/update.html.twig");
    }
}
