<?php

use Bramus\Router\Router;
use Dotenv\Dotenv;
use Elezione\Controller;

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv::createImmutable("./src");
$dotenv->load();
$app = new Router();

$app->setNamespace('\Elezione');
$app->get("/",function (){Controller::get_router("home");});
$app->get("/about",function (){Controller::get_router("about");});
$app->get("/contact",function (){Controller::get_router("contact");});
$app->get("/faq",function (){Controller::get_router("faq");});
$app->get("/login",function (){Controller::get_router("login");});
$app->get("/register",function (){Controller::get_router("register");});
$app->get("/privacy",function (){Controller::get_router("privacy");});
$app->get("/terms",function (){Controller::get_router("terms");});
$app->get("/verification",function (){Controller::get_router("verification");});

$app->post("/login_process",function (){Controller::post_router("login_process");});
$app->post("/register_process",function (){Controller::post_router("register_process");});
$app->set404(function (){Controller::get_router("404");});
$app->run();
