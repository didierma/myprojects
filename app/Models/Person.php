<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Person
 * @package App\Models
 * @version February 7, 2017, 4:53 pm UTC
 */
class Person extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'colombian_id',
        'first_name',
        'last_name',
        'email',
        'serdan_id',
        'immediate_boss',
        'admission_date',
        'retirement_date',
        'customer_id',
        'position_contract_id',
        'real_rol_id',
        'area_id',
        'workplace_id',
        'deparment_id',
        'phone1',
        'phone2',
        'corporate_line',
        'base_recharge',
        'photo',
        'username',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'colombian_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'immediate_boss' => 'integer',
        'admission_date' => 'date',
        'retirement_date' => 'date',
        'customer_id' => 'integer',
        'position_contract_id' => 'integer',
        'real_rol_id' => 'integer',
        'area_id' => 'integer',
        'workplace_id' => 'integer',
        'deparment_id' => 'integer',
        'phone1' => 'string',
        'phone2' => 'string',
        'corporate_line' => 'string',
        'base_recharge' => 'float',
        'photo' => 'string',
        'username' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'role_user');
    }

    public function setPasswordAttribute($value){

        if(! empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }
}
