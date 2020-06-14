<?php

namespace App;

use Illuminate\Database\Eloquent\Model;  //Abstract model for extending
use Illuminate\Support\Facades\DB;  //Database facade

class Review extends Model
{
    protected $fillable = [  //Create the array for let the Mass Assignment
        'author_name',
        'author_surname',
        'key',
        'time_spent',
        'image',
        'price',
        'timings_rating',
        'quality_rating',
        'sociability_rating',
        'recommendation',
        'comment'
    ];

    public static function getAll(string $key)
    {
        $reviews = DB::table('reviews')->where('key', '=', $key)->oldest()->get();
        return $reviews;
    }

    public static function count(string $key)
    {
        $reviews_count = DB::table('userkeys')->where('hash', '=', $key)->select('reviews_count')->get()[0]->reviews_count;
        return $reviews_count;
    }

    public function getMyKey()  //get the key by an object of the class
    {
        return $this->key;
    }
}
