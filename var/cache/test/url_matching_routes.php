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
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/ouvrier' => [[['_route' => 'app_ouvrier_index', '_controller' => 'App\\Controller\\OuvrierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ouvrier/new' => [[['_route' => 'app_ouvrier_new', '_controller' => 'App\\Controller\\OuvrierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/affectation/([^/]++)(?'
                    .'|(*:31)'
                    .'|/edit(*:43)'
                    .'|(*:50)'
                .')'
                .'|/chantier/([^/]++)(?'
                    .'|(*:79)'
                    .'|/edit(*:91)'
                    .'|(*:98)'
                .')'
                .'|/equipe/([^/]++)(?'
                    .'|(*:125)'
                    .'|/edit(*:138)'
                    .'|(*:146)'
                .')'
                .'|/ouvrier/([^/]++)(?'
                    .'|(*:175)'
                    .'|/edit(*:188)'
                    .'|(*:196)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_affectation_show', '_controller' => 'App\\Controller\\AffectationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        43 => [[['_route' => 'app_affectation_edit', '_controller' => 'App\\Controller\\AffectationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        50 => [[['_route' => 'app_affectation_delete', '_controller' => 'App\\Controller\\AffectationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        79 => [[['_route' => 'app_chantier_show', '_controller' => 'App\\Controller\\ChantierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        91 => [[['_route' => 'app_chantier_edit', '_controller' => 'App\\Controller\\ChantierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        98 => [[['_route' => 'app_chantier_delete', '_controller' => 'App\\Controller\\ChantierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        175 => [[['_route' => 'app_ouvrier_show', '_controller' => 'App\\Controller\\OuvrierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_ouvrier_edit', '_controller' => 'App\\Controller\\OuvrierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        196 => [
            [['_route' => 'app_ouvrier_delete', '_controller' => 'App\\Controller\\OuvrierController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
