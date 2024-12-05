<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    // Especifica los campos que pueden ser asignados masivamente
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'experiencia',
        'educacion',
    ];

    // Si necesitas excluir algún campo de la asignación masiva, usa $guarded
    // protected $guarded = ['_token'];  // Puedes usar esto para proteger campos como _token si es necesario.
}
