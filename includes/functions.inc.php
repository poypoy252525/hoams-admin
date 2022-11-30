<?php

session_start();

function checkLogin($inLoginPage) {
    if ($inLoginPage && isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        header("Location: index.php");
        return;
    }
    if (!$inLoginPage && !isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true) {
        header("Location: login.php");
        return;
    }
}

function usernameExist($uname) {
    include "connection.inc.php";
    $r = $conn->query("SELECT username FROM  users WHERE  username = '$uname' LIMIT 1");
    if ($r->num_rows > 0) {
        return true;
    }
    return false;
}
