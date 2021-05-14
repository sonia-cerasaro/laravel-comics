@extends('layouts.app')

@section('main')

<section class="blue">

  <div class="cent_cont">

    <div class="img_contei">
      <div class="type_cont">
        {{ $film['type'] }}
      </div>
      <img src="{{ $film['thumb'] }}">
    </div>

  </div>
</section>

<section class="white">
  <div class="cent_cont">

    <div class="card_info">
      <div class="title_conte">
        <h2>{{ $film['title'] }}</h2>
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
      <p>ADVERTISMENT</p>
      <div class="img_cont">
        <img src="/img/adv.jpg">
      </div>
    </div>

  </div>
</section>

<section class="lblue">
  <div class="cent_cont">

    <div class="cont_right">
      <div class="title">
        <p>Talent</p>
      </div>

      <div class="title_art">
        <p>Art by:</p>
        @foreach ($film['artists'] as $index => $artist)
          {{ $artist }},
        @endforeach
      </div>

      <div class="content">
        <p>Written by:</p>
        @foreach ($film['writers'] as $index => $writer)
          {{ $writer }},
        @endforeach
      </div>


    </div>

    <div class="cont_left">
      <div class="title">
        <p>Specs</p>
      </div>

      <div class="title_art">
        <p>Series:</p>
        {{ $film['series']}}
      </div>

      <div class="content">
        <p>Series:</p>
        {{ $film['price']}}
      </div>

      <div class="content">
        <p>Series:</p>
        {{ $film['sale_date']}}
      </div>

    </div>

  </div>
  <div class="last_sec">

  </div>
</section>

@endsection
