<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
        $username = $_POST["username"];
        $password = $_POST["password"];

    try{
            require_once "dbh.inc.php";
            echo "You are here";

        $query = "SELECT EXISTS( SELECT 1 FROM users WHERE username = :username AND password = :password) AS name_exists";
        $stmt = $pdo->prepare($query);

        $stmt->execute([':username' => $username, ':password' => $password]);

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "Before if statement";
        if ((bool)$result['name_exists']){
                header("Location: ../nextPage.php");
                exit();
        }
        else {
                $error = urlencode("Name not Found");
                
                header("Location: ../index.php?error=");

                exit();
        }


        $pdo = null;
        $stmt = null;

        

    }catch(PDOException $e)
    {
            header("Location: ../youarehere.php");
            die("Failed: ". $e->getMessage());
    }

}
else{
        header("Location: ../index.php");
        exit();
}
