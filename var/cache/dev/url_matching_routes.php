<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/bolgeler' => [[['_route' => 'bolgeler_home', '_controller' => 'App\\Controller\\Admin\\BolgelerController::index'], null, null, null, false, false, null]],
        '/admin/bolgeler/create' => [[['_route' => 'bolgeler_create', '_controller' => 'App\\Controller\\Admin\\BolgelerController::create'], null, null, null, false, false, null]],
        '/admin/content' => [[['_route' => 'content_home', '_controller' => 'App\\Controller\\Admin\\ContentController::index'], null, null, null, false, false, null]],
        '/admin/content/create' => [[['_route' => 'content_create', '_controller' => 'App\\Controller\\Admin\\ContentController::create'], null, null, null, false, false, null]],
        '/admin/hizmet' => [[['_route' => 'hizmet_home', '_controller' => 'App\\Controller\\Admin\\HizmetController::index'], null, null, null, false, false, null]],
        '/admin/hizmet/create' => [[['_route' => 'hizmet_create', '_controller' => 'App\\Controller\\Admin\\HizmetController::hizmetAdd'], null, null, null, false, false, null]],
        '/admin/mahalle' => [[['_route' => 'mahalle_home', '_controller' => 'App\\Controller\\Admin\\MahalleController::index'], null, null, null, false, false, null]],
        '/admin/sss' => [[['_route' => 'sss_home', '_controller' => 'App\\Controller\\Admin\\SSSController::index'], null, null, null, false, false, null]],
        '/admin/sss/create' => [[['_route' => 'sss_create', '_controller' => 'App\\Controller\\Admin\\SSSController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admi(?'
                    .'|n/(?'
                        .'|content/(?'
                            .'|update/([^/]++)(*:208)'
                            .'|delete/([^/]++)(*:231)'
                        .')'
                        .'|hizmet/(?'
                            .'|update/([^/]++)(*:265)'
                            .'|delete/([^/]++)(*:288)'
                        .')'
                        .'|sss/delete/([^/]++)(*:316)'
                    .')'
                    .'|m/sss/update/([^/]++)(*:346)'
                .')'
                .'|/blog/([^/]++)(*:369)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'content_update', '_controller' => 'App\\Controller\\Admin\\ContentController::update'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => 'content_delete', '_controller' => 'App\\Controller\\Admin\\ContentController::delete'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'hizmet_update', '_controller' => 'App\\Controller\\Admin\\HizmetController::update'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'hizmet_delete', '_controller' => 'App\\Controller\\Admin\\HizmetController::delete'], ['id'], null, null, false, true, null]],
        316 => [[['_route' => 'sss_delete', '_controller' => 'App\\Controller\\Admin\\SSSController::delete'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'sss_update', '_controller' => 'App\\Controller\\Admin\\SSSController::update'], ['id'], null, null, false, true, null]],
        369 => [
            [['_route' => 'hizmet', '_controller' => 'App\\Controller\\HomeController::hizmet'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
