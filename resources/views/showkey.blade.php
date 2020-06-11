<?php use App\Key; ?>

@extends('layouts.layout')

@section('title')
    <?php echo 'DooBook'; ?> 
@endsection 

@section('main')
<h1 class="home__title">Success!</h1>
<p class="input__label mb">Copy this key and give it to the client to give feedback. <br> If you forgot the key you're everytime can get it by your email.</p>
<h2 class="home__text">Your key: {{ $key }}</h2>
<a href=" {{ route(('home')) }} "><button class="give-feedback__submit redirect">HOME</button></a>
<div class="super-separator" style="height: 800px;"></div>
@endsection