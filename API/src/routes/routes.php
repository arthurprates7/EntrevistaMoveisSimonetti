<?php

    use src\controllers\Controller;

    $app->group("/blog", function() use ($app){

        $app->get("/feed", Controller::class . ":getFeed");
        $app->post("/feed/search", Controller::class . ":FeedSearch");
        $app->get("/contacts", Controller:: class . ":getAllContacts");
        $app->post("/store/contact", Controller:: class . ":storeContacts");

    });


