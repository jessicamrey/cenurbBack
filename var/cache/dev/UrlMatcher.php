<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin' => [
            [['_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], null, null, null, true, false, null],
            [['_route' => 'admin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'], null, null, null, true, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login' => [
            [['_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/api/auth' => [[['_route' => 'fos_oauth_server_authorize', '_controller' => 'fos_oauth_server.controller.authorize:authorizeAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout'], null, ['GET' => 0], null, false, false, null]],
        '/api/isAdmin' => [[['_route' => 'isAdmin', '_controller' => 'App\\Controller\\SecurityController::isAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/isRegistered' => [[['_route' => 'api_is_register', '_controller' => 'App\\Controller\\SecurityController::isRegistered'], null, ['POST' => 0], null, false, false, null]],
        '/api/dashboardData' => [[['_route' => 'api_dashboard_data', '_controller' => 'App\\Controller\\ColoniaController::dashboardData'], null, ['GET' => 0], null, false, false, null]],
        '/api/listCol' => [[['_route' => 'api_list_col', '_controller' => 'App\\Controller\\SeoApisController::listCol'], null, ['GET' => 0], null, false, false, null]],
        '/api/listNoCol' => [[['_route' => 'api_list_no_col', '_controller' => 'App\\Controller\\SeoApisController::listNoCol'], null, ['GET' => 0], null, false, false, null]],
        '/api/docs/colonias' => [[['_route' => 'api_get_col_docs', '_controller' => 'App\\Controller\\ColoniaController::getDocs'], null, ['GET' => 0], null, false, false, null]],
        '/api/docs/territorios' => [[['_route' => 'api_get_terr_docs', '_controller' => 'App\\Controller\\TerritorioController::getDocs'], null, ['GET' => 0], null, false, false, null]],
        '/api/ccaa' => [[['_route' => 'api_ccaa', '_controller' => 'App\\Controller\\SeoApisController::ccaa'], null, ['GET' => 0], null, false, false, null]],
        '/api/provincias' => [[['_route' => 'api_all_provincias', '_controller' => 'App\\Controller\\SeoApisController::allProvincias'], null, ['GET' => 0], null, false, false, null]],
        '/api/closeCol' => [[['_route' => 'api_get_closeColonias', '_controller' => 'App\\Controller\\ColoniaController::getColoniasCercanas', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getClose'], null, ['GET' => 0], null, false, false, null]],
        '/api/especies/stats' => [[['_route' => 'api_stats_general', '_controller' => 'App\\Controller\\ColoniaController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsGeneral'], null, ['GET' => 0], null, false, false, null]],
        '/api/closeTerr' => [[['_route' => 'api_get_closeTerritorios', '_controller' => 'App\\Controller\\TerritorioController::getTerritoriosCercanos'], null, ['GET' => 0], null, false, false, null]],
        '/api/especies/statsTerr' => [[['_route' => 'api_stats_generalTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsGeneral'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:72)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/(.+)(?:\\.([^/]++))?(*:113)'
                                .'|lonias(?'
                                    .'|(?:\\.([^/]++))?(*:145)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:185)'
                                        .')'
                                        .'|([^/]++)/(?'
                                            .'|loc\\-nidos(*:216)'
                                            .'|otras\\-especies(*:239)'
                                        .')'
                                        .'|favoritos/([^/]++)(*:266)'
                                        .'|([^/]++)/visitas(*:290)'
                                        .'|favoritos(?'
                                            .'|(*:310)'
                                            .'|/([^/]++)(*:327)'
                                        .')'
                                    .')'
                                    .'|(*:337)'
                                .')'
                            .')'
                            .'|enso\\-municipios(?'
                                .'|(?:\\.([^/]++))?(*:381)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:418)'
                                .')'
                                .'|(*:427)'
                            .')'
                        .')'
                        .'|t(?'
                            .'|e(?'
                                .'|rritorios(?'
                                    .'|(?:\\.([^/]++))?(*:472)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:512)'
                                        .')'
                                        .'|([^/]++)/loc\\-nidos(*:540)'
                                        .'|favoritos(?'
                                            .'|(*:560)'
                                            .'|/([^/]++)(?'
                                                .'|(*:580)'
                                            .')'
                                        .')'
                                        .'|([^/]++)/visitas(*:606)'
                                    .')'
                                    .'|(*:615)'
                                .')'
                                .'|mp(?'
                                    .'|\\-users(?'
                                        .'|(?:\\.([^/]++))?(*:654)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:688)'
                                    .')'
                                    .'|oradas(?'
                                        .'|(?:\\.([^/]++))?(*:721)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:755)'
                                        .'|(*:763)'
                                    .')'
                                .')'
                            .')'
                            .'|ipo\\-(?'
                                .'|propiedads(?'
                                    .'|(?:\\.([^/]++))?(*:810)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:844)'
                                .')'
                                .'|edificios(?'
                                    .'|(?:\\.([^/]++))?(*:880)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:914)'
                                .')'
                                .'|territorios(?'
                                    .'|(?:\\.([^/]++))?(*:952)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:986)'
                                .')'
                            .')'
                        .')'
                        .'|visitas\\-(?'
                            .'|territorios(?'
                                .'|(?:\\.([^/]++))?(*:1038)'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:1076)'
                                    .'|([^/]++)(?'
                                        .'|(*:1096)'
                                        .'|/(?'
                                            .'|image(*:1114)'
                                            .'|rmvImage/([^/]++)(*:1140)'
                                        .')'
                                    .')'
                                .')'
                                .'|(*:1152)'
                            .')'
                            .'|colonias(?'
                                .'|(?:\\.([^/]++))?(*:1188)'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:1226)'
                                    .'|([^/]++)(?'
                                        .'|(*:1246)'
                                        .'|/(?'
                                            .'|image(*:1264)'
                                            .'|rmvImage/([^/]++)(*:1290)'
                                        .')'
                                    .')'
                                .')'
                                .'|(*:1302)'
                            .')'
                        .')'
                        .'|o(?'
                            .'|tras\\-especies(?'
                                .'|(?:\\.([^/]++))?(*:1349)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1387)'
                                .')'
                            .')'
                            .'|bservaciones\\-territorios(?'
                                .'|(?:\\.([^/]++))?(*:1441)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1476)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|mplazamientos(?'
                                .'|(?:\\.([^/]++))?(*:1522)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1557)'
                            .')'
                            .'|species/([^/]++)/stats(?'
                                .'|Anno(?'
                                    .'|(*:1599)'
                                    .'|Col(*:1611)'
                                    .'|Terr(*:1624)'
                                .')'
                                .'|Ccaa(?'
                                    .'|(*:1641)'
                                    .'|Col(*:1653)'
                                    .'|Terr(*:1666)'
                                .')'
                                .'|Provincia(?'
                                    .'|(*:1688)'
                                    .'|Col(*:1700)'
                                    .'|Terr(*:1713)'
                                .')'
                                .'|Tipo(?'
                                    .'|EdificioCol(*:1741)'
                                    .'|PropiedadCol(*:1762)'
                                .')'
                                .'|MunicipioCol(*:1784)'
                                .'|Observaciones(*:1806)'
                            .')'
                        .')'
                        .'|favoritos\\-(?'
                            .'|cols(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1856)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1895)'
                                .')'
                            .')'
                            .'|terrs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1932)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1971)'
                                .')'
                            .')'
                        .')'
                        .'|l(?'
                            .'|oc\\-nidos\\-cols(?'
                                .'|(?:\\.([^/]++))?(*:2020)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:2058)'
                                .')'
                            .')'
                            .'|ist(?'
                                .'|NoCol/([^/]++)(*:2089)'
                                .'|Col/([^/]++)(*:2110)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|rovincias/([^/]++)(*:2143)'
                            .'|ut(?'
                                .'|Colonia/([^/]++)(*:2173)'
                                .'|Territorio/([^/]++)(*:2201)'
                            .')'
                        .')'
                        .'|municipios/([^/]++)(*:2231)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:2273)'
                    .'|wdt/([^/]++)(*:2294)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:2341)'
                            .'|router(*:2356)'
                            .'|exception(?'
                                .'|(*:2377)'
                                .'|\\.css(*:2391)'
                            .')'
                        .')'
                        .'|(*:2402)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        113 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        145 => [[['_route' => 'api_colonias_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        185 => [
            [['_route' => 'api_colonias_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_colonias_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        216 => [[['_route' => 'api_add_locNidosCol', '_controller' => 'App\\Controller\\ColoniaController::completaNidos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postCol'], ['id'], ['POST' => 0], null, false, false, null]],
        239 => [[['_route' => 'api_add_especies', '_controller' => 'App\\Controller\\ColoniaController::completaEspecies', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postEspecies'], ['id'], ['POST' => 0], null, false, false, null]],
        266 => [[['_route' => 'api_get_favoritosCol', '_controller' => 'App\\Controller\\ColoniaController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getFav'], ['id'], ['GET' => 0], null, false, true, null]],
        290 => [[['_route' => 'api_new_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::newVisit', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'newVisit'], ['id'], ['POST' => 0], null, false, false, null]],
        310 => [[['_route' => 'api_new_favoritosCol', '_controller' => 'App\\Controller\\ColoniaController::newFavorito'], [], ['POST' => 0], null, false, false, null]],
        327 => [[['_route' => 'api_del_favoritoCol', '_controller' => 'App\\Controller\\ColoniaController::removeFavorito'], ['id'], ['DELETE' => 0], null, false, true, null]],
        337 => [[['_route' => 'api_new_colonia', '_controller' => 'App\\Controller\\ColoniaController::newColonia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
        381 => [[['_route' => 'api_censo_municipios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        418 => [
            [['_route' => 'api_censo_municipios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_censo_municipios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_censo_municipios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        427 => [[['_route' => 'api_new_censoMunicipio', '_controller' => 'App\\Controller\\ColoniaController::newCensoMunicipio', '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
        472 => [[['_route' => 'api_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        512 => [
            [['_route' => 'api_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        540 => [[['_route' => 'api_add_locNidosNoCol', '_controller' => 'App\\Controller\\TerritorioController::completaNidos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'postNoCol'], ['id'], ['POST' => 0], null, false, false, null]],
        560 => [[['_route' => 'api_new_favoritosTerr', '_controller' => 'App\\Controller\\TerritorioController::newFavorito'], [], ['POST' => 0], null, false, false, null]],
        580 => [
            [['_route' => 'api_get_favoritosTerr', '_controller' => 'App\\Controller\\TerritorioController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'getFav'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_del_favoritoTerr', '_controller' => 'App\\Controller\\TerritorioController::removeFavorito'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        606 => [[['_route' => 'api_new_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::newVisit', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'newVisit'], ['id'], ['POST' => 0], null, false, false, null]],
        615 => [[['_route' => 'api_new_territorio', '_controller' => 'App\\Controller\\TerritorioController::newTerritorio', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
        654 => [[['_route' => 'api_temp_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        688 => [[['_route' => 'api_temp_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        721 => [[['_route' => 'api_temporadas_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Temporada', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        755 => [[['_route' => 'api_temporadas_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Temporada', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        763 => [[['_route' => 'api_temporada', '_controller' => 'App\\Controller\\ColoniaController::getTemporadas'], [], ['GET' => 0], null, false, false, null]],
        810 => [[['_route' => 'api_tipo_propiedads_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        844 => [[['_route' => 'api_tipo_propiedads_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        880 => [[['_route' => 'api_tipo_edificios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        914 => [[['_route' => 'api_tipo_edificios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        952 => [[['_route' => 'api_tipo_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        986 => [[['_route' => 'api_tipo_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1038 => [[['_route' => 'api_visitas_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        1076 => [[['_route' => 'api_visitas_territorios_getNormal_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'getNormal'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1096 => [
            [['_route' => 'api_put_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::editVisit', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_del_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::deleteVisitaTerr', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_get_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::getVisitaTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1114 => [[['_route' => 'api_visitaTerr_image', '_controller' => 'App\\Controller\\TerritorioController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1140 => [[['_route' => 'api_visitaTerr_rmvImage', '_controller' => 'App\\Controller\\TerritorioController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
        1152 => [[['_route' => 'api_get_visitasTerr', '_controller' => 'App\\Controller\\TerritorioController::getVisitasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], [], ['GET' => 0], null, false, false, null]],
        1188 => [[['_route' => 'api_visitas_colonias_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        1226 => [[['_route' => 'api_visitas_colonias_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1246 => [
            [['_route' => 'api_put_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::editVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_del_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::deleteVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1264 => [[['_route' => 'api_visitaCol_image', '_controller' => 'App\\Controller\\ColoniaController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1290 => [[['_route' => 'api_visitaCol_rmvImage', '_controller' => 'App\\Controller\\ColoniaController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
        1302 => [[['_route' => 'api_get_visitasCol', '_controller' => 'App\\Controller\\ColoniaController::getVisits', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], [], ['GET' => 0], null, false, false, null]],
        1349 => [[['_route' => 'api_otras_especies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        1387 => [
            [['_route' => 'api_otras_especies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_otras_especies_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_otras_especies_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1441 => [[['_route' => 'api_observaciones_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        1476 => [[['_route' => 'api_observaciones_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1522 => [[['_route' => 'api_emplazamientos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        1557 => [[['_route' => 'api_emplazamientos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1599 => [[['_route' => 'api_stats_anno', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
        1611 => [[['_route' => 'api_stats_annoCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnnoCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnnoCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1624 => [[['_route' => 'api_stats_annoTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
        1641 => [[['_route' => 'api_stats_ccaa', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
        1653 => [[['_route' => 'api_stats_ccaaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCccaCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1666 => [[['_route' => 'api_stats_ccaaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
        1688 => [[['_route' => 'api_stats_provincia', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
        1700 => [[['_route' => 'api_stats_provinciaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvinciaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvinciaCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1713 => [[['_route' => 'api_stats_provinciaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
        1741 => [[['_route' => 'api_stats_tipoEdificioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoEdificioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoEdificioCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1762 => [[['_route' => 'api_stats_tipoPropiedadCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoPropiedadCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoPropiedadCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1784 => [[['_route' => 'api_stats_municipioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasMunicipioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsMunicipioCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1806 => [[['_route' => 'api_stats_observaciones', '_controller' => 'App\\Controller\\TerritorioController::estadisticasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsObservaciones'], ['id'], ['GET' => 0], null, false, false, null]],
        1856 => [
            [['_route' => 'api_favoritos_cols_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_cols_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1895 => [
            [['_route' => 'api_favoritos_cols_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_cols_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_cols_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1932 => [
            [['_route' => 'api_favoritos_terrs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_terrs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1971 => [
            [['_route' => 'api_favoritos_terrs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_terrs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_terrs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        2020 => [[['_route' => 'api_loc_nidos_cols_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        2058 => [
            [['_route' => 'api_loc_nidos_cols_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_loc_nidos_cols_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_loc_nidos_cols_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2089 => [[['_route' => 'api_list_one_no_col', '_controller' => 'App\\Controller\\SeoApisController::listOneNoCol'], ['id'], ['GET' => 0], null, false, true, null]],
        2110 => [[['_route' => 'api_list_one_col', '_controller' => 'App\\Controller\\SeoApisController::listOneCol'], ['id'], ['GET' => 0], null, false, true, null]],
        2143 => [[['_route' => 'api_provincias', '_controller' => 'App\\Controller\\SeoApisController::provincias'], ['id'], ['GET' => 0], null, false, true, null]],
        2173 => [[['_route' => 'api_put_colonia', '_controller' => 'App\\Controller\\ColoniaController::putColonia'], ['id'], ['PUT' => 0], null, false, true, null]],
        2201 => [[['_route' => 'api_put_territorio', '_controller' => 'App\\Controller\\TerritorioController::putTerritorio'], ['id'], ['PUT' => 0], null, false, true, null]],
        2231 => [[['_route' => 'api_municipios', '_controller' => 'App\\Controller\\SeoApisController::municipios'], ['id'], ['GET' => 0], null, false, true, null]],
        2273 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2294 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2341 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2356 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2377 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        2391 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        2402 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
