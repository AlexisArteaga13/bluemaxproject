<?php

namespace bluemax;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresa';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'nombre',
        'direccion',
        'telefono',
        'correo',
        'icono',

    ];
}
