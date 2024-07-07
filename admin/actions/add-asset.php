<?php   

include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if(isset($_POST["submit"])){
    $id = $_POST["aid"];
    $atype = $_POST["atype"];
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
        $dbs = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `asset`(`a_type`, `a_name`, `a_num`, `as_num`, `a_date`, `a_provider`, `a_exdate`, `a_details`, `a_status`) VALUES ('$atype','$aname','$anum ','$asnum','$adate','$aprovider','$exdate','$adetails','$astatus')";
        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/asset.php?error=success");
}else{
    header("location: ../pages/asset.php?error=success");
}
?>
    