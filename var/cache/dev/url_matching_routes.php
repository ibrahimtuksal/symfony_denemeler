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
        '/admin/about' => [[['_route' => 'about_home', '_controller' => 'App\\Controller\\Admin\\AboutController::index'], null, null, null, false, false, null]],
        '/admin/about/create' => [[['_route' => 'about_create', '_controller' => 'App\\Controller\\Admin\\AboutController::create'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/banner' => [[['_route' => 'banner_home', '_controller' => 'App\\Controller\\Admin\\BannerController::index'], null, null, null, false, false, null]],
        '/admin/banner/create' => [[['_route' => 'banner_create', '_controller' => 'App\\Controller\\Admin\\BannerController::create'], null, null, null, false, false, null]],
        '/admin/bolgeler' => [[['_route' => 'bolgeler_home', '_controller' => 'App\\Controller\\Admin\\BolgelerController::index'], null, null, null, false, false, null]],
        '/admin/bolgeler/create' => [[['_route' => 'bolgeler_create', '_controller' => 'App\\Controller\\Admin\\BolgelerController::create'], null, null, null, false, false, null]],
        '/admin/content' => [[['_route' => 'content_home', '_controller' => 'App\\Controller\\Admin\\ContentController::index'], null, null, null, false, false, null]],
        '/admin/content/create' => [[['_route' => 'content_create', '_controller' => 'App\\Controller\\Admin\\ContentController::create'], null, null, null, false, false, null]],
        '/admin/general' => [[['_route' => 'general_home', '_controller' => 'App\\Controller\\Admin\\GeneralController::index'], null, null, null, false, false, null]],
        '/admin/generalinformation' => [[['_route' => 'generali_home', '_controller' => 'App\\Controller\\Admin\\GeneralInformationController::index'], null, null, null, false, false, null]],
        '/admin/generalinformation/create' => [[['_route' => 'generali_create', '_controller' => 'App\\Controller\\Admin\\GeneralInformationController::create'], null, null, null, false, false, null]],
        '/admin/generalinformation/info' => [[['_route' => 'generali_info', '_controller' => 'App\\Controller\\Admin\\GeneralInformationController::info'], null, null, null, false, false, null]],
        '/admin/hizmet' => [[['_route' => 'hizmet_home', '_controller' => 'App\\Controller\\Admin\\HizmetController::index'], null, null, null, false, false, null]],
        '/admin/hizmet/create' => [[['_route' => 'hizmet_create', '_controller' => 'App\\Controller\\Admin\\HizmetController::hizmetAdd'], null, null, null, false, false, null]],
        '/admin/mahalle' => [[['_route' => 'mahalle_home', '_controller' => 'App\\Controller\\Admin\\MahalleController::index'], null, null, null, false, false, null]],
        '/admin/number' => [[['_route' => 'number_home', '_controller' => 'App\\Controller\\Admin\\NumberController::index'], null, null, null, false, false, null]],
        '/admin/number/create' => [[['_route' => 'number_create', '_controller' => 'App\\Controller\\Admin\\NumberController::create'], null, null, null, false, false, null]],
        '/admin/sss' => [[['_route' => 'sss_home', '_controller' => 'App\\Controller\\Admin\\SSSController::index'], null, null, null, false, false, null]],
        '/admin/sss/create' => [[['_route' => 'sss_create', '_controller' => 'App\\Controller\\Admin\\SSSController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/sss' => [[['_route' => 'sss_page', '_controller' => 'App\\Controller\\PagesController::sss'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|dmi(?'
                        .'|n/(?'
                            .'|about/update/([^/]++)(*:206)'
                            .'|banner/(?'
                                .'|update/([^/]++)(*:239)'
                                .'|remove/([^/]++)(*:262)'
                            .')'
                            .'|content/(?'
                                .'|slug/([^/]++)(*:295)'
                                .'|update/([^/]++)(*:318)'
                                .'|delete/([^/]++)(*:341)'
                            .')'
                            .'|generalinformation/(?'
                                .'|update/([^/]++)(*:387)'
                                .'|remove/([^/]++)(*:410)'
                            .')'
                            .'|hizmet/(?'
                                .'|update/([^/]++)(*:444)'
                                .'|delete/([^/]++)(*:467)'
                            .')'
                            .'|number/(?'
                                .'|update/([^/]++)(*:501)'
                                .'|delete/([^/]++)(*:524)'
                                .'|operation/([^/]++)(*:550)'
                            .')'
                            .'|sss/delete/([^/]++)(*:578)'
                        .')'
                        .'|m/sss/update/([^/]++)(*:608)'
                    .')'
                    .'|bout/([^/]++)(*:630)'
                .')'
                .'|/hizmet/([^/]++)(*:655)'
                .'|/content/([^/]++)(*:680)'
                .'|/bolge/([^/]++)(*:703)'
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
        206 => [[['_route' => 'about_update', '_controller' => 'App\\Controller\\Admin\\AboutController::update'], ['id'], null, null, false, true, null]],
        239 => [[['_route' => 'banner_update', '_controller' => 'App\\Controller\\Admin\\BannerController::update'], ['id'], null, null, false, true, null]],
        262 => [[['_route' => 'banner_delete', '_controller' => 'App\\Controller\\Admin\\BannerController::delete'], ['id'], null, null, false, true, null]],
        295 => [[['_route' => 'content_slug', '_controller' => 'App\\Controller\\Admin\\BolgelerController::slug'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'content_update', '_controller' => 'App\\Controller\\Admin\\ContentController::update'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'content_delete', '_controller' => 'App\\Controller\\Admin\\ContentController::delete'], ['id'], null, null, false, true, null]],
        387 => [[['_route' => 'generali_update', '_controller' => 'App\\Controller\\Admin\\GeneralInformationController::update'], ['id'], null, null, false, true, null]],
        410 => [[['_route' => 'generali_remove', '_controller' => 'App\\Controller\\Admin\\GeneralInformationController::remove'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'hizmet_update', '_controller' => 'App\\Controller\\Admin\\HizmetController::update'], ['id'], null, null, false, true, null]],
        467 => [[['_route' => 'hizmet_delete', '_controller' => 'App\\Controller\\Admin\\HizmetController::delete'], ['id'], null, null, false, true, null]],
        501 => [[['_route' => 'number_update', '_controller' => 'App\\Controller\\Admin\\NumberController::update'], ['id'], null, null, false, true, null]],
        524 => [[['_route' => 'number_delete', '_controller' => 'App\\Controller\\Admin\\NumberController::delete'], ['id'], null, null, false, true, null]],
        550 => [[['_route' => 'number_operation', '_controller' => 'App\\Controller\\Admin\\NumberController::operation'], ['id'], null, null, false, true, null]],
        578 => [[['_route' => 'sss_delete', '_controller' => 'App\\Controller\\Admin\\SSSController::delete'], ['id'], null, null, false, true, null]],
        608 => [[['_route' => 'sss_update', '_controller' => 'App\\Controller\\Admin\\SSSController::update'], ['id'], null, null, false, true, null]],
        630 => [[['_route' => 'about_page', '_controller' => 'App\\Controller\\PagesController::about'], ['slug'], null, null, false, true, null]],
        655 => [[['_route' => 'hizmet_page', '_controller' => 'App\\Controller\\PagesController::hizmet'], ['slug'], null, null, false, true, null]],
        680 => [[['_route' => 'content_page', '_controller' => 'App\\Controller\\PagesController::content'], ['slug'], null, null, false, true, null]],
        703 => [
            [['_route' => 'bolgeler_page', '_controller' => 'App\\Controller\\PagesController::bolge'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
