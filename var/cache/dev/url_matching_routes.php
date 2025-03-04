<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/affectation' => [[['_route' => 'app_affectation_index', '_controller' => 'App\\Controller\\AffectationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/affectation/new' => [[['_route' => 'app_affectation_new', '_controller' => 'App\\Controller\\AffectationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chantier' => [[['_route' => 'app_chantier_index', '_controller' => 'App\\Controller\\ChantierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chantier/new' => [[['_route' => 'app_chantier_new', '_controller' => 'App\\Controller\\ChantierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/equipe/new' => [[['_route' => 'app_equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ouvrier' => [[['_route' => 'app_ouvrier_index', '_controller' => 'App\\Controller\\OuvrierController::index'], null, ['GET' => 0], null, false, false, null]],
        '/ouvrier/new' => [[['_route' => 'app_ouvrier_new', '_controller' => 'App\\Controller\\OuvrierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/affectation/([^/]++)(?'
                    .'|(*:66)'
                    .'|/edit(*:78)'
                    .'|(*:85)'
                .')'
                .'|/chantier/([^/]++)(?'
                    .'|(*:114)'
                    .'|/edit(*:127)'
                    .'|(*:135)'
                .')'
                .'|/equipe/([^/]++)(?'
                    .'|(*:163)'
                    .'|/edit(*:176)'
                    .'|(*:184)'
                .')'
                .'|/ouvrier/([^/]++)(?'
                    .'|(*:213)'
                    .'|/edit(*:226)'
                    .'|(*:234)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'app_affectation_show', '_controller' => 'App\\Controller\\AffectationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        78 => [[['_route' => 'app_affectation_edit', '_controller' => 'App\\Controller\\AffectationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        85 => [[['_route' => 'app_affectation_delete', '_controller' => 'App\\Controller\\AffectationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        114 => [[['_route' => 'app_chantier_show', '_controller' => 'App\\Controller\\ChantierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_chantier_edit', '_controller' => 'App\\Controller\\ChantierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        135 => [[['_route' => 'app_chantier_delete', '_controller' => 'App\\Controller\\ChantierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        163 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        176 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        184 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        213 => [[['_route' => 'app_ouvrier_show', '_controller' => 'App\\Controller\\OuvrierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'app_ouvrier_edit', '_controller' => 'App\\Controller\\OuvrierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [
            [['_route' => 'app_ouvrier_delete', '_controller' => 'App\\Controller\\OuvrierController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
