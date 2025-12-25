<?php

class Router {

    public function run() {
        $url = $_GET['url'] ?? '';

        if ($url === '' || $url === 'home') {
            require_once __DIR__ . '/../Controllers/HomeController.php';
            $controller = new HomeController();
            $controller->index();
        } else {
            echo "404 - Page not found";
        }
    }
}
