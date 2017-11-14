<?php

namespace App\Repositories;

use App\Models\CuocThiDoiTuongThamGia;
use BloomGoo\Generator\Common\BaseRepository;

class CuocThiDoiTuongThamGiaRepository extends BaseRepository
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
        return CuocThiDoiTuongThamGia::class;
    }
}
