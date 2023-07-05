<?php


    function getDatabase(): PDO
    {
        try {
            return new PDO('mysql:host=localhost;dbname=blog', 'Cluigi', '0601');
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


