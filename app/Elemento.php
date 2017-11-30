<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elemento extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'elementos';    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_tipo', 'id_operador', 'nombre'
        , 'numero_serie', 'elementoA', 'elementoB'
        , 'descripcion'
    ];
    
    /**
     * tipo del elemento
     */
    public function tipo()
    {
        return $this->hasOne('App\Tipo', 'id', 'id_tipo');
    }
    
    /**
     * operador del elemento
     */
    public function operador()
    {
        return $this->belongsTo('App\Operador', 'id_operador', 'id');
    }
    
    /**
     * extremo a del elemento
     */
    public function nodoA()
    {
        return $this->hasOne('App\Elemento', 'id', 'elementoA');
    }
    
    /**
     * extremo b del elemento
     */
    public function nodoB()
    {
        return $this->hasOne('App\Elemento', 'id', 'elementoB');
    }
    
}
