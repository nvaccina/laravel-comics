<footer>
    <div class="top">
      <div class="container">
        <div class="menu_footer">

          <div class="col">
            <nav>
              <h4>Dc Comics</h4>
              <ul>
                <li
                  v-for="( index) in footerMenu.dcComics"
                  :key="index"
                >
                  <a href="#">link</a>
                </li>
              </ul>
            </nav>
            <nav>
              <h4>Shop</h4>
              <ul>
                <li
                  v-for="in footerMenu.shop"

                >
                  <a href="#">link</a>
                </li>
              </ul>
            </nav>

          </div>

          <div class="col">
            <nav>
              <h4>Dc</h4>
              <ul>
                <li
                  v-for=" in footerMenu.dc"
                >
                  <a href="#">link</a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="col">
            <nav>
              <h4>Sites</h4>
              <ul>
                <li
                  v-for="in footerMenu.sites"
                >
                  <a href="#">link</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <div class="big_logo">
          <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
        </div>
      </div>

    </div>
    <div class="bottom ht-100">

      <div class="container ht-100">

        <div class="button_sign">
          <a href="#">SIGN-UP NOW!</a>
        </div>

        <div class="social">
          <h4>follow us</h4>
          <nav>
            <ul>
              <li
                v-for=in footerIcon"
              >
                <a href="#">
                  <img :src="icon.image" alt="">
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
  </footer>
