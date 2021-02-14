<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Rinvex\Bookings\Models\BookableAvailability;
use Rinvex\Bookings\Models\BookableRate;
use Rinvex\Bookings\Traits\Bookable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

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
class Service extends Model implements HasMedia
{
    use SoftDeletes;

    use HasFactory, Bookable, InteractsWithMedia;

    public $table = 'services';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at', 'start_date', 'end_date'];

    public const STATUS_ACTIVE = "active";
    public const STATUS_INACTIVE = "inactive";
    public const STATUSES = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE
    ];



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
        'real_price',
        'end_date',
        'start_date',
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
        'employee_id' => 'nullable',
        'status' => 'required|string',
        'description' => 'nullable',
        'slug' => 'required|string|max:255',
        'discount' => 'required|string|max:255',
        'discount_type' => 'required|string',
        'time_required' => 'nullable|integer',
        'time_required_type' => 'nullable|string',
        'dateRange' => "required|string",
        'image' =>  'nullable|image|mimes:jpeg,jpg,png,gif|max:10000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


    protected $appends = ["discount_format", 'interval', 'interval_date_string', 'interval_start_date', 'interval_end_date'];

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


    public function getDiscountFormatAttribute()
    {
        return $this->discount . " " . ($this->discount_type == "Percent" ? " % " : " Fixed ");
    }

    public function getIntervalAttribute()
    {
        return $this->time_required . " " . ($this->time_required_type);
    }


    public function getIntervalDateStringAttribute()
    {
        $start =  $this->interval_start_date;
        $end   =  $this->interval_end_date;

        return $start->format("l M-Y") . " - " . $end->format("l M-Y");
    }

    public function getIntervalStartDateAttribute()
    {
        return  $this->start_date;
    }


    public function getIntervalEndDateAttribute()
    {
        $start =  $this->interval_start_date;
        switch (strtolower($this->time_required_type)) {
            case 'days':
                $end = $start->addDays($this->time_required);
                break;

            case 'weeks':
                $end = $start->addWeeks($this->time_required);
                break;
            case 'months':
                $end = $start->addMonths($this->time_required);
                break;

            default:
                $end = $start->addDays($this->time_required);
                break;
        }

        return $end;
    }


    public function getBaseCostAttribute()
    {
        return 0;
    }

    public function getUnitCostAttribute()
    {
        return (float) $this->price;
    }

    public static function htmlSelectIdName()
    {
        return self::query()->select("id", "name")->pluck("name", "id");
    }
}
