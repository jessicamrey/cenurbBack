<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4KuEVS6\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4KuEVS6/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4KuEVS6.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4KuEVS6\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container4KuEVS6\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '4KuEVS6',
    'container.build_id' => '280152ad',
    'container.build_time' => 1559065277,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4KuEVS6');
