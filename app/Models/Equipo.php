<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    protected $table = 'equipos';

    protected $fillable = [
        'arq',
        'def1',
        'def2',
        'def3',
        'def4',
        'mc1',
        'mc2',
        'mc3',
        'del1',
        'del2',
        'del3',
    ];
}
