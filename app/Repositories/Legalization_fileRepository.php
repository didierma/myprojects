<?php

namespace App\Repositories;

use App\Models\Legalization_file;
use InfyOm\Generator\Common\BaseRepository;

class Legalization_fileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'legalization_id',
        'name',
        'original_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Legalization_file::class;
    }
}
