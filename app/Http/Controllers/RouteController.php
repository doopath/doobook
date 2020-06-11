<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
