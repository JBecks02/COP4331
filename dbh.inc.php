<?php

$dsn = "mysql:host=localhost;dbname=contact_manager";
$dbusername = "root";
$dbpassword = "JtrZKqcsO.R4";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}