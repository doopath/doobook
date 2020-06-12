<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Key;

class RegisterController extends Controller
{
    public function getkey (Request $req)
    {
        //input values validation
        $validatedData = $req->validate([
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:30',
            'age' => 'required|integer|max:101',
            'email' => 'required||max:80',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', //image validation
            'link1' => 'max:90',
            'link2' => 'max:90',
            'link3' => 'max:90',
            'link4' => 'max:90',
            'link5' => 'max:90'
        ]);

        // checking an image is exists
        if ($req->file('image') == null)
        {
            $name = 'profile-image.png';
        } else {
            $image = $req->file('image');
            $ext = $image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $name = md5($req->get('email')). '.'. $ext; //rename image
            $image->move($destinationPath, $name); // move image to /public/img/image.ext
        }

        //put values in the req in an array
        $attrs = array(
            'name' => strval(strip_tags($req->get('name'))),  //delete some html tags and convert value to string
            'surname' => strval(strip_tags($req->get('surname'))),
            'age' => strval(strip_tags($req->get('age'))),
            'email' => strval(strip_tags($req->get('email'))),
            'avatar' => $name,
            'link1' => strval(strip_tags($req->get('link1'))),
            'link2' => strval(strip_tags($req->get('link2'))),
            'link3' => strval(strip_tags($req->get('link3'))),
            'link4' => strval(strip_tags($req->get('link4'))),
            'link5' => strval(strip_tags($req->get('link5'))),
            'reviews_count' => '0',
            'hash' => md5($req->get('email'))  //hashing email ( this is a key )
        );

        //creating new key
        $key = new Key;
        $key->fill($attrs); //fill any properties of KeyClass
        
        if($key->checkEmail() == true)
        {
            $key->save(); //save new key in the database
            return view('showkey')->with('key', $key->getMyHash()); //show hash of the key
        } else {
            return view('findkey_input'); //view template
            die();
        }
    }

    public function review(Request $req)
    {
        dd($req);
    }
}
