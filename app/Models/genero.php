<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class genero
 * @package App\Models
 * @version September 12, 2018, 7:01 pm UTC
 *
 * @property string Nombre
 * @property string Descripcion
 */
class genero extends Model
{
    use SoftDeletes;

    public $table = 'generos';
    

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
    public function scopeName($query,$buscar)
    {
        return $query->where("Nombre",$buscar);
    }

    
}
