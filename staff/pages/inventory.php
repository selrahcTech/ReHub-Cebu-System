<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Used Tools</h1>
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
                            
                                    <th>Quantity</th>
                                    <th>Tools Name</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                        //include our connection
                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM inventory';
                            foreach ($db->query($sql) as $row) {                              
                            ?>
                                <tr>
                                    
                                    <td><?php echo $row["inv_quantity"]?></td>
                                    <td><?php echo $row["inv_name"]?></td>
                                    <td><?php echo $row["inv_quantity"]== 0 ? 'Unavailable' : 'Available'; ?></td>
                                 
                                    
                                    <td>
    
                                        <a href="#view_<?php echo $row['inv_id'];?>" class="btn btn-info btn-xs" data-toggle="modal">View</a>
                                        <a href="#edit_<?php echo $row['inv_id'];?>" class="btn btn-success btn-xs" data-toggle="modal">Edit</a>
                                        <a href="#delete_<?php echo $row['inv_id'];?>" class="btn btn-danger btn-xs" data-toggle="modal">Delete</a>
                                    </td>
                                    <?php include('../modals/workorder-details.modal.php'); ?>
                                </tr>
                                <?php 
                            }
                        }   
                        catch(PDOException $e){
                            echo "There is some problem in connection: " . $e->getMessage();
                        }

                        //close connection
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
<!-- Add Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <form action="../actions/add-staff.php" method="post">
                    <div class="form-group">

                        <label>No.</label>
                        <input class="form-control" name="sid" placeholder="ID" readonly>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input class="form-control" name="sname" placeholder="Quantity" required>
                    </div>
                    <div class="form-group">
                        <label>Add Tool</label>
                        <input class="form-control" name="snum" placeholder="Add Tool" required>
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