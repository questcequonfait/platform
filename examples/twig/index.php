<?php

require_once '../../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('/');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html.twig', array(
    'firstname' => 'Valentin',
    'age' => 17,
    'languages' => array('php', 'html', 'css'),
    'is_public' => true
    )
);