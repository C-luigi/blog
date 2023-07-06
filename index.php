<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Bienvenue sur le blog";
# == Frontcontroller == #
$routes = [
    #Création d'un tableau associatif dans lequel je stock toutes les routes possible
    'home' => 'app/controllers/homeController.php',
    'blogPost' => 'app/controllers/blogPostController.php',
    'blogPostCreate' => 'app/controllers/blogPostCreateController.php',
    'blogPostDelete' => 'app/controllers/blogPostDeleteController.php',
];
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
## Ici je stock toutes les requette GET['action'] dans la variable $action
if (empty($action)) {
    $action = 'index.php';
}
ob_start(); // commence la mise en tampon de sortie
 if(!array_key_exists($action,$routes)){
     #Si la valeur $action = ne correspond a aucunes des valeurs dans $route ALORS
     //l'action n'existe pas
     header("HTTP/1.0 404 Not Found");
     //require 'ressources/views/errors/errors_404.php';
 }
 else
     # SINON SI LA VALEUR $action = est égale a une valeur stocker dans route[]
     # il prendra la valeur de action et affichera la root du tableau $route qui est identique a la valeur de $_GET['action']
     require ($routes[$action]);
