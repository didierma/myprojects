<?php

namespace App\Repositories;

use App\Models\Recharge;
use InfyOm\Generator\Common\BaseRepository;

class RechargeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'project_id',
        'source_card',
        'destination_card',
        'beneficiary',
        'amount',
        'transaction_type',
        'depositor'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Recharge::class;
    }
}
