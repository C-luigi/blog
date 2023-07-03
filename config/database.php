<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=blog', 'Cluigi', '0601');
    var_dump("Luigos");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

