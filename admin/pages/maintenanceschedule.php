<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
 
 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Damaged Asset</h1>
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Button trigger modal -->

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Asset Type</th>
                                <th>Manufacturer Name</th>
                                <th>Maintenance Schedule</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //include our connection
                            $database = new Connection();
                            $db = $database->open();
                            try{    
                                $sql = 'SELECT * FROM asset';
                                foreach ($db->query($sql) as $row) {
                                    if ($row["a_status"] == "Damaged") { // Check if the status is "damaged"
                            ?>
                            <tr>
                                <td><?php echo $row["a_type"]?></td>
                                <td><?php echo $row["a_name"]?></td>
                                <td><?php echo $row["a_sched"]?></td>
                                
                                <td>
                                    <a href="#edit_<?php echo $row['a_id'];?>" class="btn btn-primary btn-xs" data-toggle="modal"><i class= "fa fa-gear"></i></a>
                                </td>
                                
                                <?php include('../modals/maintenance-details.modal.php'); ?>
                            </tr>
                            <?php
                                    }
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
<!-- /.row -->

<?php
    include("../templates/footer.php");
?>