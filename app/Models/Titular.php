<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    use HasFactory;

    protected $table = 'titulares';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'apellido',
        'dni',
        'domicilio'
    ];
    
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
