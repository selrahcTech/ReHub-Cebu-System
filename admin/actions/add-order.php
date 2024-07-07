<?php   

include("../includes/connection.inc.php");
include("../includes/connect.inc.php");

if(isset($_POST["submit"])){
    $id = $_POST["wid"];
    $worderid = $_POST["worderid"];
    $wcustomer = $_POST["wcustomer"];
    $wservice = $_POST["wservice"];
    $wprio = $_POST["wprio"];
    $wstatus = $_POST["wstatus"];
    $wassigned = $_POST["wassigned"];
    $waddress = $_POST["waddress"];
    $wdate = $_POST["wdate"];
    $wdue = $_POST["wdue"];
    $wcost = $_POST["wcost"];

    try {
        $database = new Connection();
        $dbs = $database->open();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `workorder`(`w_orderid`, `w_customer`, `ser_id`, `p_id`, `st_id`, `s_id`, `w_created`, `w_due`, `w_address`, `w_cost`) VALUES ('$worderid','$wcustomer','$wservice','$wprio','$wstatus','$wassigned','$wdate','$wdue','$waddress','$wcost')";
        $conn->exec($sql);
        echo "New record created successfully";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
    header("location: ../pages/workorder.php?error=success");
}else{
    header("location: ../pages/workorder.php?error=failed");
}
?>
    