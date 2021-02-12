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
class Booking extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bookable_bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'bookable_id',
        'customer_id',
        'starts_at',
        'ends_at',
        'canceled_at',
        'timezone',
        'price',
        'quantity',
        'total_paid',
        'currency',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bookable_id' => 'integer',
        'customer_id' => 'integer',
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'canceled_at' => 'datetime',
        'timezone' => 'string',
        'price' => 'decimal:2',
        'quantity' => 'integer',
        'total_paid' => 'decimal:2',
        'currency' => 'string',
        'notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'bookable_id' => 'required',
        'customer_id' => 'required',
        'starts_at' => 'nullable',
        'ends_at' => 'nullable',
        'canceled_at' => 'nullable',
        'timezone' => 'nullable|string|max:255',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'total_paid' => 'required|numeric',
        'currency' => 'required|string|max:3',
        'notes' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
