<?php

namespace App\Repositories;

use App\Models\Zone;
use InfyOm\Generator\Common\BaseRepository;

class ZoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'zone',
        'active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Zone::class;
    }
}
