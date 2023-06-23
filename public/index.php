<?php 

require_once '../vendor/autoload.php';
// require 'twig';

$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader, []);

echo $twig->render('HomePage.html.twig');