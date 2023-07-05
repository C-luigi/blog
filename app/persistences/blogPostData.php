<?php
include "config/database.php";
//fonction qui définit un tableau 10
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
function commentsByBlogPost($id){
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