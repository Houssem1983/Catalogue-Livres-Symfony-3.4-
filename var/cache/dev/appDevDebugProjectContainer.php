<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZqecfw9\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZqecfw9/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZqecfw9.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZqecfw9\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZqecfw9\appDevDebugProjectContainer([
    'container.build_hash' => 'Zqecfw9',
    'container.build_id' => '22bcc283',
    'container.build_time' => 1612179796,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZqecfw9');
