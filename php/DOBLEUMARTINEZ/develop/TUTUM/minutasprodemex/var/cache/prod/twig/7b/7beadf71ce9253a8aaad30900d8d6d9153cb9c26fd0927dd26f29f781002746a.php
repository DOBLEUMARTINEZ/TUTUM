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

/* layout/alertas.html.twig */
class __TwigTemplate_d7c1bd0341a8fed330c62fa695ad5e84d1102f4664ab1da218a75fbba9c81bbc extends Template
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
        echo "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
<script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>

";
        // line 4
        if (array_key_exists("alerta", $context)) {
            // line 5
            echo "
\t<span style=\"display: none;\">yes</span>

\t<!-- ACCESO PERMITIDO -->
   \t";
            // line 9
            if ((0 === twig_compare(($context["alerta"] ?? null), "success"))) {
                // line 10
                echo "\t   \t<script type=\"text/javascript\">
\t\t\t      Swal.fire({
\t\t\t          icon: 'success',
\t\t\t          title:'Acceso permitido',
\t\t\t          text: 'Bienvenido al Sistema de Minutas Prodemex',
\t\t\t          /*showCloseButton: true,*/
\t\t\t          focusConfirm: false,
\t\t\t          timerProgressBar: true,
\t\t\t          confirmButtonText:
\t\t\t          'Continuar',
\t\t\t          confirmButtonAriaLabel: 'Send'
\t\t\t        });
\t\t</script>

\t<!-- ACCESO DENEGADO -->
\t";
            } elseif ((0 === twig_compare(            // line 25
($context["alerta"] ?? null), "error"))) {
                // line 26
                echo "\t\t\t<script type=\"text/javascript\">
\t\t      Swal.fire({
\t\t          icon: 'error',
\t\t          title:'Upps, Algo salio mal',
\t\t          text: 'Ingresa las credenciales correctas',
\t\t          /*showCloseButton: true,*/
\t\t          focusConfirm: false,
\t\t          timerProgressBar: true,
\t\t          confirmButtonText:
\t\t          'Continuar',
\t\t          confirmButtonAriaLabel: 'Send'
\t\t        });
\t\t    </script>

\t<!-- NUEVO REGISTRO -->
\t";
            } elseif ((0 === twig_compare(            // line 41
($context["alerta"] ?? null), "new-success"))) {
                // line 42
                echo "\t\t<script type=\"text/javascript\">
\t\t\tSwal.fire({
\t\t\t    icon: 'success',
\t\t\t    title:'Registro guardado',
\t\t\t    text: 'El registro se agrego con exito',
\t\t\t    /*showCloseButton: true,*/
\t\t\t    focusConfirm: false,
\t\t\t    timerProgressBar: true,
\t\t\t    confirmButtonText:'Continuar',
\t\t\t    confirmButtonAriaLabel: 'Send'
\t\t\t});
\t\t</script>

\t<!-- ELIMINAR REGISTRO -->
\t";
            } elseif ((0 === twig_compare(            // line 56
($context["alerta"] ?? null), "delete-success"))) {
                // line 57
                echo "\t\t<script type=\"text/javascript\">
\t\t\tSwal.fire({
\t\t\t    icon: 'success',
\t\t\t    title:'Registro eliminado',
\t\t\t    text: 'El registro se elimino con exito',
\t\t\t    /*showCloseButton: true,*/
\t\t\t    focusConfirm: false,
\t\t\t    timerProgressBar: true,
\t\t\t    confirmButtonText:'Continuar',
\t\t\t    confirmButtonAriaLabel: 'Send'
\t\t\t});
\t\t</script>

\t<!-- ACTUALIZAR REGISTRO -->
\t";
            } elseif ((0 === twig_compare(            // line 71
($context["alerta"] ?? null), "update-success"))) {
                // line 72
                echo "\t\t<script type=\"text/javascript\">
\t\t\tSwal.fire({
\t\t\t    icon: 'success',
\t\t\t    title:'Registro actualizado',
\t\t\t    text: 'El registro se actualizo con exito',
\t\t\t    /*showCloseButton: true,*/
\t\t\t    focusConfirm: false,
\t\t\t    timerProgressBar: true,
\t\t\t    confirmButtonText:'Continuar',
\t\t\t    confirmButtonAriaLabel: 'Send'
\t\t\t});
\t\t</script>

   \t<!-- MINUTA PUBLICADA -->
\t";
            } elseif ((0 === twig_compare(            // line 86
($context["alerta"] ?? null), "public-success"))) {
                // line 87
                echo "\t\t<script type=\"text/javascript\">
\t\t\tSwal.fire({
\t\t\t    icon: 'success',
\t\t\t    title:'Minuta publicada',
\t\t\t    text: 'La minuta se publico con exito',
\t\t\t    /*showCloseButton: true,*/
\t\t\t    focusConfirm: false,
\t\t\t    timerProgressBar: true,
\t\t\t    confirmButtonText:'Continuar',
\t\t\t    confirmButtonAriaLabel: 'Send'
\t\t\t});
\t\t</script>

\t<!-- MINUTA FIRMADA -->
\t";
            } elseif ((0 === twig_compare(            // line 101
($context["alerta"] ?? null), "firma-success"))) {
                // line 102
                echo "\t\t<script type=\"text/javascript\">
\t\t\tSwal.fire({
\t\t\t    icon: 'success',
\t\t\t    title:'Minuta firmada',
\t\t\t    text: 'La minuta se firmo con exito',
\t\t\t    /*showCloseButton: true,*/
\t\t\t    focusConfirm: false,
\t\t\t    timerProgressBar: true,
\t\t\t    confirmButtonText:'Continuar',
\t\t\t    confirmButtonAriaLabel: 'Send'
\t\t\t});
\t\t</script>
\t\t
   \t";
            }
            // line 116
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "layout/alertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 116,  162 => 102,  160 => 101,  144 => 87,  142 => 86,  126 => 72,  124 => 71,  108 => 57,  106 => 56,  90 => 42,  88 => 41,  71 => 26,  69 => 25,  52 => 10,  50 => 9,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/alertas.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/layout/alertas.html.twig");
    }
}
