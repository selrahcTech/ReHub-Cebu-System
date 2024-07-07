    <?php
    include("../includes/connect.inc.php");
    include("../includes/connection.inc.php");

    if(isset($_POST["submit"])){
        $id = $_POST["aid"];
        $aname = $_POST["aname"];
        $anum = $_POST["anum"];
        $asnum = $_POST["asnum"];
        $adate = $_POST["adate"];
    

        try {
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);      

            // Use prepared statements with placeholders to sanitize input
            $stmt = $conn->prepare("INSERT INTO `asset_history`(`a_id`,`a_name`, `a_num`, `as_num`,`a_date`) VALUES (?, ?, ?, ?,?)");
            $stmt->execute([$id, $aname, $anum, $asnum,  $adate]);

            // Only execute the delete statement if the insert was successful
            if ($stmt->rowCount() > 0) {
                $stmt = $conn->prepare("DELETE FROM asset WHERE a_id = ?");
                $stmt->execute([$id]);
                
                // Check if the delete statement was successful
                if ($stmt->rowCount() > 0) {
                    echo "New record created and original record deleted successfully";
                } else {
                    echo "Error deleting original record";
                }
            } else {
                echo "Error creating new record";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        

        $conn = null;
        header("location: ../pages/asset.php?error=success");
    } else {
        header("location: ../pages/asset.php?error=unsuccess");
    }
    ?>  