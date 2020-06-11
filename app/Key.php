<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $table = 'userkeys';
    protected $fillable = [
        'name',
        'surname',
        'age',
        'email',
        'avatar',
        'link1',
        'link2',
        'link3',
        'link4',
        'link5',
        'reviews_count',
        'hash'
    ];
}
