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

/* minuta/huella/index.html.twig */
class __TwigTemplate_8551c666d2ea89c19d29de201789d6c90b7d804cfb4de1dedbf7fc98b9718ac0 extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/huella/index.html.twig", 1);
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
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th width=\"10%\">ID</th>
\t\t\t\t<th width=\"30%\">Usuario</th>
\t\t\t\t<th width=\"30%\">Email</th>
\t\t\t\t<th width=\"30%\">Fecha ingreso</th>
\t\t\t</tr>

\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Huellas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["huella"]) {
            // line 25
            echo "
\t\t\t\t";
            // line 26
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["huella"], "usuario", [], "any", false, false, false, 26), "rol", [], "any", false, false, false, 26), "idRoles", [], "any", false, false, false, 26), 1))) {
                // line 27
                echo "
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"text-align: center;\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["huella"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td >";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["huella"], "usuario", [], "any", false, false, false, 30), "nombre", [], "any", false, false, false, 30), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["huella"], "usuario", [], "any", false, false, false, 30), "apellido", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td >";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["huella"], "usuario", [], "any", false, false, false, 31), "email", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td style=\"text-align: center;\">";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["huella"], "fecha", [], "any", false, false, false, 32), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
\t\t\t\t\t</tr>

\t\t\t\t";
            }
            // line 36
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['huella'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t
\t\t</table>
\t\t\t
\t</div>

";
    }

    public function getTemplateName()
    {
        return "minuta/huella/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 38,  118 => 36,  111 => 32,  107 => 31,  101 => 30,  97 => 29,  93 => 27,  91 => 26,  88 => 25,  84 => 24,  67 => 10,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/huella/index.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/huella/index.html.twig");
    }
}
