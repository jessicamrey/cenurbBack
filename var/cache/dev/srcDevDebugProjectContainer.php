<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4jkcbjj\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4jkcbjj/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container4jkcbjj.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container4jkcbjj\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container4jkcbjj\srcDevDebugProjectContainer(array(
    'container.build_hash' => '4jkcbjj',
    'container.build_id' => '25e32c15',
    'container.build_time' => 1551353846,
), __DIR__.\DIRECTORY_SEPARATOR.'Container4jkcbjj');
