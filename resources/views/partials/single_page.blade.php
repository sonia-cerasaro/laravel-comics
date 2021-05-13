@extends('layouts.app')

@section('main')

<section class="blue">

</section>
<section class="white">
  <div class="cent_cont">
    <div class="card_info">

    </div>
    <div class="card_add">

      <h2>HELLO</h2>
        {{ $film['series'] }}

    </div>

  </div>
</section>
<section class="lblue">
  <div class="cent_cont">

  </div>
</section>

<!-- <div class="white">
  <h2>HELLO</h2>

</div>

<section>

  <div class="title_cont">
    {{ $film['series'] }}
  </div>

  {{var_dump($film)}}


</section> -->



@endsection
