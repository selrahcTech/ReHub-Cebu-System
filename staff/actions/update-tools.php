<?php
include "../includes/connect.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $order = $_POST['order'];
    $inv_id = $_POST['inv_id'];
    $tool_name = $_POST['tool_name'];

    // Insert data into usedtools table
    $insertSql = "INSERT INTO usedtools (ut_tool, ut_name, ut_orderid) VALUES ('$tool_name', '$user', '$order')";
    $conn->exec($insertSql);
    
    // Update inventory quantity
    $updateSql = "UPDATE inventory SET inv_quantity = inv_quantity - 1 WHERE inv_id = '$inv_id'";
    $conn->exec($updateSql);

    // Redirect back to the tools page
    header("Location: ../pages/tools.php");
    exit();
}
?>
