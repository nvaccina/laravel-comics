@extends('layout.main')

@section('content')

<main class="nv_back">
    <div class="nv_blue"></div>
    <div class="book_detail">

      <div class="locandina">
        <img src="{{$comic_book['thumb']}}" alt="{{$comic_book['title']}}">
        <span class="gallery">VIEW GALLERY</span>
      </div>


      <div class="book_text_top">

        <div class="col-8">

          <h3>{{$comic_book['title']}}</h3>

          <div class="green_row">
            <div class="col-8">
              <p>
                <span class="nv_text_opacity">U.S. Price:</span> {{$comic_book['price']}}
              </p>

              <span class="nv_text_opacity">AVAILABLE</span>

            </div>
            <div class="col-4">
              <span class="pr-10">Cheeck Availability</span>
              <i class="fa-solid fa-caret-down"></i>
            </div>
          </div>

          <p class="grey_color fs-14 ln-25">{{$comic_book['description']}}</p>
        </div>

        <div class="col-4">
          <h6>Advertisement</h6>
          <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
        </div>
      </div>
      <div class="info">
        <div class="col-5">
          <table>
            <tr>
              <th class="blue_color">Talent</th>
            </tr>
            <tr>
              <td class="fs-12 fw-bold blue_color">Art by:</td>
              <td class="fs-12 fw-bold acqua_color pl-40">{{implode(' - ', $comic_book['artists'])}}</td>
            </tr>
            <tr>
              <td class="fs-12 fw-bold blue_color">Written by:</td>
              <td class="fs-12 fw-bold acqua_color pl-40">{{implode(' - ', $comic_book['writers'])}}</td>
            </tr>
          </table>
        </div>
        <div class="col-5">
          <table class="pl-30">
            <tr>
              <th class="blue_color">Specs</th>
            </tr>
            <tr>
              <td class="fs-12 fw-bold blue_color">Series:</td>
              <td class="fs-12 fw-bold acqua_color pl-40">{{$comic_book['series']}}</td>
            </tr>
            <tr>
              <td class="fs-12 fw-bold blue_color">U.S. Price:</td>
              <td class="fs-12 pl-40">{{$comic_book['price']}}</td>
            </tr>
            <tr>
              <td class="fs-12 fw-bold blue_color">On Sale Date:</td>
              <td class="fs-12 pl-40">{{$comic_book['sale_date']}}</td>
            </tr>
          </table>

        </div>
      </div>

    </div>
</main>

@endsection
