<?php

namespace App\Repositories;

use App\Models\SubConcept;
use InfyOm\Generator\Common\BaseRepository;

class SubConceptRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'concept_id',
        'name',
        'active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SubConcept::class;
    }
}
