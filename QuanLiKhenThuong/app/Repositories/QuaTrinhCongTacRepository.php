<?php

namespace App\Repositories;

use App\Models\QuaTrinhCongTac;
use BloomGoo\Generator\Common\BaseRepository;

class QuaTrinhCongTacRepository extends BaseRepository
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
        return QuaTrinhCongTac::class;
    }
}
