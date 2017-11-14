<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DanhHieu
 * @package App\Models
 * @version November 13, 2017, 3:17 pm UTC
 */
class DanhHieu extends Model
{
    use SoftDeletes;

    public $table = 'danh_hieus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ten',
        'loai_danhhieu',
        'sotien',
        'nam'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ten' => 'string',
        'loai_danhhieu' => 'string',
        'sotien' => 'double',
        'nam' => 'integer'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ten' => 'required|max:255'
    ];






}
