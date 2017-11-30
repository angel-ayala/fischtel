<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'tipos';
        
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'cantidad_atributos'
    ];
}
