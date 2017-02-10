<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubConcept
 * @package App\Models
 * @version February 8, 2017, 3:23 pm UTC
 */
class SubConcept extends Model
{
    use SoftDeletes;

    public $table = 'sub_concepts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'concept_id',
        'name',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'concept_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function concept(){
        return $this->hasOne('App\Models\Concept','id','concept_id');
    }

    
}
