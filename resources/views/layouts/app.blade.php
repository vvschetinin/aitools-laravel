<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Мой сайт')</title>
  @vite(['resources/main.ts'])
</head>

<body>
  <div class="site-wrapper">
    @if (Route::is('home') || Route::is('contacts.index'))
      @include('partials.shared.header')
    @else
      @include('partials.shared.header-inner')
    @endif
    <main class="site-content">
      @yield('content')
    </main>
    @include('partials.shared.footer')
  </div>

  @include('partials.forms.fixedcontact')
  @include('partials.forms.mainform')
  @include('partials.forms.cookiebanner')

</body>

</html>
