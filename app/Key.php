<?php

namespace App;

use Illuminate\Database\Eloquent\Model;  //Abstract model for extending
use Illuminate\Support\Facades\DB;  //Database facaded

class Key extends Model
{
    protected $table = 'userkeys';  //Set a table in the database
    protected $fillable = [  //Create array for let the Mass Assignment
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
        'hash',
    ];

    //Check if exists this email in the database
    public function checkEmail()
    {
        $pos_email = DB::select('select email from userkeys where email = ?', [$this->email]);

        if ($pos_email == false) {
            return true;
        } else {
            return false;
        }
    }

    //Get user's email by object of the class
    public function getEmail()
    {
        return $this->email;
    }

    //Check if exists this key-hash in the database
    public static function checkHash($email)
    {
        $pos_email = DB::select('select hash from userkeys where email = ?', [$email]);

        if ($pos_email == false) {
            return true;
        } else {
            return false;
        }
    }

    // Get user's key-hash by object of the class
    public function getMyHash()
    {
        return $this->hash;
    }

    // Get user's key-hash by email
    public static function getHash($email)
    {
        $hash = DB::select('select hash from userkeys where email = ?', [$email]);
        if ($hash == false) {
            return 'This email does not exists in the database';
        } else {
            return $hash[0]->hash;
        }
    }

    // Select a number of keys from the database
    public static function getKeys($count)
    {
        $users = DB::table('userkeys')->limit(10)->oldest('reviews_count')->take($count)->get();
        return $users;  //returning array $users which array[ object, object ...]
    }

    public static function getUser($hash)
    {
        $user = DB::table('userkeys')->where('hash', '=', $hash)->get();
        return $user;
    }
}
