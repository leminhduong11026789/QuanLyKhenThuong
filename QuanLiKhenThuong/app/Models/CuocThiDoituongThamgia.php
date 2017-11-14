<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CuocThiDoiTuongThamGia
 * @package App\Models
 * @version November 13, 2017, 5:05 pm UTC
 */
class CuocThiDoiTuongThamGia extends Model
{
    use SoftDeletes;

    public $table = 'cuoc_thi_doi_tuong_tham_gias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cuocthi_id',
        'doituongthamgia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cuocthi_id' => 'integer',
        'doituongthamgia' => 'integer'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function cuocThi()
    {
        return $this->belongsTo(\App\Models\CuocThi::class, 'cuocthi_id', 'id');
    }




}
