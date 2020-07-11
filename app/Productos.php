<?php

namespace bluemax;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $table='producto';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable=[
        'nombre',
        'descripcion',
        'imagen',
        'idcategoria',
           ];
}
