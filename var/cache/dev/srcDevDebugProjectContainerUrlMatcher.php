<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/api')) {
            // api_entrypoint
            if (preg_match('#^/api(?:/(?P<index>index)(?:\\.(?P<_format>[^/]++))?)?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_entrypoint')), array (  '_controller' => 'api_platform.action.entrypoint',  '_format' => '',  '_api_respond' => '1',  'index' => 'index',));
            }

            // api_doc
            if (0 === strpos($pathinfo, '/api/docs') && preg_match('#^/api/docs(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_doc')), array (  '_controller' => 'api_platform.action.documentation',  '_api_respond' => '1',  '_format' => '',));
            }

            if (0 === strpos($pathinfo, '/api/c')) {
                // api_jsonld_context
                if (0 === strpos($pathinfo, '/api/contexts') && preg_match('#^/api/contexts/(?P<shortName>.+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_jsonld_context')), array (  '_controller' => 'api_platform.jsonld.action.context',  '_api_respond' => '1',  '_format' => 'jsonld',));
                }

                if (0 === strpos($pathinfo, '/api/colonias')) {
                    // api_colonias_get_collection
                    if (preg_match('#^/api/colonias(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_colonias_get_collection;
                        }

                        return $ret;
                    }
                    not_api_colonias_get_collection:

                    // api_colonias_get_item
                    if (preg_match('#^/api/colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_colonias_get_item;
                        }

                        return $ret;
                    }
                    not_api_colonias_get_item:

                    // api_colonias_put_item
                    if (preg_match('#^/api/colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_colonias_put_item;
                        }

                        return $ret;
                    }
                    not_api_colonias_put_item:

                    // api_colonias_delete_item
                    if (preg_match('#^/api/colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_colonias_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_colonias_delete_item;
                        }

                        return $ret;
                    }
                    not_api_colonias_delete_item:

                    // api_new_colonia
                    if ('/api/colonias' === $pathinfo) {
                        $ret = array (  '_controller' => 'App\\Controller\\ColoniaController::newColonia',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'post',  '_route' => 'api_new_colonia',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_new_colonia;
                        }

                        return $ret;
                    }
                    not_api_new_colonia:

                    // api_add_locNidosCol
                    if (preg_match('#^/api/colonias/(?P<id>[^/]++)/loc\\-nidos$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_add_locNidosCol')), array (  '_controller' => 'App\\Controller\\ColoniaController::completaNidos',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'postCol',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_add_locNidosCol;
                        }

                        return $ret;
                    }
                    not_api_add_locNidosCol:

                    // api_add_especies
                    if (preg_match('#^/api/colonias/(?P<id>[^/]++)/otras\\-especies$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_add_especies')), array (  '_controller' => 'App\\Controller\\ColoniaController::completaEspecies',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'postEspecies',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_add_especies;
                        }

                        return $ret;
                    }
                    not_api_add_especies:

                    // api_get_favoritosCol
                    if (0 === strpos($pathinfo, '/api/colonias/favoritos') && preg_match('#^/api/colonias/favoritos/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_favoritosCol')), array (  '_controller' => 'App\\Controller\\ColoniaController::getFavoritos',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'getFav',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_get_favoritosCol;
                        }

                        return $ret;
                    }
                    not_api_get_favoritosCol:

                    // api_new_visitaCol
                    if (preg_match('#^/api/colonias/(?P<id>[^/]++)/visitas$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_new_visitaCol')), array (  '_controller' => 'App\\Controller\\ColoniaController::newVisit',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'newVisit',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_new_visitaCol;
                        }

                        return $ret;
                    }
                    not_api_new_visitaCol:

                    // api_new_favoritosCol
                    if ('/api/colonias/favoritos' === $pathinfo) {
                        $ret = array (  '_controller' => 'App\\Controller\\ColoniaController::newFavorito',  '_route' => 'api_new_favoritosCol',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_new_favoritosCol;
                        }

                        return $ret;
                    }
                    not_api_new_favoritosCol:

                }

                elseif (0 === strpos($pathinfo, '/api/censo-municipios')) {
                    // api_censo_municipios_get_collection
                    if (preg_match('#^/api/censo\\-municipios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_censo_municipios_get_collection;
                        }

                        return $ret;
                    }
                    not_api_censo_municipios_get_collection:

                    // api_censo_municipios_post_collection
                    if (preg_match('#^/api/censo\\-municipios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_censo_municipios_post_collection;
                        }

                        return $ret;
                    }
                    not_api_censo_municipios_post_collection:

                    // api_censo_municipios_get_item
                    if (preg_match('#^/api/censo\\-municipios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_censo_municipios_get_item;
                        }

                        return $ret;
                    }
                    not_api_censo_municipios_get_item:

                    // api_censo_municipios_delete_item
                    if (preg_match('#^/api/censo\\-municipios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_censo_municipios_delete_item;
                        }

                        return $ret;
                    }
                    not_api_censo_municipios_delete_item:

                    // api_censo_municipios_put_item
                    if (preg_match('#^/api/censo\\-municipios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_censo_municipios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\CensoMunicipio',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_censo_municipios_put_item;
                        }

                        return $ret;
                    }
                    not_api_censo_municipios_put_item:

                }

                // api_ccaa
                if ('/api/ccaa' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\SeoApisController::ccaa',  '_route' => 'api_ccaa',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_ccaa;
                    }

                    return $ret;
                }
                not_api_ccaa:

                // api_get_closeColonias
                if ('/api/closeCol' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\ColoniaController::getColoniasCercanas',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'getClose',  '_route' => 'api_get_closeColonias',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_get_closeColonias;
                    }

                    return $ret;
                }
                not_api_get_closeColonias:

            }

            elseif (0 === strpos($pathinfo, '/api/tipo-')) {
                if (0 === strpos($pathinfo, '/api/tipo-propiedads')) {
                    // api_tipo_propiedads_get_collection
                    if (preg_match('#^/api/tipo\\-propiedads(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_propiedads_get_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_get_collection:

                    // api_tipo_propiedads_post_collection
                    if (preg_match('#^/api/tipo\\-propiedads(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_tipo_propiedads_post_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_post_collection:

                    // api_tipo_propiedads_get_item
                    if (preg_match('#^/api/tipo\\-propiedads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_propiedads_get_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_get_item:

                    // api_tipo_propiedads_delete_item
                    if (preg_match('#^/api/tipo\\-propiedads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_tipo_propiedads_delete_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_delete_item:

                    // api_tipo_propiedads_put_item
                    if (preg_match('#^/api/tipo\\-propiedads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_propiedads_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoPropiedad',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_tipo_propiedads_put_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_propiedads_put_item:

                }

                elseif (0 === strpos($pathinfo, '/api/tipo-territorios')) {
                    // api_tipo_territorios_get_collection
                    if (preg_match('#^/api/tipo\\-territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_territorios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoTerritorio',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_territorios_get_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_territorios_get_collection:

                    // api_tipo_territorios_post_collection
                    if (preg_match('#^/api/tipo\\-territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_territorios_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoTerritorio',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_tipo_territorios_post_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_territorios_post_collection:

                    // api_tipo_territorios_get_item
                    if (preg_match('#^/api/tipo\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_territorios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoTerritorio',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_territorios_get_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_territorios_get_item:

                    // api_tipo_territorios_delete_item
                    if (preg_match('#^/api/tipo\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_territorios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoTerritorio',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_tipo_territorios_delete_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_territorios_delete_item:

                    // api_tipo_territorios_put_item
                    if (preg_match('#^/api/tipo\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_territorios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoTerritorio',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_tipo_territorios_put_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_territorios_put_item:

                }

                elseif (0 === strpos($pathinfo, '/api/tipo-edificios')) {
                    // api_tipo_edificios_get_collection
                    if (preg_match('#^/api/tipo\\-edificios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_edificios_get_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_get_collection:

                    // api_tipo_edificios_post_collection
                    if (preg_match('#^/api/tipo\\-edificios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_collection_operation_name' => 'post',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_tipo_edificios_post_collection;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_post_collection:

                    // api_tipo_edificios_get_item
                    if (preg_match('#^/api/tipo\\-edificios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_tipo_edificios_get_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_get_item:

                    // api_tipo_edificios_delete_item
                    if (preg_match('#^/api/tipo\\-edificios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_tipo_edificios_delete_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_delete_item:

                    // api_tipo_edificios_put_item
                    if (preg_match('#^/api/tipo\\-edificios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_tipo_edificios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TipoEdificio',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_tipo_edificios_put_item;
                        }

                        return $ret;
                    }
                    not_api_tipo_edificios_put_item:

                }

            }

            elseif (0 === strpos($pathinfo, '/api/te')) {
                if (0 === strpos($pathinfo, '/api/temp-users')) {
                    // api_temp_users_get_collection
                    if (preg_match('#^/api/temp\\-users(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_temp_users_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TempUser',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_temp_users_get_collection;
                        }

                        return $ret;
                    }
                    not_api_temp_users_get_collection:

                    // api_temp_users_get_item
                    if (preg_match('#^/api/temp\\-users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_temp_users_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\TempUser',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_temp_users_get_item;
                        }

                        return $ret;
                    }
                    not_api_temp_users_get_item:

                }

                // api_temporada
                if ('/api/temporadas' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\ColoniaController::getTemporadas',  '_route' => 'api_temporada',);
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_temporada;
                    }

                    return $ret;
                }
                not_api_temporada:

                if (0 === strpos($pathinfo, '/api/territorios')) {
                    // api_territorios_get_collection
                    if (preg_match('#^/api/territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_territorios_get_collection;
                        }

                        return $ret;
                    }
                    not_api_territorios_get_collection:

                    // api_territorios_get_item
                    if (preg_match('#^/api/territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_territorios_get_item;
                        }

                        return $ret;
                    }
                    not_api_territorios_get_item:

                    // api_territorios_put_item
                    if (preg_match('#^/api/territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_territorios_put_item;
                        }

                        return $ret;
                    }
                    not_api_territorios_put_item:

                    // api_territorios_delete_item
                    if (preg_match('#^/api/territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_territorios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_territorios_delete_item;
                        }

                        return $ret;
                    }
                    not_api_territorios_delete_item:

                    // api_new_territorio
                    if ('/api/territorios' === $pathinfo) {
                        $ret = array (  '_controller' => 'App\\Controller\\TerritorioController::newTerritorio',  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_collection_operation_name' => 'post',  '_route' => 'api_new_territorio',);
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_new_territorio;
                        }

                        return $ret;
                    }
                    not_api_new_territorio:

                    // api_add_locNidosNoCol
                    if (preg_match('#^/api/territorios/(?P<id>[^/]++)/loc\\-nidos$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_add_locNidosNoCol')), array (  '_controller' => 'App\\Controller\\TerritorioController::completaNidos',  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_collection_operation_name' => 'postNoCol',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_add_locNidosNoCol;
                        }

                        return $ret;
                    }
                    not_api_add_locNidosNoCol:

                    if (0 === strpos($pathinfo, '/api/territorios/favoritos')) {
                        // api_new_favoritosTerr
                        if ('/api/territorios/favoritos' === $pathinfo) {
                            $ret = array (  '_controller' => 'App\\Controller\\TerritorioController::newFavorito',  '_route' => 'api_new_favoritosTerr',);
                            if (!in_array($requestMethod, array('POST'))) {
                                $allow = array_merge($allow, array('POST'));
                                goto not_api_new_favoritosTerr;
                            }

                            return $ret;
                        }
                        not_api_new_favoritosTerr:

                        // api_get_favoritosTerr
                        if (preg_match('#^/api/territorios/favoritos/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_favoritosTerr')), array (  '_controller' => 'App\\Controller\\TerritorioController::getFavoritos',  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_collection_operation_name' => 'getFav',));
                            if (!in_array($canonicalMethod, array('GET'))) {
                                $allow = array_merge($allow, array('GET'));
                                goto not_api_get_favoritosTerr;
                            }

                            return $ret;
                        }
                        not_api_get_favoritosTerr:

                    }

                    // api_new_visitaTerr
                    if (preg_match('#^/api/territorios/(?P<id>[^/]++)/visitas$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_new_visitaTerr')), array (  '_controller' => 'App\\Controller\\TerritorioController::newVisit',  '_api_resource_class' => 'App\\Entity\\Territorio',  '_api_collection_operation_name' => 'newVisit',));
                        if (!in_array($requestMethod, array('POST'))) {
                            $allow = array_merge($allow, array('POST'));
                            goto not_api_new_visitaTerr;
                        }

                        return $ret;
                    }
                    not_api_new_visitaTerr:

                }

            }

            elseif (0 === strpos($pathinfo, '/api/visitas-territorios')) {
                // api_visitas_territorios_get_collection
                if (preg_match('#^/api/visitas\\-territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_territorios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasTerritorio',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_visitas_territorios_get_collection;
                    }

                    return $ret;
                }
                not_api_visitas_territorios_get_collection:

                // api_visitas_territorios_get_item
                if (preg_match('#^/api/visitas\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_territorios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasTerritorio',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_visitas_territorios_get_item;
                    }

                    return $ret;
                }
                not_api_visitas_territorios_get_item:

                // api_visitas_territorios_delete_item
                if (preg_match('#^/api/visitas\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_territorios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasTerritorio',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_visitas_territorios_delete_item;
                    }

                    return $ret;
                }
                not_api_visitas_territorios_delete_item:

                // api_put_visitaTerr
                if (preg_match('#^/api/visitas\\-territorios/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_put_visitaTerr')), array (  '_controller' => 'App\\Controller\\TerritorioController::editVisit',  '_api_resource_class' => 'App\\Entity\\VisitasTerritorio',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_put_visitaTerr;
                    }

                    return $ret;
                }
                not_api_put_visitaTerr:

            }

            elseif (0 === strpos($pathinfo, '/api/visitas-colonias')) {
                // api_visitas_colonias_post_collection
                if (preg_match('#^/api/visitas\\-colonias(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_visitas_colonias_post_collection;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_post_collection:

                // api_visitas_colonias_get_collection
                if (preg_match('#^/api/visitas\\-colonias(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_visitas_colonias_get_collection;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_get_collection:

                // api_visitas_colonias_get_item
                if (preg_match('#^/api/visitas\\-colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_visitas_colonias_get_item;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_get_item:

                // api_visitas_colonias_put_item
                if (preg_match('#^/api/visitas\\-colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_visitas_colonias_put_item;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_put_item:

                // api_visitas_colonias_delete_item
                if (preg_match('#^/api/visitas\\-colonias/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_visitas_colonias_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\VisitasColonia',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_visitas_colonias_delete_item;
                    }

                    return $ret;
                }
                not_api_visitas_colonias_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/observaciones-territorios')) {
                // api_observaciones_territorios_get_collection
                if (preg_match('#^/api/observaciones\\-territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_observaciones_territorios_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_observaciones_territorios_get_collection;
                    }

                    return $ret;
                }
                not_api_observaciones_territorios_get_collection:

                // api_observaciones_territorios_post_collection
                if (preg_match('#^/api/observaciones\\-territorios(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_observaciones_territorios_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_observaciones_territorios_post_collection;
                    }

                    return $ret;
                }
                not_api_observaciones_territorios_post_collection:

                // api_observaciones_territorios_get_item
                if (preg_match('#^/api/observaciones\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_observaciones_territorios_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_observaciones_territorios_get_item;
                    }

                    return $ret;
                }
                not_api_observaciones_territorios_get_item:

                // api_observaciones_territorios_delete_item
                if (preg_match('#^/api/observaciones\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_observaciones_territorios_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_observaciones_territorios_delete_item;
                    }

                    return $ret;
                }
                not_api_observaciones_territorios_delete_item:

                // api_observaciones_territorios_put_item
                if (preg_match('#^/api/observaciones\\-territorios/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_observaciones_territorios_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\ObservacionesTerritorio',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_observaciones_territorios_put_item;
                    }

                    return $ret;
                }
                not_api_observaciones_territorios_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/otras-especies')) {
                // api_otras_especies_get_collection
                if (preg_match('#^/api/otras\\-especies(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_otras_especies_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\OtrasEspecies',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_otras_especies_get_collection;
                    }

                    return $ret;
                }
                not_api_otras_especies_get_collection:

                // api_otras_especies_get_item
                if (preg_match('#^/api/otras\\-especies/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_otras_especies_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\OtrasEspecies',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_otras_especies_get_item;
                    }

                    return $ret;
                }
                not_api_otras_especies_get_item:

                // api_otras_especies_put_item
                if (preg_match('#^/api/otras\\-especies/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_otras_especies_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\OtrasEspecies',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_otras_especies_put_item;
                    }

                    return $ret;
                }
                not_api_otras_especies_put_item:

                // api_otras_especies_delete_item
                if (preg_match('#^/api/otras\\-especies/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_otras_especies_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\OtrasEspecies',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_otras_especies_delete_item;
                    }

                    return $ret;
                }
                not_api_otras_especies_delete_item:

            }

            elseif (0 === strpos($pathinfo, '/api/emplazamientos')) {
                // api_emplazamientos_get_collection
                if (preg_match('#^/api/emplazamientos(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_collection_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_emplazamientos_get_collection;
                    }

                    return $ret;
                }
                not_api_emplazamientos_get_collection:

                // api_emplazamientos_post_collection
                if (preg_match('#^/api/emplazamientos(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_post_collection')), array (  '_controller' => 'api_platform.action.post_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_collection_operation_name' => 'post',));
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_emplazamientos_post_collection;
                    }

                    return $ret;
                }
                not_api_emplazamientos_post_collection:

                // api_emplazamientos_get_item
                if (preg_match('#^/api/emplazamientos/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_item_operation_name' => 'get',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_emplazamientos_get_item;
                    }

                    return $ret;
                }
                not_api_emplazamientos_get_item:

                // api_emplazamientos_delete_item
                if (preg_match('#^/api/emplazamientos/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_item_operation_name' => 'delete',));
                    if (!in_array($requestMethod, array('DELETE'))) {
                        $allow = array_merge($allow, array('DELETE'));
                        goto not_api_emplazamientos_delete_item;
                    }

                    return $ret;
                }
                not_api_emplazamientos_delete_item:

                // api_emplazamientos_put_item
                if (preg_match('#^/api/emplazamientos/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_emplazamientos_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\Emplazamiento',  '_api_item_operation_name' => 'put',));
                    if (!in_array($requestMethod, array('PUT'))) {
                        $allow = array_merge($allow, array('PUT'));
                        goto not_api_emplazamientos_put_item;
                    }

                    return $ret;
                }
                not_api_emplazamientos_put_item:

            }

            elseif (0 === strpos($pathinfo, '/api/especies')) {
                // api_stats_anno
                if (preg_match('#^/api/especies/(?P<id>[^/]++)/statsAnno$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_stats_anno')), array (  '_controller' => 'App\\Controller\\ColoniaController::estadisticasAnno',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'statsAnno',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stats_anno;
                    }

                    return $ret;
                }
                not_api_stats_anno:

                // api_stats_ccaa
                if (preg_match('#^/api/especies/(?P<id>[^/]++)/statsCcaa$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_stats_ccaa')), array (  '_controller' => 'App\\Controller\\ColoniaController::estadisticasCcaa',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'statsCcca',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stats_ccaa;
                    }

                    return $ret;
                }
                not_api_stats_ccaa:

                // api_stats_provincia
                if (preg_match('#^/api/especies/(?P<id>[^/]++)/statsProvincia$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_stats_provincia')), array (  '_controller' => 'App\\Controller\\ColoniaController::estadisticasProvincia',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'statsProvincia',));
                    if (!in_array($canonicalMethod, array('GET'))) {
                        $allow = array_merge($allow, array('GET'));
                        goto not_api_stats_provincia;
                    }

                    return $ret;
                }
                not_api_stats_provincia:

            }

            elseif (0 === strpos($pathinfo, '/api/l')) {
                if (0 === strpos($pathinfo, '/api/loc-nidos-cols')) {
                    // api_loc_nidos_cols_get_collection
                    if (preg_match('#^/api/loc\\-nidos\\-cols(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_get_collection')), array (  '_controller' => 'api_platform.action.get_collection',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_collection_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_loc_nidos_cols_get_collection;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_get_collection:

                    // api_loc_nidos_cols_get_item
                    if (preg_match('#^/api/loc\\-nidos\\-cols/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_get_item')), array (  '_controller' => 'api_platform.action.get_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_item_operation_name' => 'get',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_loc_nidos_cols_get_item;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_get_item:

                    // api_loc_nidos_cols_put_item
                    if (preg_match('#^/api/loc\\-nidos\\-cols/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_put_item')), array (  '_controller' => 'api_platform.action.put_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_item_operation_name' => 'put',));
                        if (!in_array($requestMethod, array('PUT'))) {
                            $allow = array_merge($allow, array('PUT'));
                            goto not_api_loc_nidos_cols_put_item;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_put_item:

                    // api_loc_nidos_cols_delete_item
                    if (preg_match('#^/api/loc\\-nidos\\-cols/(?P<id>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_loc_nidos_cols_delete_item')), array (  '_controller' => 'api_platform.action.delete_item',  '_format' => NULL,  '_api_resource_class' => 'App\\Entity\\LocNidosCol',  '_api_item_operation_name' => 'delete',));
                        if (!in_array($requestMethod, array('DELETE'))) {
                            $allow = array_merge($allow, array('DELETE'));
                            goto not_api_loc_nidos_cols_delete_item;
                        }

                        return $ret;
                    }
                    not_api_loc_nidos_cols_delete_item:

                }

                // api_login_anonymous
                if ('/api/loginAnonymous' === $pathinfo) {
                    $ret = array (  '_controller' => 'App\\Controller\\TempUserController::login',  '_api_resource_class' => 'App\\Entity\\TempUser',  '_route' => 'api_login_anonymous',);
                    if (!in_array($requestMethod, array('POST'))) {
                        $allow = array_merge($allow, array('POST'));
                        goto not_api_login_anonymous;
                    }

                    return $ret;
                }
                not_api_login_anonymous:

                if (0 === strpos($pathinfo, '/api/listCol')) {
                    // api_list_col
                    if ('/api/listCol' === $pathinfo) {
                        $ret = array (  '_controller' => 'App\\Controller\\SeoApisController::listCol',  '_route' => 'api_list_col',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_list_col;
                        }

                        return $ret;
                    }
                    not_api_list_col:

                    // api_list_one_col
                    if (preg_match('#^/api/listCol/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_list_one_col')), array (  '_controller' => 'App\\Controller\\SeoApisController::listOneCol',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_list_one_col;
                        }

                        return $ret;
                    }
                    not_api_list_one_col:

                }

                elseif (0 === strpos($pathinfo, '/api/listNoCol')) {
                    // api_list_no_col
                    if ('/api/listNoCol' === $pathinfo) {
                        $ret = array (  '_controller' => 'App\\Controller\\SeoApisController::listNoCol',  '_route' => 'api_list_no_col',);
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_list_no_col;
                        }

                        return $ret;
                    }
                    not_api_list_no_col:

                    // api_list_one_no_col
                    if (preg_match('#^/api/listNoCol/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_list_one_no_col')), array (  '_controller' => 'App\\Controller\\SeoApisController::listOneNoCol',));
                        if (!in_array($canonicalMethod, array('GET'))) {
                            $allow = array_merge($allow, array('GET'));
                            goto not_api_list_one_no_col;
                        }

                        return $ret;
                    }
                    not_api_list_one_no_col:

                }

            }

            // api_provincias
            if (0 === strpos($pathinfo, '/api/provincias') && preg_match('#^/api/provincias/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_provincias')), array (  '_controller' => 'App\\Controller\\SeoApisController::provincias',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_api_provincias;
                }

                return $ret;
            }
            not_api_provincias:

            // api_municipios
            if (0 === strpos($pathinfo, '/api/municipios') && preg_match('#^/api/municipios/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_municipios')), array (  '_controller' => 'App\\Controller\\SeoApisController::municipios',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_api_municipios;
                }

                return $ret;
            }
            not_api_municipios:

            // api_get_visits
            if (0 === strpos($pathinfo, '/api/usuario') && preg_match('#^/api/usuario/(?P<id>[^/]++)/visitas$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_visits')), array (  '_controller' => 'App\\Controller\\ColoniaController::getVisits',  '_api_resource_class' => 'App\\Entity\\Colonia',  '_api_collection_operation_name' => 'getVisits',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_api_get_visits;
                }

                return $ret;
            }
            not_api_get_visits:

        }

        elseif (0 === strpos($pathinfo, '/_')) {
            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
