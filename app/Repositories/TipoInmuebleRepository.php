<?php

namespace App\Repositories;

use App\Models\TipoInmueble;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoInmuebleRepository
 * @package App\Repositories
 * @version September 13, 2018, 10:27 pm UTC
 *
 * @method TipoInmueble findWithoutFail($id, $columns = ['*'])
 * @method TipoInmueble find($id, $columns = ['*'])
 * @method TipoInmueble first($columns = ['*'])
*/
class TipoInmuebleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Descripcion',
        'Estatus'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoInmueble::class;
    }
}
