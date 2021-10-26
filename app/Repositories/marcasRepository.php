<?php

namespace App\Repositories;

use App\Models\marcas;
use App\Repositories\BaseRepository;

/**
 * Class marcasRepository
 * @package App\Repositories
 * @version October 26, 2021, 3:16 am UTC
*/

class marcasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nommarca'
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
        return marcas::class;
    }
}
