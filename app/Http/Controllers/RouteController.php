<?php

namespace App\Http\Controllers;  //declaring the namespace

use App\Key;  //Model
use App\Review;  //Model
use Illuminate\Http\Request;  //Class for manipulate input data (GET, POST)
use Illuminate\Support\Facades\DB;  //Database facaded

class RouteController extends Controller
{
    //Template shows methods

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

    //Find a key if user forgot it
    public function findkey(Request $req)
    {
        $email = strval(strip_tags($req->input('email')));
        $key = Key::getHash($email);

        return view('findkey_output')->with([
            'key' => $key,
        ]);
    }

    //Get any keys from the database (topkeys template)
    public function getKeys()
    {
        $users = Key::getKeys(10);

        return view('top_keys')->with([
            'users' => $users
        ]);
    }

    //Show a profile of a key
    public function profile($hash)
    {
        $hash = strval($hash);
        $user = Key::getUser($hash);
        $reviews = Review::getAll($hash);
        $reviews_count = Review::count($hash);
        $rating = Key::getRating($hash);

        return view('profile')->with([
            'user' => $user[0],
            'reviews' => $reviews,
            'reviews_count' => $reviews_count,
            'rating' => $rating
        ]);
    }

    //Show a review of a key (review/key/id template)
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
