<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $enum = [
        'tipo' => ['standar', 'suv', 'camioneta', 'camion'],
    ];

    protected $fillable = [
        'marca',
        'modelo',
        'patente',
        'tipo',
        'titular_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function titular()
    {
        return $this->belongsTo(Titular::class, 'titular_id');
    }

    public function getTipos()
    {
        return $this->enum['tipo'];
    }

}
