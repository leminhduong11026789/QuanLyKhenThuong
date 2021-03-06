<?php

namespace App\Models;

use Eloquent as Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Huyen
 * @package App\Models
 * @version November 13, 2017, 2:49 pm UTC
 */
class Huyen extends Model
{
    use SoftDeletes;

    public $table = 'huyens';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'ten',
        'tinh_id',
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
        'tinh_id' => 'integer',
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

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function tinh()
    {
        return $this->belongsTo(\App\Models\Tinh::class, 'tinh_id', 'id');
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
                'source' => 'ten'
            ]
        ];
    }
}
