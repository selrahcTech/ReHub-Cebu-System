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
                            
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Service</th>
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
                                    <td><?php echo $row["inv_status"]?></td>
                                 
                                    
                                    <td>
                                        <a href="#complete_<?php echo $row['inv_id'];?>" class="btn btn-primary btn-xs" data-toggle="modal">Complete</a>
                                        <a href="#view_<?php echo $row['inv_id'];?>" class="btn btn-info btn-xs" data-toggle="modal">View</a>
                                        <a href="#edit_<?php echo $row['inv_id'];?>" class="btn btn-success btn-xs" data-toggle="modal">Edit</a>
                                        <a href="#delete_<?php echo $row['inv_id'];?>" class="btn btn-danger btn-xs" data-toggle="modal">X</a>
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


<?php
    include("../templates/footer.php");
?>