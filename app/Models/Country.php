<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Country extends Model
    {


        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table = 'country';

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'name',
        ];


        public function getCity()
        {
            return $this->hasMany('App\Models\City');
        }


    }