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

    <h2 class="home__title" id="key__title">Get unique key</h2>
    <small class="war">*Before getting the key, fill out the form. <br> *You cannot change your profile in the future. <br> *Attention, the data will be displayed in your profile!</small>

    <form action="#" name="key" class="get_key" method="post">
        @csrf
        <div>
            <p class="input__label">* Enter your email</p>
            <input type="email" class="key__email" required name="key-email" placeholder="example: johnjohnson@gmail.com">
        </div>

        <div>
            <p class="input__label">* Enter your first name</p>
            <input type="text" class="key__name" required name="key-name" placeholder="example: John">
        </div>

        <div>
            <p class="input__label">* Enter your surname</p>
            <input type="text" class="key__surname" required name="key-surname" placeholder="example: Johnson">
        </div>

        <div>
            <p class="input__label">* Enter your age</p>
            <input type="text" class="key__age" required name="key-age" placeholder="example: 21">
        </div>

        <div>
            <p class="input__label">Choose an image for your avatar</p>
            <label for="key__image" class="key__image__label">Choose an image</label>
            <input type="file" class="key__image" name="key-image" id="key__image" enctype="multipart/form-data" multiple>
        </div>

        <div class="key__links__container">
            <p class="input__label">Enter your freelance profiles links</p>
            <ul class="key__links-list">
                <li><input type="text" class="key__links-list__item" name="profile-link" placeholder="example: https://freelancehunt.com/freelancer/johnny.html"></li>
                <li><input type="text" class="key__links-list__item" name="profile-link" placeholder="example: https://freelancehunt.com/freelancer/johnny.html"></li>
                <li><input type="text" class="key__links-list__item" name="profile-link" placeholder="example: https://freelancehunt.com/freelancer/johnny.html"></li>
                <li><input type="text" class="key__links-list__item" name="profile-link" placeholder="example: https://freelancehunt.com/freelancer/johnny.html"></li>
                <li><input type="text" class="key__links-list__item" name="profile-link" placeholder="example: https://freelancehunt.com/freelancer/johnny.html"></li>
            </ul>
        </div>

        <button class="key__submit" type="submit" name="submit">Get key</button>
    </form>
@endsection 