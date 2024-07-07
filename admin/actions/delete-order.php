<?php
include("../includes/connect.inc.php");
include("../includes/connection.inc.php");

if (isset($_POST["submit"])) {
    $id = $_POST["wid"];

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Use prepared statements with placeholders to sanitize input
        $stmt = $conn->prepare("DELETE FROM workorder WHERE w_id = ?");
        $stmt->execute([$id]);

        // Check if the delete statement was successful
        if ($stmt->rowCount() > 0) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/workorder.php?error=success");
} else {
    header("location: ../pages/workorder.php?error=unsuccess");
}
?>