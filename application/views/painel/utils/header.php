<div class="main-header">
  <!-- Logo Header -->
  <div class="logo-header" data-background-color="black">
    <!--
					Tip 1: You can change the background color of the logo header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
				-->
    <!-- <a href="<?= site_url("painel/home") ?>" class="big-logo">
      <img src="<?= base_url() ?>assets/img/logoresponsive.png" alt="logo img" class="logo-img">
    </a> -->
    <a href="<?= site_url("painel/home") ?>" class="logo">
      <img src="<?= base_url() ?>assets/img/logo_jocc_branco.png" alt="navbar brand" class="navbar-brand">
    </a>
    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="la la-bars"></i>
      </span>
    </button>
    <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
  </div>
  <!-- End Logo Header -->
  <!-- Navbar Header -->
  <nav class="navbar navbar-header navbar-expand-lg" data-background-color="black">
    <!--
					Tip 1: You can change the background color of the navbar header using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
				-->
    <div class="container-fluid">
      <div class="navbar-minimize">
        <button class="btn btn-minimize btn-rounded">
          <i class="la la-navicon"></i>
        </button>
      </div>
      <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
        <li class="nav-item toggle-nav-search hidden-caret">
          <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
            <i class="flaticon-search-1"></i>
          </a>
        </li>
        <li class="nav-item dropdown hidden-caret">
          <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="la la-cog"></i>
          </a>
        </li>
        <li class="nav-item dropdown hidden-caret">
          <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
            <img src="<?= base_url("assets/uploads/images/".$this->session->userdata("imagem")) ?>" alt="image profile" width="36" height="36" class="img-circle">
          </a>
          <ul class="dropdown-menu dropdown-user animated fadeIn">
            <li>
              <div class="user-box">
                <div class="profile-pic">
                  <img src="<?= base_url("assets/uploads/images/".$this->session->userdata("imagem")) ?>" alt="image profile" width="60" height="60" class="img-circle">
                </div>
                <div class="u-text">
                  <h4><?= $this->session->userdata("nome") ?></h4>
                  <p class="text-muted"><?= $this->session->userdata("telefone") ?></p>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= site_url("painel/usuarios/editar/".$this->session->userdata("id")) ?>">Configurações</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= site_url("painel/login/logout") ?>">Sair</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Navbar -->
</div>
<!-- Sidebar -->
<div class="sidebar">
  <!--
				Tip 1: You can change the background color of the sidebar using: data-background-color="black | dark | blue | purple | light-blue | green | orange | red"
				Tip 2: you can also add an image using data-image attribute
			-->
  <div class="sidebar-wrapper scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav">
        <li class="nav-item  <?= isset($nomes) && $nomes["link"] == "home" ? "active" : "" ?>">
          <a href="<?= site_url("painel/home") ?>">
            <i class="la la-home"></i>
            <p>Home</p>
          </a>
        </li>

        <!-- GERAL -->
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="la la-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Geral</h4>
        </li>
        <li class="nav-item <?= isset($nomes) && $nomes["link"] == "usuarios" ? "active" : "" ?>">
          <a href="<?= site_url("painel/usuarios") ?>">
            <i class="flaticon-user"></i>
            <p>Usuários</p>
          </a>
        </li>

        <!-- NOTICIAS -->
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="la la-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Notícias</h4>
        </li>
        <li class="nav-item <?= isset($nomes) && $nomes["link"] == "noticias" ? "active" : "" ?>">
          <a href="<?= site_url("painel/noticias") ?>">
            <i class="la la-keyboard-o"></i>
            <p>Notícias</p>
          </a>
        </li>
        <li class="nav-item <?= isset($nomes) && $nomes["link"] == "categoriasNoticias" ? "active" : "" ?>">
          <a href="<?= site_url("painel/categoriasNoticias") ?>">
            <i class="la la-align-justify"></i>
            <p>Categorias</p>
          </a>
        </li>
        
        <!-- PRODUTOS -->
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="la la-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Produtos</h4>
        </li>
        <li class="nav-item <?= isset($nomes) && $nomes["link"] == "produtos" ? "active" : "" ?>">
          <a href="<?= site_url("painel/produtos") ?>">
            <i class="la la-mobile"></i>
            <p>Produtos</p>
          </a>
        </li>
        <li class="nav-item <?= isset($nomes) && $nomes["link"] == "categoriasProdutos" ? "active" : "" ?>">
          <a href="<?= site_url("painel/categoriasProdutos") ?>">
            <i class="la la-align-justify"></i>
            <p>Categorias</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>