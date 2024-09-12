<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    try{
        require_once "dbh.inc.php";

        $query = "INSERT INTO contacts (firstname, lastname, phone, email) VALUES (:firstname, :lastname, :phone, :email);";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
                ':firstname' => $firstname
                ':lastname' => $lastname
                ':phone' => $phone
                ':email' => $email
        ]);

        $pdo = null;
        $stmt = null;

        header("Location: ../nextpage.php");
        exit();

    }catch(PDOException $e)
    {
    die("Failed: ". $e->getMessage());
    }

}
else{
        header("Location: ../nextpage.php");
        exit();
}
