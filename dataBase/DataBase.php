<?php
require_once __DIR__ . '/../Config.php';

class DataBase {
    //Instancia pdo//
    public PDO $conection;
    function __construct(Config $config) {

    	try{
            //Instancio pdo pasandole el config//
            $this->conection = new PDO(
                "mysql : dbHost={$config -> dbHost},dbName={$config -> dbName}
                ,dbPassword{$config -> dbPassword},dbUser{$config -> dbUser}"
            );
            echo('conectado');
            $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die("error de conexion ".$e->getMessage());
        }
    }
}
?>