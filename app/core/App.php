<?php
namespace App\Core;
class App {
    public function __construct() {
        $url = $_GET['url'] ?? 'home/index';
        $parts = explode('/', $url);
        $controller = $parts[0] ?? 'home';
        $method = $parts[1] ?? 'index';
        if ($controller === 'index') $controller = 'home';
        $controller = ucfirst($controller);
        $controllerFile = APP_PATH . "/Controllers/{$controller}Controller.php";
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controllerClass = "App\\Controllers\\{$controller}Controller";
            if (class_exists($controllerClass)) {
                $controllerObj = new $controllerClass();
                if (method_exists($controllerObj, $method)) {
                    call_user_func_array([$controllerObj, $method], array_slice($parts, 2));
                } else { header("HTTP/1.0 404 Not Found"); echo "Method not found"; exit(); }
            } else { header("HTTP/1.0 404 Not Found"); echo "Class not found"; exit(); }
        } else { header("HTTP/1.0 404 Not Found"); echo "Controller not found"; exit(); }
    }
}
?>