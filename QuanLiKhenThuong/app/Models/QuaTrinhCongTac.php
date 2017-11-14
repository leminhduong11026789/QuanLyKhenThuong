<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class QuaTrinhCongTac
 * @package App\Models
 * @version November 13, 2017, 3:14 pm UTC
 */
class QuaTrinhCongTac extends Model
{
    use SoftDeletes;

    public $table = 'qua_trinh_cong_tacs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nhanvien_id',
        'tu_ngay',
        'den_ngay',
        'congviec',
        'ghichu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nhanvien_id' => 'integer',
        'congviec' => 'string',
        'ghichu' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'congviec' => 'max:255',
        'ghichu' => 'max:500'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function nhanVien()
    {
        return $this->belongsTo(\App\Models\NhanVien::class, 'nhanvien_id', 'id');
    }




}
