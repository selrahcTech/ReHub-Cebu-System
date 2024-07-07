<?php
include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

$database = new Connection();
$db = $database->open();

if (isset($_POST['invId'])) {
    $invId = $_POST['invId'];
    $assId = $_POST['aId'];

    // Delete the inventory item
    $sql1 = "DELETE FROM `inventory` WHERE `inv_id` = $invId";

    // Delete the asset item
    $sql2 = "DELETE FROM `asset` WHERE `a_id` = $assId";

    try {
        $db->beginTransaction();

        // Execute the first query
        $db->exec($sql1);

        // Execute the second query
        $db->exec($sql2);

        $db->commit();

        echo "Item deleted successfully";
        header("Location: ../pages/inventory.php?error=success");
    } catch (PDOException $e) {
        // Roll back the transaction on error
        $db->rollBack();
        echo "Error deleting item: " . $e->getMessage();
    }
}

// Close connection
$database->close();
?>
