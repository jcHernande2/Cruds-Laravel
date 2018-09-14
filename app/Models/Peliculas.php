<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Peliculas
 * @package App\Models
 * @version September 14, 2018, 3:18 pm UTC
 *
 * @property \App\Models\tipo_articulos tipoArticulos
 * @property string archivo
 * @property string titulo
 * @property string descripcion
 * @property integer idTipoArticulo
 */
class Peliculas extends Model
{
    use SoftDeletes;

    public $table = 'peliculas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'archivo',
        'titulo',
        'descripcion',
        'idTipoArticulo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'archivo' => 'string',
        'titulo' => 'string',
        'descripcion' => 'string',
        'idTipoArticulo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'archivo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tipoArticulos()
    {
        return $this->belongsTo(\App\Models\TipoArticulo::class, 'idTipoArticulo', 'id');
    }
}
