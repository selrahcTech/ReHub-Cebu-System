<?php
include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if(isset($_POST["submit"])){
    $id = $_POST["invid"];
    $invname = $_POST["invname"];
 
    try {
        $database = new Connection();
        $conn = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE `inventory` SET `inv_name`='$invname' WHERE `inv_id`='$id'";
      
        // Prepare statement
        $stmt = $conn->prepare($sql);
      
        // Execute the query
        $stmt->execute();
        echo "Record updated successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/inventory.php?error=success");
} else {
    header("location: ../pages/inventory.php?error=failed");
}
?>