@extends('layout.main')

@section('content')

<main>
    <div class="nv_blue"></div>
    <div class="book_detail">

      <img class="locandina" src="{{$comic_book['thumb']}}" alt="{{$comic_book['title']}}">

      <div class="book_text">
        <div class="col">
          <h4>{{$comic_book['title']}}</h4>
          <div class="green_row">PRICE: {{$comic_book['price']}} | AVAIBLE | Cheeck Availability</div>

          <p>{{$comic_book['description']}}</p>
        </div>

        <div class="col">
          <img src="" alt="">
        </div>

        <div class="row">
          <div class="col">
            <table>
              TABELLA 1

            </table>
          </div>
          <div class="col">
            <table>
              TABELLA 2

            </table>
          </div>
        </div>


      </div>

    </div>
</main>

@endsection
