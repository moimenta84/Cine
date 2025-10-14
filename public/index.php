<?php
require_once __DIR__ . '/../config/Config.php';
require_once __DIR__ . '/../dataBase/DataBase.php';
require_once __DIR__.'/../app/models/User.php';
require_once __DIR__.'/../app/Request.php';
require_once __DIR__ .'/../app/core/http/controllers/UserController.php';

use app\Request;
use app\core\Http\controllers\UserController;
use app\models\User;

use Core\DataBase;
// 1. Inicializar la conexión con tu clase DataBase
DataBase::connect();

// 2. Pasar esa conexión al modelo User
User::setConnection(DataBase::getConnection());
$request = new Request();


$action = $request->input('action','home');

switch ($action) {
    case 'home':
        include __DIR__.'../../resources/views/home.php';
        break;

    case 'login':
        require_once '../resources/views/login.php';
        break;

    case 'register':
         
        // Procesar el formulario
        $controller = new UserController($request);
        $controller->store(); 
        break;

    default:
     include __DIR__.'../../resources/views/home.php';
    break;

        break;
}


