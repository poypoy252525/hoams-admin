<?php

include "connection.inc.php";
$id = $_GET['postid'];
$sql = "DELETE FROM posts WHERE id = '$id' LIMIT 1";
$conn->query($sql);

header('Location: ../post-list.php');