<?php

namespace App\Repositories;

use App\Models\NhanVien;
use BloomGoo\Generator\Common\BaseRepository;

class NhanVienRepository extends BaseRepository
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
        return NhanVien::class;
    }
}
