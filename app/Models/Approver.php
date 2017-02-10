<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Approver
 * @package App\Models
 * @version February 8, 2017, 4:09 pm UTC
 */
class Approver extends Model
{
    use SoftDeletes;

    public $table = 'approvers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'active',
        'user_id',
        'rol_id',
        'level',
        'project_id',
        'zone_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'rol_id' => 'integer',
        'level' => 'integer',
        'project_id' => 'integer',
        'zone_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function user(){

    }
    
}
