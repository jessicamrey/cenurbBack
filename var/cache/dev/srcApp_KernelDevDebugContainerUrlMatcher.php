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
            '/api/loginAnonymous' => [[['_route' => 'api_login_anonymous', '_controller' => 'App\\Controller\\TempUserController::login', '_api_resource_class' => 'App\\Entity\\TempUser'], null, ['POST' => 0], null, false, false, null]],
            '/api/listCol' => [[['_route' => 'api_list_col', '_controller' => 'App\\Controller\\SeoApisController::listCol'], null, ['GET' => 0], null, false, false, null]],
            '/api/listNoCol' => [[['_route' => 'api_list_no_col', '_controller' => 'App\\Controller\\SeoApisController::listNoCol'], null, ['GET' => 0], null, false, false, null]],
            '/api/ccaa' => [[['_route' => 'api_ccaa', '_controller' => 'App\\Controller\\SeoApisController::ccaa'], null, ['GET' => 0], null, false, false, null]],
            '/api/provincias' => [[['_route' => 'api_all_provincias', '_controller' => 'App\\Controller\\SeoApisController::allProvincias'], null, ['GET' => 0], null, false, false, null]],
            '/api/closeCol' => [[['_route' => 'api_get_closeColonias', '_controller' => 'App\\Controller\\ColoniaController::getColoniasCercanas', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getClose'], null, ['GET' => 0], null, false, false, null]],
            '/api/especies/stats' => [[['_route' => 'api_stats_general', '_controller' => 'App\\Controller\\ColoniaController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsGeneral'], null, ['GET' => 0], null, false, false, null]],
            '/api/temporadas' => [[['_route' => 'api_temporada', '_controller' => 'App\\Controller\\ColoniaController::getTemporadas'], null, ['GET' => 0], null, false, false, null]],
            '/api/especies/statsTerr' => [[['_route' => 'api_stats_generalTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasGeneral', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsGeneral'], null, ['GET' => 0], null, false, false, null]],
        ];
        $this->regexpList = [
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
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:384)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:422)'
                                    .')'
                                .')'
                            .')'
                            .'|t(?'
                                .'|ipo\\-(?'
                                    .'|propiedads(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:476)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:514)'
                                        .')'
                                    .')'
                                    .'|territorios(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:556)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:594)'
                                        .')'
                                    .')'
                                    .'|edificios(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:634)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:672)'
                                        .')'
                                    .')'
                                .')'
                                .'|e(?'
                                    .'|mp\\-users(?'
                                        .'|(?:\\.([^/]++))?(*:714)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:748)'
                                    .')'
                                    .'|rritorios(?'
                                        .'|(?:\\.([^/]++))?(*:784)'
                                        .'|/(?'
                                            .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:824)'
                                            .')'
                                            .'|([^/]++)/loc\\-nidos(*:852)'
                                            .'|favoritos(?'
                                                .'|(*:872)'
                                                .'|/([^/]++)(?'
                                                    .'|(*:892)'
                                                .')'
                                            .')'
                                            .'|([^/]++)/visitas(*:918)'
                                        .')'
                                        .'|(*:927)'
                                    .')'
                                .')'
                            .')'
                            .'|visitas\\-(?'
                                .'|territorios(?'
                                    .'|(?:\\.([^/]++))?(*:979)'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1019)'
                                        .')'
                                        .'|([^/]++)(?'
                                            .'|(*:1040)'
                                            .'|/(?'
                                                .'|image(*:1058)'
                                                .'|rmvImage/([^/]++)(*:1084)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|colonias(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1126)'
                                    .')'
                                    .'|/(?'
                                        .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:1168)'
                                        .')'
                                        .'|([^/]++)/(?'
                                            .'|image(*:1195)'
                                            .'|rmvImage/([^/]++)(*:1221)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|o(?'
                                .'|bservaciones\\-territorios(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1284)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1323)'
                                    .')'
                                .')'
                                .'|tras\\-especies(?'
                                    .'|(?:\\.([^/]++))?(*:1366)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1404)'
                                    .')'
                                .')'
                            .')'
                            .'|e(?'
                                .'|mplazamientos(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1454)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1493)'
                                    .')'
                                .')'
                                .'|species/([^/]++)/stats(?'
                                    .'|Anno(?'
                                        .'|(*:1536)'
                                        .'|Col(*:1548)'
                                        .'|Terr(*:1561)'
                                    .')'
                                    .'|Ccaa(?'
                                        .'|(*:1578)'
                                        .'|Col(*:1590)'
                                        .'|Terr(*:1603)'
                                    .')'
                                    .'|Provincia(?'
                                        .'|(*:1625)'
                                        .'|Col(*:1637)'
                                        .'|Terr(*:1650)'
                                    .')'
                                    .'|TipoEdificioCol(*:1675)'
                                    .'|MunicipioCol(*:1696)'
                                    .'|Observaciones(*:1718)'
                                .')'
                            .')'
                            .'|l(?'
                                .'|oc\\-nidos\\-cols(?'
                                    .'|(?:\\.([^/]++))?(*:1766)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1804)'
                                    .')'
                                .')'
                                .'|ist(?'
                                    .'|NoCol/([^/]++)(*:1835)'
                                    .'|Col/([^/]++)(*:1856)'
                                .')'
                            .')'
                            .'|provincias/([^/]++)(*:1886)'
                            .'|municipios/([^/]++)(*:1914)'
                            .'|usuario/([^/]++)/visitas(*:1947)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:1989)'
                        .'|wdt/([^/]++)(*:2010)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:2057)'
                                .'|router(*:2072)'
                                .'|exception(?'
                                    .'|(*:2093)'
                                    .'|\\.css(*:2107)'
                                .')'
                            .')'
                            .'|(*:2118)'
                        .')'
                    .')'
                .')/?$}sD',
        ];
        $this->dynamicRoutes = [
            42 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
            72 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
            113 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
            145 => [[['_route' => 'api_colonias_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            185 => [
                [['_route' => 'api_colonias_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_colonias_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_colonias_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Colonia', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            216 => [[['_route' => 'api_add_locNidosCol', '_controller' => 'App\\Controller\\ColoniaController::completaNidos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postCol'], ['id'], ['POST' => 0], null, false, false, null]],
            239 => [[['_route' => 'api_add_especies', '_controller' => 'App\\Controller\\ColoniaController::completaEspecies', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'postEspecies'], ['id'], ['POST' => 0], null, false, false, null]],
            266 => [[['_route' => 'api_get_favoritosCol', '_controller' => 'App\\Controller\\ColoniaController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getFav'], ['id'], ['GET' => 0], null, false, true, null]],
            290 => [[['_route' => 'api_new_visitaCol', '_controller' => 'App\\Controller\\ColoniaController::newVisit', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'newVisit'], ['id'], ['POST' => 0], null, false, false, null]],
            310 => [[['_route' => 'api_new_favoritosCol', '_controller' => 'App\\Controller\\ColoniaController::newFavorito'], [], ['POST' => 0], null, false, false, null]],
            327 => [[['_route' => 'api_del_favoritoCol', '_controller' => 'App\\Controller\\ColoniaController::removeFavorito'], ['id'], ['DELETE' => 0], null, false, true, null]],
            337 => [[['_route' => 'api_new_colonia', '_controller' => 'App\\Controller\\ColoniaController::newColonia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
            384 => [
                [['_route' => 'api_censo_municipios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_censo_municipios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            422 => [
                [['_route' => 'api_censo_municipios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_censo_municipios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_censo_municipios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\CensoMunicipio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            476 => [
                [['_route' => 'api_tipo_propiedads_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_propiedads_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            514 => [
                [['_route' => 'api_tipo_propiedads_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_propiedads_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_tipo_propiedads_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoPropiedad', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            556 => [
                [['_route' => 'api_tipo_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            594 => [
                [['_route' => 'api_tipo_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_tipo_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoTerritorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            634 => [
                [['_route' => 'api_tipo_edificios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_edificios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            672 => [
                [['_route' => 'api_tipo_edificios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_tipo_edificios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_tipo_edificios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TipoEdificio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            714 => [[['_route' => 'api_temp_users_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            748 => [[['_route' => 'api_temp_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\TempUser', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
            784 => [[['_route' => 'api_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            824 => [
                [['_route' => 'api_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Territorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            852 => [[['_route' => 'api_add_locNidosNoCol', '_controller' => 'App\\Controller\\TerritorioController::completaNidos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'postNoCol'], ['id'], ['POST' => 0], null, false, false, null]],
            872 => [[['_route' => 'api_new_favoritosTerr', '_controller' => 'App\\Controller\\TerritorioController::newFavorito'], [], ['POST' => 0], null, false, false, null]],
            892 => [
                [['_route' => 'api_get_favoritosTerr', '_controller' => 'App\\Controller\\TerritorioController::getFavoritos', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'getFav'], ['id'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_del_favoritoTerr', '_controller' => 'App\\Controller\\TerritorioController::removeFavorito'], ['id'], ['DELETE' => 0], null, false, true, null],
            ],
            918 => [[['_route' => 'api_new_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::newVisit', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'newVisit'], ['id'], ['POST' => 0], null, false, false, null]],
            927 => [[['_route' => 'api_new_territorio', '_controller' => 'App\\Controller\\TerritorioController::newTerritorio', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null]],
            979 => [[['_route' => 'api_visitas_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            1019 => [
                [['_route' => 'api_visitas_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_visitas_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            1040 => [[['_route' => 'api_put_visitaTerr', '_controller' => 'App\\Controller\\TerritorioController::editVisit', '_api_resource_class' => 'App\\Entity\\VisitasTerritorio', '_api_item_operation_name' => 'put'], ['id'], ['PUT' => 0], null, false, true, null]],
            1058 => [[['_route' => 'api_visitaTerr_image', '_controller' => 'App\\Controller\\TerritorioController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
            1084 => [[['_route' => 'api_visitaTerr_rmvImage', '_controller' => 'App\\Controller\\TerritorioController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
            1126 => [
                [['_route' => 'api_visitas_colonias_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
                [['_route' => 'api_visitas_colonias_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            ],
            1168 => [
                [['_route' => 'api_visitas_colonias_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_visitas_colonias_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_visitas_colonias_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\VisitasColonia', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            1195 => [[['_route' => 'api_visitaCol_image', '_controller' => 'App\\Controller\\ColoniaController::uploadImageAction'], ['id'], ['POST' => 0], null, false, false, null]],
            1221 => [[['_route' => 'api_visitaCol_rmvImage', '_controller' => 'App\\Controller\\ColoniaController::removeImageAction'], ['id', 'idImg'], ['DELETE' => 0], null, false, true, null]],
            1284 => [
                [['_route' => 'api_observaciones_territorios_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_observaciones_territorios_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1323 => [
                [['_route' => 'api_observaciones_territorios_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_observaciones_territorios_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_observaciones_territorios_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1366 => [[['_route' => 'api_otras_especies_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            1404 => [
                [['_route' => 'api_otras_especies_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_otras_especies_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_otras_especies_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\OtrasEspecies', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            1454 => [
                [['_route' => 'api_emplazamientos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_emplazamientos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
            ],
            1493 => [
                [['_route' => 'api_emplazamientos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_emplazamientos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
                [['_route' => 'api_emplazamientos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Emplazamiento', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            ],
            1536 => [[['_route' => 'api_stats_anno', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
            1548 => [[['_route' => 'api_stats_annoCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnnoCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsAnnoCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1561 => [[['_route' => 'api_stats_annoTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasAnno', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsAnno'], ['id'], ['GET' => 0], null, false, false, null]],
            1578 => [[['_route' => 'api_stats_ccaa', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
            1590 => [[['_route' => 'api_stats_ccaaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsCccaCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1603 => [[['_route' => 'api_stats_ccaaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasCcaa', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsCcca'], ['id'], ['GET' => 0], null, false, false, null]],
            1625 => [[['_route' => 'api_stats_provincia', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
            1637 => [[['_route' => 'api_stats_provinciaCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvinciaCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsProvinciaCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1650 => [[['_route' => 'api_stats_provinciaTerr', '_controller' => 'App\\Controller\\TerritorioController::estadisticasProvincia', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsProvincia'], ['id'], ['GET' => 0], null, false, false, null]],
            1675 => [[['_route' => 'api_stats_tipoEdificioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasTipoEdificioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsTipoEdificioCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1696 => [[['_route' => 'api_stats_municipioCol', '_controller' => 'App\\Controller\\ColoniaController::estadisticasMunicipioCol', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'statsMunicipioCol'], ['id'], ['GET' => 0], null, false, false, null]],
            1718 => [[['_route' => 'api_stats_observaciones', '_controller' => 'App\\Controller\\TerritorioController::estadisticasTerr', '_api_resource_class' => 'App\\Entity\\Territorio', '_api_collection_operation_name' => 'statsObservaciones'], ['id'], ['GET' => 0], null, false, false, null]],
            1766 => [[['_route' => 'api_loc_nidos_cols_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
            1804 => [
                [['_route' => 'api_loc_nidos_cols_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
                [['_route' => 'api_loc_nidos_cols_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
                [['_route' => 'api_loc_nidos_cols_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\LocNidosCol', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            ],
            1835 => [[['_route' => 'api_list_one_no_col', '_controller' => 'App\\Controller\\SeoApisController::listOneNoCol'], ['id'], ['GET' => 0], null, false, true, null]],
            1856 => [[['_route' => 'api_list_one_col', '_controller' => 'App\\Controller\\SeoApisController::listOneCol'], ['id'], ['GET' => 0], null, false, true, null]],
            1886 => [[['_route' => 'api_provincias', '_controller' => 'App\\Controller\\SeoApisController::provincias'], ['id'], ['GET' => 0], null, false, true, null]],
            1914 => [[['_route' => 'api_municipios', '_controller' => 'App\\Controller\\SeoApisController::municipios'], ['id'], ['GET' => 0], null, false, true, null]],
            1947 => [[['_route' => 'api_get_visits', '_controller' => 'App\\Controller\\ColoniaController::getVisits', '_api_resource_class' => 'App\\Entity\\Colonia', '_api_collection_operation_name' => 'getVisits'], ['id'], ['GET' => 0], null, false, false, null]],
            1989 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            2010 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            2057 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            2072 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            2093 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            2107 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            2118 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        ];
    }
}
