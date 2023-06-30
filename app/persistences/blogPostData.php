<?php
require_once 'config/database.php';
//fonction qui définit un tableau 10
function lastBlogPosts(){
    $tableauPageAcceuil = [];
    for($index = 0; $index<10; $index++)
    {
        $tableauPageAcceuil[$index] = 0;
    }
    var_dump($tableauPageAcceuil);
}
?>
