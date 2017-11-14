<?php

namespace App\Repositories;

use App\Models\CuocThi;
use BloomGoo\Generator\Common\BaseRepository;

class CuocThiRepository extends BaseRepository
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
        return CuocThi::class;
    }
}
