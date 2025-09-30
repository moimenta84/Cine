<?php
declare(strict_types =1);
class Ticket {
    private int $id;
    private int  $user_id;
    private int $movie_id;
    private string $fecha_compra;
    private int $asiento;

    public function __construct($id, $user_id, $movie_id, $fecha_compra, $asiento) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->movie_id = $movie_id;
        $this->fecha_compra = $fecha_compra;
        $this->asiento = $asiento;
    }

    // Getters
    public function getId():int {
        return $this->id;
    }

    public function getUserId():int {
        return $this->user_id;
    }

    public function getMovieId():int {
        return $this->movie_id;
    }

    public function getFechaCompra():string {
        return $this->fecha_compra;
    }

    public function getAsiento():int {
        return $this->asiento;
    }

    // Setters
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function setMovieId($movie_id) {
        $this->movie_id = $movie_id;
    }

    public function setFechaCompra($fecha_compra) {
        $this->fecha_compra = $fecha_compra;
    }

    public function setAsiento($asiento) {
        $this->asiento = $asiento;
    }

    // Mostrar resumen del ticket
    public function mostrarResumen():string {
        return "Ticket para película ID {$this->movie_id}, usuario ID {$this->user_id}, asiento {$this->asiento}, comprado el {$this->fecha_compra}";
    }
}
