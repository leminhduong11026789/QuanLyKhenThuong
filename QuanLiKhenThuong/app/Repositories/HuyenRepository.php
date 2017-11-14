<?php

namespace App\Repositories;

use App\Models\Huyen;
use BloomGoo\Generator\Common\BaseRepository;

class HuyenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Huyen::class;
    }
}
