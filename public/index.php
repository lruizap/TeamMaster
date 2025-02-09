<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../controller/equipoController.php';
require_once __DIR__ . '/../controller/jugadorController.php';

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

// Definir rutas
$dispatcher = simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', ['EquipoController', 'listarEquipos']);
    $r->addRoute('GET', '/entrenador/{id}', ['EquipoController', 'detalleEntrenador']);
    $r->addRoute('GET', '/equipo/{id}', ['JugadorController', 'listarJugadores']);
    $r->addRoute('POST', '/jugador/traspasar', ['JugadorController', 'traspasarJugador']);
    $r->addRoute('POST', '/jugador/despedir', ['JugadorController', 'despedirJugador']);
    $r->addRoute('POST', '/jugador/insertar', ['JugadorController', 'insertarJugador']);
});

// Obtener la URI actual
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Eliminar parámetros de la URL
if (false !== ($pos = strpos($uri, '?'))) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

// Procesar ruta
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo "404 Not Found";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo "405 Method Not Allowed";
        break;
    case FastRoute\Dispatcher::FOUND:
        [$controller, $method] = $routeInfo[1];
        $vars = $routeInfo[2];

        $controllerInstance = new $controller();
        call_user_func_array([$controllerInstance, $method], $vars);
        break;
}
