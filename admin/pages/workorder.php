<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Job Service Management</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> Add</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
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
// Include the connection
include "../includes/connect.inc.php";

$sql = 'SELECT * FROM workorder
        INNER JOIN services ON workorder.ser_id = services.ser_id
        INNER JOIN priority ON workorder.p_id = priority.p_id
        INNER JOIN staff ON workorder.s_id = staff.s_id
        INNER JOIN status ON workorder.st_id = status.st_id';

foreach ($conn->query($sql) as $row) {
    if (empty($row["w_complete"])) {
        ?>
        <tr>
            <td><?php echo $row["w_orderid"] ?></td>
            <td><?php echo $row["ser_desc"] ?></td>
            <td><?php echo $row["s_name"] ?></td>
            <td><?php echo $row["p_desc"] ?></td>
            <td><?php echo $row["w_due"] ?></td>
            <td><?php echo $row["st_desc"] ?></td>
            <td>
                <a href="#view_<?php echo $row['w_id']; ?>" class="btn btn-info btn-xs" data-toggle="modal">
                    <i class="fas fa-eye"></i> <!-- Icon for view -->
                </a>
                <a href="#complete_<?php echo $row['w_id']; ?>" class="btn btn-primary btn-xs" data-toggle="modal">
                    <i class="fas fa-check"></i> <!-- Icon for complete -->
                </a>
                <a href="#edit_<?php echo $row['w_id']; ?>" class="btn btn-success btn-xs" data-toggle="modal">
                    <i class="fas fa-edit"></i> <!-- Icon for edit -->
                </a>
                <a href="#delete_<?php echo $row['w_id']; ?>" class="btn btn-danger btn-xs" data-toggle="modal">
                    <i class="fas fa-times"></i> <!-- Icon for delete -->
                </a>
            </td>
            <?php include('../modals/workorder-details.modal.php'); ?>
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

<!-- Add Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Job Service Details</h4>
            </div>
            <div class="modal-body">
                <form action="../actions/add-order.php" method="post">
                <div class="form-group">
                    <label>Order ID</label>
                    <input class="form-control" name="worderid" placeholder="Order ID" value="<?php echo rand(100000, 999999); ?>" readonly>
                </div>
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input class="form-control" name="wcustomer" placeholder="Name of the Customer" required>
                    </div>
                    <?php
                        include "../includes/connect.inc.php"; 
                        $sql = "SELECT * FROM services";
                        echo "<div class='form-group'>";
                        echo "<label>Services</label>";
                        echo "<select name='wservice' value='' class='form-control'>Service</option>"; 
                        foreach ($conn->query($sql) as $row) {
                            echo "<option value='$row[ser_id]'>$row[ser_desc]</option>"; 
                        }
                        echo "</select>";
                        echo "</div>";
                    ?>
                    <?php
                    
                        include "../includes/connect.inc.php"; 
                        $sql = "SELECT * FROM staff";
                        echo "<div class='form-group'>";
                        echo "<label>Staff</label>";
                        echo "<select name='wassigned' value='' class='form-control'>Staff Name</option>"; 
                        foreach ($conn->query($sql) as $row) {
                            echo "<option value='$row[s_id]'>$row[s_name]</option>"; 
                        }
                        echo "</select>";
                        echo "</div>";
                    ?>
                    <?php
                        include "../includes/connect.inc.php"; 
                        $sql = "SELECT * FROM priority";
                        echo "<div class='form-group'>";
                        echo "<label>Job Priority</label>";
                        echo "<select name='wprio' value='' class='form-control'>Priority</option>"; 
                        foreach ($conn->query($sql) as $row) {
                            echo "<option value='$row[p_id]'>$row[p_desc]</option>"; 
                        }
                        echo "</select>";
                        echo "</div>";
                    ?>
                    <div class="form-group">
                        <label for="adate">Date Created:</label>
                        <input class="form-control" id="wdate" name="wdate" value="<?php echo date('Y-m-d'); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="wdue">Due Date:</label>
                        <input type="date" id="wdue" name="wdue" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Cost</label>
                        <input class="form-control" name="wcost" placeholder="Asset Cost" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Address</label>
                        <input class="form-control" name="waddress" placeholder="Enter Customer's address" required>
                    </div>
                    <?php
                        include "../includes/connect.inc.php"; 

                        $sql = "SELECT * FROM status";

                        echo "<div class='form-group' style='display: none;'>"; 
                        echo "<label>Status</label>";
                        echo "<select name='wstatus' value='' class='form-control'>Status</option>"; 

                        foreach ($conn->query($sql) as $row) {
                            echo "<option value='$row[st_id]'>$row[st_desc]</option>"; 
                        }

                        echo "</select>";
                        echo "</div>";
                        ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php
    include("../templates/footer.php");
?>
