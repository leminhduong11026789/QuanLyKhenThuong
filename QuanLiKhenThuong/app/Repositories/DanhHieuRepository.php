<?php

namespace App\Repositories;

use App\Models\DanhHieu;
use BloomGoo\Generator\Common\BaseRepository;

class DanhHieuRepository extends BaseRepository
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
        return DanhHieu::class;
    }
}
