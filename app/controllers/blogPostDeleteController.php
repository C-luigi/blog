<?php
require 'app/persistences/blogPostData.php';
require_once 'index.php';
echo "Hello world<br>";
global $pdo;
blogPostDelete($_GET['id']);
include "ressources/views/blogPostDelete.tpl.php";