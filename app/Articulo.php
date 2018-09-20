<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'Articulos';
    //Definimos los campos que se pueden llenar con asignación masiva
    protected $fillable = ['Nombre', 'idTipo'];
    public static $rules = [
        'Nombre' => 'required|max:255',
        'TipoArticulos' => 'required|numeric|Min:1',
    ];
    public function TipoArticulos()
    {
        return $this->belongsTo(\App\Models\TipoArticulo::class, 'idTipo', 'id');
    }
}
