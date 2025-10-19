<?php

namespace App\Models;

use app\core\Model\Model;

class Movie extends Model {
    // Solo se permiten estos campos
    protected array $allowedAttributes = ['id', 'name', 'duration', 'description'];
}
