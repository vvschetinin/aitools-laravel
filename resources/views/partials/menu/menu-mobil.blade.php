<ul class="menu-mobil">
  @php
    $menuItems = [
        ['route' => 'home', 'name' => 'Главная'],
        ['route' => 'services.index', 'name' => 'Услуги'],
        ['route' => 'cases.index', 'name' => 'Кейсы и результаты'],
        ['route' => 'blog.index', 'name' => 'Блог'],
        ['route' => 'faq.index', 'name' => 'FAQ'],
        ['route' => 'contacts.index', 'name' => 'Контакты'],
    ];
  @endphp

  @foreach ($menuItems as $item)
    @if (request()->routeIs($item['route']))
      <li class="menu-item active">
        <span>{{ $item['name'] }}</span>
      </li>
    @else
      <li class="menu-item">
        <a href="{{ route($item['route']) }}">{{ $item['name'] }}</a>
      </li>
    @endif
  @endforeach
</ul>
