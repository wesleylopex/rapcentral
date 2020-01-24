<!doctype html>
<html class="no-js" lang="en">

<head>

  <title> Cecomatec | Produtos </title>
  <?php include("utils/start.php"); ?>
</head>

<body>
  <!-- start header -->
  <?php include_once("utils/header.php"); ?>

  <section class="wow fadeIn bg-light-gray padding-35px-top padding-35px-bottom page-title-small">
    <div class="container">
      <div class="row equalize xs-equalize-auto">
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 display-table">
          <div class="display-table-cell vertical-align-middle text-left xs-text-center">
            <h1 class="alt-font text-extra-dark-gray font-weight-600 no-margin-bottom text-uppercase">Produtos</h1>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 display-table text-right xs-text-left xs-margin-10px-top">
          <div class="display-table-cell vertical-align-middle breadcrumb text-small alt-font">
            <ul class="xs-text-center">
              <li><span class="text-dark-gray">Sempre o melhor para você</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title section -->


  <!-- start portfolio section -->
  <section class="wow fadeIn padding-90px-top sm-padding-50px-top xs-padding-30px-top" style="min-height: 500px;">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-offset-2">
          <div class="select-style medium-select icon-search-div">
            <input type="text" name="pesquisar" class="bg-transparent no-margin-bottom" placeholder="Buscar...">
          </div>
        </div>
        <div class="col-md-3">
          <div class="select-style medium-select cat-select">
            <select name="categorias" id="categorias" class="bg-transparent no-margin-bottom">
              <option value="todos">Todos</option>
              <option value="todos">Lorem</option>
              <option value="todos">Ipsum</option>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="select-style medium-select subcat-select" style="display: none;">
            <select name="subcategorias" id="subcategorias" class="bg-transparent no-margin-bottom">
            </select>
          </div>
        </div>
      </div>
    </div>
    <!-- start filter content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 no-padding xs-padding-15px-lr">
          <div class="filter-content overflow-hidden">
            <ul class="portfolio-grid border-around work-4col gutter-medium hover-option6 lightbox-portfolio">
              <li class="grid-sizer"></li>
              <!-- start portfolio-item item -->
              <li class="subcat-1 cat-1 prod-12 grid-item fadeInUp last-paragraph-no-margin produto todos" id="produto-12" style="visibility: visible; animation-name: fadeInUp; position: absolute; left: 22.9901%; top: 0px;">
                <a href="<?= site_url("produto") ?>">
                  <figure>
                    <div class="portfolio-img portfolio-item-style position-relative text-center overflow-hidden">
                      <img class="cursor-pointer-and-opacity" src="https://placehold.it/1920x1080" alt="" data-no-retina="">
                    </div>
                    <figcaption class="bg-white">
                      <div class="portfolio-hover-main text-center">
                        <div class="portfolio-hover-box vertical-align-middle">
                          <div class="portfolio-hover-content position-relative">
                            <span class="line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block">Injetora de Cera</span>
                            <p class="text-medium-gray text-extra-small text-uppercase">Injetora de Cera para Microfusão</p>
                          </div>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </a>
              </li>
              <!-- end portfolio item -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end filter content -->
  </section>
  <!-- end portfolio section -->
  <!-- start footer -->
  <?php include_once("utils/footer.php"); ?>
  <!-- end footer -->
  <!-- start scroll to top -->
  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
  <!-- end scroll to top  -->
  <!-- javascript libraries -->
  <?= include_once("utils/end.php") ?>

  <script type="text/javascript">
    var subcategorias = JSON.parse('<?php echo json_encode($subcategorias); ?>');

    var produtos = JSON.parse('<?php echo json_encode($produtos); ?>');


    var load_filtros = JSON.parse('<?php echo json_encode($load_filtros); ?>');

    var cat_selected = "";
    var subcat_selected = "";
    var filtro = "*";


    var filtro_pesquisa = "";

    $(document).ready(function() {
      $("select[name=categorias]").change(function() {
        $("select[name=subcategorias]").html("");
        $(".subcat-select").hide();
        var id_categoria = $(this).val();
        filtro = ".cat-" + id_categoria;
        cat_selected = filtro;
        if (filtro == ".cat-todos") {
          cat_selected = "*";
        }
        filtro = cat_selected;
        $('.portfolio-grid').isotope({
          filter: filtro
        });
        $.each(subcategorias, function(index, value) {
          if (value.id_categoria == id_categoria) {
            $("select[name=subcategorias]").append("<option value='" + value.id + "'>" + value.nome + "</option>");
            $(".subcat-select").fadeIn();
          }
        });

        if ($(".subcat-select").css("display") != "none") {
          $("select[name=subcategorias]").prepend("<option value=''>Todos</option>");
          $("[name=subcategorias]").val("");
        }
      });

      $("select[name=subcategorias]").change(function() {
        var id_subcategoria = $(this).val();
        subcat_selected = ".subcat-" + id_subcategoria;
        if (id_subcategoria == "") {
          subcat_selected = "";
        }

        filtro = cat_selected + subcat_selected;

        $('.portfolio-grid').isotope({
          filter: filtro
        });

      });



      if (load_filtros['categoria'] != false) {
        $("[name=categorias]").val(load_filtros['categoria']).trigger("change");
        if (load_filtros['subcategoria'] != false) {
          $("[name=subcategorias]").val(load_filtros['subcategoria']).trigger("change");
        }
      }

      $("[name=pesquisar]").keyup(function() {
        var val = $(this).val().toLowerCase();
        filtro_pesquisa = "";
        $.each(produtos, function(index, value) {
          if (!value.titulo.toLowerCase().includes(val)) {
            $("#produto-" + value.id).hide();
          } else {
            if (filtro_pesquisa != "") {
              filtro_pesquisa += ",";
            }
            filtro_pesquisa += ".prod-" + value.id;
            $("#produto-" + value.id).show();
          }
        });
        $('.portfolio-grid').isotope({
          filter: filtro_pesquisa
        });

      });
    });
  </script>
</body>

</html>