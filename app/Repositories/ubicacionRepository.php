<?php

namespace App\Repositories;

use App\Models\ubicacion;
use App\Repositories\BaseRepository;

/**
 * Class ubicacionRepository
 * @package App\Repositories
 * @version October 26, 2021, 4:06 am UTC
*/

class ubicacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomubicacion',
        'idbodega'
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
        return ubicacion::class;
    }
}
