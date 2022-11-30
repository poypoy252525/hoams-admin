<?php

include_once "connection.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = '$id' LIMIT 1";
$result = $conn->query($sql);

header('Location: ../users.php');
exit();