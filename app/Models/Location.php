<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $flillable = [
        'refrence','nom','prenoms','email','telephone','agence','nombre_jour',
    ];
}
