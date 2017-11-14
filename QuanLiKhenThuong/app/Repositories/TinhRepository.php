<?php

namespace App\Repositories;

use App\Models\Tinh;
use BloomGoo\Generator\Common\BaseRepository;

class TinhRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ten'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tinh::class;
    }
}
