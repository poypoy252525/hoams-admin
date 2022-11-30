<?php

session_start();

$user = $_SESSION['user']['id'];

if (isset($_POST['submit'])) {
    include "connection.inc.php";

    $title = $_POST['title'];
    $preview = $_POST['post-preview'];
    $content = $_POST['post-content'];

    $sql = "INSERT INTO `posts`(`user_id`, `post_title`, `post_preview`, `post_content`, `date_created`)
    VALUES ('$user','$title','$preview','$content',NOW())";
    $conn->query($sql);
    header('Location: ../create-post.php?return=success');
}

