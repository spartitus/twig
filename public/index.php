<?php
require_once '../vendor/autoload.php';
$products = [
    'Dracula',
    'Ca',
    'Freddy',
    'Jason',
    'Morticia',
    'Ma_petite_soeur',
];
$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]);


