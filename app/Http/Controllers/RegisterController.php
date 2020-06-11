<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Key;

class RegisterController extends Controller
{
    public function getkey (Request $req)
    {
        $attrs = array(
            'name' => $req->get('name'),
            'email' => $req->get('email'),
            'age' => $req->get('age'),
            'surname' => $req->get('surname'),
            'avatar' => $req->get('image'),
            'link1' => $req->get('link1'),
            'link2' => $req->get('link2'),
            'link3' => $req->get('link3'),
            'link4' => $req->get('link4'),
            'link5' => $req->get('link5'),
            'reviews_count' => '0',
            'hash' => md5($req->get('email'))
        );
        $key = new Key;
        $key->fill($attrs);
        $key->save();
    }
}
