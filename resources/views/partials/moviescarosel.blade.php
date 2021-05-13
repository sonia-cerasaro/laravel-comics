@extends('layouts.app')

@section('main')

<main>
  <div class="cent_cont">
   @foreach ($films as $index => $film)
   <a href="{{route('detail', ['id' => $index])}}" class="card_cont" >  <!--Questo codice visualizza ogni singolo elemento cliccato xche' gli abbiamo assegnato l'index-->
     <div>
       <div class="back_cont">
         <img src=" {{ $film['thumb'] }}">
       </div>
       <div class="title_cont">
         {{ $film['series'] }}
       </div>
     </div>
   </a>
   @endforeach
  </div>

  <div class="but_cont">
    <button type="button" name="button">
      LOAD MORE
    </button>
  </div>
</main>



@endsection
