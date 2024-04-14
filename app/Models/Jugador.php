<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = 'Jugadores';

    protected $primaryKey = 'numero';

    protected $fillable = ['numero', 'nombre', 'equipo'];

    // Si la clave primaria no es 'id', debes especificarlo aquí
    protected $keyType = 'integer';

    // Si no usas timestamps, establece esto en false
    public $timestamps = false;
}
