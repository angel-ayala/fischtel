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
    protected $table = 'Operador';
    
    /**
     * The primary key for table.
     *
     * @var string
     */
    protected $primaryKey = 'id_operador';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'representante_legal', 'estado'
    ];
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * Elementos del operador
     */
    public function elementos()
    {
//         return $this->hasOne('Lavtax\GiroEmpresa', 'id', 'id_giro');
        return $this->hasMany('App\Elemento', 'id_proveedor', 'id_proveedor');
    }
}
