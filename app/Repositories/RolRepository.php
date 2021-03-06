<?php

namespace App\Repositories;

use App\Models\Rol;
use InfyOm\Generator\Common\BaseRepository;

class RolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'display_name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rol::class;
    }
}
