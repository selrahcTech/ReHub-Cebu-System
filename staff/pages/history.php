<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Your Completed Service History</h1>
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-dark" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Service Type</th>
                                <th>Staff Assigned</th>
                                <th>Status</th>                         
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                // Include the connection
                                include "../includes/connect.inc.php";

                                // Fetch the username from the session
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
                                        WHERE staff.s_name = :username';

                                $stmt = $conn->prepare($sql);
                                $stmt->bindParam(':username', $username);
                                $stmt->execute();

                                foreach ($stmt as $row) {
                                    if ($row["w_complete"] === 'complete') {
                                        ?>
                                        <tr>
                                            <td><?php echo $row["w_orderid"] ?></td>
                                            <td><?php echo $row["ser_desc"] ?></td>
                                            <td><?php echo $row["s_name"] ?></td>
                                            <td><?php echo $row["w_complete"] ?></td>
                                        </tr>
                                        <?php
                                    }
                                }

                                // Close connection
                                $conn = null;
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
