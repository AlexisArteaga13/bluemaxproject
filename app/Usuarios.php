<?php

namespace bluemax;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table='users';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $fillable=[
        'name',
        'apellidos',
        'foto',
        'email',
        'password',

    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
