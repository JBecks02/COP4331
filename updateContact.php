<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstnameSearch = $_POST["firstnameS"];
    $lastnameSearch = $_POST["lastnameS"];
    $firstnameUpdate = $_POST["firstnameU"];
    $lastnameUpdate = $_POST["lastnameU"];
    $phoneUpdate = $_POST["phone"];
    $emailUpdate = $_POST["email"];

    try{
        require_once "dbh.inc.php";

        $searchtext = "%" . $searchtext . "%";

        $query = "UPDATE contacts SET firstname = :firstnameUpdate, lastname = :lastnameUpdate, email = :emailUpdate, phone = :phoneUpdate WHERE firstname = :firstnameSearch AND lastname = :lastnameSearch";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
                ':firstnameUpdate' => $firstnameUpdate,
		':lastnameUpdate' => $lastnameUpdate,
		':emailUpdate' => $emailUpdate,
		':phoneUpdate' => $phoneUpdate,
		':firstnameSearch' => $firstnameSearch,
		':lastnameSearch' => $lastnameSearch,
        ]);

        $pdo = null;
        $stmt = null;

        header("Location: ../nextPage.php?=contactUpdated");
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
