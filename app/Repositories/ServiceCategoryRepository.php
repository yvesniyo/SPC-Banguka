<?php

namespace App\Repositories;

use App\Models\ServiceCategory;
use App\Repositories\BaseRepository;

/**
 * Class ServiceCategoryRepository
 * @package App\Repositories
 * @version February 11, 2021, 2:19 pm UTC
*/

class ServiceCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'status'
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
        return ServiceCategory::class;
    }
}
