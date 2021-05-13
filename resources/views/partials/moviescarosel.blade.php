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

  <div class="but_cont">
    <button type="button" name="button">
      LOAD MORE
    </button>
  </div>

</main>
