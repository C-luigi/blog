<?php
require 'app/persistences/blogPostData.php';
require_once 'index.php';
global $pdo;
$articlescontent = blogPostByld($_GET['id']);
$articlesCommentary = commentsByBlogPost($_GET['id']);
include "ressources/views/blogPost.tpl.php";