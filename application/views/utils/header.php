<section class="top-header">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-4 col-xs-12 col-sm-4">
        <div class="social-icon mt-0">
                            <ul>
                                <li><a class="fb-icon" href="#"><i class="tf-ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-googleplus-outline"></i></a></li>
                            </ul>
                        </div>
        </div>

        <div class="col-md-4 col-xs-12 col-sm-4">
          <!-- Site Logo -->

          <div class="logo text-center">
            <a href="index.html">
              <!-- replace logo here -->

              <svg width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g
                  id="Page-1"
                  stroke="none"
                  stroke-width="1"
                  fill="none"
                  fill-rule="evenodd"
                  font-size="40"
                  font-family="AustinBold, Austin"
                  font-weight="bold"
                >
                  <g
                    id="Group"
                    transform="translate(-108.000000, -297.000000)"
                    fill="#000000"
                  >
                    <text id="AVIATO">
                      <tspan
                        x="108.94"
                        y="325"
                      >CR</tspan>
                    </text>
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </div>

        <div class="col-md-4 col-xs-12 col-sm-4">
          <!-- Cart -->

          <ul class="top-menu text-right list-inline">
            <!-- Search -->

            <li class="dropdown search dropdown-slide">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="tf-ion-ios-search-strong"></i> Pesquisar
              </a>

              <ul class="dropdown-menu search-dropdown">
                <li>
                  <form action="post">
                    <input type="search" class="form-control" placeholder="Pesquisar notícias"></input>
                  </form>
                </li>
              </ul>
            </li>

            <!-- / Search -->
          </ul>

          <!-- / .nav .navbar-nav .navbar-right -->
        </div>
      </div>
    </div>
  </section>

  <!-- End Top Header Bar -->
  <!-- Main Menu Section -->

  <section class="menu">
    <nav class="navbar navigation">
      <div class="container">
        <div class="navbar-header">
          <h2 class="menu-title">Main Menu</h2>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- / .navbar-header -->
        <!-- Navbar Links -->

        <div id="navbar" class="navbar-collapse collapse text-center">
          <ul class="nav navbar-nav">
            <!-- Home -->

            <li class="<?= $page == "home" ? "active" : "" ?>">
              <a href="<?= base_url() ?>">Home</a>
            </li>
            <li class="<?= $page == "noticias" ? "active" : "" ?>">
              <a href="<?= site_url("noticias") ?>">Notícias</a>
            </li>
            <li>
              <a href="<?= site_url("noticias/categoria/internacional") ?>">Internacional</a>
            </li>
            <li>
              <a href="<?= site_url("noticias/categoria/nacional") ?>">Nacional</a>
            </li>
            <li>
              <a href="<?= site_url("noticias/categoria/lancamentos") ?>">Lançamentos</a>
            </li>
            <li>
              <a href="<?= site_url("contato") ?>">Contato</a>
            </li>

            <!-- / Blog -->
          </ul>

          <!-- / .nav .navbar-nav -->
        </div>

        <!-- /.navbar-collapse -->
      </div>

      <!-- / .container -->
    </nav>
  </section>