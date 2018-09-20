<?php

namespace App\Repositories;

use App\Models\espacio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class espacioRepository
 * @package App\Repositories
 * @version September 17, 2018, 7:33 pm UTC
 *
 * @method espacio findWithoutFail($id, $columns = ['*'])
 * @method espacio find($id, $columns = ['*'])
 * @method espacio first($columns = ['*'])
*/
class espacioRepository extends BaseRepository
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
        return espacio::class;
    }
}
