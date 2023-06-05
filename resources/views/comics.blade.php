@extends('layout.main')

@section('content')

    <main>
        <div class="container">
        <h4>current series</h4>

        <div class="cards-wrapper">

            @foreach ($comics as $film )

                <div class="card">
                    <div class="image_container">
                    <img src="{{ $film['thumb'] }}" alt="{{$film['title']}}">
                    </div>
                    <p>{{$film['title']}}</p>
                </div>

            @endforeach

        </div>
        <div class="button_load">
            <a href="#">LOAD MORE</a>
        </div>
        </div>

    </main>

@endsection
