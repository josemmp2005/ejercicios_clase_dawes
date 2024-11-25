<?php
/**Carga de parámetros
Autocarga de clases
Utiliza las clases necesarias;
*/
require_once "../app/config/conf.php";
require_once "../vendor/autoload.php";

use App\Controllers\IndexController;
use App\Core\Router;

$router = new Router();
$router->add(array(
    'name' => 'home',
    'path' => '/^\/$/',
    'action' => [IndexController::class, 'IndexAction']
));
echo "<br>";
$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
echo $request;
$route = $router->match($request);
if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
} else {
    echo "No route";
}

?>