<?php

$dsn = "mysql:host=localhost;dbname=contact_manager";
$dbusername = "root";
$dbpassword = "JtrZKqcsO.R4";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($pdo->connect_error) {
        die("Connection failed: " . $pdo->connect_error);
    } else {
        echo "Connected successfully";
    }
}catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
