<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (first_name) VALUES (:firstname);";
        $stmt = $pdo->prepare($query);

        $stmt->execute([':firstname' => $firstname]);

        $pdo = null;
	$stmt = null;

	header("Location: ../index.php");
        exit();

    }catch(PDOException $e)
    {
    die("Failed: ". $e->getMessage());
    }

}
else{
	header("Location: ../index.php");
	exit();
}
