<?php

namespace App;

use Illuminate\Database\Eloquent\Model;  //Abstract model for extending
use Illuminate\Support\Facades\DB;  //Database facaded

class Review extends Model
{
    protected $fillable = [  //Create array for let the Mass Assignment
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

    public static function getAll($key)
    {
        $reviews = DB::table('reviews')->where('key', '=', $key)->oldest()->get();
        return $reviews;
    }
}
