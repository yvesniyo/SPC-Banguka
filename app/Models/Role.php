<?php

namespace App\Models;

use  Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Role
 * @package App\Models
 * @version February 11, 2021, 2:21 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $users
 * @property string $name
 */
class Role extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'roles';

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
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'role_id');
    }

    public static function htmlSelectIdName()
    {
        return self::query()->select("id", "name")->pluck("name", "id");
    }
}
