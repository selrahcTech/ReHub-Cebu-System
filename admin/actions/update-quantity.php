<?php
include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

$database = new Connection();
$db = $database->open();

if (isset($_POST['invId'])) {
    $invId = $_POST['invId'];

    // Update the inv_quantity to 1
    $sql = "UPDATE `inventory` SET `inv_quantity` = '1' WHERE `inv_id` = $invId";

    if ($db->query($sql)) {
        echo "Quantity updated successfully";
    } else {
        echo "Error updating quantity: " . $db->errorInfo();
    }
}

//close connection
$database->close();
?>
