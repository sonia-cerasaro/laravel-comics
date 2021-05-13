@extends('layouts.app')

@section('main')

<main>
  <div class="cent_cont">

   @foreach ($films as $film)
    <div class="card_cont">

      <div class="back_cont">
        <img src=" {{ $film['thumb'] }}">
      </div>
      <div class="title_cont">
        {{ $film['title'] }}
      </div>

    </div>
   @endforeach
  </div>
</main>


<!-- <table>
  <thead>
    <tr>
      <th>
        titolo
      </th>
    </tr>
  </thead>
  <tbody>

    @foreach ($films as $film)
    <tr>
      <td>{{ $film['title'] }}</td>
    </tr>
    @endforeach

  </tbody>
</table> -->

@endsection
