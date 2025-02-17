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
  <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('<?= base_url("assets/uploads/images/".$banner->imagem) ?>');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 display-table page-title-large">
          <div class="display-table-cell vertical-align-middle text-center padding-30px-tb">
            <!-- start sub title -->
            <span class="display-block text-white opacity6 width-45 sm-width-100 center-col alt-font margin-5px-bottom"><?= $banner->subtitulo ?></span>
            <!-- end sub title -->
            <!-- start page title -->
            <h1 class="alt-font text-white font-weight-600 no-margin-bottom"><?= $banner->titulo ?></h1>
            <!-- end page title -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title section -->
  <!-- start contact info -->
  <section class="wow fadeIn">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
          <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase">We love to talk</h5>
        </div>
      </div>
      <div class="row">
        <div class="row">
          <!-- start contact info item -->
          <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
            <div class="display-inline-block margin-20px-bottom">
              <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white"></i></div>
            </div>
            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Our Office</div>
            <p class="center-col">401 Broadway, 24th Floor<br>New York, NY 10013.</p>
            <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">GET DIRECTION</a>
          </div>
          <!-- end contact info item -->
          <!-- start contact info item -->
          <div class="col-md-3 col-sm-6 col-xs-12 text-center sm-margin-eight-bottom xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
            <div class="display-inline-block margin-20px-bottom">
              <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white"></i></div>
            </div>
            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
            <p class="center-col">Phone: 1-800-222-000<br>Fax: 1-800-222-002</p>
            <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">call us</a>
          </div>
          <!-- end contact info item -->
          <!-- start contact info item -->
          <div class="col-md-3 col-sm-6 col-xs-12 text-center xs-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
            <div class="display-inline-block margin-20px-bottom">
              <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white"></i></div>
            </div>
            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
            <p class="center-col"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a><br><a href="mailto:hr@yourdomain.com">hr@yourdomain.com</a></p>
            <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">send e-mail</a>
          </div>
          <!-- end contact info item -->
          <!-- start contact info item -->
          <div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
            <div class="display-inline-block margin-20px-bottom">
              <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-megaphone icon-medium text-white"></i></div>
            </div>
            <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Customer Services</div>
            <p class="xs-width-100 center-col">Lorem Ipsum is simply dummy<br>text of the printing.</p>
            <a href="#" class="text-decoration-line-through-deep-pink text-uppercase text-deep-pink text-small margin-15px-top xs-margin-10px-top display-inline-block">open ticket</a>
          </div>
          <!-- end contact info item -->
        </div>
      </div>
    </div>
  </section>
  <!-- end contact info section -->
  <!-- start contact form -->
  <section id="contact" class="wow fadeIn no-padding bg-extra-dark-gray">
    <div class="container-fluid">
      <div class="row equalize sm-equalize-auto">
        <div class="col-md-6 cover-background sm-height-450px xs-height-350px wow fadeIn" style="background: url(http://placehold.it/1200x854)"></div>
        <div class="col-md-6 wow fadeIn">
          <div class="padding-eleven-all text-center xs-no-padding-lr">
            <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom xs-margin-three-bottom">Fill out the form and we'll be in touch soon!</div>
            <h5 class="margin-55px-bottom text-white alt-font font-weight-700 text-uppercase xs-margin-ten-bottom">Ready to request a quote?</h5>
            <form id="project-contact-form" action="javascript:void(0)" method="post">
              <div class="row">
                <div class="col-md-12">
                  <div id="success-project-contact-form" class="no-margin-lr"></div>
                </div>
                <div class="col-md-6">
                  <input type="text" name="name" id="name" placeholder="Name *" class="bg-transparent border-color-medium-dark-gray medium-input">
                </div>
                <div class="col-md-6">
                  <input type="text" name="phone" id="phone" placeholder="Phone" class="bg-transparent border-color-medium-dark-gray medium-input">
                </div>
                <div class="col-md-6">
                  <input type="text" name="email" id="email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input">
                </div>
                <div class="col-md-6">
                  <div class="select-style bg-transparent border-color-medium-dark-gray medium-select">
                    <select name="budget" id="budget" class="bg-transparent no-margin-bottom">
                      <option value="">Select your budget</option>
                      <option value="$500 - $1000">$500 - $1000</option>
                      <option value="$1000 - $2000">$1000 - $2000</option>
                      <option value="$2000 - $5000">$2000 - $5000</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <textarea name="comment" id="comment" placeholder="Describe your project" rows="6" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <button id="project-contact-us-button" type="submit" class="btn btn-deep-pink btn-medium margin-20px-top">send message</button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact form -->

  <!-- start footer -->
  <!-- start footer --> 
  <?php include_once("utils/footer.php") ?>
  <!-- end footer -->
  
  <!-- END -->
  <?php include_once("utils/end.php") ?>
</body>

</html>