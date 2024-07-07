<?php
include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if (isset($_POST["submit"])) {
    $id = $_POST["aid"];
    $sname = $_POST["sname"];
    $snum = $_POST["snum"];
    $semail = $_POST["semail"];
    $sjob = $_POST["sjob"];
    $sdate = $_POST["sdate"];
    $sskills = $_POST["sskills"];

    try {
        $database = new Connection();
        $conn = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if s_name already exists
        $stmt = $conn->prepare("SELECT COUNT(*) FROM `staff` WHERE `s_name` = :sname");
        $stmt->bindParam(":sname", $sname);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            // Display an error message if s_name already exists
            header("location: ../pages/staff.php?error=name_exists");
            exit();
        }

        // Proceed with the insertion if s_name does not exist
        $sql = "INSERT INTO `staff`(`s_name`, `s_num`, `s_email`, `j_id`, `s_date`, `s_skills`) VALUES ('$sname','$snum ','$semail','$sjob','$sdate','$sskills')";
        $conn->exec($sql);
        header("location: ../pages/staff.php?error=success");
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
} else {
    header("location: ../pages/staff.php?error=success");
}
?>
