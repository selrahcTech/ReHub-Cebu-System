<?php
include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if (isset($_POST["submit"])) {
    $sid = $_POST["s_id"];
    $sname = $_POST["s_name"];
    $snum = $_POST["s_num"];
    $semail = $_POST["s_email"];
    $sjob = $_POST["j_id"];
    $sdate = $_POST["s_date"];
    $sskills = $_POST["s_skills"];
    $swork = $_POST["s_work"];

    try {
        $database = new Connection();
        $conn = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE staff SET s_name='$sname', s_num='$snum', s_email='$semail', j_id='$sjob', s_date='$sdate', s_skills='$sskills', s_work='$swork' WHERE s_id='$sid'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // Execute the query
        $stmt->execute();
        echo "Record updated successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/staff.php?error=success");
} else {
    header("location: ../pages/staff.php?error=success");
}
?>