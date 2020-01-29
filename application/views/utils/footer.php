<footer class="footer-classic-dark bg-extra-dark-gray padding-five-bottom xs-padding-30px-bottom">
            <div class="footer-widget-area padding-five-top padding-30px-bottom xs-padding-30px-top">
                <div class="container">
                    <div class="row">
                        <!-- start about -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">About Agency</div>
                            <p class="text-small width-95 xs-width-100 no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem Ipsum is simply dummy text of the and typesetting industry. </p>
                        </div>
                        <!-- end about -->
                        <!-- start blog post -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600 xs-text-center">Últimas notícias</div>
                            <ul class="latest-post position-relative top-3">
                                <?php foreach($ultimasNoticias as $noticia) : ?>
                                <li class="border-bottom border-color-medium-dark-gray">
                                    <figure>
                                        <a href="<?= site_url("noticias/noticia/$noticia->slug") ?>">
                                            <img src="<?= base_url("assets/uploads/images/$noticia->thumbnail") ?>" alt="">
                                        </a>
                                    </figure>
                                    <div class="text-small">
                                        <a href="<?= site_url("noticias/noticia/$noticia->slug") ?>">
                                            <?= $noticia->titulo ?>
                                        </a>
                                        <span class="clearfix"></span>
                                        <?= "$noticia->dia $noticia->mes $noticia->ano" ?> | by 
                                        <a href="<?= site_url("autores/").$noticia->autor->slug ?>">
                                            <?= $noticia->autor->nome ?>
                                        </a>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <!-- end blog post -->
                        <!-- start newsletter -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget sm-margin-30px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-15px-bottom font-weight-600">Subscribe Newsletter</div>
                            <p class="text-small width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <form id="subscribenewsletterform" action="javascript:void(0)" method="post">
                                <div class="position-relative newsletter width-95">
                                    <div id="success-subscribe-newsletter" class="no-margin-lr"></div>
                                    <input type="text" id="email" name="email" class="bg-transparent text-small no-margin border-color-medium-dark-gray" placeholder="Escreva seu e-mail...">
                                    <button id="button-subscribe-newsletter" type="submit" class="btn btn-arrow-small position-absolute border-color-medium-dark-gray"><i class="fa fa-caret-right no-margin-left"></i></button>
                                </div>   
                            </form>
                        </div>
                        <!-- end newsletter -->
                        <!-- start instagram -->
                        <div class="col-md-3 col-sm-6 col-xs-12 widget xs-margin-5px-bottom xs-text-center">
                            <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Follow us Instagram</div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-footer"></ul>
                            </div>
                        </div>
                        <!-- end instagram -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-bottom border-top border-color-medium-dark-gray padding-30px-top">
                    <div class="row">
                        <!-- start copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 text-left text-small xs-text-center">POFO - Portfolio Concept Theme</div>
                        <div class="col-md-6 col-sm-6 col-xs-12 text-right text-small xs-text-center">&COPY; 2017 POFO is Proudly Powered by <a href="http://www.themezaa.com" target="_blank" title="ThemeZaa">ThemeZaa</a></div>
                        <!-- end copyright -->
                    </div>
                </div>
            </div>
        </footer>