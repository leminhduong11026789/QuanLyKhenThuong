<?php

namespace App\Repositories;

use App\Models\NguoiThan;
use BloomGoo\Generator\Common\BaseRepository;

class NguoiThanRepository extends BaseRepository
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
        return NguoiThan::class;
    }
}
