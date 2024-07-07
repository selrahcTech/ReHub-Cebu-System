<?php
include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if (isset($_POST["submit"])) {
    $aid = $_POST["aid"];
    $atype = $_POST["atype"];
    $aname = $_POST["aname"];
    $anum = $_POST["anum"];
    $asnum = $_POST["asnum"];
    $adate = $_POST["adate"];
    $aprovider = $_POST["aprovider"];
    $exdate = $_POST["exdate"];
    $adetails = $_POST["adetails"];
    $astatus = $_POST["astatus"];
    $asched = $_POST["schedate"];
    $aremarks = $_POST["aremarks"];

    try {
        $database = new Connection();
        $conn = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE asset SET a_type='$atype',a_name='$aname', a_num='$anum', as_num='$asnum', a_date='$adate', a_provider='$aprovider', a_exdate='$exdate',a_details='$adetails', a_status='$astatus', a_sched='$asched', a_remarks='$aremarks' WHERE a_id='$aid'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // Execute the query
        $stmt->execute();
        echo "Record updated successfully";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/maintenanceschedule.php?error=success");
} else {
    header("location: ../pages/maintenanceschedule.php?error=success");
}
?>