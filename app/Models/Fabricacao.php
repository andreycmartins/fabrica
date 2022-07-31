<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricacao extends Model
{
    protected $table = "fabricacao";

    protected $fillable = [
        'name',
        'portas',
        'litragem',
        'tipo_veiculo',
        'tipo_motor',
        'tipo_rodas',
        'cor',
    ];
}
