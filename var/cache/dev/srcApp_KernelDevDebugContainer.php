<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJ7AorQB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJ7AorQB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJ7AorQB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJ7AorQB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerJ7AorQB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'J7AorQB',
    'container.build_id' => 'b2996dce',
    'container.build_time' => 1562929089,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJ7AorQB');
