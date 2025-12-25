<?php
// app/core/Controller.php
namespace App\Core;

class Controller {
    public function view($view, $data = []) {
        extract($data);
        require_once APP_PATH . "/Views/{$view}.php";
    }
}
?>