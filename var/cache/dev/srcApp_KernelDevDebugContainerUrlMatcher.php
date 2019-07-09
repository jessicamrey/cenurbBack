<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
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
            '/api/ccaa' => [[['_route' => 'api_ccaa', '_controller' => 'App\\Controller\\SeoApisController::ccaa'], null, ['GET' => 0], null, false, false, null]],
            '/api/provincias' => [[['_route' => 'api_all_provincias', '_controller' => 'App\\Controller\\SeoApisController::allProvincias'], null, ['GET' => 0], null, false, false, null]],
            '/api/closeCol' => [[['_route' => 'api_get_closeColonias', '_controller' => 'App\\Controller\\ColoniaController::getColoniasCercanas', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getClose'], null, ['GET' => 0], null, false, false, null]],
            '/api/especies/stats' => [[['_route' => 'api_stats_general', '_controller' => 'App\\Controller\\ColoniaController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsGeneral'], null, ['GET' => 0], null, false, false, null]],
            '/api/temporadas' => [[['_route' => 'api_temporada', '_controller' => 'App\\Controller\\ColoniaController::getTemporadas'], null, ['GET' => 0], null, false, false, null]],
            '/api/closeTerr' => [[['_route' => 'api_get_closeTerritorios', '_controller' => 'App\\Controller\\TerritorioController::getTerritoriosCercanos'], null, ['GET' => 0], null, false, false, null]],
            '/api/especies/statsTerr' => [[['_route' => 'api_stats_generalTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsGeneral'], null, ['GET' => 0], null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                        .'|/(?'
                            .'|docs(?'
                                .'|(?:\\.([^/]++))?(*:75)'
                                .'|(*:82)'
                            .')'
                            .'|c(?'
                                .'|o(?'
                                    .'|ntexts/(.+)(?:\\.([^/]++))?(*:124)'
                                    .'|lonias(?'
                                        .'|(?:\\.([^/]++))?(*:156)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:196)'
                                            .')'
                                            .'|([^/]++)/(?'
                                                .'|loc\\-nidos(*:227)'
                                                .'|otras\\-especies(*:250)'
                                            .')'
                                            .'|favoritos/([^/]++)(*:277)'
                                            .'|([^/]++)/visitas(*:301)'
                                            .'|favoritos(?'
                                                .'|(*:321)'
                                                .'|/([^/]++)(*:338)'
                                            .')'
                                        .')'
                                        .'|(*:348)'
                                    .')'
                                .')'
                                .'|enso\\-municipios(?'
                                    .'|(?:\\.([^/]++))?(*:392)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:429)'
                                    .')'
                                    .'|(*:438)'
                                .')'
                            .')'
                            .'|t(?'
                                .'|ipo\\-(?'
                                    .'|propiedads(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:491)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:529)'
                                        .')'
                                    .')'
                                    .'|territorios(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:571)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:609)'
                                        .')'
                                    .')'
                                    .'|edificios(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:649)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:687)'
                                        .')'
                                    .')'
                                .')'
                                .'|e(?'
                                    .'|mp\\-users(?'
                                        .'|(?:\\.([^/]++))?(*:729)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:763)'
                                    .')'
                                    .'|rritorios(?'
                                        .'|(?:\\.([^/]++))?(*:799)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:839)'
                                            .')'
                                            .'|([^/]++)/loc\\-nidos(*:867)'
                                            .'|favoritos(?'
                                                .'|(*:887)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:907)'
                                                .')'
                                            .')'
                                            .'|([^/]++)/visitas(*:933)'
                                        .')'
                                        .'|(*:942)'
                                    .')'
                                .')'
                            .')'
                            .'|visitas\\-(?'
                                .'|territorios(?'
                                    .'|(?:\\.([^/]++))?(*:994)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(*:1031)'
                                        .'|([^/]++)(?'
                                            .'|(*:1051)'
                                            .'|/(?'
                                                .'|image(*:1069)'
                                                .'|rmvImage/([^/]++)(*:1095)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:1107)'
                                .')'
                                .'|colonias(?'
                                    .'|(?:\\.([^/]++))?(*:1143)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(*:1181)'
                                        .'|([^/]++)(?'
                                            .'|(*:1201)'
                                            .'|/(?'
                                                .'|image(*:1219)'
                                                .'|rmvImage/([^/]++)(*:1245)'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:1257)'
                                .')'
                            .')'
                            .'|favoritos\\-(?'
                                .'|terrs(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1308)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1347)'
                                    .')'
                                .')'
                                .'|cols(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1383)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1422)'
                                    .')'
                                .')'
                            .')'
                            .'|o(?'
                                .'|bservaciones\\-territorios(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1484)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1523)'
                                    .')'
                                .')'
                                .'|tras\\-especies(?'
                                    .'|(?:\\.([^/]++))?(*:1566)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1604)'
                                    .')'
                                .')'
                            .')'
                            .'|e(?'
                                .'|mplazamientos(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1654)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1693)'
                                    .')'
                                .')'
                                .'|species/([^/]++)/stats(?'
                                    .'|Anno(?'
                                        .'|(*:1736)'
                                        .'|Col(*:1748)'
                                        .'|Terr(*:1761)'
                                    .')'
                                    .'|Ccaa(?'
                                        .'|(*:1778)'
                                        .'|Col(*:1790)'
                                        .'|Terr(*:1803)'
                                    .')'
                                    .'|Provincia(?'
                                        .'|(*:1825)'
                                        .'|Col(*:1837)'
                                        .'|Terr(*:1850)'
                                    .')'
                                    .'|Tipo(?'
                                        .'|EdificioCol(*:1878)'
                                        .'|PropiedadCol(*:1899)'
                                    .')'
                                    .'|MunicipioCol(*:1921)'
                                    .'|Observaciones(*:1943)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|oc\\-nidos\\-cols(?'
                                    .'|(?:\\.([^/]++))?(*:1991)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:2029)'
                                    .')'
                                .')'
                                .'|ist(?'
                                    .'|NoCol/([^/]++)(*:2060)'
                                    .'|Col/([^/]++)(*:2081)'
                                .')'
                            .')'
                            .'|provincias/([^/]++)(*:2111)'
                            .'|municipios/([^/]++)(*:2139)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:2181)'
                        .'|wdt/([^/]++)(*:2202)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:2249)'
                                .'|router(*:2264)'
                                .'|exception(?'
                                    .'|(*:2285)'
                                    .'|\\.css(*:2299)'
                                .')'
                            .')'
                            .'|(*:2310)'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            75 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
            82 => [[['_route' => 'api_get_docs', '_controller' => 'App\\Controller\\SeoApisController::getDocs'], [], ['GET' => 0], null, false, false, null]],
            124 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
            156 => [[['_route' => 'api_colonias_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            196 => [
                [['_route' => 'api_colonias_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_colonias_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_colonias_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            227 => [[['_route' => 'api_add_locNidosCol', '_controller' => 'App\\Controller\\ColoniaController::completaNidos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postCol'], ['id'], ['POST' => 0], null, false, false, null]],
            250 => [[['_route' => 'api_add_especies', '_controller' => 'App\\Controller\\ColoniaController::completaEspecies', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postEspecies'], ['id'], ['POST' => 0], null, false, false, null]],
            277 => [[['_route' => 'api_get_favoritosCol', '_controller' => 'App\\Controller\\ColoniaController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getFav'], ['id'], ['GET' => 0], null, false, true, null]],
            301 => [[['_route' => 'api_new_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::newVisit', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'newVisit'], ['id'], ['POST' => 0], null, false, false, null]],
            321 => [[['_route' => 'api_new_favoritosCol', '_controller' => 'App\\Controller\\ColoniaController::newFavorito'], [], ['POST' => 0], null, false, false, null]],
            338 => [[['_route' => 'api_del_favoritoCol', '_controller' => 'App\\Controller\\ColoniaController::removeFavorito'], ['id'], ['DELETE' => 0], null, false, true, null]],
            348 => [[['_route' => 'api_new_colonia', '_controller' => 'App\\Controller\\ColoniaController::newColonia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
            392 => [[['_route' => 'api_censo_municipios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            429 => [
                [['_route' => 'api_censo_municipios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_censo_municipios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_censo_municipios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            438 => [[['_route' => 'api_new_censoMunicipio', '_controller' => 'App\\Controller\\ColoniaController::newCensoMunicipio', '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
            491 => [
                [['_route' => 'api_tipo_propiedads_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_propiedads_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            529 => [
                [['_route' => 'api_tipo_propiedads_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_propiedads_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_tipo_propiedads_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            571 => [
                [['_route' => 'api_tipo_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            609 => [
                [['_route' => 'api_tipo_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_tipo_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            649 => [
                [['_route' => 'api_tipo_edificios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_edificios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            687 => [
                [['_route' => 'api_tipo_edificios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_edificios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_tipo_edificios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            729 => [[['_route' => 'api_temp_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            763 => [[['_route' => 'api_temp_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            799 => [[['_route' => 'api_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            839 => [
                [['_route' => 'api_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            867 => [[['_route' => 'api_add_locNidosNoCol', '_controller' => 'App\\Controller\\TerritorioController::completaNidos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'postNoCol'], ['id'], ['POST' => 0], null, false, false, null]],
            887 => [[['_route' => 'api_new_favoritosTerr', '_controller' => 'App\\Controller\\TerritorioController::newFavorito'], [], ['POST' => 0], null, false, false, null]],
            907 => [
                [['_route' => 'api_get_favoritosTerr', '_controller' => 'App\\Controller\\TerritorioController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'getFav'], ['id'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_del_favoritoTerr', '_controller' => 'App\\Controller\\TerritorioController::removeFavorito'], ['id'], ['DELETE' => 0], null, false, true, null],
            ],
            933 => [[['_route' => 'api_new_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::newVisit', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'newVisit'], ['id'], ['POST' => 0], null, false, false, null]],
            942 => [[['_route' => 'api_new_territorio', '_controller' => 'App\\Controller\\TerritorioController::newTerritorio', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
            994 => [[['_route' => 'api_visitas_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
            1031 => [[['_route' => 'api_visitas_territorios_getNormal_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'getNormal'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            1051 => [
                [['_route' => 'api_put_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::editVisit', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_del_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::deleteVisitaTerr', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_get_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::getVisitaTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], ['id'], ['GET' => 0], null, false, true, null],
            ],
            1069 => [[['_route' => 'api_visitaTerr_image', '_controller' => 'App\\Controller\\TerritorioController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
            1095 => [[['_route' => 'api_visitaTerr_rmvImage', '_controller' => 'App\\Controller\\TerritorioController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
            1107 => [[['_route' => 'api_get_visitasTerr', '_controller' => 'App\\Controller\\TerritorioController::getVisitasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], [], ['GET' => 0], null, false, false, null]],
            1143 => [[['_route' => 'api_visitas_colonias_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
            1181 => [[['_route' => 'api_visitas_colonias_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            1201 => [
                [['_route' => 'api_put_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::editVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_del_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::deleteVisitaCol', '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            ],
            1219 => [[['_route' => 'api_visitaCol_image', '_controller' => 'App\\Controller\\ColoniaController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
            1245 => [[['_route' => 'api_visitaCol_rmvImage', '_controller' => 'App\\Controller\\ColoniaController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
            1257 => [[['_route' => 'api_get_visitasCol', '_controller' => 'App\\Controller\\ColoniaController::getVisits', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], [], ['GET' => 0], null, false, false, null]],
            1308 => [
                [['_route' => 'api_favoritos_terrs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_favoritos_terrs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1347 => [
                [['_route' => 'api_favoritos_terrs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_favoritos_terrs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_favoritos_terrs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosTerr', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1383 => [
                [['_route' => 'api_favoritos_cols_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_favoritos_cols_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1422 => [
                [['_route' => 'api_favoritos_cols_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_favoritos_cols_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_favoritos_cols_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\FavoritosCol', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1484 => [
                [['_route' => 'api_observaciones_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_observaciones_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1523 => [
                [['_route' => 'api_observaciones_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_observaciones_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_observaciones_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1566 => [[['_route' => 'api_otras_especies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            1604 => [
                [['_route' => 'api_otras_especies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_otras_especies_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_otras_especies_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            1654 => [
                [['_route' => 'api_emplazamientos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_emplazamientos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1693 => [
                [['_route' => 'api_emplazamientos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_emplazamientos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_emplazamientos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1736 => [[['_route' => 'api_stats_anno', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
            1748 => [[['_route' => 'api_stats_annoCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnnoCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnnoCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1761 => [[['_route' => 'api_stats_annoTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
            1778 => [[['_route' => 'api_stats_ccaa', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
            1790 => [[['_route' => 'api_stats_ccaaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCccaCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1803 => [[['_route' => 'api_stats_ccaaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
            1825 => [[['_route' => 'api_stats_provincia', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
            1837 => [[['_route' => 'api_stats_provinciaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvinciaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvinciaCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1850 => [[['_route' => 'api_stats_provinciaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
            1878 => [[['_route' => 'api_stats_tipoEdificioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoEdificioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoEdificioCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1899 => [[['_route' => 'api_stats_tipoPropiedadCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoPropiedadCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoPropiedadCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1921 => [[['_route' => 'api_stats_municipioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasMunicipioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsMunicipioCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1943 => [[['_route' => 'api_stats_observaciones', '_controller' => 'App\\Controller\\TerritorioController::estadisticasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsObservaciones'], ['id'], ['GET' => 0], null, false, false, null]],
            1991 => [[['_route' => 'api_loc_nidos_cols_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            2029 => [
                [['_route' => 'api_loc_nidos_cols_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_loc_nidos_cols_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_loc_nidos_cols_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            2060 => [[['_route' => 'api_list_one_no_col', '_controller' => 'App\\Controller\\SeoApisController::listOneNoCol'], ['id'], ['GET' => 0], null, false, true, null]],
            2081 => [[['_route' => 'api_list_one_col', '_controller' => 'App\\Controller\\SeoApisController::listOneCol'], ['id'], ['GET' => 0], null, false, true, null]],
            2111 => [[['_route' => 'api_provincias', '_controller' => 'App\\Controller\\SeoApisController::provincias'], ['id'], ['GET' => 0], null, false, true, null]],
            2139 => [[['_route' => 'api_municipios', '_controller' => 'App\\Controller\\SeoApisController::municipios'], ['id'], ['GET' => 0], null, false, true, null]],
            2181 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            2202 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            2249 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            2264 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            2285 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            2299 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            2310 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
