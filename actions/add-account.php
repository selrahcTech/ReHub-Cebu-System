<?php
include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if (isset($_POST["submit"])) {
    $auser = $_POST["auser"];
    $apass = $_POST["apass"];
    $arole = $_POST["arole"];

    try {
        $database = new Connection();
        $conn = $database->open();

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $checkStaffQuery = "SELECT COUNT(*) FROM `staff` WHERE `s_name` = :auser";
        $checkStaffStmt = $conn->prepare($checkStaffQuery);
        $checkStaffStmt->bindParam(':auser', $auser);
        $checkStaffStmt->execute();

        $checkAccountQuery = "SELECT COUNT(*) FROM `account` WHERE `acc_user` = :auser";
        $checkAccountStmt = $conn->prepare($checkAccountQuery);
        $checkAccountStmt->bindParam(':auser', $auser);
        $checkAccountStmt->execute();

        if ($checkStaffStmt->fetchColumn() > 0 && $checkAccountStmt->fetchColumn() == 0) {
            $sql = "INSERT INTO `account`(`acc_user`, `acc_pass`, `acc_role`) VALUES (:auser, :apass, :arole)";

            // Use prepared statements to prevent SQL injection
            $stmt = $conn->prepare($sql);

            // Bind parameters
            $stmt->bindParam(':auser', $auser);
            $stmt->bindParam(':apass', $apass);
            $stmt->bindParam(':arole', $arole);

            // Execute the statement
            $stmt->execute();

            echo "New record created successfully";

            // Close the database connection
            $database->close();

            // Redirect to success page
            header("Location: ../pages/register.php?error=success");
            exit();
        } else {
            // Either username does not exist in the staff table or already exists in the account table
            echo "Error: Staff Name not found or User already registered";
            // You may want to redirect to the registration page with an error message
            header("Location: ../pages/register.php?error=staff not found or user exists");
            exit();
        }
    } catch (PDOException $e) {
        // Display an error message
        echo "Error: " . $e->getMessage();
    }
} else {
    // Redirect to the registration page if the form is not submitted
    header("Location: ../pages/register.php");
    exit();
}
?>
