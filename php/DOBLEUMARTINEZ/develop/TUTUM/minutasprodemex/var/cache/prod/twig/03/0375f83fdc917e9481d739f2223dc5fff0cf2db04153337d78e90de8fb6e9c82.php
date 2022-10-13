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

/* layout/modals.html.twig */
class __TwigTemplate_9fdceab8fa0b1a5a4a8d8414a20ef127a97e2ffd14eb55b4d349c01bbb1961c9 extends Template
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
        echo "<!-- PUBLICAR MINUTA -->
";
        // line 2
        if (((0 === twig_compare(($context["rol"] ?? null), 2)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "estatus", [], "any", false, false, false, 2), 0)))) {
            // line 3
            echo "\t<!-- PUBLICAR MINUTA -->
\t<div id=\"enviar-minuta\" onclick=\"activeModal('send')\"> 
\t\tPublicar<br><i class=\"fas fa-envelope\"></i>
\t</div>

\t<!-- MODAL  -->
\t<div id=\"content-modals\" >
\t\t<div id=\"body-modal\">

\t\t\t<span onclick=\"desactiveModal()\" > <i class=\"fas fa-times-circle\"></i> </span>
\t\t\t
\t\t\t";
            // line 14
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["publicarMinuta"] ?? null), 'form_start', ["attr" => ["class" => "form-control"]]);
            echo "

\t\t\t\t<div id=\"send\" >
\t\t\t\t\t<div id=\"data-table-v1\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Publicar minuta</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t\t  \t<div class=\"btn btn-danger btn-full-width\" onclick=\"desactiveModal()\" >CANCELAR</div>
\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["publicarMinuta"] ?? null), "aceptarbtn", [], "any", false, false, false, 28), 'widget');
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>\t
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["publicarMinuta"] ?? null), 'form_end');
            echo "
\t\t\t
\t\t</div>

\t</div>

<!-- FIRMAR -->
";
        } elseif ((0 === twig_compare(        // line 41
($context["rol"] ?? null), 3))) {
            // line 42
            echo "
\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["MinutaDetalle"] ?? null), "audiencia", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["audiencia"]) {
                // line 44
                echo "
\t\t";
                // line 45
                if ((0 === twig_compare(($context["userid"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "idUsuario", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)))) {
                    // line 46
                    echo "
\t\t\t";
                    // line 47
                    if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["audiencia"], "estatus", [], "any", false, false, false, 47), null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["audiencia"], "estatus", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), 1)))) {
                        // line 48
                        echo "
\t\t\t\t<!-- FIRMA DE MINUTA -->
\t\t\t\t<div id=\"firma-minuta\"> 
\t\t\t\t\tFirmar<br><i onclick=\"activeModal('signature')\" class=\"fas fa-check-circle\"></i>
\t\t\t\t\t<br>
\t\t\t\t\tRechazar<br><i onclick=\"activeModal('reject')\" class=\"fas fa-times-circle\"></i>
\t\t\t\t</div>

\t\t\t";
                    }
                    // line 57
                    echo "
\t\t\t<!-- MODAL  -->
\t\t\t<div id=\"content-modals\" >

\t\t\t\t<div id=\"body-modal\">

\t\t\t\t\t<span onclick=\"desactiveModal()\" > <i class=\"fas fa-times-circle\"></i> </span>

\t\t\t\t\t";
                    // line 65
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["logFirmaFormMail"] ?? null), 'form_start', ["attr" => ["class" => "form-control"]]);
                    echo "

\t\t\t\t\t\t<div id=\"signature\" >
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div id=\"data-table-v1\">
\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Firmar minuta</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t  \t\t<td>";
                    // line 75
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["logFirmaFormMail"] ?? null), "firmar", [], "any", false, false, false, 75), 'widget');
                    echo "</td>
\t\t\t\t\t\t\t\t  \t</tr>
\t\t\t\t\t\t\t\t  \t<tr>
\t\t\t\t\t\t\t\t  \t\t<td><div class=\"btn btn-danger btn-full-width\" onclick=\"desactiveModal()\" >CANCELAR</div></td>\t
\t\t\t\t\t\t\t\t  \t</tr>
\t\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div id=\"reject\" >
\t\t\t\t\t\t\t<div id=\"data-table-v1\">
\t\t\t\t\t\t\t\t<table >
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>Comentario</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t  \t\t<td>";
                    // line 91
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["logFirmaFormMail"] ?? null), "comentarios", [], "any", false, false, false, 91), 'widget');
                    echo "</td>
\t\t\t\t\t\t\t\t  \t</tr>
\t\t\t\t\t\t\t\t  \t<tr>
\t\t\t\t\t\t\t\t  \t\t<td>";
                    // line 94
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["logFirmaFormMail"] ?? null), "rechazar", [], "any", false, false, false, 94), 'widget');
                    echo "</td>
\t\t\t\t\t\t\t\t  \t</tr>
\t\t\t\t\t\t\t\t</table>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
                    // line 100
                    echo                     $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["logFirmaFormMail"] ?? null), 'form_end');
                    echo "

\t\t\t\t</div>
\t\t\t\t 
\t\t\t</div>

\t\t";
                }
                // line 107
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audiencia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "
";
        }
        // line 111
        echo "
<script>
\tfunction activeModal(\$content) {
\t\tdocument.getElementById(\"body-modal\").style.display = 'block';

\t\tswitch(\$content){

\t\t\tcase 'signature':
\t\t\t \t\$(\"#signature\").css(\"display\",\"block\");
\t\t\t \t\$(\"#send, #reject\").css(\"display\",\"none\");
\t\t\tbreak;

\t\t\tcase 'reject':
\t\t\t \t\$(\"#reject\").css(\"display\",\"block\");
\t\t\t \t\$(\"#send, #signature\").css(\"display\",\"none\");
\t\t\tbreak;

\t\t\tcase 'send':
\t\t\t \t\$(\"#send\").css(\"display\",\"block\");
\t\t\t \t\$(\"#signature, #reject\").css(\"display\",\"none\");
\t\t\tbreak;

\t\t}

\t}

\t// MODAL OFF
 \tfunction desactiveModal(){
 \t\tdocument.getElementById(\"body-modal\").style.display = 'none';
 \t}

</script>";
    }

    public function getTemplateName()
    {
        return "layout/modals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 111,  195 => 109,  188 => 107,  178 => 100,  169 => 94,  163 => 91,  144 => 75,  131 => 65,  121 => 57,  110 => 48,  108 => 47,  105 => 46,  103 => 45,  100 => 44,  96 => 43,  93 => 42,  91 => 41,  81 => 34,  72 => 28,  55 => 14,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/modals.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/layout/modals.html.twig");
    }
}
