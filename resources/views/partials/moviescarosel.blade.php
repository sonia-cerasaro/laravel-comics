@extends('layouts.app')

@section('main')

<main>
  <div class="cent_cont">
    <div class="current_series">
      <h2>CURRENT SERIES</h2>
    </div>
    @foreach ($films as $index => $film)
    <a href="{{route('detail', ['id' => $index])}}" class="card_cont" >  <!--Questo codice visualizza ogni singolo elemento cliccato xche' gli abbiamo assegnato l'index-->
      <div>
        <div class="back_cont">
          <img src="
          {{ $film['thumb'] }}"
          >
        </div>
        <div class="title_cont">
          <p>
            {{ $film['series'] }}
          </p>
        </div>
      </div>
    </a>
    @endforeach
  </div>

   <div class="but_cont">
     <div class="cent_conte cent_cont_com text_center">
       <button type="button" name="button">
         LOAD MORE
       </button>
     </div>
   </div>

   <div class="blue_cont_last">
     <div class="cent_conteiner">
       <div class="card">
         <div class="cont_ic">
           <img src="/img/buy-comics-digital-comics.png">
         </div>
         <p>
           DIGITAL COMICS
         </p>
       </div>
       <div class="card">
         <div class="cont_ic">
           <img src="/img/buy-comics-merchandise.png">
         </div>
         <p>
           DC MERCHANDISE
         </p>
       </div>
       <div class="card">
         <div class="cont_ic">
           <img src="/img/buy-comics-subscriptions.png">
         </div>
         <p>
           SUBSCRIPTION
         </p>
       </div>
       <div class="card">
         <div class="cont_ic">
           <img src="/img/buy-comics-shop-locator.png">
         </div>
         <p>
           COMIC SHOP LOCATOR
         </p>
       </div>
       <div class="card">
         <div class="cont_ic">
           <img src="/img/buy-dc-power-visa.svg">
         </div>
         <p>
           DC POWER VISA
         </p>
       </div>
     </div>
   </div>
</main>

@endsection
