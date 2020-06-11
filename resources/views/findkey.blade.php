@extends('layouts.layout')

@section('title')
    <?php echo 'DooBook'; ?> 
@endsection 

@section('main')
    <h1 class="home__title">Oops, some error</h1>
    <p class="home__text">This email already registred in the database. You can find your key here -></p>
    <div class="sep"></div>
    <label for="findkey" class="input__label">Find your key</label>
    <input type="email" id="findkey" class="findkey__input" placeholder="Enter your email">
@endsection