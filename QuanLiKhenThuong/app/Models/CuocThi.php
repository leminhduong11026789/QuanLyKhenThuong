<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CuocThi
 * @package App\Models
 * @version November 13, 2017, 3:15 pm UTC
 */
class CuocThi extends Model
{
    use SoftDeletes;

    public $table = 'cuoc_this';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ten',
        'thoihan_thamgia',
        'loaihinh',
        'bantochuc',
        'batbuoc',
        'giaithuong',
        'mota',
        'slug'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ten' => 'string',
        'loaihinh' => 'integer',
        'bantochuc' => 'integer',
        'batbuoc' => 'integer',
        'giaithuong' => 'string',
        'mota' => 'string',
        'slug' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ten' => 'required|max:255',
        'giaithuong' => 'max:255',
        'mota' => 'max:255'
    ];





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
                'source' => 'ten'
            ]
        ];
    }
}
