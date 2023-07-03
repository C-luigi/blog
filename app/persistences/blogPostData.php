<?php
//fonction qui définit un tableau 10
function lastBlogPosts(){
    include "config/database.php";
//connexion a la bdd
//requête sql / metod, prépare pour faire requete bdd
$stmt = $dbh->prepare('SELECT * 
    FROM articles 
    INNER JOIN authors ON authors.id = articles.AUTHOR_id 
    ORDER BY articles.id DESC 
    LIMIT 10');
//<-- Automatically sanitized for SQL by PDO
//$stmt->bindParam(':id', $id, PDO::PARAM_INT);
//executer la requête
$stmt->execute();

return $stmt->fetchAll() ;

}

