<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Pc\PlanningEventApp\App\Core\Router;
use Pc\PlanningEventApp\App\Controllers\HomeController;

Router::add("GET", "/" , HomeController::class , "index");
Router::add("GET", "/login" , HomeController::class , "hello");
Router::add("GET", "/register" , HomeController::class , "register");


Router::run();