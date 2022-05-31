<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formula_detalles extends Model
{
    protected $fillable =
    [
    'formula_id',
    'cantidad',
    'medicamento',
    'hora'
    ];

    use HasFactory;
}
