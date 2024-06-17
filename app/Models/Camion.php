<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;
    protected $fillable = [
         'immatriculation', 'carte_grise', 'numero_chassis', 'volume_reservoir', 'genre', 'marque'
    ];
}
