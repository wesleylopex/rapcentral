<?php include_once("application/views/header_interno.php"); ?>
</head>
<body>
	<?php include_once("application/views/menu.php"); ?>
        <div class="section-title-page area-bg area-bg_op_85 parallax" style="background:url('<?php echo site_url(array('assets', 'uploads', 'pagina', $pagina->imagem)); ?>'); opacity:100;">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col-xs-12">
                  <h1 class="b-title-page"><?php echo $pagina->titulo; ?></h1>
				  <?php if (!empty($pagina->subtitulo)): ?>
				   <div class="b-title-page__info"><?php echo $pagina->subtitulo; ?></div>
				   <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end .b-title-page-->
        <section class="section-default">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="text-center">
                <div class="ui-subtitle-block">Erro 404</div>
                <h2 class="ui-title-block-2">A página não foi encontrada!</h2>
                <div class="ui-decor-1 bg-primary"></div>
              </div>
            </div>
          </div>
		  <a class="back_to" href="<?php echo base_url(); ?>">VOLTAR PARA O INÍCIO</a>
        </div>
      </section>

<?php include_once("application/views/footer.php"); ?>
</body>

</html>