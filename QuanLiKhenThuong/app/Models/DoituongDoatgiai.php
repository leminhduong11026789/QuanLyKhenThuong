<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DoiTuongDoatGiai
 * @package App\Models
 * @version November 13, 2017, 3:18 pm UTC
 */
class DoiTuongDoatGiai extends Model
{
    use SoftDeletes;

    public $table = 'doi_tuong_doat_giais';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'doituong',
        'ghichu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'doituong' => 'integer',
        'ghichu' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];






}
