<?php

include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if(isset($_POST["submit"])){
    $id = $_POST["invid"];
    $invquantity = $_POST["invquantity"];
    $invname = $_POST["invname"];
    $atype = $_POST["invname"];
    $aname = $_POST["aname"];
    $anum = $_POST["anum"];
    $asnum = $_POST["asnum"];
    $adate = $_POST["adate"];
    $aprovider = $_POST["aprovider"];
    $exdate = $_POST["exdate"];
    $adetails = $_POST["adetails"];
    $astatus = $_POST["astatus"];
    
    try {
        $database = new Connection();
        $conn = $database->open(); 

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO `inventory`(`inv_quantity`, `inv_name`) VALUES ('$invquantity','$invname')";
        $conn->exec($sql);

        $sql = "INSERT INTO `asset`(`a_type`, `a_name`, `a_num`, `as_num`, `a_date`, `a_provider`, `a_exdate`, `a_details`, `a_status`) VALUES ('$atype','$aname','$anum ','$asnum','$adate','$aprovider','$exdate','$adetails','$astatus')";
        $conn->exec($sql);

        echo "New records created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/inventory.php?error=success");
} else {
    header("location: ../pages/inventory.php?error=success");
}
?>
