<?php


$id =  $_SERVER['QUERY_STRING'];



$url = 'http://localhost:8080/src/blog/feed/search';

$ch = curl_init($url);

$data = array(
    'id' => $id,

);

$payload = json_encode($data);

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);

$resultado = json_decode($result, true);

$saida = $resultado['retorno'][0];

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
                                <a data-scroll-nav="0" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a data-scroll-nav="0" href="#blog">Posts</a>
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





<section  class="blog-area pt-125">
    <div class="container">
        <div class="row justify-content-center">


        <table>
            <tr>
                <td>
                    <img style="height: 300px;width: 300px;margin-right: 200px" src="https://www.aberje.com.br/wp-content/uploads/2016/03/lorem-ipsum.jpg" alt="Blog">

                </td>

                <td>
                    <?php
                    echo date('d/m/y',strtotime($saida['date']));

                    echo "<br>";


                    echo $saida['title'];

                    ?>
                </td>
            </tr>

        </table>


            <br>

            <?php


            echo $saida['content'];
            ?>









        </div>
    </div>

</section>






<br>
<br>


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

