<?php
// edit-order.php

include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if (isset($_POST["submit"])) {
    $id = $_POST["srid"];
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
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE servicereq SET sr_orderid='$srorderid', sr_customer='$srcustomer', ser_id='$serid', p_id='$pid', st_id='$stid', s_id='$sid', sr_address='$sraddress', sr_created='$srcreated', sr_due='$srdue', sr_cost='$srcost' WHERE sr_id='$id'";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location: ../pages/servicereq.php?error=success");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    } catch (Exception $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
} else {
    header("Location: ../pages/servicereq.php?error=success");
}
?>
