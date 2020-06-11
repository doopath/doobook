<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Key;

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

  public function topkeys()
  {
    return view('top_keys');
  }

  public function profile()
  {
    return view('profile');
  }

  public function findkey(Request $req)
  {
    $email = strval(strip_tags($req->input('email')));
    $key = Key::getHash($email);

    return view('findkey_output')->with([
      'key' => $key
    ]);
  }
}
