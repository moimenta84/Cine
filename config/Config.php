<?php
namespace config;
class Config {

    public string $dbName;
    public string $dbUser;
    public string $dbPassword;
    public string $dbHost;


    function __construct() {

    	$this->dbName = 'cine';
    	$this->dbUser = 'root';
    	$this->dbPassword = '';
    	$this->dbHost = 'localhost';
    
    }

    /**
    * @return string
    */
    public function getDbName(): string {
    	return $this->dbName;
    }

    /**
    * @param string $dbName
    */
    public function setDbName(string $dbName): void {
    	$this->dbName = $dbName;
    }

    /**
    * @return string
    */
    public function getDbUser(): string {
    	return $this->dbUser;
    }

    /**
    * @param string $dbUser
    */
    public function setDbUser(string $dbUser): void {
    	$this->dbUser = $dbUser;
    }

    /**
    * @return string
    */
    public function getDbPassword(): string {
    	return $this->dbPassword;
    }

    /**
    * @param string $dbPassword
    */
    public function setDbPassword(string $dbPassword): void {
    	$this->dbPassword = $dbPassword;
    }

    /**
    * @return string
    */
    public function getDbHost(): string {
    	return $this->dbHost;
    }

    /**
    * @param string $dbHost
    */
    public function setDbHost(string $dbHost): void {
    	$this->dbHost = $dbHost;
    }

    public function getDsn(): string {
    return "mysql:host={$this->dbHost};dbname={$this->dbName};charset=utf8";
}

    

    /**
    * @return string
    */
    public function __toString(): string {
    	return "DbName: {$this->dbName}, DbUser: {$this->dbUser}, DbPassword: {$this->dbPassword}, DbHost: {$this->dbHost}";
    }
}
