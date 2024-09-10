<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO contact_manager (name) VALUES ($firstname);";
        $stmt = $pdo->prepare($query);

        stmt->execute([firstname]);

        $pdo = null;
        stmt = null;

        die();
        header("Location: ../index.php");

    }catch(PDOException $e)
    {
    die("Failed");
    }

}
else{
    header("Location: ../index.php");
}