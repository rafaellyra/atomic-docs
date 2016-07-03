<?php

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__ . '/views/');

$twig = new Twig_Environment($loader);

$page_name = basename($_SERVER['PHP_SELF']);

echo $twig->render('base.html.twig', array('page_name' => $page_name));
