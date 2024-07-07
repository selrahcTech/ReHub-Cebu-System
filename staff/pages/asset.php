<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Assets Management</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-plus"></i> Add</a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Button trigger modal -->

                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                
                                    <th>Asset Type</th>
                                    <th>Manufacturer Name</th>
                                    <th>Model Code</th>
                                    <th>Serial Number</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                                // Include our connection
                                $database = new Connection();
                                $db = $database->open();

                                try {
                                    $sql = "SELECT * FROM asset WHERE a_status IN ('damaged', 'undamaged')";
                                    foreach ($db->query($sql) as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $row["a_type"]?></td>
                                            <td><?php echo $row["a_name"]?></td>
                                            <td><?php echo $row["a_num"]?></td>
                                            <td><?php echo $row["as_num"]?></td>
                                            <td><?php echo $row["a_status"]?></td>
                                            <td>
                                                <a href="#edit_<?php echo $row['a_id'];?>" class="btn btn-success btn-xs" data-toggle="modal"><i class="fas fa-edit"></i></a>
                                                <a href="#delete_<?php echo $row['a_id'];?>" class="btn btn-danger btn-xs" data-toggle="modal"><i class="fas fa-times"></i></a>
                                            </td>
                                            <?php include('../modals/asset-details.modal.php'); ?>
                                        </tr>
                                        <?php
                                    }
                                } catch (PDOException $e) {
                                    echo "There is some problem in connection: " . $e->getMessage();
                                }

                                // Close connection
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

<!-- Add Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Asset Details</h4>
            </div>
            <div class="modal-body">
                <form action="../actions/add-assmain.php" method="post">

                <div class="form-group">
                        <label>Asset Name</label>
                        <input class="form-control" name="atype" placeholder="Asset Type" required>
                    </div>

                    <div class="form-group">
                        <label>Manufacturer Name</label>
                        <input class="form-control" name="aname" placeholder="Manufacturer Name" required>
                    </div>

                    <div class="form-group">
                        <label>Model Code</label>
                        <input class="form-control" name="anum" placeholder="Model Number" required>
                    </div>

                    <div class="form-group">
                        <label>Serial Number</label>
                        <input class="form-control" name="asnum" placeholder="Serial Number" required pattern="[0-9]+">
                    </div>

                    <div class="form-group">
                    <label for="adate">Date Purchased:</label>
                        <input class="form-control" type="date" id="adate" name="adate" required>
                    </div>

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Warranty Details</h4>
            </div>

                    <div class="form-group">: 
                        <label>Warranty Provider</label>
                        <input class="form-control" name="aprovider" placeholder="Company Name" required>
                    </div>

                    <div class="form-group">
                    <label for="adate">Warranty Expiration Date:</label>
                        <input class="form-control" type="date" id="exdate" name="exdate" required>
                    </div>

                    <div class="form-group">: 
                        <label>Warranty Details</label>
                        <input class="form-control" name="adetails" placeholder="Warranty Details" required>
                    </div>

                    <div class="form-group" style="display: none;">
    <label>Asset Status</label>
    <input class="form-control" name="astatus" value="Undamaged" placeholder="Warranty Details" readonly>
</div>

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