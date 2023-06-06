@extends('layout.main')

@section('content')

    <main>
        <div class="container">
        <h4>current series</h4>

        <div class="cards-wrapper">

            @foreach ($comics as $comic_book )

                <div class="card">
                    <div class="image_container">
                    <img src="{{ $comic_book['thumb'] }}" alt="{{$comic_book['title']}}">
                    </div>
                    <p>{{$comic_book['title']}}</p>
                </div>

            @endforeach

        </div>
        <div class="button_load">
            <a href="#">LOAD MORE</a>
        </div>
        </div>

    </main>

@endsection
