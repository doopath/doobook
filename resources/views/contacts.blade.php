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

    <h2 class="home__title">Contacts</h2>
    <ul class="contacts__list sep">
        <li class="contacts__list__item">Email: maminpahat@gmail.com</li>
        <li class="contacts__list__item">Support: support@sup.com</li>
        <li class="contacts__list__item">Telegram: @wa1om</li>
    </ul>

    <h2 class="home__title">MIT License</h2>
    <p class="home__text sep">
        Copyright (c) 2020<br> <br> Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation
        the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
        <br> <br> The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. <br> <br> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT
        LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
        ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
    </p>
@endsection