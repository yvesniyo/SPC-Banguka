<?php

namespace App\Repositories;

use App\Models\Coupon;
use App\Repositories\BaseRepository;

/**
 * Class CouponRepository
 * @package App\Repositories
 * @version February 11, 2021, 2:11 pm UTC
*/

class CouponRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'start_date',
        'end_date',
        'amount',
        'amount_type',
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
        return Coupon::class;
    }
}
