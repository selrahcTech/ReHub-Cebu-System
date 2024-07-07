<?php
include("../includes/connect.inc.php");
include("../includes/connection.inc.php");

if (isset($_POST["submit"])) {
    $id = $_POST["wid"];
    $srorderid = $_POST["srorderid"];
    $srcustomer = $_POST["srcustomer"];
    $serid = $_POST["serid"];
    $pid = $_POST["pid"];
    $stid = $_POST["stid"];
    $sid = $_POST["sid"];
    $sraddress = $_POST["sraddress"];
    $srcreated = $_POST["srcreated"];
    $srdue = $_POST["srdue"];
    $srcost = $_POST["srcost"];

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO `servicereq`(`sr_orderid`, `sr_customer`, `ser_id`, `p_id`, `st_id`, `s_id`, `sr_address`, `sr_created`, `sr_due`, `sr_cost`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$srorderid, $srcustomer, $serid, $pid, $stid, $sid, $sraddress, $srcreated, $srdue, $srcost]);

        if ($stmt->rowCount() > 0) {
            $stmt = $conn->prepare("DELETE FROM workorder WHERE w_id = ?");
            $stmt->execute([$id]);

            if ($stmt->rowCount() > 0) {
                echo "New record created and original record deleted successfully";
            } else {
                echo "Error deleting original record";
            }
        } else {
            echo "Error creating new record";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/dashboard.php?error=success");
    exit();
} else {
    header("location: ../pages/dashboard.php?error=unsuccess");
    exit();
}
?>