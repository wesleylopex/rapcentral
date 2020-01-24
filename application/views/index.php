<!doctype html>
<html class="no-js" lang="pt-br">

<head>
  <title> Cecomatec </title>
  <?php include("utils/start.php"); ?>
</head>

<body>

  <!-- start header -->
  <?php include_once("utils/header.php"); ?>
  <!-- end header -->

  <!-- start slider section -->
  <section class="wow fadeIn no-padding main-slider height-100" style="margin-top: -100px;">
    <div class="swiper-full-screen swiper-container width-100 white-move">
      <div class="swiper-wrapper">
        <!-- start slider item -->
        <div class="swiper-slide cover-background" style="background-image:url(https://placehold.it/1920x1080); cursor: default" id="img_1">
          <div class="opacity-extra-medium bg-extra-dark-gray"></div>
          <div class="position-relative full-screen">
            <div class="maquina">
              <figure></figure>
            </div>
            <div class="elemento-esquerda">
              <figure></figure>
            </div>
            <div class="elemento-direita">
              <figure></figure>
            </div>
            <!-- texto -->
            <div class="slider-typography text-center container-text">
              <div class="slider-text-middle-main">
                <div class="slider-text-middle" style="vertical-align: bottom">
                  <span class="text-medium text-very-light-gray font-weight-300 width-95 center-col display-block margin-10px-bottom subtitle">Máquinas e equipamentos para os mais diversos setores</span>
                  <h5 class="alt-font text-uppercase text-white font-weight-700 width-50 xs-width-90 sm-width-70 center-col" style="line-height: 30px">Máquinas personalizadas</h5>
                  <a href="produtos.php" class="btn btn-orange-style-2 btn-small btn-soft-rounded">Conheça nossos produtos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->
        <!-- start slider item -->

        <div class="swiper-slide cover-background" style="background-image:url(https://placehold.it/1920x1080); cursor: default" img="img_2">
          <div class="opacity-extra-medium bg-extra-dark-gray"></div>
          <div class="container position-relative full-screen xs-height-400px">
            <div class="slider-typography text-center">
              <div class="slider-text-middle-main">
                <div class="slider-text-middle">
                  <span class="text-large text-very-light-gray font-weight-300 width-95 center-col margin-25px-bottom display-block">Há 20 anos atendendo toda América Latina</span>
                  <h3 class="alt-font text-uppercase text-white font-weight-700 width-75 xs-width-90 center-col margin-30px-bottom">Liderança na América do Sul</h3>
                  <div style="margin-bottom:-60px;"><a href="empresa.php" class="btn btn-orange-style-2 btn-large btn-soft-rounded">Conheça a Cecomatec</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end slider item -->
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination swiper-pagination-white"></div>
      <div class="swiper-button-next swiper-button-black-highlight display-none"></div>
      <div class="swiper-button-prev swiper-button-black-highlight display-none"></div>
    </div>
  </section>
  <!-- end slider section -->
  <!-- start recent work section -->
  <section class="bg-light-gray wow fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-col margin-five-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
          <h6 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-2 text-uppercase"> Conheça nossos Produtos </h6>
          <div class="separator-line-horrizontal-full bg-extra-light-gray width-30 center-col"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 no-padding xs-padding-15px-lr">
          <div class="filter-content overflow-hidden">
            <div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 margin-15px-tb'>
              <a href='produto_especifico.php?nome=".trim($value->get("nome"))."'>
                <figure>
                  <div class='position-relative text-center'>
                    <img class='cursor-pointer-and-opacity' src="https://placehold.it/1920x1080" alt='' />
                  </div>

                  <figcaption class='bg-white text-center padding-10px-all'>
                    <span class='line-height-normal font-weight-600 text-small alt-font margin-5px-bottom text-extra-dark-gray text-uppercase display-block'>Título</span>
                    <p class='text-medium-gray text-extra-small text-uppercase'>Categoria</p>
                  </figcaption>
                </figure>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12 col-sm-12 col-xs-12 sm-text-center wow fadeInDown padding-40px-top">
          <a href="produtos.php" class="btn btn-orange-style-2 btn-large btn-soft-rounded" data-wow-delay="0.4s">Veja mais</a>
        </div>
      </div>
    </div>
  </section>


  <section class="no-padding wow fadeIn bg-white" style="visibility: visible; animation-name: fadeIn;">
    <div class="container-fluid">
      <div class="row equalize sm-equalize-auto">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 cover-background sm-height-500px xs-height-350px wow fadeInLeft" style="background-image: url(https://placehold.it/1920x1080); visibility: visible; animation-name: fadeInLeft; height: 699px;" id="img_3"></div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight padding-six-all" style="visibility: visible; animation-name: fadeInRight;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-margin-30px-bottom xs-no-padding-lr">
            <h5 class="alt-font text-extra-dark-gray sm-text-center sm-width-70 sm-margin-lr-auto xs-width-100 text-uppercase font-weight-700 sm-no-margin-bottom">
              Fornecedor nº 1 de Máquinas para Fundição de Precisão Industrial
            </h5>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 md-no-padding-right xs-no-padding last-paragraph-no-margin text-medium text-extra-dark-gray">
            <p class="width-90 xs-width-100 div-text-content">Cecomatec: há 20 anos atendendo a toda América Latina</p>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-four-bottom md-no-padding-right md-margin-30px-bottom xs-margin-30px-bottom xs-no-padding last-paragraph-no-margin">
            <div class="content">
              <div class="row ">
                <div class="col-sm-12 div-text-content margin-four-tb">
                  <span class="text-justify text-medium">
                    A Cecomatec fornece máquinas e equipamentos industriais há mais de 20 anos,
                    para toda a América Latina e países da União Europeia. Além de nossas linhas de
                    produto, ainda criamos máquinas personalizadas para cada necessidade operacional da sua indústria.
                    Também atuamos no assessoramento a empresas iniciantes em
                    fundição de precisão: com uma metodologia completa que compreende
                    desde a determinação do layout da planta industrial até a escolha do maquinário mais eficiente.
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 md-no-padding-right xs-no-padding text-center last-paragraph-no-margin">
            <a href="empresa.php">
              <button class="btn btn-large btn-orange-style-2 border-radius-10">Conheça a Cecomatec</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="wow fadeIn no-padding bg-light-gray border-top border-color-light-gray">
    <div class="container-fluid">
      <div class="row equalize sm-equalize-auto">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight padding-six-all sm-padding-50px-bottom" style="visibility: visible; animation-name: fadeInRight;">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 xs-margin-30px-bottom xs-no-padding-lr">
            <h5 class="alt-font text-extra-dark-gray sm-text-center sm-width-70 sm-margin-lr-auto xs-width-100 text-uppercase font-weight-700 no-margin-bottom">
              Finame e BNDES
            </h5>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-four-bottom md-no-padding-right md-margin-30px-bottom xs-margin-30px-bottom xs-no-padding last-paragraph-no-margin">
            <div class="content">
              <div class="row ">
                <div class="col-sm-12 div-text-content margin-four-tb">
                  <span class="text-justify text-medium">
                    O BNDES FINAME é um programa de financiamento a longo prazo, para a aquisição de máquinas e equipamentos para a sua empresa, seja qual for o seu porte e independente da sua localização no país. Com o financiamento do Banco Nacional de Desenvolvimento Econômico e Social - BNDS, você possui condições e vantagens diferenciadas para modernizar o seu negócio.
                    O objetivo do FINAME é melhorar a produtividade das empresas e empreendedores, assim como fomentar a modernização dos equipamentos. Para utilizar o FINAME, as máquinas e equipamentos devem ser novos e, preferencialmente, de fabricação nacional. A Cecomatec é uma empresa fornecedora de produtos credenciados pelo programa BNDES FINAME.
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 md-no-padding-right xs-no-padding text-center last-paragraph-no-margin">
            <a target="_blank" href="https://www.bndes.gov.br/wps/portal/site/home/financiamento/finame/!ut/p/z1/04_iUlDg4tKPAFJABpSA0fpReYllmemJJZn5eYk5-hH6kVFm8T6W3q4eJv4GPu5mfk4Gji6Wlh7ezkaGBi5m-l76UfgVFGQHKgIAWRAQKw!!/">
              <button class="btn btn-large btn-orange-style-2 border-radius-10">Saber mais</button>
            </a>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 no-padding cover-background sm-height-500px xs-height-350px wow fadeInLeft" id="img_2" style="background-image: url('<?= base_url() ?>assets/site/img/bndes.png'); height: 699px;">
        </div>
      </div>
    </div>
  </section>

  <section class="wow fadeIn bg-light-gray no-padding" style="visibility: visible; animation-name: fadeIn;">
    <div class="container-fluid padding-15px-bottom padding-100px-top">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 center-col text-center xs-margin-40px-bottom margin-five-bottom">
          <div class="position-relative overflow-hidden width-100">
            <h6 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-2 text-uppercase"> Nossos serviços </h6>
            <div class="separator-line-horrizontal-full bg-extra-light-gray width-30 center-col"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- start interactive banners item -->
        <div class="col-md-4 col-sm-4 col-xs-12 padding-5px-all grid-item feature-box-4 wow slideInDown" style="visibility: visible; animation-name: slideInDown;">
          <div class="position-relative overflow-hidden">
            <figure style="margin: 0">
              <img src="<?= base_url() ?>assets/site/img/001_index.jpg" alt="Assessoria Microfusão" style="height:338px;">
              <div class="opacity-medium bg-extra-dark-gray"></div>
              <figcaption>
                <span class="text-medium-gray margin-10px-bottom display-inline-block ">Conte com uma assessoria completa em <br>função de precisão</span>
                <div class="separator-line-horrizontal-full display-inline-block margin-10px-bottom" style="background-color: orange;"></div>
                <span class="text-extra-large display-block text-white alt-font margin-25px-bottom width-90 md-width-100 sm-width-100 sm-margin-seven-bottom xs-width-100">Assessoria Microfusão</span>
                <a href="servicos.php?#Microfusao" class="btn btn-small btn-orange font-weight-300">Saiba mais</a>
              </figcaption>
            </figure>
          </div>
        </div>
        <!-- end interactive banners item -->
        <div class="col-md-4 col-sm-4 col-xs-12 padding-5px-all grid-item feature-box-4 wow slideInDown" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: slideInDown;">
          <div class="position-relative overflow-hidden">
            <figure style="margin: 0">
              <img src="<?= base_url() ?>assets/site/img/norma.png" alt="Reformas e adequações NR12" style="height:338px;">
              <div class="opacity-medium bg-extra-dark-gray"></div>
              <figcaption>
                <span class="text-medium-gray margin-10px-bottom display-inline-block ">Em conformidade com a NR-12</span>
                <div class="separator-line-horrizontal-full display-inline-block margin-10px-bottom" style="background-color: orange;"></div>
                <span class="text-extra-large display-block text-white alt-font margin-25px-bottom width-90 md-width-100 sm-width-100 sm-margin-seven-bottom xs-width-100">Reformas e adequações NR12</span>
                <a href="servicos.php?#Norma" class="btn btn-small btn-orange font-weight-300">Saiba mais</a>
              </figcaption>
            </figure>
          </div>
        </div>
        <!-- start interactive banners item -->
        <div class="col-md-4 col-sm-4 col-xs-12 padding-5px-all grid-item feature-box-4 wow slideInDown" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInDown;">
          <div class="position-relative overflow-hidden">
            <figure style="margin: 0">
              <img src="<?= base_url() ?>assets/site/img/usinagem.png" alt="Usinagem" style="height:338px;">
              <div class="opacity-medium bg-extra-dark-gray"></div>
              <figcaption>
                <span class="text-medium-gray margin-10px-bottom display-inline-block ">Alta tecnologia com a qualidade Cecomatec</span>
                <div class="separator-line-horrizontal-full display-inline-block margin-10px-bottom" style="background-color: orange;"></div>
                <span class="text-extra-large display-block text-white alt-font margin-25px-bottom width-90 md-width-100 sm-width-100 sm-margin-seven-bottom xs-width-100">Usinagem</span>
                <a href="servicos.php?#Usinagem" class="btn btn-small btn-orange font-weight-300">Saiba mais</a>
              </figcaption>
            </figure>
          </div>
        </div>
        <!-- end interactive banners item -->
      </div>
    </div>
  </section>

  <!-- call to action -->
  <section class="wow fadeIn padding-60px-tb border-top border-width-1 border-color-extra-light-gray">
    <div class="container">
      <div class="row text-center padding-one-half-bottom">

        <div class="col-md-12 col-sm-12 col-xs-12 sm-margin-10px-bottom sm-text-center wow fadeInDown">
          <span class="alt-font text-large sm-no-margin-top display-inline-block width-100" style="color:#6f6f6f;"> Quer saber mais sobre nossos produtos? </span>
        </div>
      </div>

      <div class="row text-center">

        <div class="col-md-12 col-sm-12 col-xs-12 sm-text-center wow fadeInDown">
          <a href="contato.php" class="btn btn-orange-style-2 btn-large btn-soft-rounded" data-wow-delay="0.4s">Fale com a Cecomatec </a>
        </div>
      </div>
    </div>
  </section>

  <!-- start footer -->
  <?php include_once("utils/footer.php"); ?>
  <!-- end footer -->
  <!-- start scroll to top -->
  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
  <!-- end scroll to top  -->

  <?php include_once("utils/end.php") ?>

</body>

</html>