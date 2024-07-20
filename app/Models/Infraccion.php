<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    use HasFactory;

    protected $table = 'infracciones';

    protected $primaryKey = 'id';

    protected $enum = [
        'tipo' => ['alta velocidad', 'doble fila','alcoholemia','falta de documentacion'],
    ];

    protected $fillable = [
        'auto_id',
        'fecha',
        'descripcion',
        'tipo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function auto()
    {
        return $this->belongsTo(Auto::class, 'auto_id');
    }

    public function getTipos()
    {
        return $this->enum['tipo'];
    }

}
