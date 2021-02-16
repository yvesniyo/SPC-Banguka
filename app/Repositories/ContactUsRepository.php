<?php

namespace App\Repositories;

use App\Models\ContactUs;
use App\Repositories\BaseRepository;

/**
 * Class ContactUsRepository
 * @package App\Repositories
 * @version February 16, 2021, 7:27 pm UTC
*/

class ContactUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'details'
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
        return ContactUs::class;
    }
}
