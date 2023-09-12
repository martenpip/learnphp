<?php

use app\Router;
use App\Controllers\PublicController;
Router::addRoute('/',[PublicController::class, 'home']);

Router::addRoute('/about',[PublicController::class, 'about']);

Router::addRoute('/test',[PublicController::class, 'test']);

