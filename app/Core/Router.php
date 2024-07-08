<?php

namespace Pc\PlanningEventApp\App\Core;

class Router {
    private static array $routes = [];

    public static function add( string $method, 
                                string $path, 
                                string $controller, 
                                string $function, 
                                array $middleware = [],
                                ):void {
            self::$routes[] = [
            "method" => $method,
            "path" => $path,
            "controller" => $controller,
            "function" => $function,
            "middleware" => $middleware,
        ];
    }

    public static function run():void {
        $path = "/";
        if(isset($_SERVER["PATH_INFO"])) {
            $path = $_SERVER["PATH_INFO"];
        }
        $method = $_SERVER["REQUEST_METHOD"];

        foreach(self::$routes as $route) {
            if($route["method"] == $method && $route["path"] == $path){
                echo "CONTROLLER : " .  $route["controller"] . ", FUNCTION : " . $route["function"];
                return;
            }
        }
        http_response_code(404);
        echo "CONTROLLER NOT FOUND";
    }

}