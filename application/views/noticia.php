<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <?php include_once("utils/start.php") ?>
</head>

<body id="body">

<!-- Start Top Header Bar -->
  <?php include_once("utils/header.php") ?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name"><?= $noticia->titulo ?></h1>
					<ol class="breadcrumb">
						<li><a href="./">home</a></li>
						<li><a href="<?= site_url("noticias") ?>">notícias</a></li>
						<li class="active"><?= $noticia->titulo ?></li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="post post-single">
					<div class="post-thumb">
						<img class="img-responsive" src="<?= base_url("assets/uploads/images/$noticia->imagem") ?>" alt="">
					</div>
					<h2 class="post-title"><?= $noticia->titulo ?></h2>
					<div class="post-meta">
					<a href="" class="author underline-hover">por <?= $noticia->autor->nome ?></a> /
              <span class="date"><?= "$noticia->dia $noticia->mes $noticia->ano" ?></span>
					</div>
					<div class="post-content post-excerpt mt-25px">
					<?= $noticia->texto ?>		
				</div>
				    <div class="post-social-share">
				        <h3 class="post-sub-heading">Compartilhe esta notícia</h3>
				        <div class="social-media-icons">
				        	<ul>
								<li><a class="facebook" href=""><i class="tf-ion-social-facebook"></i></a></li>
								<li><a class="twitter" href=""><i class="tf-ion-social-twitter"></i></a></li>
								<li><a class="instagram" href=""><i class="tf-ion-social-instagram"></i></a></li>
							</ul>
				        </div>
				    </div>

				    <div class="post-comments">
				    	<h3 class="post-sub-heading">10 Comments</h3>
				    	<ul class="media-list comments-list m-bot-50 clearlist">
						    <!-- Comment Item start-->
						    <li class="media">

						        <div class="media-body">
						            <div class="comment-info">
						                <h4 class="comment-author">
						                    <a href="#">Jonathon Andrew</a>
						                	
						                </h4>
						                <time>July 02, 2015, at 11:34</time>
						                <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i>Reply</a>
						            </div>

						            <p>
						                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
						            </p>

						            <!--  second level Comment start-->
						            <div class="media comment-reply">

						                

						                <div class="media-body">

						                    <div class="comment-info">
						                        <div class="comment-author">
						                            <a href="#">Senorita</a>
						                        </div>
						                        <time>July 02, 2015, at 11:34</time>
						                    </div>

						                    <p>
						                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
						                    </p>

						                </div>

						            </div>
						            <!-- second level Comment end -->

						        </div>

						    </li>
						    <!-- End Comment Item -->

						    <!-- Comment Item start-->
						    <li class="media">


						        <div class="media-body">

						            <div class="comment-info">
						                <div class="comment-author">
						                    <a href="#">Jonathon Andrew</a>
						                </div>
						                <time>July 02, 2015, at 11:34</time>
						                <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i>Reply</a>
						            </div>

						            <p>
						                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
						            </p>

						        </div>

						    </li>
						    <!-- End Comment Item -->

						    <!-- Comment Item start-->
						    <li class="media">
						        <div class="media-body">

						            <div class="comment-info">
						                <div class="comment-author">
						                    <a href="#">Jonathon Andrew</a>
						                </div>
						                <time>July 02, 2015, at 11:34</time>
						                <a class="comment-button" href="#"><i class="tf-ion-chatbubbles"></i>Reply</a>
						            </div>

						            <p>
						                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.
						            </p>

						        </div>

						    </li>
						</ul>
				    </div>

				    <div class="post-comments-form">
				    	<h3 class="post-sub-heading">Deixe seu comentário</h3>
				    	<form method="post" action="#" id="form" role="form" >
				            <div class="row">
				                <div class="col-md-6 form-group" style="padding-right: 7.5px">
				                    <input type="text" name="name" id="name" class="form-control" placeholder="Nome" maxlength="100" required="">
				                </div>
				                <div class="col-md-6 form-group" style="padding-left: 7.5px">
				                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" maxlength="100" required="">
				                </div>
				                <div class="form-group col-md-12">
				                    <textarea name="text" id="text" class=" form-control" rows="6" placeholder="Comentário" maxlength="400"></textarea>
				                </div>
				                <div class="form-group col-md-12">
				                    <button type="submit" class="btn btn-small btn-main ">
				                        Comentar!
				                    </button>
				                </div>
				            </div>
				        </form>
				    </div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include_once("utils/footer.php") ?>

    <!-- 
    Essential Scripts
    =====================================-->
		
		
		<?php include_once("utils/end.php") ?>
  </body>
  </html>