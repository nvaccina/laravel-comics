@php
    $footer_menu = config('menus.footer_menu');
    $footer_icon = config('menus.footer_icon');
@endphp

<footer>
    <div class="top">
      <div class="container">

        <div class="menu_footer">
          <div class="col">
            <nav>
              <h4>Dc Comics</h4>
              <ul>
                @foreach ($footer_menu['dcComics'] as $item)
                    <li>
                        <a href="{{$item['href']}}">{{$item['text']}}</a>
                    </li>

                @endforeach

              </ul>
            </nav>
            <nav>
              <h4>Shop</h4>
              <ul>
                @foreach ($footer_menu['shop'] as $item)
                    <li>
                        <a href="{{$item['href']}}">{{$item['text']}}</a>
                    </li>

                @endforeach
              </ul>
            </nav>

          </div>

          <div class="col">
            <nav>
              <h4>Dc</h4>
              <ul>
                @foreach ($footer_menu['dc'] as $item)
                    <li>
                        <a href="{{$item['href']}}">{{$item['text']}}</a>
                    </li>
                @endforeach
              </ul>
            </nav>
          </div>

          <div class="col">
            <nav>
              <h4>Sites</h4>
              <ul>
                @foreach ($footer_menu['sites'] as $item)
                    <li>
                        <a href="{{$item['href']}}">{{$item['text']}}</a>
                    </li>
                @endforeach
              </ul>
            </nav>
          </div>

        </div>
        <div class="big_logo">
          <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
        </div>
      </div>

    </div>
    <div class="bottom ht-100">

      <div class="container ht-100">

        <div class="button_sign">
          <a href="#">SIGN-UP NOW!</a>
        </div>

        <div class="social">
          <h4>follow us</h4>
          <nav>
            <ul>
                @foreach ($footer_icon as $icon)
                    <li>
                        <a href="{{$icon['href']}}">
                            <img src="/img/icons/{{$icon['image']}}" alt="">
                        </a>
                    </li>
                @endforeach

            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>
