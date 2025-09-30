<?php
declare(strict_types =1);
class user{

    private String $name;
    private String $email;
    private String $password;
    
    public function __construct(array $data){

        $this->name['name']
        $this->mail['email']
        $this->password = ['password']
    }
    /**
     * @param $name
     */
    public function setName($name){
        $this->name = $name;
    }

    /**
     * @param $mail
     */
    public function setMail($mail){
        $this->mail = $mail;
    }
    /**
     * @param $password
     */
    public function setPassword($password){
        $this->password = $password;
    }

    public function getName():String {
        return $this->name;
    }

    public function getMail():String{
        return $this->mail;
    }

    public function getPassword():String{
        return $this->password;
    }

     public function showCard():void {
        echo " {$this->name} - {$this->mail} - {$this->password}";
    }


    function register(){

        $conexion = new Conection();
        $pdo = $conexion-> getPdo();
        $sql = `INSERT INTO User($this->name $this->mail $this->password)
        VALUES(?, ?, ?)`;
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->name, $this->mail, $this->password]);
    }

    function deleteUserById($id){

        $conection = new Conection();
        $pdo = $conection-> getPdo();
        $sql = `DELETE FROM User WHERE id = $id`;
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->$id]);
    }
}