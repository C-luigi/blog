<?php
include "config/database.php";
//fonction qui renvoie toute la table articles et auteurs
function lastBlogPosts(): array{
    $dataBase = getDatabase();
    //connexion a la bdd
    //requête sql / metod, prépare pour faire requete bdd
    $requette = file_get_contents("database/lastBlogPosts.sql");
    $stmt = $dataBase->prepare($requette);
    //<-- Automatically sanitized for SQL by PDO
    //$stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //executer la requête
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC) ;
}
// 2 fonction étape 9 :
// fonction qui renvoie info niveau article/auteur
function blogPostByld($id){
    $dataBase = getDatabase();
    //connexion a la bdd
    $requette = file_get_contents("database/articlesBlogPosts.sql");
    $stmt = $dataBase->prepare($requette);
    $stmt ->bindValue('artID', $id, PDO::PARAM_INT);
    //executer la requête
    $stmt->execute();
    //retourne le résultat de la requête
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// fonction qui renvoie info niveau commentaire/auteur/id article pour liaison
function commentsByBlogPost($id):array{
    $dataBase = getDatabase();
    //connexion a la bdd
    $requette = file_get_contents("database/commentaryBlogPosts.sql");
    $stmt = $dataBase->prepare($requette);
    $stmt ->bindValue('artID', $id, PDO::PARAM_INT);
    //executer la requête
    $stmt->execute();
    //retourne le résultat de la requête
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// fonction Etape 10 formulaire renvoie un article qui faut add a la bdd
 function blogPostCreate($title, $txtart, $datestart, $datend, $catim, $author_id){
    $dataBase = getDatabase();
    //connexion a la bdd
    $requette = file_get_contents("database/blogPostCreate.sql");
    $stmt = $dataBase->prepare($requette);
    $stmt ->bindParam('title',$title, PDO::PARAM_STR);
    $stmt ->bindParam('txtart',$txtart, PDO::PARAM_STR);
    $stmt ->bindParam('datestart',$datestart, PDO::PARAM_STR);
    $stmt ->bindParam('datend',$datend, PDO::PARAM_STR);
    $stmt ->bindParam('catim',$catim, PDO::PARAM_INT);
    $stmt ->bindParam('author_id',$author_id, PDO::PARAM_INT);
    $stmt->execute();
}
function getIdFromPseudoAuthor($pseudo):string{
    $dataBase = getDatabase();
    //connexion a la bdd
    $requette = file_get_contents("database/getIdFromPseudoAuthor.sql");
    $stmt = $dataBase->prepare($requette);
    $stmt ->bindParam('pseudoAuthor',$pseudo, PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data['id'];
}
//fonction qui supprime un article en fonction de l'id séléctionné
function blogPostDelete($id){
    $dataBase = getDatabase();
    //connexion a la bdd
    $requette = file_get_contents("database/blogPostDeleteArticle.sql");
    $stmt = $dataBase->prepare($requette);
    $stmt ->bindValue('artID', $id, PDO::PARAM_INT);
    $stmt->execute();
}