<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Rinvex\Bookings\Traits\HasBookings;

/**
 * Class Customer
 * @package App\Models
 * @version February 11, 2021, 2:20 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 */
class Customer extends Model
{
    use SoftDeletes;

    use HasFactory, HasBookings;

    public $table = 'customers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public const STATUS_ACTIVE = "active";
    public const STATUS_INACTIVE = "inactive";
    public const STATUSES = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE
    ];

    public $fillable = [
        'name',
        'email',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'phone' => 'string'
    ];

    protected $hidden = ["password"];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'string|max:255',
        'phone' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


    public static function getBookingModel(): string
    {
        return ServiceBooking::class;
    }

    public static function htmlSelectIdName()
    {
        return self::query()->select("id", "name")->pluck("name", "id");
    }
}
