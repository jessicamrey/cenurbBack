<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container94byqt9\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container94byqt9/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container94byqt9.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container94byqt9\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container94byqt9\srcDevDebugProjectContainer(array(
    'container.build_hash' => '94byqt9',
    'container.build_id' => '54ca95f1',
    'container.build_time' => 1551462420,
), __DIR__.\DIRECTORY_SEPARATOR.'Container94byqt9');
