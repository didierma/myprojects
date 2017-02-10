<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Deposit
 * @package App\Models
 * @version February 7, 2017, 4:39 pm UTC
 */
class Deposit extends Model
{
    use SoftDeletes;

    public $table = 'deposits';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'project_id',
        'source_card',
        'destination_card',
        'beneficiary',
        'amount',
        'transaction_type',
        'depositor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'project_id' => 'integer',
        'source_card' => 'integer',
        'destination_card' => 'integer',
        'beneficiary' => 'integer',
        'amount' => 'float',
        'transaction_type' => 'integer',
        'depositor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
