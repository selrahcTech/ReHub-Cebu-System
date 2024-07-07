
<?php   

include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if(isset($_POST["submit"])){
    $toolname = $_POST["toolname"];
    $toolstaff = $_POST["toolstaff"];
    $toolorderid = $_POST["toolorderid"];
    $toolstatus = $_POST["toolstatus"];
  

    try {
        $database = new Connection();
        $dbs = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `usedtools` (`inv_id`, `s_id`, `w_id`, `ut_status`) VALUES ('$toolname','$toolstaff ','$toolorderid','$toolstatus')";
        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/tools.php?error=success");
}else{
    header("location: ../pages/tools.php?error=success");
}
?>