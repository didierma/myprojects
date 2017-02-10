<?php

namespace App\Repositories;

use App\Models\Concept;
use InfyOm\Generator\Common\BaseRepository;

class ConceptRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'actived'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Concept::class;
    }
}
