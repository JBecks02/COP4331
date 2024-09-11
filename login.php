<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];

    try{
        require_once "dbh.inc.php";

        $query = "SELECT EXISTS( SELECT 1 FROM users WHERE first_name = :firstname) AS name_exists";
        $stmt = $pdo->prepare($query);

        $stmt->execute([':firstname' => $firstname]);

	$result = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if ((bool)$result['name_exists']){
		header("Location: ../nextPage.php");
        	exit();
	}
	else {
		$error = urlencode("Name not found");
		header("Location: ../bad.php?error=" . $result['name_exists']);
        	exit();
	}


        $pdo = null;
        $stmt = null;

        

    }catch(PDOException $e)
    {
    die("Failed: ". $e->getMessage());
    }

}
else{
        header("Location: ../index.php");
        exit();
}

?>
