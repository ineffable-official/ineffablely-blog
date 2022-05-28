<nav class="navbar">
  <div class="container">
    <div class="menu-mobile-btn" id="menu-btn" onclick="showMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <a href="/" class="logo-brand">

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508 482">
        <rect width="90" height="482" />
        <polygon points="230 280 230 393 508 393 508 482 142 482 142 0 508 0 508 2 230 280" />
      </svg>
    </a>
    <div class="btn ms-auto" id="search-btn" onclick="showSearchModal()">
      <i class="fa-solid fa-search"></i>
    </div>

    <?php get_search_form() ?>

    <ul class="nav">
      <li class="nav-item d-block">
        <a href="#" class="nav-link text-black">Home</a>
      </li>
      <li class="nav-item d-block">
        <a href="#" class="nav-link text-black">Recomendation</a>
      </li>
      <li class="nav-item d-block sub-menu">
        <a class="nav-link text-black d-flex">Category <div class="ms-1 me-1"><i class="fa-solid fa-chevron-down"></i></div></a>
        <ul class="nav">
          <li class="nav-item">
            <a href="#" class="nav-link text-black">HTML</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-black">CSS</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-black">Python</a>
          </li>
        </ul>
      </li>
      <li class="nav-item d-block">
        <a href="#" class="nav-link text-black">Policy and Terms</a>
      </li>
    </ul>

  </div>
</nav>