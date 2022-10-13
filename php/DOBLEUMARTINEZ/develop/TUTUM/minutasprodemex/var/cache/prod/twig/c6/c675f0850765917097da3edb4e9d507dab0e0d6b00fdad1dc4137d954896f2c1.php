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

/* usuario/update-user.html.twig */
class __TwigTemplate_c004988e94b209afa62efa2bb99ae32ad4381640eaef3f0a8ea744154555c59c extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "usuario/update-user.html.twig", 1);
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
\t\t<table style=\"width:80%; margin-left:10%;\" >
\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t<tr>
\t\t\t\t\t<th colspan=\"2\">";
        // line 15
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " usuario </th>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td width=\"20%;\" ><strong>Nombre</strong></td>
\t\t\t  \t\t<td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nombre", [], "any", false, false, false, 20), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td><strong>Apellido</strong></td>
\t\t\t  \t\t<td>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "apellido", [], "any", false, false, false, 25), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td > <strong>Email</strong></td>
\t\t\t  \t\t<td >";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 30), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td><strong>Usuario</strong></td>
\t\t\t  \t\t<td>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 35), 'widget');
        echo "</td>
\t\t\t  \t</tr>
\t\t\t  \t<tr>
\t\t\t  \t\t<td><strong>Contraseña</strong></td>
\t\t\t  \t\t<td>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 39), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td><strong>Area</strong></td>
\t\t\t  \t\t<td>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "area", [], "any", false, false, false, 44), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td><strong>Rol</strong></td>
\t\t\t  \t\t<td>";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rol", [], "any", false, false, false, 49), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td ><strong>iniciales</strong></td>
\t\t\t  \t\t<td >";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "iniciales", [], "any", false, false, false, 54), 'widget');
        echo "</td>
\t\t\t  \t</tr>

\t\t\t  \t<tr>
\t\t\t  \t\t<td  colspan=\"2\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 58), 'widget');
        echo "</td>
\t\t\t  \t</tr>
\t\t\t";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</table>\t
\t</div>

";
    }

    public function getTemplateName()
    {
        return "usuario/update-user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 60,  145 => 58,  138 => 54,  130 => 49,  122 => 44,  114 => 39,  107 => 35,  99 => 30,  91 => 25,  83 => 20,  75 => 15,  70 => 13,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "usuario/update-user.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/usuario/update-user.html.twig");
    }
}
