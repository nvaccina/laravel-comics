@php
    $main_menu = config('menus.main_menu');
@endphp

  <div class="visa_card">
    <div class="container">
        <span>DC POWER VISA <i class="fa-regular fa-registered fs-10"></i> </span>
        <span>ADDITIONAL DC SITES </span>
    </div>

  </div>
  <header>
    <div class="container ht-80">
      <div class="logo">
        <a href="#">
          <img src="/img/logo/dc-logo.png" alt="Logo Dc">
        </a>
      </div>

      <nav class="ht-80">
        <ul class="ht-80">
            @foreach ( $main_menu as $item)

              <li class="ht-80">
                <a class="ht-80 {{Route::currentRouteName() === $item['text'] ? 'active' : ''}}" href="{{ route($item['href']) }}">{{$item['text']}}</a>
              </li>

            @endforeach

            <input class="nv_input" type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>

        </ul>

      </nav>
    </div>
  </header>
