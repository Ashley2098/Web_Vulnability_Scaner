<?php

$dbname = "login_db";
$username = "root";
$password = "";

$mysqli = new mysqli(username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;