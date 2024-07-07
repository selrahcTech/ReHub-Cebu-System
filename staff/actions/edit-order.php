<?php
// edit-order.php

include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if (isset($_POST["submit"])) {
    $id = $_POST["wid"];
    $worderid = $_POST["worderid"];
    $wcustomer = $_POST["wcustomer"];
    $wservice = $_POST["wservice"];
    $wprio = $_POST["wprio"];
    $wassigned = $_POST["wassigned"];
    $waddress = $_POST["waddress"];
    $wdate = $_POST["wdate"];
    $wdue = $_POST["wdue"];
    $wstatus = $_POST["wstatus"];
    $wcost = $_POST["wcost"];
    $wcomment = $_POST["wcomment"];
    $wcomplete = $_POST["wcomplete"];

    try {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE workorder SET w_orderid='$worderid', w_customer='$wcustomer', ser_id='$wservice',  st_id='$wstatus',p_id='$wprio', s_id='$wassigned', w_address='$waddress', w_created='$wdate', w_due='$wdue', w_cost='$wcost', w_comment='$wcomment', w_complete='$wcomplete' WHERE w_id='$id'";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            header("Location: ../pages/dashboard.php?error=success");
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
    } catch (Exception $e) { 
        echo $sql . "<br>" . $e->getMessage();
    }
} else {
    header("Location: ../pages/dashboard.php?error=success");
}
?>
