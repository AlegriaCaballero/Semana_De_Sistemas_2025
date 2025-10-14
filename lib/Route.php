<?php

namespace lib;

class Route{
    private static $routes = [];

    public static function get($uri, $callback){
        // Normalizamos el URI para asegurar que siempre empiece con /
        $uri = trim($uri, '/');
        self::$routes["GET"]['/' . $uri] = $callback;
    }

    public static function post($uri, $callback){
        // Normalizamos el URI
        $uri = trim($uri, '/');
        self::$routes["POST"]['/' . $uri] = $callback;
    }

    public static function dispatch(){
        $uri = $_SERVER["REQUEST_URI"];
        $method = $_SERVER["REQUEST_METHOD"];

        foreach(self::$routes[$method] as $url => $callback){
            // Convierte la ruta definida (ej. /inicio/:flag) en una expresión regular
            if(strpos($url, ":") !== false){
                $url = preg_replace("#:[a-zA-Z]+#", "([a-zA-Z0-9_]+)", $url);
            }

            // Compara la URI actual con la expresión regular de la ruta
            if(preg_match("#^$url$#", $uri, $matches)){
                $params = array_slice($matches, 1);

                // Si el callback es una función anónima
                if(is_callable($callback)){
                    $response = $callback(...$params);
                }

                // Si el callback es un array [Controlador::class, 'metodo']
                if(is_array($callback)){
                    $controller = new $callback[0];
                    $response = $controller->{$callback[1]}(...$params);
                }

                // Devuelve la respuesta en el formato adecuado (JSON o texto/HTML)
                if(is_array($response) || is_object($response)){
                    header("Content-Type: application/json");
                    echo json_encode($response);
                } else {
                    echo $response;
                }
                return;
            }
        }
        // Si no se encuentra la ruta
        http_response_code(404);
        echo "404 Not Found";
    }
}
