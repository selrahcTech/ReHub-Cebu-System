<?php

include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if (isset($_POST["submit"])) {
    $id = $_POST["aid"];
    $aname = $_POST["aname"];
    $anum = $_POST["anum"];
    $asnum = $_POST["asnum"];
    $astatus = $_POST["astatus"];
    $adate = $_POST["adate"];

    try {
        $database = new Connection();
        $conn = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if a_num or as_num already exist
        $checkQuery = "SELECT * FROM `asset` WHERE `a_num` = '$anum' OR `as_num` = '$asnum'";
        $result = $conn->query($checkQuery);

        if ($result->rowCount() > 0) {
            // Record with the same a_num or as_num already exists
            header("location: ../pages/asset.php?error=duplicate");
        } else {
            // Insert the new record
            $sql = "INSERT INTO `asset`(`a_name`, `a_num`, `as_num`, `st_id`, `a_date`) VALUES ('$aname','$anum','$asnum','$astatus','$adate')";
            $conn->exec($sql);
            echo "New record created successfully";
            header("location: ../pages/asset.php?error=success");
        }
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
} else {
    header("location: ../pages/asset.php?error=success");
}
?>
