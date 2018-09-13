<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoArticulo
 * @package App\Models
 * @version September 13, 2018, 11:27 pm UTC
 *
 * @property string Nombre
 * @property string Descripcion
 */
class TipoArticulo extends Model
{
    use SoftDeletes;

    public $table = 'tipo_articulos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre',
        'Descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre' => 'string',
        'Descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Descripcion' => 'required'
    ];

    
}
