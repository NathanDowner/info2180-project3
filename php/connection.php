<?php

//starting the session
session_start();
session_id();


$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'hireme';

try {
    //connecting to the database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $_SESSION['conn'] = $conn;
    // echo "Connection successful </br>";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die($e->getMessage());
}


?>