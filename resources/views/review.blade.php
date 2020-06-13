@extends('layouts.layout')

@section('title')
<?php echo 'DooBook'; ?>
@endsection

@section('main')
    <h1 class="home__title" id="review__title">Review from {{ $review->author_name }}  {{ $review->author_surname }}</h1>
    <p class="review__time"><span>Time spent: </span> {{ $review->time_spent }} days</p>
    <p class="review__rating"><span>Main rating: </span> {{ ($review->timings_rating + $review->quality_rating + $review->sociability_rating) / 3 }}/10</p>
    <p class="review__executor-key"><span>Executor's key: </span> {{ $review->key }}</p>
    <p class="review__communication-rating"><span>Communication rating: </span> {{ $review->sociability_rating }}/10</p>
    <p class="review__time-rating"><span>Time spent rating</span> {{ $review->timings_rating }}/10</p>
    <p class="review__client-name"><span>Client's name: </span> {{ $review->author_name }}  {{ $review->author_surname }}</p>
    <p class="review__executor"><span>Executor's name: </span> {{ $executor_name }}  {{ $executor_surname }}</p>
    <p class="review__price"><span>Price: </span> {{ $review->price }} usd</p>
    <p class="review__recommendation"><span>Recommendation: </span> {{ $review->recommendation }}ommended</p>

    <p class="review__text">
        <span class="review__comment">Comment:</span> {{ $review->comment }}
    </p>

    <div class="review__image__container">
        <img src="/img/{{ $review->image }}" alt="image" title="Responsive layout of a landing" class="review__image">
    </div>
    <div class="view-full-image">
        <p>Show full image</p>
    </div>
@endsection
