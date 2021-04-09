<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'about_home' => [[], ['_controller' => 'App\\Controller\\Admin\\AboutController::index'], [], [['text', '/admin/about']], [], []],
    'about_create' => [[], ['_controller' => 'App\\Controller\\Admin\\AboutController::create'], [], [['text', '/admin/about/create']], [], []],
    'about_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AboutController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/about/update']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], []],
    'banner_home' => [[], ['_controller' => 'App\\Controller\\Admin\\BannerController::index'], [], [['text', '/admin/banner']], [], []],
    'banner_create' => [[], ['_controller' => 'App\\Controller\\Admin\\BannerController::create'], [], [['text', '/admin/banner/create']], [], []],
    'banner_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BannerController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/banner/update']], [], []],
    'banner_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\BannerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/banner/remove']], [], []],
    'bolgeler_home' => [[], ['_controller' => 'App\\Controller\\Admin\\BolgelerController::index'], [], [['text', '/admin/bolgeler']], [], []],
    'bolgeler_create' => [[], ['_controller' => 'App\\Controller\\Admin\\BolgelerController::create'], [], [['text', '/admin/bolgeler/create']], [], []],
    'content_home' => [[], ['_controller' => 'App\\Controller\\Admin\\ContentController::index'], [], [['text', '/admin/content']], [], []],
    'content_create' => [[], ['_controller' => 'App\\Controller\\Admin\\ContentController::create'], [], [['text', '/admin/content/create']], [], []],
    'content_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ContentController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/content/update']], [], []],
    'content_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ContentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/content/delete']], [], []],
    'generali_home' => [[], ['_controller' => 'App\\Controller\\Admin\\GeneralInformationController::index'], [], [['text', '/admin/generalinformation']], [], []],
    'generali_create' => [[], ['_controller' => 'App\\Controller\\Admin\\GeneralInformationController::create'], [], [['text', '/admin/generalinformation/create']], [], []],
    'generali_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GeneralInformationController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/generalinformation/update']], [], []],
    'generali_remove' => [['id'], ['_controller' => 'App\\Controller\\Admin\\GeneralInformationController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/generalinformation/remove']], [], []],
    'generali_info' => [[], ['_controller' => 'App\\Controller\\Admin\\GeneralInformationController::info'], [], [['text', '/admin/generalinformation/info']], [], []],
    'hizmet_home' => [[], ['_controller' => 'App\\Controller\\Admin\\HizmetController::index'], [], [['text', '/admin/hizmet']], [], []],
    'hizmet_create' => [[], ['_controller' => 'App\\Controller\\Admin\\HizmetController::hizmetAdd'], [], [['text', '/admin/hizmet/create']], [], []],
    'hizmet_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\HizmetController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/hizmet/update']], [], []],
    'hizmet_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\HizmetController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/hizmet/delete']], [], []],
    'mahalle_home' => [[], ['_controller' => 'App\\Controller\\Admin\\MahalleController::index'], [], [['text', '/admin/mahalle']], [], []],
    'sss_home' => [[], ['_controller' => 'App\\Controller\\Admin\\SSSController::index'], [], [['text', '/admin/sss']], [], []],
    'sss_create' => [[], ['_controller' => 'App\\Controller\\Admin\\SSSController::create'], [], [['text', '/admin/sss/create']], [], []],
    'sss_update' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SSSController::update'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admim/sss/update']], [], []],
    'sss_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SSSController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/sss/delete']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'about_page' => [['slug'], ['_controller' => 'App\\Controller\\PagesController::about'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/about']], [], []],
    'sss_page' => [[], ['_controller' => 'App\\Controller\\PagesController::sss'], [], [['text', '/sss']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
