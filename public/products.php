<?php

require_once __DIR__ . '/../config/twig.php';
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre'];


echo $twig->render('products.html.twig', array('products' => $products));
