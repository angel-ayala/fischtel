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
    protected $table = 'Elemento';    
    
    /**
     * The primary key for table.
     *
     * @var string
     */
    protected $primaryKey = 'id_elemento';
    
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
     * operador del elemento
     */
    public function operador()
    {
        return $this->belongsTo('App\Operador', 'id_operador', 'id_operador');
    }
}
