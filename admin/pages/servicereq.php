<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Service Request</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover table-dark" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Service Type</th>
                                <th>Requested By:</th>
                                <th>Priority</th>
                                <th>Date Due</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Include the connection
                            include "../includes/connect.inc.php";
                            
                            $sql = 'SELECT * FROM servicereq
                            INNER JOIN services ON servicereq.ser_id = services.ser_id
                            INNER JOIN priority ON servicereq.p_id = priority.p_id
                            INNER JOIN staff ON servicereq.s_id = staff.s_id
                            INNER JOIN status ON servicereq.st_id = status.st_id';
                            
                            foreach ($conn->query($sql) as $row) {
                                
                                ?>
                                <tr>
                                    <td><?php echo $row["sr_orderid"]?></td>
                                    <td><?php echo $row["sr_customer"]?></td>
                                    <td><?php echo $row["ser_desc"]?></td>
                                    <td><?php echo $row["s_name"]?></td>
                                    <td><?php echo $row["p_desc"]?></td>
                                    <td><?php echo $row["sr_due"]?></td>
                                    <td>
                                        <a href="#check_<?php echo $row['sr_id'];?>" class="btn btn-primary btn-xs" data-toggle="modal">
                                            <i class="fas fa-check"></i> <!-- Icon for complete -->
                                        </a>
                                        <a href="#view_<?php echo $row['sr_id'];?>" class="btn btn-info btn-xs" data-toggle="modal">
                                            <i class="fas fa-eye"></i> <!-- Icon for view -->
                                        </a>
                                    </td>
                                    <?php include('../modals/servicereq.modal.php'); ?>
                                </tr>
                                <?php
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