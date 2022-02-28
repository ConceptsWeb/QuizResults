<?php

spl_autoload_register(function (string $class) {
    $path = str_replace('\\', '/', str_replace('iSpringSolutions\\', '', $class)) . '.php';

    require __DIR__ . '/../classes/' . $path;
});