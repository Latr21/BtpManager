<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/affectation' => [[['_route' => 'app_affectation_index', '_controller' => 'App\\Controller\\AffectationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/chantier' => [[['_route' => 'app_chantier_index', '_controller' => 'App\\Controller\\ChantierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chantier/new' => [[['_route' => 'app_chantier_new', '_controller' => 'App\\Controller\\ChantierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/equipe/new' => [[['_route' => 'app_equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/ouvrier' => [[['_route' => 'app_ouvrier_index', '_controller' => 'App\\Controller\\OuvrierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ouvrier/new' => [[['_route' => 'app_ouvrier_new', '_controller' => 'App\\Controller\\OuvrierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/affectation/(?'
                    .'|new/([^/]++)(*:70)'
                    .'|([^/]++)(?'
                        .'|(*:88)'
                        .'|/edit(*:100)'
                        .'|(*:108)'
                    .')'
                .')'
                .'|/chantier/([^/]++)(?'
                    .'|(*:139)'
                    .'|/edit(*:152)'
                    .'|(*:160)'
                .')'
                .'|/equipe/([^/]++)(?'
                    .'|(*:188)'
                    .'|/edit(*:201)'
                    .'|(*:209)'
                .')'
                .'|/ouvrier/([^/]++)(?'
                    .'|(*:238)'
                    .'|/edit(*:251)'
                    .'|(*:259)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'app_affectation_new', '_controller' => 'App\\Controller\\AffectationController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        88 => [[['_route' => 'app_affectation_show', '_controller' => 'App\\Controller\\AffectationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        100 => [[['_route' => 'app_affectation_edit', '_controller' => 'App\\Controller\\AffectationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        108 => [[['_route' => 'app_affectation_delete', '_controller' => 'App\\Controller\\AffectationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_chantier_show', '_controller' => 'App\\Controller\\ChantierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        152 => [[['_route' => 'app_chantier_edit', '_controller' => 'App\\Controller\\ChantierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        160 => [[['_route' => 'app_chantier_delete', '_controller' => 'App\\Controller\\ChantierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        188 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'app_equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        238 => [[['_route' => 'app_ouvrier_show', '_controller' => 'App\\Controller\\OuvrierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'app_ouvrier_edit', '_controller' => 'App\\Controller\\OuvrierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [
            [['_route' => 'app_ouvrier_delete', '_controller' => 'App\\Controller\\OuvrierController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
