<?php

use App\Router;
use App\Controllers\PostController;
use App\Controllers\PublicController;

Router::addRoute('GET' , '/' , [PublicController::class, 'home']);

Router::addRoute('POST' , '/add' , [PostController::class, 'add']);

Router::addRoute('GET' , '/new' , [PostController::class, 'new']);
