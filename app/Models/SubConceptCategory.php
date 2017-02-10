<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SubConceptCategory
 * @package App\Models
 * @version February 8, 2017, 3:35 pm UTC
 */
class SubConceptCategory extends Model
{
    use SoftDeletes;

    public $table = 'sub_concept_categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'sub_concept_id',
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
        'sub_concept_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function sub_concept(){
        return $this->hasOne('App\Models\SubConcept','id','sub_concept_id');
    }
    
}
