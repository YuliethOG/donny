<?php
namespace App\Models;
use App\Http\Requests\MedicamentosCreateRequest;
use App\Http\Requests\MedicamentosEditRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicamentos extends Model
{
    protected $fillable =
    [
    
    'Nombre',
    'Categorias',
    ];

    use HasFactory;
}

 
