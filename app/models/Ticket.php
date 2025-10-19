<?php

namespace App\Model;

use app\core\Model\Model;

class Ticket extends Model {
    // Solo estos campos son permitidos
    protected array $allowedAttributes = ['id', 'user_id', 'movie_id', 'fecha_compra', 'asiento'];
}
