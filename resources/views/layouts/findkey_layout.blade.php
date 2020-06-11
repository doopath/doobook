@extends('layouts.layout')

@section('title')
    <?php echo 'DooBook'; ?> 
@endsection 

@section('main')

    @yield('content')

    <div class="sep"></div>

    <div class="super-separator"></div>
    <label for="findkey" class="input__label">Find your key</label>
    <form action="{{ route('findkey') }}" method="post" class="findkey__container">
        @csrf
        <input type="email" id="findkey" name="email" class="findkey__input" placeholder="Enter your email">
        <button type="submit" class="give-feedback__submit findkey__submit">find key</button>
    </form>

    <div class="sup_sep"></div>

@endsection