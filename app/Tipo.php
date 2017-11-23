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
    protected $table = 'Tipo';
    
    /**
     * The prima key for table.
     *
     * @var string
     */
    protected $primaryKey = 'id_tipo';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'cantidad_atributos'
    ];
}
