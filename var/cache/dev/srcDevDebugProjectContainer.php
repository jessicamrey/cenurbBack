<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLkugczg\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLkugczg/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLkugczg.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLkugczg\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerLkugczg\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Lkugczg',
    'container.build_id' => 'b5420d80',
    'container.build_time' => 1551783660,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerLkugczg');
