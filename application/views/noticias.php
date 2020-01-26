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
        		<div class="post">
	<div class="post-media post-thumb">
	<div class="post-category">
                <a href="">Lorem</a>
              </div>
		<a href="noticia.php">
			<img src="<?= base_url() ?>assets/site/images/blog/blog-post-1.jpg" alt="">
		</a>
	</div>
	<h2 class="post-title"><a href="noticia.php" class="underline-hover">How To Wear Bright Shoes</a></h2>
	<div class="post-meta">
		
	<a href="" class="author underline-hover">por Wesley Lopes</a> /
              <span class="date">25 Jan 2020</span>
	</div>
	<div class="post-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere. </p>
	</div>

</div>
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
		<form action="">
	<div class="input-group subscription-form">
              <input type="text" class="form-control" placeholder="Pesquisar notícias">

              <span class="input-group-btn">
								<button class="btn btn-main" type="button">Pesquisar!</button>
							</span>
						</div>
						</form>
	</div>

	<!-- Widget Category -->
	<div class="widget widget-category">
		<h4 class="widget-title">Categorias</h4>
		<ul class="widget-category-list">
	        <li><a href="#">Animals</a>
	        </li>
	        <li><a href="#">Landscape</a>
	        </li>
	        <li><a href="#">Portrait</a>
	        </li>
	        <li><a href="#">Wild Life</a>
	        </li>
	        <li><a href="#">Video</a>
	        </li>
	    </ul>
	</div> <!-- End category  -->

	<!-- Widget Latest Posts -->
	<div class="widget widget-latest-post">
		<h4 class="widget-title">Últimas Notícias</h4>
		<?php for ($i=0; $i < 4; $i++) : ?>
		<div class="media post-thumb mb-25px">
			<div class="post-category">
                <a href="">Lorem</a>
              </div>
			<a class="pull-left" href="#">
				<img class="media-object" src="images/blog/post-thumb.jpg" alt="Image">
			</a>
			<div class="media-body">
				<h4 class="media-heading"><a href="">Introducing Swift for Mac</a></h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, officia.</p>
			</div>
		</div>
		<?php endfor ?>
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