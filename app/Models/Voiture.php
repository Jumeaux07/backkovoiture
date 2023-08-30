<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation','description','model','type_boite','kilometrage','disponible','marque_id','formule_id','location_id'
    ];
}
