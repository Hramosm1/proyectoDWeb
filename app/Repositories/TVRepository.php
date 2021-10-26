<?php

namespace App\Repositories;

use App\Models\TV;
use App\Repositories\BaseRepository;

/**
 * Class TVRepository
 * @package App\Repositories
 * @version October 26, 2021, 4:47 am UTC
*/

class TVRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idmarcas',
        'tvdescripcion',
        'tvcantidad',
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
        return TV::class;
    }
}
