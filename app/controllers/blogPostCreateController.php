<?php
require 'app/persistences/blogPostData.php';
require_once 'index.php';
echo "Ciao bello<br>";
global $pdo;

if(count($_POST) ):
    $title = filter_input(INPUT_POST, "title"); // title = $_POST['title']; // $_GET['action']
    $txtart = filter_input(INPUT_POST, "txtart");
    $datestart = filter_input(INPUT_POST, "datestart");
    $datend = filter_input(INPUT_POST, "datend");
    $importantArticle = filter_input(INPUT_POST, "importantArticle");
    $author_id = filter_input(INPUT_POST, "author_id");
    var_dump($author_id);
    $author_id = getIdFromPseudoAuthor($author_id);
    blogPostCreate($title, $txtart, $datestart, $datend, $importantArticle, $author_id);
endif;
include "ressources/views/blogPostCreate.tpl.php";
//if (!empty($_POST["title"])
//    && !empty($_POST["texte"])
//    && !empty($_POST["datestart"])
//    && !empty($_POST["datend"])
//    && !empty($_POST["importantArticle"])) {
//    $tableau = [$pseudo, $name, $firstName, $title, $texte, $datestart, $datend, $importantArticle];
//    $date = date("d-m-Y H:i:s");
//    file_put_contents("contact/contact" . $date . ".txt", implode("\r\n", $tableau));
//    echo 'formulaire remplie';
//}