<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.serializer_locator' shared service.

return $this->services['api_platform.serializer_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['serializer' => function () {
    return ${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->getSerializerService()) && false ?: '_'};
}]);