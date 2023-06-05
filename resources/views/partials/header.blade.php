

  <header>
    <div class="container ht-80">
      <div class="logo">
        <a href="#">
          <img src="/logo/dc-logo.png" alt="Logo Dc">
        </a>
      </div>

      <nav class="ht-80">
        <ul class="ht-80">
          <li
            class="ht-80"
            v-for="(link, index) in mainMenu"
            :key="index"
          >
            <a class="ht-80"
              href="#"
              :class="{'active' : link.isActive}"
              >link</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
