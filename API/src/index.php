<?php
    require_once "../.vendor/autoload.php";

    $app = new Slim\App(

        [

            'settings' =>[

                'displayErrorDetails' => true,

            ],

        ]


    );
    
    require_once "./routes/routes.php";

    $app->run();

    
?>