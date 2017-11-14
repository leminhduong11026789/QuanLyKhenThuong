<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NguoiThan
 * @package App\Models
 * @version November 13, 2017, 3:14 pm UTC
 */
class NguoiThan extends Model
{
    use SoftDeletes;

    public $table = 'nguoi_thans';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nhanvien_id',
        'hoten',
        'ngaysinh',
        'gioitinh',
        'email',
        'dantoc',
        'tongiao',
        'so_cmnd',
        'ngaycap',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nhanvien_id' => 'integer',
        'hoten' => 'string',
        'gioitinh' => 'integer',
        'email' => 'string',
        'dantoc' => 'string',
        'tongiao' => 'string',
        'so_cmnd' => 'string',
        'slug' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'hoten' => 'required|max:255',
        'email' => 'max:255',
        'dantoc' => 'max:255',
        'tongiao' => 'max:255',
        'so_cmnd' => 'max:20'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function nhanVien()
    {
        return $this->belongsTo(\App\Models\NhanVien::class, 'nhanvien_id', 'id');
    }



    use Sluggable;

    /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'hoten'
            ]
        ];
    }
}
