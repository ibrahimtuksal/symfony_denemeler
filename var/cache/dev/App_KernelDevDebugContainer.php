<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWeTLLKW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWeTLLKW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWeTLLKW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWeTLLKW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWeTLLKW\App_KernelDevDebugContainer([
    'container.build_hash' => 'WeTLLKW',
    'container.build_id' => '699adde9',
    'container.build_time' => 1617621526,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWeTLLKW');
