<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMx7amqE\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMx7amqE/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMx7amqE.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMx7amqE\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMx7amqE\App_KernelDevDebugContainer([
    'container.build_hash' => 'Mx7amqE',
    'container.build_id' => 'c75dd145',
    'container.build_time' => 1617655484,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMx7amqE');
