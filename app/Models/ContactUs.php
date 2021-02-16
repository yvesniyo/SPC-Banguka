<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ContactUs
 * @package App\Models
 * @version February 16, 2021, 7:27 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $details
 */
class ContactUs extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'contactuses';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'phone',
        'details'
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
        'phone' => 'string',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:13|max:13',
        'details' => 'required'
    ];
}
