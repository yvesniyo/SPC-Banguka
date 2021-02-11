<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Rinvex\Bookings\Models\BookableAvailability;
use Rinvex\Bookings\Models\BookableRate;
use Rinvex\Bookings\Traits\Bookable;

/**
 * Class Service
 * @package App\Models
 * @version February 11, 2021, 2:15 pm UTC
 *
 * @property \App\Models\User $employee
 * @property \App\Models\ServiceCategory $serviceCategory
 * @property string $name
 * @property integer $service_category_id
 * @property string $price
 * @property integer $employee_id
 * @property string $status
 * @property string $description
 * @property string $slug
 * @property string $discount
 * @property string $discount_type
 * @property integer $time_required
 * @property string $time_required_type
 */
class Service extends Model
{
    use SoftDeletes;

    use HasFactory, Bookable;

    public $table = 'services';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'service_category_id',
        'price',
        'employee_id',
        'status',
        'description',
        'slug',
        'discount',
        'discount_type',
        'time_required',
        'time_required_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'service_category_id' => 'integer',
        'price' => 'string',
        'employee_id' => 'integer',
        'status' => 'string',
        'description' => 'string',
        'slug' => 'string',
        'discount' => 'string',
        'discount_type' => 'string',
        'time_required' => 'integer',
        'time_required_type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'service_category_id' => 'required',
        'price' => 'required|string|max:255',
        'employee_id' => 'required',
        'status' => 'required|string',
        'description' => 'required|string',
        'slug' => 'required|string|max:255',
        'discount' => 'required|string|max:255',
        'discount_type' => 'required|string',
        'time_required' => 'required|integer',
        'time_required_type' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function employee()
    {
        return $this->belongsTo(\App\Models\User::class, 'employee_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function serviceCategory()
    {
        return $this->belongsTo(\App\Models\ServiceCategory::class, 'service_category_id');
    }

    public static function getBookingModel(): string
    {
        return ServiceBooking::class;
    }

    public static function getAvailabilityModel(): string
    {
        return BookableAvailability::class;
    }


    public static function getRateModel(): string
    {
        return BookableRate::class;
    }
}
