<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$username = $_POST["username"];
	$password = $_POST["password"];

    try{
	    require_once "dbh.inc.php";

	    $query = "SELECT COUNT(*) AS user_exists FROM users WHERE username = :username;";
	    $stmt = $pdo->prepare($query);
	    $stmt->execute([':username' => $username]);

	    $row = $stmt->fetch(PDO::FETCH_ASSOC);

	    if($row['user_exists'] == 1){
		    http_response_code(409);
            header('Content-Type: application/json');
            echo json_encode([
                'status' => 409,
                'message' => 'Username Already Exists',
                'redirect' => '../index.php'
            ]);
		    exit();
	    }

        $query = "INSERT INTO users (first_name, last_name, username, password) VALUES (:firstname, :lastname, :username, :password);";
        $stmt = $pdo->prepare($query);

	    $stmt->execute([
		    ':firstname' => $firstname,
		    ':lastname' => $lastname,
		    ':username' => $username,
		    ':password' => $password,
	    ]);

	    $userID = $pdo->lastInsertId();

	    $_SESSION['userID'] = $userID;

	    $pdo = null;
	    $stmt = null;

	    http_response_code(201);
            header('Content-Type: application/json');
            echo json_encode([
                'status' => 201,
                'message' => 'Username successfully created',
                'redirect' => '../index.php'
            ]);
                    exit();
	    

    } catch(PDOException $e) {
        die("Failed: ". $e->getMessage());
    }

} else {
	header("Location: ../index.php");
	exit();
}
