<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDfca8mu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDfca8mu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDfca8mu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDfca8mu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDfca8mu\App_KernelDevDebugContainer([
    'container.build_hash' => 'Dfca8mu',
    'container.build_id' => 'f3cfe626',
    'container.build_time' => 1734101531,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDfca8mu');
