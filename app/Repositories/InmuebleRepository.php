<?php

namespace App\Repositories;

use App\Models\Inmueble;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class InmuebleRepository
 * @package App\Repositories
 * @version September 13, 2018, 11:07 pm UTC
 *
 * @method Inmueble findWithoutFail($id, $columns = ['*'])
 * @method Inmueble find($id, $columns = ['*'])
 * @method Inmueble first($columns = ['*'])
*/
class InmuebleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nombre',
        'Direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Inmueble::class;
    }
}
