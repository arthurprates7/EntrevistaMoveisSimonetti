<?php





?>


<!doctype html>
<html lang="pt-br">

<head>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Rockr Blog</title>

    <link rel="shortcut icon" href="https://source.unsplash.com/640x640/?rock-concert" type="image/png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/LineIcons.css">

    <link rel="stylesheet" href="assets/css/default.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">


</head>

<body>

<div class="preloader">
    <div class="spin">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>



<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="index.php">
                        <h2>Rockr Blog</h2>
                    </a> <!-- Logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                        <span class="bar-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a data-scroll-nav="0" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a data-scroll-nav="0" href="index.php">Posts</a>
                            </li>

                            <li class="nav-item">
                                <a data-scroll-nav="0" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>



<section id="contact" class="contact-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-title text-center">
                    <h2 class="title">Contact</h2>
                </div>
            </div>
        </div>

        <div class="contact-box mt-70">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="contact-send.php" method="post" data-toggle="validator">
                            <div class="row">


                                <div class="col-lg-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="nome" placeholder="Digite o Seu Nome" data-error="Nome é Obrigatório" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="Digite o Seu Email"  data-error="Email é Obrigatório" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="telefone" placeholder="Digite o Seu Telefone"  data-error="Telefone é Obrigatório" required="required">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <textarea name="mensagem" placeholder="Digite a Sua Mensagem" data-error="Deixe uma Mensagem!" required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>



                                <p class="form-message"></p>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <button class="main-btn" type="submit">ENVIAR</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="footer" class="footer-area">
    <div class="container">

        <div class="footer-copyright pt-15 pb-15">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>Desenvolvido por <a href="https://github.com/arthurprates7" rel="nofollow">Arthur Prates</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>


<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>


<script src="assets/js/slick.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>


<script src="assets/js/jquery.nav.js"></script>

<script src="assets/js/jquery.nice-number.min.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>
