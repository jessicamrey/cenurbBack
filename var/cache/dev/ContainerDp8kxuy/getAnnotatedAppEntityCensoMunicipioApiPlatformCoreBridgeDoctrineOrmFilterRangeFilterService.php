<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'annotated_app_entity_censo_municipio_api_platform_core_bridge_doctrine_orm_filter_range_filter' shared autowired service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/RangeFilter.php';

return $this->services['annotated_app_entity_censo_municipio_api_platform_core_bridge_doctrine_orm_filter_range_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, NULL, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'}, ['temporada' => NULL]);
