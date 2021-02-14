<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Booking
 * @package App\Models
 * @version February 12, 2021, 12:20 am UTC
 *
 * @property integer $bookable_id
 * @property integer $customer_id
 * @property string|\Carbon\Carbon $starts_at
 * @property string|\Carbon\Carbon $ends_at
 * @property string|\Carbon\Carbon $canceled_at
 * @property string $timezone
 * @property number $price
 * @property integer $quantity
 * @property number $total_paid
 * @property string $currency
 * @property string $notes
 */
class Booking extends ServiceBooking
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bookable_bookings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    public const STATUS_PENDING = "pending";
    public const STATUS_COMPLETED = "completed";
    public const STATUS_INPROGRESS = "inprogress";
    public const STATUS_CANCELLED = "cancelled";
    public const STATUSES = [
        self::STATUS_PENDING,
        self::STATUS_CANCELLED,
        self::STATUS_COMPLETED,
        self::STATUS_INPROGRESS
    ];





    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'bookable_id',
        'bookable_type',
        'customer_id',
        'customer_type',
        'starts_at',
        'ends_at',
        'price',
        'quantity',
        'total_paid',
        'currency',
        'formula',
        'canceled_at',
        'options',
        'notes',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'bookable_id' => 'integer',
        'bookable_type' => 'string',
        'customer_id' => 'integer',
        'customer_type' => 'string',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'price' => 'float',
        'quantity' => 'integer',
        'total_paid' => 'float',
        'currency' => 'string',
        'formula' => 'json',
        'canceled_at' => 'datetime',
        'options' => 'array',
        'notes' => 'string',
    ];

    /**
     * {@inheritdoc}
     */
    protected $observables = [
        'validating',
        'validated',
    ];

    /**
     * The default rules that the model will validate against.
     *
     * @var array
     */
    protected $rules = [
        'bookable_id' => 'required|integer',
        'bookable_type' => 'required|string|strip_tags|max:150',
        'customer_id' => 'required|integer',
        'customer_type' => 'required|string|strip_tags|max:150',
        'starts_at' => 'required|date',
        'ends_at' => 'required|date',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'total_paid' => 'required|numeric',
        'currency' => 'required|alpha|size:3',
        'formula' => 'nullable|array',
        'canceled_at' => 'nullable|date',
        'options' => 'nullable|array',
        'notes' => 'nullable|string|strip_tags|max:32768',
    ];
}
