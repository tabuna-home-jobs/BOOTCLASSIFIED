<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertising extends Model
{


    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'advertising';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'type',
        'title',
        'description',
        'price',
        'name',
        'email',
        'phone',
        'country_id',
        'city_id',
        'user_id',
        'visits',
    ];


    public function getCategory()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function getImages()
    {
        return $this->hasMany('App\Models\Images');
    }

    public function getUser()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function getCity()
    {
        return $this->belongsTo(City::class, 'city_id');
    }



    public function scopePopularCategory($query)
    {
        return $query
            ->join('category', 'category.id', '=', 'advertising.id')
            ->selectRaw('category.name, category.slug ,advertising.category_id, count(advertising.id) as count')
            ->groupBy('category_id')
            ->orderBy('count', 'desc')
            ->limit(10);
    }





}



