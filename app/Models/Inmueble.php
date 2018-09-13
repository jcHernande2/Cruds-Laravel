<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Inmueble
 * @package App\Models
 * @version September 13, 2018, 11:07 pm UTC
 *
 * @property string Nombre
 * @property string Direccion
 */
class Inmueble extends Model
{
    use SoftDeletes;

    public $table = 'inmuebles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'Nombre',
        'Direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Nombre' => 'string',
        'Direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nombre' => 'required',
        'Direccion' => 'required'
    ];

    
}
