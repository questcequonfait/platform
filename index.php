<?php

require_once 'vendor/autoload.php';
include 'src/Service/Route.php';
include 'src/Service/Router.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader);

//echo $twig->render('index.html.twig', array());


$router = new Router($_GET['url']);
$router->get('/', function($id){ global $twig; echo $twig->render('index.html.twig', array()); });
$router->get('/posts/:id/:id2', function($id, $id2){ echo "Voila l'article $id $id2"; });
$router->run();