@extends('layouts.app')

@section('main')

<div class="blue_cont_last">
  <div class="cent_conteiner">

    <div class="img_contei">
      <div class="type_cont text_center white">
        {{ $film['type'] }}
      </div>
      <img src="{{ $film['thumb'] }}">
      <div class="type_conte text_center white">
        VIEW GALLERY
      </div>
    </div>

  </div>
</div>

<section class="white">
  <div class="cent_cont">

    <div class="card_info">
      <div class="title_conte">
        <h1>{{ $film['title'] }}</h1>
      </div>

      <div class="price_conte">
        <div class="first-sec">
          <p>U.S. Price: {{ $film['price'] }}</p>
        </div>

        <div class="sec-sec">
          <p>AVAILABLE</p>
        </div>

        <div class="third-sec">
          <p>Check Availability</p>
        </div>

      </div>

      <div class="descrip_cont">
        <p>{{ $film['description'] }}</p>
      </div>
    </div>

    <div class="card_add">

      <div class="img_cont">
        <p class="ad">
          ADVERTISMENT
        </p>
        <img src="/img/adv.jpg">
      </div>
    </div>

  </div>
</section>

<section class="lblue">
  <div class="cent_cont">

    <div class="cont_right">
      <div class="title">
        <p class="grey">Talent</p>
      </div>

      <div class="title_art blue">
        <p class="grey">
          Art by:
        </p>
        @foreach ($film['artists'] as $artist)
        {{ $artist }}
        @if (!$loop->last)
        ,
        @endif
        @endforeach
      </div>

      <div class="content blue">
        <p class="grey">
          Written by:
        </p>
        @foreach ($film['writers'] as $writer)
          {{ $writer }}
          @if (!$loop->last)
          ,
          @endif
        @endforeach
      </div>
    </div>

    <div class="cont_left">
      <div class="title grey">
        <p>Specs</p>
      </div>

      <div class="title_art blue">
        <p class=" grey">
          Series:
        </p>
        {{ $film['series']}}
      </div>

      <div class="content grey line_bottom">
        <p class="grey">
          U.S. Price:
        </p>
        {{ $film['price']}}
      </div>

      <div class="content grey">
        <p class="grey">
          On Sale Date:
        </p>
        {{ $film['sale_date']}}
      </div>

    </div>

  </div>


</section>

<section class="grey">
  <div class="cent_cont">
    <div class="last_card">
      <span class="grey">
        DIGITAL COMICS
      </span>
      <div class="img_c">
        <img src="/img/buy-comics-digital-comics.png" alt="">
      </div>
    </div>
    <div class="last_card">
      <span class="grey">
        SHOP DC
      </span>
      <div class="img_c">
        <img src="/img/buy-comics-merchandise.png" alt="">
      </div>
    </div>
    <div class="last_card">
      <span class="grey">
        COMIC SHOP LOCATOR
      </span>
      <div class="img_c">
        <img src="/img/buy-comics-shop-locator.png" alt="">
      </div>
    </div>
    <div class="last_card">
      <span class="grey">
        SUBSCRIPTIONS
      </span>
      <div class="img_c">
        <img src="/img/buy-comics-subscriptions.png" alt="">
      </div>
    </div>
  </div>
</section>

@endsection
