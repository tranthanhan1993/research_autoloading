<?php

const ROOT_PATH = __DIR__;

require_once 'autoload.php';

use App\Controller\PostController;

// $user = new UserController;
// $user->showName(1212);

$controller = new PostController();
$controller->store();
$model = new Model();
