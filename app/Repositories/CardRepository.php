<?php

namespace App\Repositories;

use App\Models\Card;
use InfyOm\Generator\Common\BaseRepository;

class CardRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Card::class;
    }
}
