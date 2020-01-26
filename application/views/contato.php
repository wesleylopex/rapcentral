<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

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
                        <h1 class="page-name">contato</h1>
                        <ol class="breadcrumb">
                            <li><a href="#">home</a></li>
                            <li class="active">contato</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="page-wrapper">
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <!-- Contact Form -->
                    <div class="contact-form col-md-6">
                        <form id="contact-form" method="post" action="" role="form">

                            <div class="form-group">
                                <input type="text" placeholder="Nome" class="form-control" name="name" id="name">
                            </div>

                            <div class="form-group">
                                <input type="email" placeholder="E-mail" class="form-control" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <input type="text" placeholder="Assunto" class="form-control" name="subject" id="subject">
                            </div>

                            <div class="form-group">
                                <textarea rows="6" placeholder="Mensagem" class="form-control" name="message" id="message"></textarea>
                            </div>

                            <div id="mail-success" class="success">
                                Thank you. The Mailman is on His Way :)
                            </div>

                            <div id="mail-fail" class="error">
                                Sorry, don't know what happened. Try later :(
                            </div>

                            <div id="cf-submit">
                                <input type="submit" id="contact-submit" class="btn btn-transparent" value="Enviar!">
                            </div>

                        </form>
                    </div>
                    <!-- ./End Contact Form -->

                    <!-- Contact Details -->
                    <div class="contact-details col-md-6">
                        
                        <div class="row">
                            <div class="col">
                            <div class="title text-center">
            <h2>Entre em contato</h2>
          </div>
                            </div>
                            <div class="col">
                                <p class="text-center">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, facere labore. Consectetur optio reiciendis, consequatur alias ullam in perspiciatis reprehenderit tempore soluta, neque mollitia minima molestiae libero deserunt quia beatae!
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                        <!-- Footer Social Links -->
                        <div class="social-icon">
                            <ul class="text-center">
                                <li><a class="fb-icon" href="#"><i class="tf-ion-social-instagram"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="tf-ion-social-googleplus-outline"></i></a></li>
                            </ul>
                        </div>
                        <!--/. End Footer Social Links -->
                            </div>
                        </div>
                    </div>
                    <!-- / End Contact Details -->



                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
    </section>

    <?php include_once("utils/footer.php") ?>

<!-- 
Essential Scripts
=====================================-->
<?php include_once("utils/end.php") ?>



</body>

</html>