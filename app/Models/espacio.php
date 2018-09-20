<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class espacio
 * @package App\Models
 * @version September 17, 2018, 7:33 pm UTC
 *
 * @property string Nombre
 * @property string Descripcion
 * @property boolean Estatus
 */
class espacio extends Model
{
    use SoftDeletes;

    public $table = 'espacios';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


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
        
    ];

    
}
