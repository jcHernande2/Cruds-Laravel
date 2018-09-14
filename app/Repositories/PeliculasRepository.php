<?php

namespace App\Repositories;

use App\Models\Peliculas;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PeliculasRepository
 * @package App\Repositories
 * @version September 14, 2018, 3:18 pm UTC
 *
 * @method Peliculas findWithoutFail($id, $columns = ['*'])
 * @method Peliculas find($id, $columns = ['*'])
 * @method Peliculas first($columns = ['*'])
*/
class PeliculasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'archivo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Peliculas::class;
    }
}
