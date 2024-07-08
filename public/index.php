<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Pc\PlanningEventApp\App\Core\Router;

Router::add("GET", "/" , "HomeController", "Index");

Router::run();