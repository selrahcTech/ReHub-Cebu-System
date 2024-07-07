<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Your Works</h1>
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Button trigger modal -->

                <div class="table-responsive">

                    <table class="table table-striped table-bordered table-hover table-dark" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Service Type</th>
                                <th>Staff Assigned</th>
                                <th>Priority</th>
                                <th>Date Due</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead> 
                        <tbody> 
    <?php
    // include our connection
    $database = new Connection();
    $db = $database->open();
    try {
        if (isset($_SESSION["username"])) {
            $username = $_SESSION["username"];
        } else {
            $username = "";
        }

        $sql = 'SELECT * FROM workorder
                INNER JOIN services ON workorder.ser_id = services.ser_id
                INNER JOIN priority ON workorder.p_id = priority.p_id
                INNER JOIN staff ON workorder.s_id = staff.s_id
                INNER JOIN status ON workorder.st_id = status.st_id
                WHERE staff.s_name = :username
                ORDER BY s_name ASC'; // Change ASC to DESC if you want a descending order

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Check if w_complete is empty before displaying the row
            if (empty($row["w_complete"])) {
    ?>
                <tr>
                    <td><?php echo $row["w_orderid"] ?></td>
                    <td><?php echo $row["ser_desc"] ?></td>
                    <td><?php echo $row["s_name"] ?></td>
                    <td><?php echo $row["p_desc"] ?></td>
                    <td><?php echo $row["w_created"] ?></td>
                    <td><?php echo $row["st_desc"] ?></td>
                    <td>
                        
                        <a href="#view_<?php echo $row['w_id']; ?>" class="btn btn-info btn-xs" data-toggle="modal">
                            <i class="fas fa-eye"></i> 
                        </a>
                        <a href="#comment_<?php echo $row['w_id'];?>" class="btn btn-primary btn-xs" data-toggle="modal">
                        <i class="fas fa-spinner"></i>
                        </a>
                    </td>
                    <?php include('../modals/workorder-details.modal.php'); ?>
                </tr>
    <?php
            }
        }
    } catch (PDOException $e) {
        echo "There is some problem in connection: " . $e->getMessage();
    }

    // close connection
    $database->close();
    ?>
</tbody>

                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- .panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<?php
    include("../templates/footer.php");
?>
