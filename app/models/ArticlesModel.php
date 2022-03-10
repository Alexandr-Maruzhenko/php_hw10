<?php

function getArticles($dbConnect)
{
    $query = "SELECT * FROM posts";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getArticles Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getArticlesCode($dbConnect, $code)

{
    $query = "SELECT * FROM `posts` WHERE CODE = '{$code}'";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getArticles Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getAuthor($dbConnect, $authorId)

{
    $query = "SELECT * FROM `authors` WHERE ID = {$authorId}";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getArticles Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

function getArticleCategories($dbConnect, $categoriesId)

{
    $query = "SELECT * FROM `categories` WHERE ID = {$categoriesId}";
    $result = mysqli_query($dbConnect, $query) or die("SQL: getArticles Error!" . __FILE__ . " " . __LINE__);

    return $result;
}

