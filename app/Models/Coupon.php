<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Coupon
 * @package App\Models
 * @version February 11, 2021, 2:11 pm UTC
 *
 * @property string $code
 * @property string $start_date
 * @property string $end_date
 * @property string $amount
 * @property string $amount_type
 * @property string $status
 */
class Coupon extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'coupons';

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
        'code',
        'start_date',
        'end_date',
        'amount',
        'amount_type',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'amount' => 'string',
        'amount_type' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required|string|max:255',
        'start_date' => 'required',
        'end_date' => 'required',
        'amount' => 'required|string|max:255',
        'amount_type' => 'required|string',
        'status' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];
}
