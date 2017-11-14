<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CuocThiTepDinhKem
 * @package App\Models
 * @version November 13, 2017, 3:16 pm UTC
 */
class CuocThiTepDinhKem extends Model
{
    use SoftDeletes;

    public $table = 'cuoc_thi_tep_dinh_kems';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cuocthi_id',
        'tentep',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cuocthi_id' => 'integer',
        'tentep' => 'string',
        'url' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tentep' => 'max:255',
        'url' => 'required'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function cuocThi()
    {
        return $this->belongsTo(\App\Models\CuocThi::class, 'cuocthi_id', 'id');
    }




}
