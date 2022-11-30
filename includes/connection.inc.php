<?php

$dbuser = "hoams";
$dbpass = "hoams";
$dbhost = "localhost";
$dbname = "hoams";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($conn->connect_error) {
    die('unable to connect');
}
