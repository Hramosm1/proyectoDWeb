<?php

namespace App\Repositories;

use App\Models\refrigeradoras;
use App\Repositories\BaseRepository;

/**
 * Class refrigeradorasRepository
 * @package App\Repositories
 * @version October 26, 2021, 5:53 am UTC
*/

class refrigeradorasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idmarcas',
        'refridesc',
        'refricantidad',
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
        return refrigeradoras::class;
    }
}
