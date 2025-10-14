<?php

namespace App\Core\Models;

use Exception;

class Model {
    // Lista de propiedades que pueden asignarse
    protected array $allowedProperties = [];

    // Contenedor interno de datos
    protected array $data = [];

    // Getter mágico
    public function __get($name) {
        if (in_array($name, $this->allowedProperties)) {
            return $this->data[$name] ?? null;
        }
        throw new Exception("Propiedad no válida: $name");
    }

    // Setter mágico
    public function __set($property, $value) {
        if (in_array($property, $this->allowedProperties)) {
            $this->data[$property] = $value;
            return; // evita que se ejecute el throw
        }
        throw new Exception("Propiedad no válida: $property");
    }

    // Método estático para crear una instancia
    public static function create(array $data): static {
        $instance = new static(); // crea instancia vacía

        // Recorre los datos y asigna solo los permitidos
        foreach ($data as $key => $value) {
            if (in_array($key, $instance->allowedProperties)) {
                $instance->$key = $value; // usa el __set
            }
        }

        return $instance; // devuelve la instancia configurada
    }
}
