@php
    $cta_menu = config('menus.cta_menu');
@endphp

    <div class="action">
        <div class="container">

        <nav>
            <ul>
                @foreach ($cta_menu as $cta)

                    <li>
                        <a href="{{$cta['href']}}">
                            <img src="/img/cta/{{$cta['image']}}" alt="{{$cta['text']}}">
                            <p>{{$cta['text']}}</p>
                        </a>
                    </li>

                @endforeach
            </ul>

        </nav>
        </div>
    </div>
