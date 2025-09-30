<?php
declare(strict_types =1);
class Movie {

    private int $id;
    private string $name;
    private int $duration;
    private $description;

    public function __construct($id, $name, $duration, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
        $this->description = $description;
    }

    // Getters
    public function getId():int {
        return $this->id;
    }

    public function getName():string {
        return $this->name;
    }

    public function getDuration():int {
        return $this->duration;
    }

    public function getDescription():string {
        return $this->description;
    }


    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setDuration($duration) {
        $this->duration = $duration;
    }
    
 

	public function setDescription($description) {
		$this->description = $description;
	}

    // Mostrar ficha
    public function showCard():string{
        return " {$this->name} - {$this->duration} - {$this->description} ";
    }
}
