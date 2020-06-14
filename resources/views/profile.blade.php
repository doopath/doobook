@extends('layouts.layout')

@section('title')
    <?php echo 'DooBook'; ?>
@endsection

@section('main')
    <h1 class="home__title" id="profile__name">Profile of "{{ $user->hash }}"</h1>
    <div class="profile__info">
        <div class="profile__image">
            <img src="/img/{{ $user->avatar }}" alt="image" class="profile__image__item">
        </div>
        <p class="profile__key"><span>Key:</span> {{ $user->hash }}</p>
        <p class="profile__name"><span>Name:</span> {{ $user->name }} {{ $user->surname }}</p>
        <p class="profile__age"><span>Age:</span> 21</p>
        <p class="profile__date-creation"><span>Date of creation a key:</span> {{ $user->created_at }}</p>
        <p class="profile__reviews-number"><span>Number of reviews:</span> {{ $reviews_count }}</p>
        <p class="profile__rating"><span>Rating:</span> {{ $rating }}</p>
        <ul class="profile__link-list">
            <a href="{{ $user->link1 }}" class="profile__link">
                <li><span></span> {{ $user->link1 }}</li>
            </a>
            <a href="{{ $user->link2 }}" class="profile__link">
                <li><span></span> {{ $user->link2 }}</li>
            </a>
            <a href="{{ $user->link3 }}" class="profile__link">
                <li><span></span> {{ $user->link3 }}</li>
            </a>
            <a href="{{ $user->link4 }}" class="profile__link">
                <li><span></span> {{ $user->link4 }}</li>
            </a>
            <a href="{{ $user->link5 }}" class="profile__link">
                <li><span></span> {{ $user->link5 }}</li>
            </a>
        </ul>
    </div>
    <div class="separator"></div>
    <div class="works">
        <h1 class="home__title">Works</h1>
        <div class="works__container">

        @if (!isset($reviews[0]))
            <p class="home__text">No reviews.</p>
        @endif

        @foreach ($reviews as $review)
             <div class="work">
                <div class="work__image__container">
                    <img src="/img/{{ $review->image }}" alt="image" class="work__image">
                </div>
                <p class="work__text">{{ mb_strimwidth($review->comment, 0, 40). '...' }}
                </p>
                <p class="work__rating">Rating: {{ substr( (($review->timings_rating + $review->quality_rating + $review->sociability_rating) / 3), 0, 3) }}</p>
                <p class="work__date">Created {{ $review->created_at }}</p>
                <form action="{{ route('review', [$review->key, $review->id]) }}" method="get">
                    <button class="work__view">view</button>
                </form>
            </div>

        @endforeach

        </div>
    </div>
@endsection
