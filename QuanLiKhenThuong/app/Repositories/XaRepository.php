<?php

namespace App\Repositories;

use App\Models\Xa;
use BloomGoo\Generator\Common\BaseRepository;

class XaRepository extends BaseRepository
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
        return Xa::class;
    }
}
