<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'icons', 'category_id', 'slug'];


    public function getSubCategory()
    {
        return $this->hasMany('App\Models\Category');
    }

    public function getParrentCategory()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function scopeMainCategory($query)
    {
        return $query->whereCategory_id(0);
//        return $query->where('category_id',0);
    }

    public function getAdvertising()
    {
        return $this->hasMany('App\Models\Advertising');
    }





}



