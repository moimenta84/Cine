<?php

require_once __DIR__ . '/../Config.php';
require_once __DIR__ . '/../Core/DataBase.php';

//instancio la conexion//
$config = new Config();
$db = new DataBase($config);

$page = $_GET['page'] ?? 'home'; // valor por defecto: home

switch ($page) {
    case 'home':
        require_once '../app/views/home.php';
        break;

    case 'login':
        require_once '../app/views/login.php';
        break;

    case 'register':
          require_once __DIR__ . '/../app/views/registerView.php';
        break;

    default:
        echo "Página no encontrada";
        break;
}




$page = $_GET['page'] ?? 'home'; // valor por defecto: home

switch ($page) {
    case 'home':
        require_once '../app/views/home.php';
        break;

    case 'login':
        require_once '../app/views/login.php';
        break;

    case 'register':
          require_once __DIR__ . '/../app/views/registerView.php';
        break;

    default:
        echo "Página no encontrada";
        break;
}
