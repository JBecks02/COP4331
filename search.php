<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $searchtext = $_POST["searchtext"];

    try{
        require_once "dbh.inc.php";

	$searchtext = "%" . $searchtext . "%";

        $query = "SELECT * FROM contacts WHERE firstname LIKE :searchtext AND user_id = :userID";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
		':searchtext' => $searchtext,
		':userID' => $_SESSION['userID'],
	]);

	$_SESSION['result'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$_SESSION['loadcontacts'] = '1';

        $pdo = null;
        $stmt = null;

        header("Location: ../nextPage.php?=success");
        exit();

    }catch(PDOException $e)
    {
	    echo $_SESSION['username'];
    die("Failed: ". $e->getMessage());
    }

}
else{
        header("Location: ../nextpage.php?=failed");
        exit();
}
?>

