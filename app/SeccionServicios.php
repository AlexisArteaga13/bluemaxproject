<?php

namespace bluemax;

use Illuminate\Database\Eloquent\Model;

class SeccionServicios extends Model
{
    //
    protected $table='seccion_servicios';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'imagen',
        
        

    ];
    
}
