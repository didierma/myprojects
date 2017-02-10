<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Legalization_file
 * @package App\Models
 * @version February 9, 2017, 3:54 pm COT
 */
class Legalization_file extends Model
{
    use SoftDeletes;

    public $table = 'legalization_files';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'legalization_id',
        'name',
        'original_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'legalization_id' => 'integer',
        'name' => 'string',
        'original_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
