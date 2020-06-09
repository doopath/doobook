<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    @yield('title')
  </title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
</head>

<body>
  <div class="container">
    <header class="header">
      <div class="header__container">
        <img src="/img/logo.svg" alt="image" class="logo">
        <ul class="menu">
        <li class="menu__item"><a href="{{ route('home') }}">HOME</a></li>
          <li class="menu__item"><a href="{{ route('topkeys') }}">TOP</a></li>
          <li class="menu__item"><a href="{{ route('getkey') }}">GET KEY</a></li>
          <li class="menu__item"><a href="{{ route('contacts') }}">CONTACTS</a></li>
          <li class="menu__item"><a href="{{ route('about') }}">ABOUT</a></li>
        </ul>
      </div>
    </header>
    <main class="main">
      <div class="main__container">

        {{-- including content --}}
        @yield('main')
        
      </div>
    </main>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__info">
          <p class="footer__item">Designed by doopath</p>
          <p class="footer__item">Developed by doopath</p>
          <p class="footer__item">Colorscheme: gruvbox</p>
          <p class="footer__item">Copyright 2020</p>
        </div>
        <ul class="footer__contacts__list">
          <a href="https://facebook.com" class="footer__contacts__link">
            <li class="footer__contacts__item">Facebook</li>
          </a>
          <a href="https://twitter.com" class="footer__contacts__link">
            <li class="footer__contacts__item">Twitter</li>
          </a>
          <a href="https://vk.com" class="footer__contacts__link">
            <li class="footer__contacts__item">VKontakte</li>
          </a>
          <a href="https://telegram.org" class="footer__contacts__link">
            <li class="footer__contacts__item">Telegram</li>
          </a>
        </ul>
        <ul class="footer__contacts__list">
          <a href="https://github.com" class="footer__contacts__link">
            <li class="footer__contacts__item">GitHub</li>
          </a>
          <a href="https://freelancehunt.com" class="footer__contacts__link">
            <li class="footer__contacts__item">Freelancehunt</li>
          </a>
          <a href="https://kwork.ru" class="footer__contacts__link">
            <li class="footer__contacts__item">Kwork</li>
          </a>
          <a href="https://reddit.com" class="footer__contacts__link">
            <li class="footer__contacts__item">Reddit</li>
          </a>
        </ul>
      </div>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="/js/script.js"></script>
</body>

</html>