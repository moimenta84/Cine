<?php
namespace App;
class Request {

    protected array $data = [];
    protected array $server = [];

    function __construct() {
    	$this->data = array_merge($_GET,$_POST);
    	$this->server = $_SERVER;
    
    }

    //Devuelve valor de request por clave//
    public function input($key,$default = null){
        return $this -> data[$key] ?? $default;
    }
}




































