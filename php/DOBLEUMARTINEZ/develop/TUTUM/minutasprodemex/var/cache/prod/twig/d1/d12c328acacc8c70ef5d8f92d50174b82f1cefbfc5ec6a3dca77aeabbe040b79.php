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

/* minuta/minutas/update-minuta.html.twig */
class __TwigTemplate_f47d46fd8722bd029d6a903aaf3d4f3723b866af28f2ececd91c4a0270eae3e5 extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/minutas/update-minuta.html.twig", 1);
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
\t\t\t<table style=\"width:80%; margin-left:10%;\" >
\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\"> ";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " minuta </th>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"20%;\" ><strong>Objetivo</strong></td>
\t\t\t  \t\t<td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "objetivo", [], "any", false, false, false, 20), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"20%;\" ><strong>Fecha inicio</strong></td>
\t\t\t  \t\t<td>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fecha_inicio", [], "any", false, false, false, 25), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"20%;\" ><strong>Fecha Fin</strong></td>
\t\t\t  \t\t<td>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "fecha_fin", [], "any", false, false, false, 30), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"20%;\" ><strong>Proxima reunión</strong></td>
\t\t\t  \t\t<td>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "proxima_reunion", [], "any", false, false, false, 35), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"20%;\" ><strong>Itinerario</strong></td>
\t\t\t  \t\t<td>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "itinerario", [], "any", false, false, false, 40), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\" >
\t\t\t  \t\t\t<strong>Asistentes</strong>
\t\t\t  \t\t\t<hr class=\"hr-red\" >
\t\t\t  \t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "asistentes", [], "any", false, false, false, 47), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\" >
\t\t\t  \t\t\t<strong>Ultimos temas revisados</strong>
\t\t\t  \t\t\t<hr class=\"hr-red\" >
\t\t\t  \t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Temas_minuta", [], "any", false, false, false, 55), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td colspan=\"2\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 60), 'widget');
        echo "</td>
\t\t\t  \t</tr>
\t\t\t\t";
        // line 62
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
        return "minuta/minutas/update-minuta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 62,  144 => 60,  136 => 55,  125 => 47,  115 => 40,  107 => 35,  99 => 30,  91 => 25,  83 => 20,  75 => 15,  70 => 13,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/minutas/update-minuta.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/minutas/update-minuta.html.twig");
    }
}
