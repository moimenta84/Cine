<?php
declare(strict_types =1);
namespace App\Models;
require_once __DIR__ . '/../../dataBase/DataBase.php';
use app\config\Config;
use PDO;


class user{
 
    private  static ? Pdo $conexion = null;
    private array $data;
    
    
   // Configurar la conexión compartida
    public static function setConnection(PDO $pdo): void {
        self::$conexion = $pdo;
    }

    // Constructor para los datos de cada usuario
    public function __construct(array $data = []) {
        $this->data = $data;
    }

    // Insertar en la BD usando la conexión estática
    public function register(): void {
        if (self::$conexion === null) {
            die('Error en la configuracion');
        }

        $stmt = self::$conexion->prepare(
            "INSERT INTO user (name, email, password) VALUES (?, ?, ?)"
        );

        $stmt->execute([
            $this->data['name'] ?? '',
            $this->data['email'] ?? '',
            $this->data['password'] ?? ''
        ]);
    }
}