<?php

session_start();
session_unset();
if (session_destroy()) {
    session_abort();
    header('Location: ../login.php');
    exit();
}
