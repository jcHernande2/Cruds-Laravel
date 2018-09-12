<?php

namespace App\Repositories;

use App\Models\genero;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class generoRepository
 * @package App\Repositories
 * @version September 12, 2018, 7:01 pm UTC
 *
 * @method genero findWithoutFail($id, $columns = ['*'])
 * @method genero find($id, $columns = ['*'])
 * @method genero first($columns = ['*'])
*/
class generoRepository extends BaseRepository
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
        return genero::class;
    }
}
