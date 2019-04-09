<?php
require '../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader);
$products = [
    'produit1' => ['name' => 'Rooibos Carrot Cake', 'image' => 'https://www.dammann.fr/4719-home_default/rooibos-carrot-cake.jpg', 'price' => 7],
    'produit2' => ['name' => 'Thé Blanc - Christmas Tea Blanc', 'image' => 'https://www.dammann.fr/1851-home_default/the-blanc-christmas-tea-blanc.jpg', 'price' => 6],
    'produit3' => ['name' => 'Thé vert Miss Dammann', 'image' => 'https://www.dammann.fr/3707-home_default/the-vert-miss-dammann.jpg', 'price' => 8],
    'produit4' => ['name' => 'Carcadet de Noël', 'image' => 'https://www.dammann.fr/3634-home_default/carcadet-de-noel.jpg', 'price' => 7],
    'produit5' => ['name' => 'Thé Noir des Milles Collines', 'image' => 'https://www.dammann.fr/3287-home_default/the-noir-noel-a-londres.jpg', 'price' => 5],
];

echo $twig->render('index.html.twig', ['products' => $products]);
?>
