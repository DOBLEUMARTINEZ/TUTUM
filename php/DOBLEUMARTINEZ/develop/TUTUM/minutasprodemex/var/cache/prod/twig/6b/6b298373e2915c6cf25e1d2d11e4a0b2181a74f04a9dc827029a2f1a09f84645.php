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

/* minuta/index.html.twig */
class __TwigTemplate_a91e6ca57880e822c17cebe36e1dc60c15b6e144479134df7e8e258be9745def extends Template
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
        $this->parent = $this->loadTemplate("layout/layoutBase.html.twig", "minuta/index.html.twig", 1);
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
\t<!-- TITULO Y FINTRO DE BUSUQEDA -->
\t<div id=\"fitro-busqueda-minuta\">
\t\t<h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t\t<ol>
\t\t\t<li>
\t\t\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t\t\t\t";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t</li>\t
\t\t</ol>
\t</div>

\t<hr class=\"hr-red\">

\t";
        // line 23
        if (array_key_exists("MinutaDetalle", $context)) {
            // line 24
            echo "\t\t<!-- DETALLE MINUTA -->
\t\t";
            // line 25
            echo twig_include($this->env, $context, "minuta/minutas/detail-minuta.html.twig");
            echo "
\t";
        } else {
            // line 27
            echo "\t\t<!-- TODAS LAS MINUTAS -->\t
\t\t";
            // line 28
            echo twig_include($this->env, $context, "minuta/minutas/all-minutas.html.twig");
            echo "
\t";
        }
        // line 30
        echo "
";
    }

    public function getTemplateName()
    {
        return "minuta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 30,  105 => 28,  102 => 27,  97 => 25,  94 => 24,  92 => 23,  82 => 16,  78 => 15,  74 => 14,  68 => 11,  63 => 8,  59 => 7,  53 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "minuta/index.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/minuta/index.html.twig");
    }
}
