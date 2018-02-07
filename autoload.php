<?php

// require_once ROOT_PATH . '/Entities/Model.php';
// require_once ROOT_PATH . '/Entities/Post.php';
// require_once ROOT_PATH . '/Controller/PostController.php';

function my_app_autoloader($class)
{
    var_dump($class);
    $root = ROOT_PATH . '/';
    var_dump(ROOT_PATH);
    $prefix = 'App\\';

    // bỏ prefix
    $classWithoutPrefix = preg_replace('/^' . preg_quote($prefix) . '/', '', $class);
    // Thay thế \ thành /
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classWithoutPrefix) . '.php';
    var_dump(1);
    $path = $root . $file;
    var_dump($path);
    if (file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('my_app_autoloader');
