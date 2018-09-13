<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoInmueble
 * @package App\Models
 * @version September 13, 2018, 10:27 pm UTC
 *
 * @property string Nombre
 * @property string Descripcion
 * @property boolean Estatus
 */
class TipoInmueble extends Model
{
    use SoftDeletes;

    public $table = 'tipo_inmuebles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre',
        'Descripcion',
        'Estatus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre' => 'string',
        'Descripcion' => 'string',
        'Estatus' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required'
    ];

    
}
