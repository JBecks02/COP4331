<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$username = $_POST["username"];
	$password = $_POST["password"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (first_name, last_name, username, password) VALUES (:firstname, :lastname, :username, :password);";
        $stmt = $pdo->prepare($query);

	$stmt->execute([
		':firstname' => $firstname,
		':lastname' => $lastname,
		':username' => $username,
		':password' => $password,
	]);

        $pdo = null;
	$stmt = null;

	header("Location: ../nextPage.php");
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
