@php
    $main_menu = config('menus.main_menu');
@endphp

  <header>
    <div class="container ht-80">
      <div class="logo">
        <a href="#">
          <img src="/logo/dc-logo.png" alt="Logo Dc">
        </a>
      </div>

      <nav class="ht-80">
        <ul class="ht-80">
            @foreach ( $main_menu as $item)

                <li class="ht-80">
                    <a class="ht-80 {{Route::currentRouteName() === $item['text'] ? 'active' : ''}}" href="{{ route($item['href']) }}">{{$item['text']}}</a>
                </li>

            @endforeach

        </ul>
      </nav>
    </div>
  </header>
