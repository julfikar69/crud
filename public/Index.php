<?php
session_start();

date_default_timezone_set("Asia/Jakarta");

use Application\Core\App;

define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', ROOT_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR);
define('CORE_PATH', ROOT_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Core'  . DIRECTORY_SEPARATOR);
define('MODEL_PATH', ROOT_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Model'  . DIRECTORY_SEPARATOR);
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'pendataan_keuangan');
define('BASE_URL', "http://" . $_SERVER['HTTP_HOST'] . '/crud/public');
define('TEMPLATE_PATH','templates');

spl_autoload_register(function ($className) {

    $file = ROOT_PATH . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)){
        require_once $file;
    }

});

$app = new App;
