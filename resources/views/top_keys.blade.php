@extends('layouts.layout')

<?php
    use App\Key;
    $key = new Key;  //Creating object of the class Key
?>

@section('title')
    <?php echo 'DooBook'; ?>
@endsection

@section('main')
    <h1 class="home__title">Most popular keys</h1>
    <div class="card__container">

        @foreach ($users as $user)
            <div class="card">
                <p class="executor__key"><span>Key:</span> {{ $user->hash }}</p>
                <p class="executor__name"><span>Name: </span>{{ $user->name }} {{ $user->surname }}</p>
                <p class="executor__age"><span>Age: </span> {{ $user->age }} </p>
                <p class="executor__date-creation"><span>Date of creation a key: </span>{{ $user->created_at }}</p>
                <p class="executor__reviews-number"><span>Number of reviews: </span>{{ $user->reviews_count }}</p>
                <p class="executor__rating"><span>Rating: </span>{{ $key->getRatings($user->hash) }}</p>
                <ul class="executor__link-list">
                    <a href="#" class="executor__link">
                        <li><span></span>{{ $user->link1 }}</li>
                    </a>
                    <a href="#" class="executor__link">
                        <li><span></span>{{ $user->link2 }}</li>
                    </a>
                    <a href="#" class="executor__link">
                        <li><span></span>{{ $user->link3 }}</li>
                    </a>
                    <a href="#" class="executor__link">
                        <li><span></span>{{ $user->link4 }}</li>
                    </a>
                    <a href="#" class="executor__link">
                        <li><span></span>{{ $user->link5 }}</li>
                    </a>
                </ul>
                <form action="{{ route('profile', $user->hash) }}" method="get" name="view-more" class="executor__more-reviews__container">
                    <button type="submit" name="view-more-btn" class="executor__more-reviews">view reviews</button>
                </form>
            </div>
        @endforeach

    </div>
@endsection
