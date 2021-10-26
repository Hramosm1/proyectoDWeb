<?php

namespace App\Repositories;

use App\Models\bodegas;
use App\Repositories\BaseRepository;

/**
 * Class bodegasRepository
 * @package App\Repositories
 * @version October 26, 2021, 4:00 am UTC
*/

class bodegasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombodega',
        'direccion'
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
        return bodegas::class;
    }
}
