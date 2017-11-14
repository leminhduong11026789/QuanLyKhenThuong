<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class NhanVien
 * @package App\Models
 * @version November 13, 2017, 3:11 pm UTC
 */
class NhanVien extends Model
{
    use SoftDeletes;

    public $table = 'nhan_viens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'hoten',
        'ngaysinh',
        'tinh_id',
        'huyen_id',
        'xa_id',
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
        'user_id' => 'integer',
        'hoten' => 'string',
        'tinh_id' => 'integer',
        'huyen_id' => 'integer',
        'xa_id' => 'integer',
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
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

        /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function tinh()
    {
        return $this->belongsTo(\App\Models\Tinh::class, 'tinh_id', 'id');
    }

        /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function huyen()
    {
        return $this->belongsTo(\App\Models\Huyen::class, 'huyen_id', 'id');
    }

        /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function xa()
    {
        return $this->belongsTo(\App\Models\Xa::class, 'xa_id', 'id');
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
