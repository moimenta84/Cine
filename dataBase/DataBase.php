<?php
namespace Core;
use Config\Config;
use PDO;
use PDOException;


class DataBase {
    private static ?PDO $conexion = null;

    //LO delaro estatico Para  Inicializar conexión solo una vez
    public static function connect(): void {
        if (self::$conexion === null) {

            $config = new Config();
            $config ->__toString();
            try {
                //LLAMO ALaclaseestatica//
                self::$conexion = new PDO(
                    $config->getDsn(),
                    $config->getDbUser(),
                    $config->getDbPassword()
                );
                self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión " . $e->getMessage());
            }
        }
    }

    // Obtener la conexión PDO
    public static function getConnection(): PDO {
        if (self::$conexion === null) {
            die("Error alinciar la base de datos");
        }
        return self::$conexion;
    }
}

