<?php

namespace App\Repositories;

use App\Models\DoiTuongDoatGiai;
use BloomGoo\Generator\Common\BaseRepository;

class DoiTuongDoatGiaiRepository extends BaseRepository
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
        return DoiTuongDoatGiai::class;
    }
}
