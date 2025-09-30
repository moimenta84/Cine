<?php
declare(strict_types =1);
class user{
    private String $name;
    private String $email;
    private String $password;
    private Pdo $conexion;
    
    public function __construct(array $data = [],Pdo $conexion){
        $this ->conexion = $conexion;
        $this-> name = $data['name'];
        $this-> email = $data['email'];
        $this->password = $data['password'];
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
    public function setMail($email){
        $this->email = $email;
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
        return $this->email;
    }

    public function getPassword():String{
        return $this->password;
    }

     public function showCard():void {
        echo " {$this->name} - {$this->email} - {$this->password}";
    }

    function register(){
        $sql = `INSERT INTO User($this->name $this->email $this->password)
        VALUES(?, ?, ?)`;
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$this->name, $this->email, $this->password]);
    }

    function deleteUserById($id){
        $sql = `DELETE FROM User WHERE id = $id`;
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute([$this->$id]);
    }
}