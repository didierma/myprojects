<?php

namespace App\Repositories;

use App\Models\Approver;
use InfyOm\Generator\Common\BaseRepository;

class ApproverRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'active',
        'user_id',
        'rol_id',
        'level',
        'project_id',
        'zone_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Approver::class;
    }
}
