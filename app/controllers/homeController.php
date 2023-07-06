<?php
require 'app/persistences/blogPostData.php';
require_once 'index.php';
global $pdo;
$articlescontent = lastBlogPosts();
include "ressources/views/home.tpl.php";