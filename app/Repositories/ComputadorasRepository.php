<?php

namespace App\Repositories;

use App\Models\Computadoras;
use App\Repositories\BaseRepository;

/**
 * Class ComputadorasRepository
 * @package App\Repositories
 * @version October 26, 2021, 5:22 am UTC
*/

class ComputadorasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idmarca',
        'descripcion',
        'cantidad',
        'idubicacion'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Computadoras::class;
    }
}
