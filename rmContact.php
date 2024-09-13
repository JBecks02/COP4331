<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];


    try{
        require_once "dbh.inc.php";

        $query = "DELETE FROM contacts WHERE firstname = :firstname AND lastname = :lastname AND user_id = :userID";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':userID' => $_SESSION['userID'],
        ]);

        $pdo = null;
        $stmt = null;

        header("Location: ../nextPage.php?noerror=yee");
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
