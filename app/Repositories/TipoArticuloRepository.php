<?php

namespace App\Repositories;

use App\Models\TipoArticulo;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoArticuloRepository
 * @package App\Repositories
 * @version September 13, 2018, 11:27 pm UTC
 *
 * @method TipoArticulo findWithoutFail($id, $columns = ['*'])
 * @method TipoArticulo find($id, $columns = ['*'])
 * @method TipoArticulo first($columns = ['*'])
*/
class TipoArticuloRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoArticulo::class;
    }
}
