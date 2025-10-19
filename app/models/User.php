<?php

declare(strict_types=1);

namespace App\Models;

use PDO;
use app\core\Model\Model;

class User extends Model {
    protected array $allowedAttributes = ['name', 'email', 'password'];
    protected static ?PDO $conexion = null;

    // Configura la conexión compartida
    public static function setConnection(PDO $pdo): void {
        self::$conexion = $pdo;
    }

    // Inserta el usuario en la base de datos
    public function register(): void {
        if (self::$conexion === null) {
            throw new \RuntimeException("No hay conexión configurada.");
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
