<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'api_platform.action.entrypoint' shared service.

include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Action/EntrypointAction.php';

return $this->services['api_platform.action.entrypoint'] = new \ApiPlatform\Core\Action\EntrypointAction(${($_ = isset($this->services['ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceNameCollectionFactoryInterface']) ? $this->services['ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceNameCollectionFactoryInterface'] : $this->getResourceNameCollectionFactoryInterfaceService()) && false ?: '_'});
