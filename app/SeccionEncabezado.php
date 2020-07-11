<?php

namespace bluemax;

use Illuminate\Database\Eloquent\Model;

class SeccionEncabezado extends Model
{
    //
    protected $table='seccion_encabezado';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'imagen',
        'posicion',
        'password',

    ];
    
}
