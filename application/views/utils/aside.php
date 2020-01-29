<aside class="col-md-3 pull-right">
                        <div class="display-inline-block width-100 margin-45px-bottom xs-margin-25px-bottom">
                            <?= form_open("noticias/pesquisar") ?>
                                <div class="position-relative">
                                    <input type="text" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" name="pesquisa" placeholder="Pesquise uma notícia...">
                                    <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fa fa-search no-margin-left"></i></button>
                                </div>   
                            </form>
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Estamos por aqui também</span></div>
                            <div class="social-icon-style-1 text-center">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="http://instgram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categorias</span></div>
                            <ul class="list-style-6 margin-50px-bottom text-small">
                                <li><a href="<?= site_url("noticias") ?>">Todas</a></li>
                                <?php foreach($categorias as $categoria) : ?>
                                <li><a href="<?= site_url("noticias/categoria/$categoria->slug") ?>"><?= $categoria->nome ?></a></li>
                                <?php endforeach ?>
                            </ul>   
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Últimas notícias</span></div>
                            <ul class="latest-post position-relative">
                                <?php foreach($ultimasNoticias as $noticia) : ?>
                                <li>
                                    <figure>
                                        <a href="<?= site_url("noticias/noticia/$noticia->slug") ?>">
                                        <img src="<?= base_url("assets/uploads/images/$noticia->thumbnail") ?>" alt="">
                                      </a>
                                    </figure>
                                    <div class="display-table-cell vertical-align-top text-small">
                                      <a href="<?= site_url("noticias/noticia/$noticia->slug") ?>" class="text-extra-dark-gray">
                                        <span class="display-inline-block margin-5px-bottom">
                                          <?= $noticia->titulo ?>
                                        </span>
                                      </a>
                                      <span class="clearfix text-medium-gray text-small">
                                        <?= "$noticia->dia $noticia->mes $noticia->ano" ?>
                                      </span>
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="margin-45px-bottom xs-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
                            <div class="display-inline-block width-100">
                                <form>
                                    <div class="position-relative">
                                        <input type="email" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" placeholder="Escreva seu e-mail...">
                                        <button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="fa fa-envelope-o no-margin-left"></i></button>
                                    </div>   
                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Instagram</span></div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-aside"></ul>
                            </div>
                        </div>
                    </aside>