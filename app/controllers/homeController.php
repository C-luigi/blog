<?php
require 'app/persistences/blogPostData.php';
require_once 'index.php';
echo "Hello world<br>";
global $pdo;
$articlescontent = lastBlogPosts();
include "ressources/views/home.tpl.php";