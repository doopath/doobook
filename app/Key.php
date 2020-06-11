<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function checkEmail()
    {
        $pos_email = DB::select('select email from userkeys where email = ?', [$this->email]);
        
        if ($pos_email == false)
        {
            return true;
        } else {
            return false;
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public static function checkHash($email) {
        $pos_email = DB::select('select hash from userkeys where email = ?', [$email]);

        if ($pos_email == false)
        {
            return true;
        } else {
            return false;
        }
    }

    public function getMyHash()
    {
        return $this->hash;
    }

    public static function getHash($email)
    {
        $hash = DB::select('select hash from userkeys where email = ?', [$email]);
        if ($hash == false)
        {
            return 'This email does not exists in the database';
        } else {
            return $hash[0]->hash;
        }
    }
}
