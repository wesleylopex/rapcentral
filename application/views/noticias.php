<!doctype html>
<html class="no-js" lang="en">
<head> 
  <?php include_once("utils/start.php") ?>
</head>
    <body>
        <!-- start header -->
        <?php include_once("utils/header.php") ?>
        <!-- end header -->
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('<?= base_url("assets/uploads/images/".$banner->imagem) ?>');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 extra-small-screen display-table page-title-large">
                        <div class="display-table-cell vertical-align-middle text-center">
                            <!-- start page title -->
                            <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">
                            <?= $banner->titulo ?>
                            </h1>
                            <span class="text-white opacity6 alt-font"><?= $banner->subtitulo ?></span>
                            <!-- end page title --> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section --> 
        <!-- start blog list section --> 
        <section>
            <div class="container-fluid padding-five-lr sm-padding-25px-lr xs-padding-15px-lr">
                <div class="row">
                    <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom sm-padding-15px-lr">
                        <!-- start post item -->
                        <?php foreach($noticias as $noticia) : ?>
                        <div class="equalize sm-equalize-auto blog-post-content margin-60px-bottom padding-60px-bottom display-inline-block border-bottom border-color-extra-light-gray sm-margin-30px-bottom sm-padding-30px-bottom xs-text-center sm-no-border">
                            <div class="blog-image col-md-5 no-padding sm-margin-30px-bottom xs-margin-20px-bottom margin-45px-right sm-no-margin-right display-table">
                                <div class="display-table-cell vertical-align-middle">
                                    <a href="<?= site_url("noticias/noticia/$noticia->slug") ?>">
                                        <img src="<?= base_url("assets/uploads/images/$noticia->thumbnail") ?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="blog-text col-md-6 display-table no-padding">
                                <div class="display-table-cell vertical-align-middle">
                                    <div class="content margin-20px-bottom sm-no-padding-left ">
                                        <a href="<?= site_url("noticias/noticia/$noticia->slug") ?>" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 display-inline-block"><?= $noticia->titulo ?></a>
                                        <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>por <a href="<?= site_url("autores/".$noticia->autor->slug) ?>" class="text-medium-gray"><?= $noticia->autor->nome ?></a></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><?= "$noticia->dia $noticia->mes $noticia->ano" ?></span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="<?= site_url("noticias/categoria/".$noticia->categoria->slug) ?>" class="text-medium-gray"><?= $noticia->categoria->nome ?></a></div>
                                        <p class="no-margin width-95"><?= nl2br($noticia->apresentacao) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <!-- end post item -->
                        <!-- start pagination -->
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top position-relative wow fadeInUp">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul>
                                    <li><a href="#"><i class="fa fa-long-arrow-left margin-5px-right xs-display-none"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-long-arrow-right margin-5px-left xs-display-none"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end pagination -->
                    </main>
                    <?php include_once("utils/aside.php") ?>
                </div>
            </div>
        </section>
        <!-- end blog list section -->  
        <!-- start footer --> 
        <?php include_once("utils/footer.php") ?>
        <!-- end footer -->
        
        <!-- END -->
        <?php include_once("utils/end.php") ?>
    </body>
</html>