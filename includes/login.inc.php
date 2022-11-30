<?php

session_start();

if (!isset($_POST['submit'])) {
    header("Location: ../login.php");
    exit();
}

include_once 'connection.inc.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['password'] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $row; 
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: ../login.php?error=invalidpass");
        $_SESSION['loggedin'] = false;
        exit();
    }
} else {
    header("Location: ../login.php?error=invalidusername");
    $_SESSION['loggedin'] = false;
    exit();
}


