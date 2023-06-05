

<main>
    <div class="container">
      <h4>current series</h4>

      <div class="cards-wrapper">

        <Cards
          v-for="(card, index) in DcComics"
          :key="index"
          :image="card.thumb"
          :nameSeries="card.series"
        />
      </div>
      <div class="button_load">
          <a href="#">LOAD MORE</a>
      </div>
    </div>
  </main>
