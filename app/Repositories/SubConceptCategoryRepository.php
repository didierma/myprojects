<?php

namespace App\Repositories;

use App\Models\SubConceptCategory;
use InfyOm\Generator\Common\BaseRepository;

class SubConceptCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'sub_concept_id',
        'name',
        'active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SubConceptCategory::class;
    }
}
