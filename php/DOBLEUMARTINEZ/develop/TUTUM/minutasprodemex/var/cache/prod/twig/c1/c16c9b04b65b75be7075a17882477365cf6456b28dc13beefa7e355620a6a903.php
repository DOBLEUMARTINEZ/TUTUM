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

/* layout/layoutBase.html.twig */
class __TwigTemplate_86605501b454a207d46b901173b4cd3d70915cbe9ee29c8b2cff510ba396e905 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tituloPagina' => [$this, 'block_tituloPagina'],
            'contenido' => [$this, 'block_contenido'],
            'piePagina' => [$this, 'block_piePagina'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
 
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">
\t\t<meta name=\"theme-color\" content=\"#111\">
\t\t<link rel=\"icon\" type=\"./image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" />

\t\t<title>
\t\t\tPRODEMEX | ";
        // line 13
        $this->displayBlock('tituloPagina', $context, $blocks);
        // line 14
        echo "\t\t</title>

\t\t<!-- icons CDN -->
  \t\t<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  \t\t<!-- BOOTSTRAP -->
  \t\t<link href=\"https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
  \t\t<link href=\"https://getbootstrap.com/docs/5.0/assets/css/docs.css\" rel=\"stylesheet\">

  \t\t<!-- Estilos css  -->
  \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  \t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/normalize.css"), "html", null, true);
        echo "\">

  \t\t<!-- Tiny -->
  \t\t<script src=\"https://cdn.tiny.cloud/1/zlh7bn5lalove6k8rk7e1ceon9gww9dmtya6ztil7if58rwb/tinymce/6/tinymce.min.js\" referrerpolicy=\"origin\"></script>
  \t\t<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>

  \t\t<!-- ALERTAS -->
    \t";
        // line 32
        $this->loadTemplate("layout/alertas.html.twig", "layout/layoutBase.html.twig", 32)->display($context);
        // line 33
        echo "
\t</head>

\t<body>
 
\t\t<div id=\"head\">

\t\t\t<div id=\"user-session\" onclick=\"verUser();\" > 
\t\t\t\t<i class=\"fas fa-user\"></i>
\t\t\t\t<span id=\"sesion-user\">";
        // line 42
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"logo\"  >
\t\t\t\t<img onclick=\"window.location.href='";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inicio"), "html", null, true);
        echo "';\" src='";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/prodemex.png"), "html", null, true);
        echo "'>
\t\t\t</div>

\t\t\t<div class=\"menu\">
\t\t\t\t<ol>
\t\t\t\t\t<li onclick=\"window.location.href='";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("inicio"), "html", null, true);
        echo "';\" >Inicio</li>

\t\t\t\t\t";
        // line 53
        if (((0 === twig_compare(($context["rol"] ?? null), 1)) || (0 === twig_compare(($context["rol"] ?? null), 2)))) {
            // line 54
            echo "
\t\t\t\t\t\t<li onclick=\"window.location.href='";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("minuta"), "html", null, true);
            echo "';\" >Minutas</li>

\t\t\t\t\t\t<li onclick=\"window.location.href='";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("tema"), "html", null, true);
            echo "';\" >Temas</li>

\t\t\t\t\t\t<li onclick=\"window.location.href='";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("usuario"), "html", null, true);
            echo "';\" >Usuarios</li>

\t\t\t\t\t\t<li onclick=\"window.location.href='";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("huella-digital"), "html", null, true);
            echo "';\" >Huella digital</li>

\t\t\t\t\t\t<li onclick=\"window.location.href='";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("configuraciones"), "html", null, true);
            echo "';\" ><i class=\"fas fa-cogs\"></i></li>

\t\t\t\t\t";
        } elseif ((0 === twig_compare(        // line 65
($context["rol"] ?? null), 3))) {
            // line 66
            echo "
\t\t\t\t\t\t<li onclick=\"window.location.href='";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("minuta"), "html", null, true);
            echo "';\" >Minutas</li>

\t\t\t\t\t";
        }
        // line 70
        echo "
\t\t\t\t\t<li onclick=\"window.location.href='";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login"), "html", null, true);
        echo "';\"><i class=\"fas fa-sign-out-alt\" title=\"Cerrar sesion\" alt=\"Cerrar sesion\" ></i></li>

\t\t\t\t</ol>
\t\t\t</div>

\t\t</div>

\t\t<section id=\"content\">
\t\t\t";
        // line 79
        $this->displayBlock('contenido', $context, $blocks);
        // line 80
        echo "\t\t</section>

\t\t<footer id=\"footer\">
\t\t\t";
        // line 83
        $this->displayBlock('piePagina', $context, $blocks);
        // line 84
        echo "\t\t\t<p>© Copyright2022 PRODEMEX Todos los derechos reservados.</p>
\t\t</footer>

\t\t<script src=\"https://cdn.ckbox.io/CKBox/1.1.0/ckbox.js\"></script>
\t    <script src=\"https://cdn.ckeditor.com/ckeditor5/34.2.0/super-build/ckeditor.js\"></script>
\t    <script>
\t        // This sample still does not showcase all CKEditor 5 features (!)
\t        // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
\t        CKEDITOR.ClassicEditor.create(document.getElementById(\"minuta_itinerario\"), {
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
\t            toolbar: {
\t                items: [
\t                    'ckbox', 'uploadImage', '|',
\t                    'exportPDF','exportWord', '|',
\t                    'findAndReplace', 'selectAll', '|',
\t                    'heading', '|',
\t                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
\t                    'bulletedList', 'numberedList', 'todoList', '|',
\t                    'outdent', 'indent', '|',
\t                    'undo', 'redo',
\t                    '-',
\t                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
\t                    'alignment', '|',
\t                    'link', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
\t                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
\t                    'textPartLanguage', '|',
\t                    'sourceEditing'
\t                ],
\t                shouldNotGroupWhenFull: true
\t            },
\t            list: {
\t                properties: {
\t                    styles: true,
\t                    startIndex: true,
\t                    reversed: true
\t                }
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
\t            heading: {
\t                options: [
\t                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
\t                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
\t                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
\t                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
\t                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
\t                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
\t                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
\t                ]
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
\t            placeholder: 'Welcome to CKEditor 5 + CKBox!',
\t            ckbox: {
\t                // The development token endpoint is a special endpoint to help you in getting started with
\t                // CKEditor Cloud Services.
\t                // Please note the development token endpoint returns tokens with the CKBox administrator role.
\t                // It offers unrestricted, full access to the service and will expire 30 days after being used for the first time.
\t                // -------------------------------------------------------------
\t                // !!! You should not use it on production !!!
\t                // -------------------------------------------------------------
\t                // Read more: https://ckeditor.com/docs/ckbox/latest/guides/configuration/authentication.html#token-endpoint

\t                // You need to provide your own token endpoint here
\t                tokenUrl: 'https://92369.cke-cs.com/token/dev/bh6Q88bFN7cLedEu9Ta6dHdnMfY6Dh2c5x91?limit=10'
\t            },
\t            // The \"super-build\" contains more premium features that require additional configuration, disable them below.
\t            // Do not turn them on unless you reqd the documentation and know how to configure them and setup the editor.
\t            removePlugins: [
\t                // These two are commercial, but you can try them out without registering to a trial.
\t                // 'ExportPdf',
\t                // 'ExportWord',
\t                'EasyImage',
\t                'RealTimeCollaborativeComments',
\t                'RealTimeCollaborativeTrackChanges',
\t                'RealTimeCollaborativeRevisionHistory',
\t                'PresenceList',
\t                'Comments',
\t                'TrackChanges',
\t                'TrackChangesData',
\t                'RevisionHistory',
\t                'Pagination',
\t                'WProofreader',
\t                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
\t                // from a local file system (file://) - load this site via HTTP server if you enable MathType
\t                'MathType'
\t            ]
\t        });
\t\t\tCKEDITOR.ClassicEditor.create(document.getElementById(\"tema_requerimiento\"), {
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
\t            toolbar: {
\t                items: [
\t                    'ckbox', 'uploadImage', '|',
\t                    'exportPDF','exportWord', '|',
\t                    'findAndReplace', 'selectAll', '|',
\t                    'heading', '|',
\t                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
\t                    'bulletedList', 'numberedList', 'todoList', '|',
\t                    'outdent', 'indent', '|',
\t                    'undo', 'redo',
\t                    '-',
\t                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
\t                    'alignment', '|',
\t                    'link', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
\t                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
\t                    'textPartLanguage', '|',
\t                    'sourceEditing'
\t                ],
\t                shouldNotGroupWhenFull: true
\t            },
\t            list: {
\t                properties: {
\t                    styles: true,
\t                    startIndex: true,
\t                    reversed: true
\t                }
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
\t            heading: {
\t                options: [
\t                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
\t                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
\t                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
\t                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
\t                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
\t                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
\t                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
\t                ]
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
\t            placeholder: 'Welcome to CKEditor 5 + CKBox!',
\t            ckbox: {
\t                // The development token endpoint is a special endpoint to help you in getting started with
\t                // CKEditor Cloud Services.
\t                // Please note the development token endpoint returns tokens with the CKBox administrator role.
\t                // It offers unrestricted, full access to the service and will expire 30 days after being used for the first time.
\t                // -------------------------------------------------------------
\t                // !!! You should not use it on production !!!
\t                // -------------------------------------------------------------
\t                // Read more: https://ckeditor.com/docs/ckbox/latest/guides/configuration/authentication.html#token-endpoint

\t                // You need to provide your own token endpoint here
\t                tokenUrl: 'https://92369.cke-cs.com/token/dev/bh6Q88bFN7cLedEu9Ta6dHdnMfY6Dh2c5x91?limit=10'
\t            },
\t            // The \"super-build\" contains more premium features that require additional configuration, disable them below.
\t            // Do not turn them on unless you reqd the documentation and know how to configure them and setup the editor.
\t            removePlugins: [
\t                // These two are commercial, but you can try them out without registering to a trial.
\t                // 'ExportPdf',
\t                // 'ExportWord',
\t                'EasyImage',
\t                'RealTimeCollaborativeComments',
\t                'RealTimeCollaborativeTrackChanges',
\t                'RealTimeCollaborativeRevisionHistory',
\t                'PresenceList',
\t                'Comments',
\t                'TrackChanges',
\t                'TrackChangesData',
\t                'RevisionHistory',
\t                'Pagination',
\t                'WProofreader',
\t                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
\t                // from a local file system (file://) - load this site via HTTP server if you enable MathType
\t                'MathType'
\t            ]
\t        });
\t\t\tCKEDITOR.ClassicEditor.create(document.getElementById(\"tema_linea_guia\"), {
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
\t            toolbar: {
\t                items: [
\t                    'ckbox', 'uploadImage', '|',
\t                    'exportPDF','exportWord', '|',
\t                    'findAndReplace', 'selectAll', '|',
\t                    'heading', '|',
\t                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
\t                    'bulletedList', 'numberedList', 'todoList', '|',
\t                    'outdent', 'indent', '|',
\t                    'undo', 'redo',
\t                    '-',
\t                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
\t                    'alignment', '|',
\t                    'link', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
\t                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
\t                    'textPartLanguage', '|',
\t                    'sourceEditing'
\t                ],
\t                shouldNotGroupWhenFull: true
\t            },
\t            list: {
\t                properties: {
\t                    styles: true,
\t                    startIndex: true,
\t                    reversed: true
\t                }
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
\t            heading: {
\t                options: [
\t                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
\t                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
\t                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
\t                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
\t                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
\t                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
\t                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
\t                ]
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
\t            placeholder: 'Welcome to CKEditor 5 + CKBox!',
\t            ckbox: {
\t                // The development token endpoint is a special endpoint to help you in getting started with
\t                // CKEditor Cloud Services.
\t                // Please note the development token endpoint returns tokens with the CKBox administrator role.
\t                // It offers unrestricted, full access to the service and will expire 30 days after being used for the first time.
\t                // -------------------------------------------------------------
\t                // !!! You should not use it on production !!!
\t                // -------------------------------------------------------------
\t                // Read more: https://ckeditor.com/docs/ckbox/latest/guides/configuration/authentication.html#token-endpoint

\t                // You need to provide your own token endpoint here
\t                tokenUrl: 'https://92369.cke-cs.com/token/dev/bh6Q88bFN7cLedEu9Ta6dHdnMfY6Dh2c5x91?limit=10'
\t            },
\t            // The \"super-build\" contains more premium features that require additional configuration, disable them below.
\t            // Do not turn them on unless you reqd the documentation and know how to configure them and setup the editor.
\t            removePlugins: [
\t                // These two are commercial, but you can try them out without registering to a trial.
\t                // 'ExportPdf',
\t                // 'ExportWord',
\t                'EasyImage',
\t                'RealTimeCollaborativeComments',
\t                'RealTimeCollaborativeTrackChanges',
\t                'RealTimeCollaborativeRevisionHistory',
\t                'PresenceList',
\t                'Comments',
\t                'TrackChanges',
\t                'TrackChangesData',
\t                'RevisionHistory',
\t                'Pagination',
\t                'WProofreader',
\t                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
\t                // from a local file system (file://) - load this site via HTTP server if you enable MathType
\t                'MathType'
\t            ]
\t        });
\t\t\tCKEDITOR.ClassicEditor.create(document.getElementById(\"tema_compromiso_accion\"), {
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
\t            toolbar: {
\t                items: [
\t                    'ckbox', 'uploadImage', '|',
\t                    'exportPDF','exportWord', '|',
\t                    'findAndReplace', 'selectAll', '|',
\t                    'heading', '|',
\t                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
\t                    'bulletedList', 'numberedList', 'todoList', '|',
\t                    'outdent', 'indent', '|',
\t                    'undo', 'redo',
\t                    '-',
\t                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
\t                    'alignment', '|',
\t                    'link', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
\t                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
\t                    'textPartLanguage', '|',
\t                    'sourceEditing'
\t                ],
\t                shouldNotGroupWhenFull: true
\t            },
\t            list: {
\t                properties: {
\t                    styles: true,
\t                    startIndex: true,
\t                    reversed: true
\t                }
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
\t            heading: {
\t                options: [
\t                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
\t                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
\t                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
\t                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
\t                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
\t                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
\t                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
\t                ]
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
\t            placeholder: 'Welcome to CKEditor 5 + CKBox!',
\t            ckbox: {
\t                // The development token endpoint is a special endpoint to help you in getting started with
\t                // CKEditor Cloud Services.
\t                // Please note the development token endpoint returns tokens with the CKBox administrator role.
\t                // It offers unrestricted, full access to the service and will expire 30 days after being used for the first time.
\t                // -------------------------------------------------------------
\t                // !!! You should not use it on production !!!
\t                // -------------------------------------------------------------
\t                // Read more: https://ckeditor.com/docs/ckbox/latest/guides/configuration/authentication.html#token-endpoint

\t                // You need to provide your own token endpoint here
\t                tokenUrl: 'https://92369.cke-cs.com/token/dev/bh6Q88bFN7cLedEu9Ta6dHdnMfY6Dh2c5x91?limit=10'
\t            },
\t            // The \"super-build\" contains more premium features that require additional configuration, disable them below.
\t            // Do not turn them on unless you reqd the documentation and know how to configure them and setup the editor.
\t            removePlugins: [
\t                // These two are commercial, but you can try them out without registering to a trial.
\t                // 'ExportPdf',
\t                // 'ExportWord',
\t                'EasyImage',
\t                'RealTimeCollaborativeComments',
\t                'RealTimeCollaborativeTrackChanges',
\t                'RealTimeCollaborativeRevisionHistory',
\t                'PresenceList',
\t                'Comments',
\t                'TrackChanges',
\t                'TrackChangesData',
\t                'RevisionHistory',
\t                'Pagination',
\t                'WProofreader',
\t                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
\t                // from a local file system (file://) - load this site via HTTP server if you enable MathType
\t                'MathType'
\t            ]
\t        });
\t\t\tCKEDITOR.ClassicEditor.create(document.getElementById(\"tema_compromiso\"), {
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
\t            toolbar: {
\t                items: [
\t                    'ckbox', 'uploadImage', '|',
\t                    'exportPDF','exportWord', '|',
\t                    'findAndReplace', 'selectAll', '|',
\t                    'heading', '|',
\t                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
\t                    'bulletedList', 'numberedList', 'todoList', '|',
\t                    'outdent', 'indent', '|',
\t                    'undo', 'redo',
\t                    '-',
\t                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
\t                    'alignment', '|',
\t                    'link', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
\t                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
\t                    'textPartLanguage', '|',
\t                    'sourceEditing'
\t                ],
\t                shouldNotGroupWhenFull: true
\t            },
\t            list: {
\t                properties: {
\t                    styles: true,
\t                    startIndex: true,
\t                    reversed: true
\t                }
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
\t            heading: {
\t                options: [
\t                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
\t                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
\t                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
\t                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
\t                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
\t                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
\t                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
\t                ]
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
\t            placeholder: 'Welcome to CKEditor 5 + CKBox!',
\t            ckbox: {
\t                // The development token endpoint is a special endpoint to help you in getting started with
\t                // CKEditor Cloud Services.
\t                // Please note the development token endpoint returns tokens with the CKBox administrator role.
\t                // It offers unrestricted, full access to the service and will expire 30 days after being used for the first time.
\t                // -------------------------------------------------------------
\t                // !!! You should not use it on production !!!
\t                // -------------------------------------------------------------
\t                // Read more: https://ckeditor.com/docs/ckbox/latest/guides/configuration/authentication.html#token-endpoint

\t                // You need to provide your own token endpoint here
\t                tokenUrl: 'https://92369.cke-cs.com/token/dev/bh6Q88bFN7cLedEu9Ta6dHdnMfY6Dh2c5x91?limit=10'
\t            },
\t            // The \"super-build\" contains more premium features that require additional configuration, disable them below.
\t            // Do not turn them on unless you reqd the documentation and know how to configure them and setup the editor.
\t            removePlugins: [
\t                // These two are commercial, but you can try them out without registering to a trial.
\t                // 'ExportPdf',
\t                // 'ExportWord',
\t                'EasyImage',
\t                'RealTimeCollaborativeComments',
\t                'RealTimeCollaborativeTrackChanges',
\t                'RealTimeCollaborativeRevisionHistory',
\t                'PresenceList',
\t                'Comments',
\t                'TrackChanges',
\t                'TrackChangesData',
\t                'RevisionHistory',
\t                'Pagination',
\t                'WProofreader',
\t                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
\t                // from a local file system (file://) - load this site via HTTP server if you enable MathType
\t                'MathType'
\t            ]
\t        });
\t\t\tCKEDITOR.ClassicEditor.create(document.getElementById(\"tema_observacion\"), {
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
\t            toolbar: {
\t                items: [
\t                    'ckbox', 'uploadImage', '|',
\t                    'exportPDF','exportWord', '|',
\t                    'findAndReplace', 'selectAll', '|',
\t                    'heading', '|',
\t                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
\t                    'bulletedList', 'numberedList', 'todoList', '|',
\t                    'outdent', 'indent', '|',
\t                    'undo', 'redo',
\t                    '-',
\t                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
\t                    'alignment', '|',
\t                    'link', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
\t                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
\t                    'textPartLanguage', '|',
\t                    'sourceEditing'
\t                ],
\t                shouldNotGroupWhenFull: true
\t            },
\t            list: {
\t                properties: {
\t                    styles: true,
\t                    startIndex: true,
\t                    reversed: true
\t                }
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
\t            heading: {
\t                options: [
\t                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
\t                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
\t                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
\t                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
\t                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
\t                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
\t                    { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
\t                ]
\t            },
\t            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
\t            placeholder: 'Welcome to CKEditor 5 + CKBox!',
\t            ckbox: {
\t                // The development token endpoint is a special endpoint to help you in getting started with
\t                // CKEditor Cloud Services.
\t                // Please note the development token endpoint returns tokens with the CKBox administrator role.
\t                // It offers unrestricted, full access to the service and will expire 30 days after being used for the first time.
\t                // -------------------------------------------------------------
\t                // !!! You should not use it on production !!!
\t                // -------------------------------------------------------------
\t                // Read more: https://ckeditor.com/docs/ckbox/latest/guides/configuration/authentication.html#token-endpoint

\t                // You need to provide your own token endpoint here
\t                tokenUrl: 'https://92369.cke-cs.com/token/dev/bh6Q88bFN7cLedEu9Ta6dHdnMfY6Dh2c5x91?limit=10'
\t            },
\t            // The \"super-build\" contains more premium features that require additional configuration, disable them below.
\t            // Do not turn them on unless you reqd the documentation and know how to configure them and setup the editor.
\t            removePlugins: [
\t                // These two are commercial, but you can try them out without registering to a trial.
\t                // 'ExportPdf',
\t                // 'ExportWord',
\t                'EasyImage',
\t                'RealTimeCollaborativeComments',
\t                'RealTimeCollaborativeTrackChanges',
\t                'RealTimeCollaborativeRevisionHistory',
\t                'PresenceList',
\t                'Comments',
\t                'TrackChanges',
\t                'TrackChangesData',
\t                'RevisionHistory',
\t                'Pagination',
\t                'WProofreader',
\t                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
\t                // from a local file system (file://) - load this site via HTTP server if you enable MathType
\t                'MathType'
\t            ]
\t        });

    </script>tema_compromiso

\t</body>

\t<!-- javascript -->
\t<script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tinytextarea.js"), "html", null, true);
        echo "\" ></script>
  \t<script src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/js.js"), "html", null, true);
        echo "\" ></script>

  \t<!-- BOOTSTRAP JS -->
  \t<script src=\"https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js\"></script>
\t<script src=\"https://getbootstrap.com/docs/5.0/assets/js/docs.min.js\"></script>
  \t

</html>";
    }

    // line 13
    public function block_tituloPagina($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " inicio ";
    }

    // line 79
    public function block_contenido($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 83
    public function block_piePagina($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout/layoutBase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  698 => 83,  692 => 79,  685 => 13,  672 => 567,  668 => 566,  184 => 84,  182 => 83,  177 => 80,  175 => 79,  164 => 71,  161 => 70,  155 => 67,  152 => 66,  150 => 65,  145 => 63,  140 => 61,  135 => 59,  130 => 57,  125 => 55,  122 => 54,  120 => 53,  115 => 51,  105 => 46,  98 => 42,  87 => 33,  85 => 32,  75 => 25,  71 => 24,  59 => 14,  57 => 13,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/layoutBase.html.twig", "/home/u623964304/domains/dobleumartinez.com/public_html/develop/TUTUM/minutasprodemex/templates/layout/layoutBase.html.twig");
    }
}
