<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO contacts (firstname, lastname, phone, email, user_id) VALUES (:firstname, :lastname, :phone, :email, :userID);";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
		':firstname' => $firstname,
		':lastname' => $lastname,
		':phone' => $phone,
		':email' => $email,
		':userID' => $_SESSION['userID'],
	]);

        $pdo = null;
        $stmt = null;

        header("Location: ../nextPage.php");
        exit();

    }catch(PDOException $e)
    {
	    echo $_SESSION['username'];
    die("Failed: ". $e->getMessage());
    }

}
else{
        header("Location: ../nextpage.php");
        exit();
}
?>
