<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'principal', '_controller' => 'App\\Controller\\HomeController::login'], null, null, null, false, false, null]],
        '/inicio' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/minuta' => [[['_route' => 'minuta', '_controller' => 'App\\Controller\\MinutaController::index'], null, null, null, false, false, null]],
        '/configuraciones' => [[['_route' => 'configuraciones', '_controller' => 'App\\Controller\\MinutaController::configuraciones'], null, null, null, false, false, null]],
        '/audiencia' => [[['_route' => 'audiencia_minuta', '_controller' => 'App\\Controller\\MinutaController::configuraciones'], null, null, null, false, false, null]],
        '/huella-digital' => [[['_route' => 'log_minuta', '_controller' => 'App\\Controller\\MinutaController::huella'], null, null, null, false, false, null]],
        '/updatepos' => [[['_route' => 'updatepos', '_controller' => 'App\\Controller\\MinutaController::updatepos'], null, ['GET' => 0], null, false, false, null]],
        '/resetpassword' => [[['_route' => 'resetpassword', '_controller' => 'App\\Controller\\HomeController::resetpassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/login(?:/([^/]++))?(*:27)'
                .'|/usuario(?:/([^/]++))?(*:56)'
                .'|/tema(?:/([^/]++)(?:/([^/]++))?)?(*:96)'
                .'|/nuevo(?:/([^/]++))?(*:123)'
                .'|/ver(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:177)'
                .'|/actualizar(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:238)'
                .'|/borrar(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:295)'
                .'|/minuta(?'
                    .'|/([^/]++)(*:322)'
                    .'|\\-update(?:/([^/]++)(?:/([^/]++))?)?(*:366)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'login', 'alerta' => null, '_controller' => 'App\\Controller\\HomeController::login'], ['alerta'], null, null, false, true, null]],
        56 => [[['_route' => 'usuario', 'id_user' => null, '_controller' => 'App\\Controller\\UsuarioController::index'], ['id_user'], null, null, false, true, null]],
        96 => [[['_route' => 'tema', 'busqueda' => null, 'id_registro' => null, '_controller' => 'App\\Controller\\MinutaController::tema'], ['busqueda', 'id_registro'], null, null, false, true, null]],
        123 => [[['_route' => 'nuevo', 'tabla' => null, '_controller' => 'App\\Controller\\MinutaController:nuevo'], ['tabla'], null, null, false, true, null]],
        177 => [[['_route' => 'ver', 'tabla' => null, 'id_minuta' => null, 'id_registro' => null, '_controller' => 'App\\Controller\\MinutaController:ver'], ['tabla', 'id_minuta', 'id_registro'], null, null, false, true, null]],
        238 => [[['_route' => 'actualizar', 'tabla' => null, 'id_minuta' => null, 'id_registro' => null, '_controller' => 'App\\Controller\\MinutaController:actualizar'], ['tabla', 'id_minuta', 'id_registro'], null, null, false, true, null]],
        295 => [[['_route' => 'borrar', 'tabla' => null, 'id_minuta' => null, 'id_registro' => null, '_controller' => 'App\\Controller\\MinutaController:borrar'], ['tabla', 'id_minuta', 'id_registro'], null, null, false, true, null]],
        322 => [[['_route' => 'buscar_minuta', '_controller' => 'App\\Controller\\MinutaController::buscarMinuta'], ['id_minuta'], null, null, false, true, null]],
        366 => [
            [['_route' => 'update_minuta', 'id_minuta' => null, 'tema' => null, '_controller' => 'App\\Controller\\MinutaController::update'], ['id_minuta', 'tema'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
