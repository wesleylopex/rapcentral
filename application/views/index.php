<!DOCTYPE html>
<!-- [if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif] -->
<!-- [if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif] -->
<!-- [if IE 8]>         <html class="no-js lt-ie9"> <![endif] -->
<!-- [if gt IE 8]><! -->
<html class="no-js">
<!-- <![endif] -->

<head>
  <?php include_once("utils/start.php") ?>
</head>

<body id="body">
  <!-- Start Top Header Bar -->

  
  <?php include_once("utils/header.php") ?>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title text-center">
            <h2>Destaques</h2>
          </div>
        </div>
        <?php for ($i=0; $i < 2; $i++) : ?>
        <div class="col-md-6">
          <div class="post">
            <div class="post-thumb">
              <a href="">
                <img class="img-responsive" src="https://placehold.it/525x240" alt="">
              </a>
            </div>

            <h2 class="post-title">
              <a href="" class="underline-hover">Lorem ipsum dolor sit amet.</a>
            </h2>

            <div class="post-content">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla..
              </p>
            </div>
            
            <div class="post-meta">
              
            <a href="" class="author underline-hover">por Wesley Lopes</a> /
              <span class="date">25 Jan 2020</span>
            </div>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </section>

  <section class="section bg-blue-cactusjack">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title text-center">
            <h2>Últimas Notícias</h2>
          </div>
        </div>
        <?php for($i = 0; $i < 8; $i++) : ?>
        <div class="col-md-3">
          <div class="post">
            <div class="post-thumb">
              <div class="post-category">
                <span>Lorem</span>
              </div>
              <a href="">
                <img class="img-responsive" src="https://placehold.it/235x130" alt="">
              </a>
            </div>
            <h2 class="post-title">
              <a href="" class="underline-hover">Here’s Who Will Win The 2020 Grammy Awards According To Genius Data</a>
            </h2>
            <div class="post-meta">
              <a href="" class="author underline-hover">por Wesley Lopes</a> /
              <span class="date">25 Jan 2020</span>
            </div>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </section>

  <section class="products section bg-gray">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title text-center">
            <h2>Internacional</h2>
          </div>
        </div>
        <?php for($i = 0; $i < 6; $i++) : ?>
        <div class="col-md-4">
          <div class="post">
            <div class="post-thumb">
              <div class="post-category">
                <span>Lorem</span>
              </div>
              <a href="">
                <img class="img-responsive" src="https://placehold.it/1920x1080" alt="">
              </a>
            </div>
            <h2 class="post-title">
              <a href="" class="underline-hover">Here’s Who Will Win The 2020 Grammy Awards According To Genius Data</a>
            </h2>
            <div class="post-meta">
              <a href="" class="author underline-hover">por Wesley Lopes</a> /
              <span class="date">25 Jan 2020</span>
            </div>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </section>

  <section class="section bg-black-cactusjack">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title text-center">
            <h2>LifeStyle</h2>
          </div>
        </div>
        <?php for ($i=0; $i < 2; $i++) : ?>
        <div class="col-md-6">
          <div class="post product-item">
            <div class="post-thumb product-thumb">
                
              <a href="" class="bage">Moda</a>
                <img class="img-responsive" src="https://placehold.it/525x240" alt="">
              </div>

            <h2 class="post-title">
              <a href="" class="underline-hover-blue color-blue-cactusjack">How To Wear Bright Shoes</a>
            </h2>

            <div class="post-content">
              <p class="color-white-cactusjack">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla..
              </p>
            </div>
            
            <div class="post-meta">
              
              <a href="index.php" class="author color-blue-cactusjack underline-hover-blue">por Wesley Lopes</a> /
              <span class="date color-white-cactusjack">25 Jan 2020</span>
            </div>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </section>

  <!-- <section class="section instagram-feed">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2>View us on instagram</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div id="instafeed"></div>
        </div>
      </div>
    </div>
  </section> -->

  
  <?php include_once("utils/footer.php") ?>

  <!-- Essential Scripts
    ===================================== -->
  <?php include_once("utils/end.php") ?>
</body>

</html>