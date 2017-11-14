<?php

namespace App\Repositories;

use App\Models\CuocThiTepDinhKem;
use BloomGoo\Generator\Common\BaseRepository;

class CuocThiTepDinhKemRepository extends BaseRepository
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
        return CuocThiTepDinhKem::class;
    }
}
