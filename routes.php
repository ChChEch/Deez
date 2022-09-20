<?php

use App\Router;
use App\Controllers\PostController;
use App\Controllers\PublicController;

Router::get('/' , [PublicController::class, 'home']);
Router::post('/add' , [PostController::class, 'add']);
Router::get( '/new' , [PostController::class, 'new']);
Router::get( '/posts/show' , [PostController::class, 'show']);
Router::get( '/posts/edit' , [PostController::class, 'edit']);
Router::post( '/posts/edit' , [PostController::class, 'update']);
Router::get( '/posts/delete' , [PostController::class, 'delete']);
Router::get( '/test' , [PostController::class, 'delete']);

Router::get( '/upload' , [PostController::class, 'uploadForm']);
Router::post( '/upload' , [PostController::class, 'upload']);

Router::get( '/register' , [PostController::class, 'registerForm']);
Router::get( '/login' , [PostController::class, 'loginForm']);
Router::post( '/register' , [PostController::class, 'register']);
Router::post( '/login' , [PostController::class, 'login']);