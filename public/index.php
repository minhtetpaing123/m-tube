<?php
// public/index.php - FIXED

// 1. Paths သတ်မှတ်ပါ
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/m-tube/public/');
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');
define('PUBLIC_PATH', __DIR__);

// 2. Core files တိုက်ရိုက်ခေါ်ပါ
require_once APP_PATH . '/core/Controller.php';
require_once APP_PATH . '/core/App.php';

// 3. URL ကိုသန့်စင်ပါ
$request_uri = $_SERVER['REQUEST_URI'];

// "index.php" ကိုဖယ်ရှားပါ
$request_uri = str_replace('/index.php', '', $request_uri);

// Query string ဖယ်ရှားပါ
$request_uri = strtok($request_uri, '?');

// /m-tube/public/ ကိုဖယ်ရှားပါ
$base_dir = dirname($_SERVER['SCRIPT_NAME']);
if (strpos($request_uri, $base_dir) === 0) {
    $request_uri = substr($request_uri, strlen($base_dir));
}

// / ကနေစရင် ဖယ်ရှားပါ
$request_uri = ltrim($request_uri, '/');

// ဘာမှမရှိရင် home လုပ်ပါ
if (empty($request_uri)) {
    $request_uri = 'home/index';
}

// Router အတွက်သိမ်းပါ
$_GET['url'] = $request_uri;

// 4. Debug info (အလုပ်လုပ်ပြီးရင် ဖျက်ပါ)


// 5. App စပါ
try {
    $app = new App\Core\App();
} catch (Exception $e) {
    die('<h2>Error</h2><p>' . $e->getMessage() . '</p>');
}
?>