<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'app/controllers/homeController.php';
echo "Bienvenue sur le blog";
?>
<?php
# == Frontcontroller == #
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);
## Ici je stock toutes les requette GET['action'] dans la variable $action
$routes = [
    #Création d'un tableau associatif dans lequel je stock toutes les routes possible
    'home' => 'home.php',
    'contact' => 'contact.php',
    'about' => 'about.php',
];
 if(!array_key_exists($action,$routes)){
     #Si la valeur $action = ne correspond a aucunes des valeurs dans $route ALORS
     //l'action n'existe pas
     require 'ressources/views/errors/errors_404.php';
 }
 else
     # SINON SI LA VALEUR $action = est égale a une valeur stocker dans route[]
     # il prendra la valeur de action et affichera la root du tableau $route qui est identique a la valeur de $_GET['action']
     $page = $routes[$action];
    require $page;
 ?>
