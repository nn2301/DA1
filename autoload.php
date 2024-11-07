<?php
// autoload.php

spl_autoload_register(function ($className) {
    $paths = ['./app/controller/', './app/model/'];
    foreach ($paths as $path) {
        $file = $path . $className . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
