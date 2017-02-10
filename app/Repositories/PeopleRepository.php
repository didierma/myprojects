<?php

namespace App\Repositories;

use App\Models\People;
use InfyOm\Generator\Common\BaseRepository;

class PeopleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'colombian_id',
        'first_name',
        'last_name',
        'email',
        'serdan_id',
        'immediate_boss',
        'admission_date',
        'retirement_date',
        'customer_id',
        'position_contract_id',
        'real_rol_id',
        'area_id',
        'workplace_id',
        'deparment_id',
        'phone1',
        'phone2',
        'corporate_line',
        'base_recharge',
        'photo',
        'username',
        'password',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return People::class;
    }
}
