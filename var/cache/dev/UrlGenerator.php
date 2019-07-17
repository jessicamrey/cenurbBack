<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'api_entrypoint' => [['index', '_format'], ['_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index' => 'index'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', 'index', 'index'], ['text', '/api']], [], []],
    'api_doc' => [['_format'], ['_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/docs']], [], []],
    'api_jsonld_context' => [['shortName', '_format'], ['_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName' => '.+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '.+', 'shortName'], ['text', '/api/contexts']], [], []],
    'api_territorios_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/territorios']], [], []],
    'api_territorios_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/territorios']], [], []],
    'api_territorios_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/territorios']], [], []],
    'api_territorios_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/territorios']], [], []],
    'api_tipo_propiedads_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/tipo-propiedads']], [], []],
    'api_tipo_propiedads_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/tipo-propiedads']], [], []],
    'api_tipo_propiedads_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-propiedads']], [], []],
    'api_tipo_propiedads_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-propiedads']], [], []],
    'api_tipo_propiedads_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-propiedads']], [], []],
    'api_visitas_territorios_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/visitas-territorios']], [], []],
    'api_visitas_territorios_getNormal_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'getNormal'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/visitas-territorios']], [], []],
    'api_censo_municipios_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/censo-municipios']], [], []],
    'api_censo_municipios_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/censo-municipios']], [], []],
    'api_censo_municipios_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/censo-municipios']], [], []],
    'api_censo_municipios_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/censo-municipios']], [], []],
    'api_otras_especies_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/otras-especies']], [], []],
    'api_otras_especies_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/otras-especies']], [], []],
    'api_otras_especies_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/otras-especies']], [], []],
    'api_otras_especies_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/otras-especies']], [], []],
    'api_temp_users_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/temp-users']], [], []],
    'api_temp_users_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/temp-users']], [], []],
    'api_emplazamientos_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/emplazamientos']], [], []],
    'api_emplazamientos_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/emplazamientos']], [], []],
    'api_emplazamientos_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/emplazamientos']], [], []],
    'api_emplazamientos_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/emplazamientos']], [], []],
    'api_emplazamientos_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/emplazamientos']], [], []],
    'api_favoritos_cols_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/favoritos-cols']], [], []],
    'api_favoritos_cols_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/favoritos-cols']], [], []],
    'api_favoritos_cols_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/favoritos-cols']], [], []],
    'api_favoritos_cols_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/favoritos-cols']], [], []],
    'api_favoritos_cols_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/favoritos-cols']], [], []],
    'api_tipo_edificios_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/tipo-edificios']], [], []],
    'api_tipo_edificios_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/tipo-edificios']], [], []],
    'api_tipo_edificios_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-edificios']], [], []],
    'api_tipo_edificios_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-edificios']], [], []],
    'api_tipo_edificios_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-edificios']], [], []],
    'api_tipo_territorios_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/tipo-territorios']], [], []],
    'api_tipo_territorios_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/tipo-territorios']], [], []],
    'api_tipo_territorios_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-territorios']], [], []],
    'api_tipo_territorios_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-territorios']], [], []],
    'api_tipo_territorios_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/tipo-territorios']], [], []],
    'api_visitas_colonias_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/visitas-colonias']], [], []],
    'api_visitas_colonias_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/visitas-colonias']], [], []],
    'api_favoritos_terrs_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/favoritos-terrs']], [], []],
    'api_favoritos_terrs_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/favoritos-terrs']], [], []],
    'api_favoritos_terrs_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/favoritos-terrs']], [], []],
    'api_favoritos_terrs_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/favoritos-terrs']], [], []],
    'api_favoritos_terrs_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/favoritos-terrs']], [], []],
    'api_colonias_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/colonias']], [], []],
    'api_colonias_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/colonias']], [], []],
    'api_colonias_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/colonias']], [], []],
    'api_observaciones_territorios_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/observaciones-territorios']], [], []],
    'api_observaciones_territorios_post_collection' => [['_format'], ['_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'post'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/observaciones-territorios']], [], []],
    'api_observaciones_territorios_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/observaciones-territorios']], [], []],
    'api_observaciones_territorios_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/observaciones-territorios']], [], []],
    'api_observaciones_territorios_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/observaciones-territorios']], [], []],
    'api_loc_nidos_cols_get_collection' => [['_format'], ['_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_collection_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['text', '/api/loc-nidos-cols']], [], []],
    'api_loc_nidos_cols_get_item' => [['id', '_format'], ['_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'get'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/loc-nidos-cols']], [], []],
    'api_loc_nidos_cols_put_item' => [['id', '_format'], ['_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'put'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/loc-nidos-cols']], [], []],
    'api_loc_nidos_cols_delete_item' => [['id', '_format'], ['_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'delete'], [], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '[^/\\.]++', 'id'], ['text', '/api/loc-nidos-cols']], [], []],
    'easyadmin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], [], [['text', '/admin/']], [], []],
    'admin' => [[], ['_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], [], [['text', '/admin/']], [], []],
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'fos_oauth_server_token' => [[], ['_controller' => 'fos_oauth_server.controller.token:tokenAction'], [], [['text', '/api/login']], [], []],
    'fos_oauth_server_authorize' => [[], ['_controller' => 'fos_oauth_server.controller.authorize:authorizeAction'], [], [['text', '/api/auth']], [], []],
    'app_logout' => [[], [], [], [['text', '/logout']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/api/login']], [], []],
    'api_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::register'], [], [['text', '/api/register']], [], []],
    'api_is_register' => [[], ['_controller' => 'App\\Controller\\SecurityController::isRegistered'], [], [['text', '/api/isRegistered']], [], []],
    'api_login_anonymous' => [[], ['_controller' => 'App\\Controller\\TempUserController::login', '_api_resource_class' => 'App\\Entity\\TempUser'], [], [['text', '/api/loginAnonymous']], [], []],
    'api_list_col' => [[], ['_controller' => 'App\\Controller\\SeoApisController::listCol'], [], [['text', '/api/listCol']], [], []],
    'api_list_no_col' => [[], ['_controller' => 'App\\Controller\\SeoApisController::listNoCol'], [], [['text', '/api/listNoCol']], [], []],
    'api_list_one_no_col' => [['id'], ['_controller' => 'App\\Controller\\SeoApisController::listOneNoCol'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/listNoCol']], [], []],
    'api_list_one_col' => [['id'], ['_controller' => 'App\\Controller\\SeoApisController::listOneCol'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/listCol']], [], []],
    'api_get_col_docs' => [[], ['_controller' => 'App\\Controller\\ColoniaController::getDocs'], [], [['text', '/api/docs/colonias']], [], []],
    'api_get_terr_docs' => [[], ['_controller' => 'App\\Controller\\TerritorioController::getDocs'], [], [['text', '/api/docs/territorios']], [], []],
    'api_ccaa' => [[], ['_controller' => 'App\\Controller\\SeoApisController::ccaa'], [], [['text', '/api/ccaa']], [], []],
    'api_provincias' => [['id'], ['_controller' => 'App\\Controller\\SeoApisController::provincias'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/provincias']], [], []],
    'api_all_provincias' => [[], ['_controller' => 'App\\Controller\\SeoApisController::allProvincias'], [], [['text', '/api/provincias']], [], []],
    'api_municipios' => [['id'], ['_controller' => 'App\\Controller\\SeoApisController::municipios'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/municipios']], [], []],
    'api_new_colonia' => [[], ['_controller' => 'App\\Controller\\ColoniaController::newColonia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'post'], [], [['text', '/api/colonias']], [], []],
    'api_new_censoMunicipio' => [[], ['_controller' => 'App\\Controller\\ColoniaController::newCensoMunicipio', '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'post'], [], [['text', '/api/censo-municipios']], [], []],
    'api_add_locNidosCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::completaNidos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postCol'], [], [['text', '/loc-nidos'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/colonias']], [], []],
    'api_add_especies' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::completaEspecies', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postEspecies'], [], [['text', '/otras-especies'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/colonias']], [], []],
    'api_get_closeColonias' => [[], ['_controller' => 'App\\Controller\\ColoniaController::getColoniasCercanas', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getClose'], [], [['text', '/api/closeCol']], [], []],
    'api_get_favoritosCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getFav'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/colonias/favoritos']], [], []],
    'api_new_visitaCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::newVisit', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'newVisit'], [], [['text', '/visitas'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/colonias']], [], []],
    'api_get_visitasCol' => [[], ['_controller' => 'App\\Controller\\ColoniaController::getVisits', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], [], [['text', '/api/visitas-colonias']], [], []],
    'api_put_colonia' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::putColonia'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/putColonia']], [], []],
    'api_stats_anno' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnno'], [], [['text', '/statsAnno'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_ccaa' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCcca'], [], [['text', '/statsCcaa'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_provincia' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvincia'], [], [['text', '/statsProvincia'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_general' => [[], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsGeneral'], [], [['text', '/api/especies/stats']], [], []],
    'api_stats_annoCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasAnnoCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnnoCol'], [], [['text', '/statsAnnoCol'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_ccaaCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCccaCol'], [], [['text', '/statsCcaaCol'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_provinciaCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasProvinciaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvinciaCol'], [], [['text', '/statsProvinciaCol'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_tipoEdificioCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoEdificioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoEdificioCol'], [], [['text', '/statsTipoEdificioCol'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_tipoPropiedadCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoPropiedadCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoPropiedadCol'], [], [['text', '/statsTipoPropiedadCol'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_municipioCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::estadisticasMunicipioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsMunicipioCol'], [], [['text', '/statsMunicipioCol'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_temporada' => [[], ['_controller' => 'App\\Controller\\ColoniaController::getTemporadas'], [], [['text', '/api/temporadas']], [], []],
    'api_new_favoritosCol' => [[], ['_controller' => 'App\\Controller\\ColoniaController::newFavorito'], [], [['text', '/api/colonias/favoritos']], [], []],
    'api_del_favoritoCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::removeFavorito'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/colonias/favoritos']], [], []],
    'api_put_visitaCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::editVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-colonias']], [], []],
    'api_del_visitaCol' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::deleteVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-colonias']], [], []],
    'api_visitaCol_image' => [['id'], ['_controller' => 'App\\Controller\\ColoniaController::uploadImageAction'], [], [['text', '/image'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-colonias']], [], []],
    'api_visitaCol_rmvImage' => [['id', 'idImg'], ['_controller' => 'App\\Controller\\ColoniaController::removeImageAction'], [], [['variable', '/', '[^/]++', 'idImg'], ['text', '/rmvImage'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-colonias']], [], []],
    'api_get_closeTerritorios' => [[], ['_controller' => 'App\\Controller\\TerritorioController::getTerritoriosCercanos'], [], [['text', '/api/closeTerr']], [], []],
    'api_new_territorio' => [[], ['_controller' => 'App\\Controller\\TerritorioController::newTerritorio', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'post'], [], [['text', '/api/territorios']], [], []],
    'api_add_locNidosNoCol' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::completaNidos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'postNoCol'], [], [['text', '/loc-nidos'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/territorios']], [], []],
    'api_new_favoritosTerr' => [[], ['_controller' => 'App\\Controller\\TerritorioController::newFavorito'], [], [['text', '/api/territorios/favoritos']], [], []],
    'api_get_favoritosTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'getFav'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/territorios/favoritos']], [], []],
    'api_del_favoritoTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::removeFavorito'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/territorios/favoritos']], [], []],
    'api_new_visitaTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::newVisit', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'newVisit'], [], [['text', '/visitas'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/territorios']], [], []],
    'api_put_visitaTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::editVisit', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'put'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-territorios']], [], []],
    'api_del_visitaTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::deleteVisitaTerr', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-territorios']], [], []],
    'api_stats_annoTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsAnno'], [], [['text', '/statsAnnoTerr'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_ccaaTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsCcca'], [], [['text', '/statsCcaaTerr'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_provinciaTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsProvincia'], [], [['text', '/statsProvinciaTerr'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_stats_generalTerr' => [[], ['_controller' => 'App\\Controller\\TerritorioController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsGeneral'], [], [['text', '/api/especies/statsTerr']], [], []],
    'api_stats_observaciones' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::estadisticasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsObservaciones'], [], [['text', '/statsObservaciones'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/especies']], [], []],
    'api_get_visitasTerr' => [[], ['_controller' => 'App\\Controller\\TerritorioController::getVisitasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], [], [['text', '/api/visitas-territorios']], [], []],
    'api_get_visitaTerr' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::getVisitaTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-territorios']], [], []],
    'api_visitaTerr_image' => [['id'], ['_controller' => 'App\\Controller\\TerritorioController::uploadImageAction'], [], [['text', '/image'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-territorios']], [], []],
    'api_visitaTerr_rmvImage' => [['id', 'idImg'], ['_controller' => 'App\\Controller\\TerritorioController::removeImageAction'], [], [['variable', '/', '[^/]++', 'idImg'], ['text', '/rmvImage'], ['variable', '/', '[^/]++', 'id'], ['text', '/api/visitas-territorios']], [], []],
];
