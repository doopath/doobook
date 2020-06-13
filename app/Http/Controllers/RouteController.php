<?php

namespace App\Http\Controllers;

use App\Key;
use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  //Database facaded

class RouteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function getkey()
    {
        return view('getkey');
    }

    public function about()
    {
        return view('about');
    }

    public function feedback()
    {
        return view('give_feedback');
    }

    public function findkey(Request $req)
    {
        $email = strval(strip_tags($req->input('email')));
        $key = Key::getHash($email);

        return view('findkey_output')->with([
            'key' => $key,
        ]);
    }

    public function getKeys()
    {
        $users = Key::getKeys(10);
        return view('top_keys')->with([
            'users' => $users
        ]);
    }

    public function profile($hash)
    {
        $hash = strval($hash);
        $user = Key::getUser($hash);
        $reviews = Review::getAll($hash);
        return view('profile')->with([
            'user' => $user[0],
            'reviews' => $reviews
        ]);
    }

    public function review($key, $id)
    {
        $review = DB::table('reviews')->where('key', '=', $key)->where('id', '=', $id)->get();
        $executor_name = DB::table('userkeys')->where('hash', '=', $key)->get()[0]->name;
        $executor_surname = DB::table('userkeys')->where('hash', '=', $key)->get()[0]->surname;
        return view('review')->with([
            'review' => $review[0],
            'executor_name' => $executor_name,
            'executor_surname' => $executor_surname
        ]);
    }
}
