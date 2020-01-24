<div id="loader_div">
  <div id="loader"></div>
</div>

<header class="header-with-topbar padding-100px-bottom">
  <!-- topbar -->
  <div class="top-header-area bg-extra-dark-gray padding-5px-tb">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 text-uppercase alt-font xs-no-padding-lr xs-text-center">
          <a href="tel:+55(54)32615048" class="text-link-orange xs-width-100">(54) 3261-5048</a>
          <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-lr hidden-xs position-relative vertical-align-middle top-minus1"></div>
          <a href="mailto:contato@cecomatec.com.br" class="text-link-orange xs-width-100">contato@cecomatec.com.br</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs xs-no-padding-lr text-right">
          <div class="btn-group dropdown-style-1 xs-width-100 xs-text-center xs-margin-three-bottom display-inline-block">
            <button type="button" class="btn dropdown-toggle xs-width-100 hover-orange" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Português (Brasil)<span class="caret"></span>
            </button>
            <ul class="dropdown-menu xs-width-100" name="idioma">
              <li><a href="../en/"><span class="icon-country usa"></span>Inglês</a></li>
              <li><a href="../es/"><span class="icon-country esp"></span>Espanhol</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- start navigation -->
  <nav class="navbar navbar-default bootsnav navbar-top header-light bg-transparent nav-box-width" style="opacity: 1;">
    <div class="container nav-header-container">
      <div class="row">
        <!-- start logo -->
        <div class="col-md-4 col-xs-5">
          <a href="index.php" class="logo">
            <img src="<?= base_url() ?>assets/img/logo.png" data-no-retina class="logo-dark default" style="max-height:40px;">
          </a>
        </div>
        <!-- end logo -->
        <div class="col-md-6 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
          <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
            <span class="sr-only">toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
            <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
              <!-- start menu item -->
              <li>
                <a class="hover-orange" href="index.php">Início</a>
              </li>

              <li class="dropdown simple-dropdown">
                <a class="hover-orange" href="produtos.php">Produtos</a>
                <ul class="dropdown-menu animated fadeOut" role="menu" style="top: 72px; display: none; opacity: 1;background-color:white;border:1px solid #f9f9f9; width: 250px;">
                  <li class='dropdown'><a href='produtos.php?categoria=".$arrayCats[$c]->getId()."' class='dropdown-toggle hover-orange' data-toggle='dropdown' style='color:black;'>".utf8_encode($arrayCats[$c]->getNome())."<i class='fa fa-angle-right'></i></a>
                    <ul class='dropdown-menu animated fadeOut' style='top:0px;display: none; opacity: 1;background-color:white;border:1px solid #f9f9f9;'>
                      <li><a href='produtos.php?categoria=".$arrayCats[$c]->getId()."&subcategoria=".$arraySubs[$j]->getId()."' class='hover-orange' style='color:black;'>".utf8_encode($arraySubs[$j]->getNome())."</a></li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="dropdown simple-dropdown">
                <a class="hover-orange" href="servicos.php">Serviços</a>
                <ul class="dropdown-menu animated fadeOut" role="menu" style="top: 72px; display: none; opacity: 1;background-color:white;border:1px solid #f9f9f9;">
                  <li><a href="servicos.php#Microfusao" class="hover-orange" style="color:black;">Assessoria Microfusão</a></li>
                  <li><a href="servicos.php#Usinagem" class="hover-orange" style="color:black;">Usinagem</a></li>
                  <li><a href="servicos.php#Norma" class="hover-orange" style="color:black;">Norma NR-12</a></li>
                </ul>
              </li>

              <li>
                <a class="hover-orange" href="empresa.php">Empresa</a>
              </li>

              <li>
                <a class="hover-orange" href="contato.php">Contato</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-xs-8 width-auto">
          <div class="header-searchbar">
            <a href="https://www.facebook.com/cecomatecmaquinas/" title="Facebook" target="_blank" class="hover-orange text-extra-dark-gray"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/cecomatec-m%C3%A1quinas-e-equipamentos-2a1665134" title="Linked In" target="_blank" class="hover-orange text-extra-dark-gray"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.youtube.com/channel/UCvwAiKZqMXHaCcdzi7Rxl_A" title="Linked In" target="_blank" class="hover-orange text-extra-dark-gray"><i class="fa fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- end navigation -->
</header>