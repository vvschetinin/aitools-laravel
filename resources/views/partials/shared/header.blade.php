<header class="header header--large">
  <div class="header-wrapper">
    <div class="header-container static--xl">
      <!-- LOGOTYPE -->
      @if (Route::is('home'))
        <span class="header-logo svg" role="img" aria-label="Главная страница сайта Владлена Щетинина">
          @if (View::exists('partials.logo.logo'))
            @include('partials.logo.logo')
          @endif
        </span>
      @else
        <a class="header-logo svg" href="{{ route('home') }}" aria-label="На главную страницу сайта Владлена Щетинина">
          @if (View::exists('partials.logo.logo'))
            @include('partials.logo.logo')
          @endif
        </a>
      @endif
      <!-- Desktop Nav -->
      <nav class="desktop-nav display-none display-table--lg" aria-label="Основная навигация">
        @if (View::exists('partials.menu.menu-desktop'))
          @include('partials.menu.menu-desktop')
        @endif
      </nav>
      <div class="button-wrap">
        <button class="start-project-btn display-none display-inline-block--sm js-startproject" aria-haspopup="dialog"
          aria-controls="modal-form">Начать проект</button>
      </div>
      <div class="header-right">
        <button class="nav-toggle display-block display-none--lg" aria-label="Открыть меню" aria-expanded="false"
          aria-controls="mobile-nav">
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
          <span class="nav-toggle__line"></span>
        </button>
      </div>
    </div>
  </div>
  <nav class="header-nav" id="mobile-nav" aria-label="Мобильная навигация">
    <div class="header-nav--inner">
      @if (View::exists('partials.menu.menu-mobil'))
        @include('partials.menu.menu-mobil')
      @endif
    </div>
  </nav>
</header>
