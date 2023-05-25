<?php



define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('CONTROLLER_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR);
define('CORE_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'Core'  . DIRECTORY_SEPARATOR);
define('MODEL_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'Model'  . DIRECTORY_SEPARATOR);

function getClass($path){
    require_once $path;
}

spl_autoload_register(function ($className) {
    if (file_exists(CONTROLLER_PATH . $className . ".php")) {
        getClass(CONTROLLER_PATH . $className . ".php");
    }elseif (file_exists(CORE_PATH . $className . ".php")) {
        getClass(CORE_PATH . $className . ".php");
    }
});