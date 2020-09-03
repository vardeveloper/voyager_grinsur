<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;
//use TCG\Voyager\Models\Category;

class Property extends Model
{
    use Resizable;

    protected $fillable = [
        'name',
        'slug',
        'location',
        'description',
        'video',
        'area',
        'price',
        'type',
        'condition',
        'images',
        'highlight',
        'status',
    ];

    /*public function categories()
    {
        return $this->belongsToMany(Category::class);
    }*/

}
