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
					<h1 class="page-name">notícias</h1>
					<ol class="breadcrumb">
						<li><a href="#">home</a></li>
						<li class="active">notícias</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php foreach($noticias as $noticia) : ?>
        		<div class="post">
	<div class="post-media post-thumb">
	<div class="post-category">
                <a href="<?= site_url("noticias/categoria/".$noticia->categoria->slug) ?>"><?= $noticia->categoria->nome ?></a>
              </div>
		<a href="<?= site_url("noticias/noticia/$noticia->slug") ?>">
			<img src="<?= base_url("assets/uploads/images/$noticia->imagem") ?>" alt="">
		</a>
	</div>
	<h2 class="post-title"><a href="<?= site_url("noticias/noticia/$noticia->slug") ?>" class="underline-hover"><?= $noticia->titulo ?></a></h2>
	<div class="post-meta">
		
	<a href="" class="author underline-hover">por <?= $noticia->autor->nome ?></a> /
              <span class="date"><?= "$noticia->dia $noticia->mes $noticia->ano" ?></span>
	</div>
	<div class="post-content">
		<p><?= $noticia->apresentacao ?></p>
	</div>

</div>
<?php endforeach ?>
<div class="text-center">
	<ul class="pagination post-pagination">
		<li><a href="#"><</a>
		</li>
		<li class="active"><a href="#">1</a>
		</li>
		<li><a href="#">2</a>
		</li>
		<li><a href="#">3</a>
		</li>
		<li><a href="#">4</a>
		</li>
		<li><a href="#">5</a>
		</li>
		<li><a href="#">></a>
		</li>
	</ul>
</div>
      		</div>
      		<div class="col-md-4">
				<aside class="sidebar">
	<div class="widget widget-subscription">
		<?= form_open("noticias/pesquisar") ?>
	<div class="input-group subscription-form">
              <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisar notícias">

              <span class="input-group-btn">
								<button type="submit" class="btn btn-main" type="button">Pesquisar!</button>
							</span>
						</div>
						</form>
	</div>

	<!-- Widget Category -->
	<div class="widget widget-category">
		<h4 class="widget-title">Categorias</h4>
		<ul class="widget-category-list">
		<li><a href="<?= site_url("noticias") ?>">Todas</a>
					</li>
			<?php foreach($categorias as $categoria) : ?>
	        <li><a href="<?= site_url("noticias/categoria/$categoria->slug") ?>"><?= $categoria->nome ?></a>
					</li>
					<?php endforeach ?>
	    </ul>
	</div> <!-- End category  -->

	<!-- Widget Latest Posts -->
	<div class="widget widget-latest-post">
		<h4 class="widget-title">Últimas Notícias</h4>
		<?php foreach ($ultimasNoticias as $noticia) : ?>
		<div class="media post-thumb mb-25px">
			<div class="post-category">
                <a href="<?= site_url("noticias/categoria/".$noticia->categoria->slug) ?>"><?= $noticia->categoria->nome ?></a>
              </div>
			<a class="pull-left" href="<?= site_url("noticias/noticia/$noticia->slug") ?>">
				<img class="media-object" src="<?= base_url("assets/uploads/images/$noticia->imagem") ?>" alt="Image">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><a href="<?= site_url("noticias/noticia/$noticia->slug") ?>" class="underline-hover"><?= $noticia->titulo ?></a></h4>
			</div>
		</div>
		<?php endforeach ?>
	</div>
	<!-- End Latest Posts -->
</aside>
      		</div>
		</div>
	</div>
</div>

<?php include_once("utils/footer.php") ?>

    <!-- 
    Essential Scripts
    =====================================-->
    <?php include_once("utils/end.php") ?>

  </body>
  </html>