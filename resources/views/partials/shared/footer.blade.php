<footer class="footer">
  <div class="container footer-top">
    <div class="row">
      <div class="col-100 col-md-50 content-left">
        @if (Route::is('home'))
          <span class="footer-logo svg" role="img" aria-label="Главная страница сайта Владлена Щетинина">
            @if (View::exists('partials.logo.logo'))
              @include('partials.logo.logo-footer')
            @endif
          </span>
        @else
          <a class="footer-logo svg" href="{{ route('home') }}" aria-label="На главную страницу сайта Владлена Щетинина">
            @if (View::exists('partials.logo.logo'))
              @include('partials.logo.logo-footer')
            @endif
          </a>
        @endif
        <ul class="footer-address">
          <li>Московская область</li>
          <li class="mb-2">г. Ивантеевка</li>
          <li class="visible hidden-md"><a href="tel:+79260522029">+7 (926) 052-20-29</a></li>
          <li class="visible hidden-md mb-2"><a href="mailto:info@vschetinin.ru">info@vschetinin.ru</a></li>
          <li class="fs-20 font-middle">Мост к успеху вашего бизнеса</li>
          <li><a href="#" onclick="return false;">Скачать презентацию</a></li>
        </ul>
      </div>
      <div class="col-100 col-md-50 info-contentright">
        <ul>
          <li class="mt-2"><a href="/privacy/" target="_blank">Политика конфиденциальности</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-copyright text-center">
      &copy; Vladlen Schetinin
      <span></span>
      <span>All Rights Reserved</span>
    </div>
  </div>
</footer>
