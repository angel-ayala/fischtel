<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    /**
     * The table name.
     *
     * @var string
     */
    protected $table = 'operadores';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'representante_legal', 'estado'
    ];
    
    /**
     * Elementos del operador
     */
    public function elementos()
    {
        return $this->hasMany('App\Elemento', 'id_proveedor', 'id');
    }
}
