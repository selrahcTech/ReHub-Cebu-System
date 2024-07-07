<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
 
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Work Order History</h1>
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
                            
                                    <th>Asset ID</th>
                                    <th>Asset Name</th>
                                    <th>Asset Description</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Assigned</th>
                                    <th>Date Created</th>
                                    <th>Date Due </th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                        //include our connection
                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM workorder_history
                            INNER JOIN priority
                            ON workorder_history.p_id = priority.p_id
                            INNER JOIN staff
                            ON workorder_history.s_id = staff.s_id
                            INNER JOIN status
                            ON workorder_history.st_id = status.st_id';
                            foreach ($db->query($sql) as $row) {                              
                            ?>
                                <tr>
                                    
                                    <td><?php echo $row["w_asset"]?></td>
                                    <td><?php echo $row["w_name"]?></td>
                                    <td><?php echo $row["w_desc"]?></td>
									<td><?php echo $row["p_desc"]?></td>
                                    <td><?php echo $row["st_desc"]?></td>
                                    <td><?php echo $row["s_name"]?></td>
                                    <td><?php echo $row["w_created"]?></td>
                                    <td><?php echo $row["w_due"]?></td>
                                 
                                    
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
<!-- /.row -->
<?php
    include("../templates/footer.php");
?>