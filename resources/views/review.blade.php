@extends('layouts.layout')

@section('title')
<?php echo 'DooBook'; ?>
@endsection

@section('main')
    <h1 class="home__title" id="review__title">Responsive layout of a landing</h1>
    <p class="review__time"><span>Time spent: </span> 7 days</p>
    <p class="review__rating"><span>Main rating: </span> 10/10</p>
    <p class="review__executor-key"><span>Executor's key: </span> e01783d2ffa1f0c18e27301bb9eda676</p>
    <p class="review__communication-rating"><span>Communication rating: </span> 10/10</p>
    <p class="review__time-rating"><span>Time spent rating</span> 10/10</p>
    <p class="review__client-name"><span>Client's name: </span> Fedor Dostoevsky</p>
    <p class="review__executor"><span>Executor's name: </span> Michael Amaterasu</p>
    <p class="review__price"><span>Price: </span> 10000 rub</p>
    <p class="review__recommendation"><span>Recommendation: </span> recommended</p>

    <p class="review__text">
        <span class="review__comment">Comment:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex inventore
        ipsa doloremque veniam facere, quidem assumenda ipsam placeat officiis laudantium nisi repellat, ratione minima
        iusto
        reiciendis deleniti tempora tempore! Quod voluptates sed quaerat quam dolores asperiores sint saepe est praesentium
        provident doloribus numquam, distinctio voluptatem consequatur molestiae adipisci. Vitae fugiat blanditiis sitea
        facilis
        harum autem pariatur non odit, fuga consequatur quis commodi. Natus deserunt illum nobis dolorum iusto modi eos,
        numquam aperiam aut laboriosam sapiente, consequuntur cumque excepturi error amet, fugiat odit minus nulla
        similique.
        Modi quam sed similique, facilis, odit omnis minus pariatur earum tenetur quos explicabo possimus.
    </p>

    <div class="review__image__container">
        <img src="img/work-image2.png" alt="image" title="Responsive layout of a landing" class="review__image">
    </div>
    <div class="view-full-image">
        <p>Show full image</p>
    </div>
@endsection
