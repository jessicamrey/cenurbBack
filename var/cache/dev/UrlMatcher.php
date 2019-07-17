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
        '/api/register' => [[['_route' => 'api_register', '_controller' => 'App\\Controller\\SecurityController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/isRegistered' => [[['_route' => 'api_is_register', '_controller' => 'App\\Controller\\SecurityController::isRegistered'], null, ['POST' => 0], null, false, false, null]],
        '/api/loginAnonymous' => [[['_route' => 'api_login_anonymous', '_controller' => 'App\\Controller\\TempUserController::login', '_api_resource_class' => 'App\\Entity\\TempUser'], null, ['POST' => 0], null, false, false, null]],
        '/api/listCol' => [[['_route' => 'api_list_col', '_controller' => 'App\\Controller\\SeoApisController::listCol'], null, ['GET' => 0], null, false, false, null]],
        '/api/listNoCol' => [[['_route' => 'api_list_no_col', '_controller' => 'App\\Controller\\SeoApisController::listNoCol'], null, ['GET' => 0], null, false, false, null]],
        '/api/docs/colonias' => [[['_route' => 'api_get_col_docs', '_controller' => 'App\\Controller\\ColoniaController::getDocs'], null, ['GET' => 0], null, false, false, null]],
        '/api/docs/territorios' => [[['_route' => 'api_get_terr_docs', '_controller' => 'App\\Controller\\TerritorioController::getDocs'], null, ['GET' => 0], null, false, false, null]],
        '/api/ccaa' => [[['_route' => 'api_ccaa', '_controller' => 'App\\Controller\\SeoApisController::ccaa'], null, ['GET' => 0], null, false, false, null]],
        '/api/provincias' => [[['_route' => 'api_all_provincias', '_controller' => 'App\\Controller\\SeoApisController::allProvincias'], null, ['GET' => 0], null, false, false, null]],
        '/api/closeCol' => [[['_route' => 'api_get_closeColonias', '_controller' => 'App\\Controller\\ColoniaController::getColoniasCercanas', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getClose'], null, ['GET' => 0], null, false, false, null]],
        '/api/especies/stats' => [[['_route' => 'api_stats_general', '_controller' => 'App\\Controller\\ColoniaController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsGeneral'], null, ['GET' => 0], null, false, false, null]],
        '/api/temporadas' => [[['_route' => 'api_temporada', '_controller' => 'App\\Controller\\ColoniaController::getTemporadas'], null, ['GET' => 0], null, false, false, null]],
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
                                .'|mp\\-users(?'
                                    .'|(?:\\.([^/]++))?(*:651)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:685)'
                                .')'
                            .')'
                            .'|ipo\\-(?'
                                .'|propiedads(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:734)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:772)'
                                    .')'
                                .')'
                                .'|edificios(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:812)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:850)'
                                    .')'
                                .')'
                                .'|territorios(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:892)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:930)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|visitas\\-(?'
                            .'|territorios(?'
                                .'|(?:\\.([^/]++))?(*:983)'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:1020)'
                                    .'|([^/]++)(?'
                                        .'|(*:1040)'
                                        .'|/(?'
                                            .'|image(*:1058)'
                                            .'|rmvImage/([^/]++)(*:1084)'
                                        .')'
                                    .')'
                                .')'
                                .'|(*:1096)'
                            .')'
                            .'|colonias(?'
                                .'|(?:\\.([^/]++))?(*:1132)'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(*:1170)'
                                    .'|([^/]++)(?'
                                        .'|(*:1190)'
                                        .'|/(?'
                                            .'|image(*:1208)'
                                            .'|rmvImage/([^/]++)(*:1234)'
                                        .')'
                                    .')'
                                .')'
                                .'|(*:1246)'
                            .')'
                        .')'
                        .'|o(?'
                            .'|tras\\-especies(?'
                                .'|(?:\\.([^/]++))?(*:1293)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1331)'
                                .')'
                            .')'
                            .'|bservaciones\\-territorios(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1388)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1427)'
                                .')'
                            .')'
                        .')'
                        .'|e(?'
                            .'|mplazamientos(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1477)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1516)'
                                .')'
                            .')'
                            .'|species/([^/]++)/stats(?'
                                .'|Anno(?'
                                    .'|(*:1559)'
                                    .'|Col(*:1571)'
                                    .'|Terr(*:1584)'
                                .')'
                                .'|Ccaa(?'
                                    .'|(*:1601)'
                                    .'|Col(*:1613)'
                                    .'|Terr(*:1626)'
                                .')'
                                .'|Provincia(?'
                                    .'|(*:1648)'
                                    .'|Col(*:1660)'
                                    .'|Terr(*:1673)'
                                .')'
                                .'|Tipo(?'
                                    .'|EdificioCol(*:1701)'
                                    .'|PropiedadCol(*:1722)'
                                .')'
                                .'|MunicipioCol(*:1744)'
                                .'|Observaciones(*:1766)'
                            .')'
                        .')'
                        .'|favoritos\\-(?'
                            .'|cols(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1816)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1855)'
                                .')'
                            .')'
                            .'|terrs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1892)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1931)'
                                .')'
                            .')'
                        .')'
                        .'|l(?'
                            .'|oc\\-nidos\\-cols(?'
                                .'|(?:\\.([^/]++))?(*:1980)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:2018)'
                                .')'
                            .')'
                            .'|ist(?'
                                .'|NoCol/([^/]++)(*:2049)'
                                .'|Col/([^/]++)(*:2070)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|rovincias/([^/]++)(*:2103)'
                            .'|utColonia/([^/]++)(*:2130)'
                        .')'
                        .'|municipios/([^/]++)(*:2159)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:2201)'
                    .'|wdt/([^/]++)(*:2222)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:2269)'
                            .'|router(*:2284)'
                            .'|exception(?'
                                .'|(*:2305)'
                                .'|\\.css(*:2319)'
                            .')'
                        .')'
                        .'|(*:2330)'
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
        651 => [[['_route' => 'api_temp_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        685 => [[['_route' => 'api_temp_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        734 => [
            [['_route' => 'api_tipo_propiedads_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tipo_propiedads_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        772 => [
            [['_route' => 'api_tipo_propiedads_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tipo_propiedads_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tipo_propiedads_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        812 => [
            [['_route' => 'api_tipo_edificios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tipo_edificios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        850 => [
            [['_route' => 'api_tipo_edificios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tipo_edificios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tipo_edificios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        892 => [
            [['_route' => 'api_tipo_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tipo_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        930 => [
            [['_route' => 'api_tipo_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tipo_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tipo_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        983 => [[['_route' => 'api_visitas_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        1020 => [[['_route' => 'api_visitas_territorios_getNormal_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'getNormal'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1040 => [
            [['_route' => 'api_put_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::editVisit', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_del_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::deleteVisitaTerr', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_get_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::getVisitaTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1058 => [[['_route' => 'api_visitaTerr_image', '_controller' => 'App\\Controller\\TerritorioController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1084 => [[['_route' => 'api_visitaTerr_rmvImage', '_controller' => 'App\\Controller\\TerritorioController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
        1096 => [[['_route' => 'api_get_visitasTerr', '_controller' => 'App\\Controller\\TerritorioController::getVisitasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], [], ['GET' => 0], null, false, false, null]],
        1132 => [[['_route' => 'api_visitas_colonias_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        1170 => [[['_route' => 'api_visitas_colonias_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1190 => [
            [['_route' => 'api_put_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::editVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_del_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::deleteVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        1208 => [[['_route' => 'api_visitaCol_image', '_controller' => 'App\\Controller\\ColoniaController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
        1234 => [[['_route' => 'api_visitaCol_rmvImage', '_controller' => 'App\\Controller\\ColoniaController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
        1246 => [[['_route' => 'api_get_visitasCol', '_controller' => 'App\\Controller\\ColoniaController::getVisits', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], [], ['GET' => 0], null, false, false, null]],
        1293 => [[['_route' => 'api_otras_especies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        1331 => [
            [['_route' => 'api_otras_especies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_otras_especies_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_otras_especies_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1388 => [
            [['_route' => 'api_observaciones_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_observaciones_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1427 => [
            [['_route' => 'api_observaciones_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_observaciones_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_observaciones_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1477 => [
            [['_route' => 'api_emplazamientos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_emplazamientos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1516 => [
            [['_route' => 'api_emplazamientos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_emplazamientos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_emplazamientos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1559 => [[['_route' => 'api_stats_anno', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
        1571 => [[['_route' => 'api_stats_annoCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnnoCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnnoCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1584 => [[['_route' => 'api_stats_annoTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
        1601 => [[['_route' => 'api_stats_ccaa', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
        1613 => [[['_route' => 'api_stats_ccaaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCccaCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1626 => [[['_route' => 'api_stats_ccaaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
        1648 => [[['_route' => 'api_stats_provincia', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
        1660 => [[['_route' => 'api_stats_provinciaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvinciaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvinciaCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1673 => [[['_route' => 'api_stats_provinciaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
        1701 => [[['_route' => 'api_stats_tipoEdificioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoEdificioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoEdificioCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1722 => [[['_route' => 'api_stats_tipoPropiedadCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoPropiedadCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoPropiedadCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1744 => [[['_route' => 'api_stats_municipioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasMunicipioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsMunicipioCol'], ['id'], ['GET' => 0], null, false, false, null]],
        1766 => [[['_route' => 'api_stats_observaciones', '_controller' => 'App\\Controller\\TerritorioController::estadisticasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsObservaciones'], ['id'], ['GET' => 0], null, false, false, null]],
        1816 => [
            [['_route' => 'api_favoritos_cols_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_cols_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1855 => [
            [['_route' => 'api_favoritos_cols_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_cols_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_cols_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1892 => [
            [['_route' => 'api_favoritos_terrs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_terrs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1931 => [
            [['_route' => 'api_favoritos_terrs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_terrs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_favoritos_terrs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        1980 => [[['_route' => 'api_loc_nidos_cols_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        2018 => [
            [['_route' => 'api_loc_nidos_cols_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_loc_nidos_cols_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_loc_nidos_cols_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        2049 => [[['_route' => 'api_list_one_no_col', '_controller' => 'App\\Controller\\SeoApisController::listOneNoCol'], ['id'], ['GET' => 0], null, false, true, null]],
        2070 => [[['_route' => 'api_list_one_col', '_controller' => 'App\\Controller\\SeoApisController::listOneCol'], ['id'], ['GET' => 0], null, false, true, null]],
        2103 => [[['_route' => 'api_provincias', '_controller' => 'App\\Controller\\SeoApisController::provincias'], ['id'], ['GET' => 0], null, false, true, null]],
        2130 => [[['_route' => 'api_put_colonia', '_controller' => 'App\\Controller\\ColoniaController::putColonia'], ['id'], ['PUT' => 0], null, false, true, null]],
        2159 => [[['_route' => 'api_municipios', '_controller' => 'App\\Controller\\SeoApisController::municipios'], ['id'], ['GET' => 0], null, false, true, null]],
        2201 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2222 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2269 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2284 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2305 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        2319 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        2330 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
