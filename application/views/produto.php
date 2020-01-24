<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <!-- title -->
  <title> Cecomatec </title>
  <?php include_once("utils/start.php") ?>
</head>

<body>

  <?php include_once("utils/header.php") ?>

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
  <section class="wow fadeIn animated animated" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
      <div class="row equalize sm-equalize-auto">
        <div class="col-md-5 col-sm-12 col-xs-12 text-center sm-margin-30px-bottom wow fadeInLeft height-100" style="visibility: visible; animation-name: fadeInLeft; height: 371px;">
          <div class="blog-post-content xs-margin-30px-bottom xs-text-center">
            <div class="swiper-full-screen swiper-container white-move">
              <div class="swiper-wrapper tiles">

                <div class="swiper-slide">
                  <div class="tile zoom-in" data-scale='2.4' data-image="https://1920x1080">
                    <div class="photo" style="background-image: url(https://placehold.it/1920x1080); transform: scale(1); transform-origin: 51.9651% 33.4792%;"></div>
                  </div>
                </div>
              </div>

              <div class="swiper-pagination swiper-pagination-square swiper-pagination-white"></div>
              <div class="swiper-button-next swiper-button-black-highlight"></div>
              <div class="swiper-button-prev swiper-button-black-highlight"></div>
            </div>
            <div class="tiles">
              <div class="swiper-slide">
                <div class="tile zoom-in" data-scale='2.4' data-image="https://1920x1080">
                  <div class="photo" style="background-image: url(https://placehold.it/1920x1080); transform: scale(1); transform-origin: 51.9651% 33.4792%;"></div>
                </div>
              </div>
            </div>
            <div class="swiper-slide"><img src="http://placehold.it/900x650" width="960" height="650" alt="http://placehold.it/900x650"></div>
          </div>
          <a href="" class="popup-vimeo btn btn-medium btn-transparent-black text-medium btn-rounded"> Vídeo <i class="fa fa-youtube-play icon-very-small" aria-hidden="true"></i></a>
        </div>

        <div class="col-md-7 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight; height: 371px;">
          <div class="display-table width-100 height-100">
            <div class="display-table-cell vertical-align-middle padding-twelve-lr sm-text-center sm-no-padding width-100">
              <span class="text-orange alt-font margin-10px-bottom display-inline-block text-large"></span>
              <h6 class="alt-font text-extra-dark-gray"></h6>
              <div class="text-medium">
                <p></p>
              </div>

              <a href="#contact-form" class="btn btn-orange-style-2 btn-large btn-soft-rounded wow fadeInDown popup-with-form xs-margin-5px-bottom"> Solicite mais informações </a>
              <div class="col-md-8 col-sm-6 col-xs-12 sm-margin-seven-bottom xs-margin-40px-bottom wow fadeInRight last-paragraph-no-margin margin-30px-top no-padding-lr">
                <a href="https://www.bndes.gov.br/wps/portal/site/home/financiamento/finame/!ut/p/z1/04_iUlDg4tKPAFJABpSA0fpReYllmemJJZn5eYk5-hH6kVFm8T6W3q4eJv4GPu5mfk4Gji6Wlh7ezkaGBi5m-l76UfgVFGQHKgIAWRAQKw!!/" target="_blank"><img src="<?= base_url() ?>assets/site/img/bndes.jpg" style=" width:95px; margin-bottom:7px;" /></a>
                <p style="font-size:14px; line-height: 1.45"> Consulte as linhas de financiamento para suas necessidades em máquinas e componentes. </p>
              </div>
            </div>
          </div>
          <form id="contact-form" method="POST" action="php/enviarEmail.php" class="white-popup-block mfp-hide col-md-3 no-padding center-col">
            <input type="hidden" value="1" name="id" />
            <div class="padding-fifteen-all bg-white border-radius-6 md-padding-seven-all" style="line-height: 15px;">
              <div class="text-extra-dark-gray alt-font text-large font-weight-600">Solicitar Informações</div>
              <small style="font-size: 11px;">Nossos especialistas entrarão em contato para maiores informações</small>
              <div class="margin-30px-top">
                <div id="success-contact-form" class="no-margin-lr"></div>
                <input type="text" name="nome" id="nome" placeholder="Nome Completo *" class="input-bg" required>
                <input type="text" name="empresa" id="empresa" placeholder="Empresa *" class="input-bg" required="">
                <input type="text" name="endereco" id="endereco" placeholder="Cidade / UF *" class="input-bg" required>
                <input type="tel" name="tel" id="tel" placeholder="Telefone *" class="input-bg" required>
                <input type="email" name="emailCliente" id="email" placeholder="Email *" class="input-bg" required>
                <textarea name="mensagem" id="mensagem" placeholder="Mensagem *" class="input-bg" required=""></textarea>
                <div class="text-center">
                  <button id="enviar" type="submit" class="btn btn-orange-style-2 btn-large btn-soft-rounded width-100" style="border: 1px solid;"> Solicitar </button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="wow fadeIn no-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 center-col">
          <div class="panel-group accordion-style1" id="accordion-design">

            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-design" href="#design1" aria-expanded="true">
                  <div class="panel-title alt-font font-weight-500 text-extra-dark-gray text-uppercase">Características<span class="pull-right"><i class="ti-minus"></i></span></div>
                </a>
              </div>
              <div id="design1" class="panel-collapse collapse in" aria-expanded="true" role="tablist">
                <div class="panel-body text-medium">
                  Características
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-design" href="#design2" class="collapsed" aria-expanded="false">
                  <div class="panel-title alt-font font-weight-500 text-extra-dark-gray text-uppercase">Downloads<span class="pull-right"><i class="ti-plus"></i></span></div>
                </a>
              </div>
              <div id="design2" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                <div class="panel-body text-medium text-center">
                  <a target="_blank" style="width: 100%;">
                    <button class="btn btn-small btn-soft-rounded btn-style-download wow fadeInDown">
                      <i class="fa fa-file-text-o" aria-hidden="true"></i>
                      Download
                    </button>
                  </a>
                </div>
              </div>

            </div>
            <div class="panel">
              <div class="panel-heading">
                <a data-toggle="collapse" data-parent="#accordion-design" href="#design3" aria-expanded="true">
                  <div class="panel-title alt-font font-weight-500 text-extra-dark-gray text-uppercase">Modelos<span class="pull-right"><i class="ti-plus"></i></span></div>
                </a>
              </div>
              <div id="design3" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                <div class="panel-body text-medium">
                  <div class="row margin-15px-all" style="border:1px solid rgba(0, 0, 0, 0.1); border-radius: 5px">
                    <div class="col-md-4 no-padding">
                      <ul class="list-style-11">
                        <li>Modelo 1</li>
                        <li>Modelo 2</li>
                        <li>Modelo 3</li>
                      </ul>
                    </div>
                    <div class="col-md-4 no-padding">
                      <ul class="list-style-11">
                        <li>105 m</li>
                        <li>25 m</li>
                        <li>50 m</li>
                      </ul>
                    </div>
                    <div class="col-md-4 no-padding">
                      <ul class="list-style-11">
                        <li>150 L</li>
                        <li>90 L</li>
                        <li>130 L</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row equalize xs-equalize-auto">

        <div class="col-md-12 margin-three-bottom text-center sm-display-block height-auto">
          <h6 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-2 text-uppercase"> Produtos Relacionados </h6>
          <!-- <div class="separator-line-horrizontal-full bg-extra-light-gray width-50 center-col"></div> -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 banner-style3 no-padding-lr">
          <figure class="bg-extra-dark-gray">
            <div class="banner-image bg-extra-dark-gray">
              <img src="https://placehold.it/1920x1080" alt="" />
            </div>
            <figcaption>
              <div class="display-table width-100 height-100">
                <div class="display-table-cell vertical-align-middle text-center">
                  <div class="text-large text-white alt-font text-uppercase font-weight-600 margin-10px-bottom padding-15px-lr">Lorem</div>
                  <p class="text-light-gray width-80 margin-lr-auto">Lorem</p>
                  <a href="produto_especifico.php?nome=" class="btn btn-orange-style-2 btn-medium btn-soft-rounded font-weight-300"> Veja Mais </i></a>
                </div>
              </div>
            </figcaption>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <?php include_once("utils/footer.php"); ?>

  <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>

  <?php include_once("utils/end.php") ?>
</body>

</html>