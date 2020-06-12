@extends('layouts.layout') 

@section('title')
    <?php echo 'DooBook'; ?> 
@endsection 

@section('main')
    <h1 class="home__title">Hello Everyone!</h1>

    <p class="home__text sep">
        DooBook is a service that allows you to receive and leave feedback on the work performed, regardless of the freelance exchange. If you want to create your unique key that stores information about you as a freelancer, then you just need to go through a
        quick registration, confirm your email and start receiving feedback. If you want to leave a review to the freelancer, then simply indicate his key.
    </p>

    <h2 class="home__title" id="give-feedback__title">Fill out the feedback form</h2>

    <form action="{{ route('give.review') }}" name="give-feedback" method="post" class="give-feedback__container" enctype="multipart/form-data">
        @csrf
        <div class="give-feedback__key__container">
            <label for="give-feedback__key" class="input__label give-feedback__label">* Enter a key of an executor</label>
            <input type="text" class="give-feedback__key" name="key" required id="give-feedback__key" placeholder="example: e01783d2ffa1f0c18e27301bb9eda676">
        </div>

        <div class="give-feedback__uname__container">
            <label for="give-feedback__uname" class="input__label give-feedback__label">* Enter your name</label>
            <input type="text" class="give-feedback__uname" name="name" required id="give-feedback__uname" placeholder="example: John">
        </div>

        <div class="give-feedback__sname__container">
            <label for="give-feedback__sname" class="input__label give-feedback__label">* Enter your surname</label>
            <input type="text" class="give-feedback__sname" name="surname" required id="give-feedback__sname" placeholder="example: Johnson">
        </div>

        <div class="give-feedback__time__container">
            <label for="give-feedback__time" class="input__label give-feedback__label">* How many days have been spent?</label>
            <input type="text" class="give-feedback__time" name="timeing" required id="give-feedback__time" placeholder="example: 7">
        </div>

        <div class="give-feedback__price__container">
            <label for="give-feedback__price" class="input__label give-feedback__label">* What is the price of work (usd)?</label>
            <input type="text" class="give-feedback__price" name="price" required id="give-feedback__price" placeholder="example: 1000">
        </div>

        <div class="give-feedback__image">
            <p class="input__label give-feedback__label">* Choose an image for your avatar</p>
            <label for="key__image" class="key__image__label">Choose an image</label>
            <input type="file" class="key__image" name="image" required id="key__image" enctype="multipart/form-data" multiple>
        </div>

        <div class="give-feedback_rating time">
            <p class="input__label give-feedback__label rating__label">* Appreciate the timings</p>
            <ul class="rating__list time-rating__list">
                <li class="rating__list__item" value="1">1</li>
                <li class="rating__list__item" value="2">2</li>
                <li class="rating__list__item" value="3">3</li>
                <li class="rating__list__item" value="4">4</li>
                <li class="rating__list__item" value="5">5</li>
                <li class="rating__list__item" value="6">6</li>
                <li class="rating__list__item" value="7">7</li>
                <li class="rating__list__item" value="8">8</li>
                <li class="rating__list__item" value="9">9</li>
                <li class="rating__list__item" value="10">10</li>
            </ul>
            <p class="rating__progress">
                <span class="progress-passive__line"></span>
                <span class="progress-active__line timings__progress"></span>
            </p>
            <input type="text" name="recommend" name="timings_rating" value="" class="hide__input timings__input">
        </div>

        <div class="give-feedback_rating quality">
            <p class="input__label give-feedback__label rating__label">* Appreciate a quality of the work</p>
            <ul class="rating__list quality-rating__list">
                <li class="rating__list__item" value="1">1</li>
                <li class="rating__list__item" value="2">2</li>
                <li class="rating__list__item" value="3">3</li>
                <li class="rating__list__item" value="4">4</li>
                <li class="rating__list__item" value="5">5</li>
                <li class="rating__list__item" value="6">6</li>
                <li class="rating__list__item" value="7">7</li>
                <li class="rating__list__item" value="8">8</li>
                <li class="rating__list__item" value="9">9</li>
                <li class="rating__list__item" value="10">10</li>
            </ul>
            <p class="rating__progress">
                <span class="progress-passive__line"></span>
                <span class="progress-active__line quality__progress"></span>
            </p>
            <input type="text" name="recommend" name="quality_rating" value="" class="hide__input quality__input">
        </div>

        <div class="give-feedback_rating communication">
            <p class="input__label give-feedback__label rating__label">* Appreciate the sociability of the performer</p>
            <ul class="rating__list communication-rating__list">
                <li class="rating__list__item" value="1">1</li>
                <li class="rating__list__item" value="2">2</li>
                <li class="rating__list__item" value="3">3</li>
                <li class="rating__list__item" value="4">4</li>
                <li class="rating__list__item" value="5">5</li>
                <li class="rating__list__item" value="6">6</li>
                <li class="rating__list__item" value="7">7</li>
                <li class="rating__list__item" value="8">8</li>
                <li class="rating__list__item" value="9">9</li>
                <li class="rating__list__item" value="10">10</li>
            </ul>
            <p class="rating__progress">
                <span class="progress-passive__line"></span>
                <span class="progress-active__line communication__progress"></span>
            </p>
            <input type="text" name="recommend" name="sociability_rating" value="" class="hide__input sociability__input">
        </div>

        <div class="give-feedback__recommendation">
            <p class="input__label give-feedback__label recommendation">* Do you recommend the executor?</p>
            <p class="recommendation__checklist">
                <span class="rec">recommended</span>
                <span class="not-rec">not recommended</span>
            </p>
            <p class="rating__progress">
                <span class="progress-passive__line"></span>
                <span class="progress-active__line rec__progress"></span>
            </p>
            <input type="text" name="recommend" name="recommendation" class="hide__input rec__input">
        </div>

        <div class="give-feedback__comment__container">
            <label for="give-feedback__comment" class="input__label give-feedback__label">* Your comment:</label>
            <textarea name="give-feedback__comment" id="comment" id="give-feedback__comment"  name="comment" required class="give-feedback__comment" placeholder="Describe the process of working with the executor. Your experience can help other people." minlength="100"></textarea>
        </div>

        <button class="give-feedback__submit" type="submit" name="give-feedback-btn">Give feedback</button>

    </form>
@endsection