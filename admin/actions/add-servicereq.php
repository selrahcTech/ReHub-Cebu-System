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

        $stmt = $conn->prepare("INSERT INTO `workorder`(`w_orderid`, `w_customer`, `ser_id`, `p_id`, `st_id`, `s_id`, `w_address`, `w_created`, `w_due`, `w_cost`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$srorderid, $srcustomer, $serid, $pid, $stid, $sid, $sraddress, $srcreated, $srdue, $srcost]);

        if ($stmt->rowCount() > 0) {
            $stmt = $conn->prepare("DELETE FROM servicereq WHERE sr_id = ?");
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
    header("location: ../pages/servicereq.php?error=success");
    exit();
} else {
    header("location: ../pages/servicereq.php?error=unsuccess");
    exit();
}
?>