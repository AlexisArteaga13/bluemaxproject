<?php

namespace bluemax;

use Illuminate\Database\Eloquent\Model;

class SeccionNosotros extends Model
{
    //
    protected $table='seccion_nosotros';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'titulo',
        'descripcion',
        'imagen',
        'icono'
        

    ];
}
