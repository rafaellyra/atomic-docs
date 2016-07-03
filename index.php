<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__);

$twig = new Twig_Environment($loader);


echo $twig->render('index.html.twig');
