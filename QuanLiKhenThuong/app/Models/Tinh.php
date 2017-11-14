<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tinh
 * @package App\Models
 * @version November 13, 2017, 2:43 pm UTC
 */
class Tinh extends Model
{
    use SoftDeletes;

    public $table = 'tinhs';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ten',
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
        'mota' => 'string',
        'slug' => 'string'
    ];

     /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ten' => 'required|max:255'
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
