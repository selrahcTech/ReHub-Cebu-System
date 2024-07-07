<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
 
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Asset History</h1>
        <div class="panel panel-default">

            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Button trigger modal -->

                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                            
                                    <th>Manufacturer Name</th>
                                    <th>Model Number</th>
                                    <th>Serial Number</th>
                                    <th>Purchase Date</th>
                             
                                    

                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                        //include our connection
                        $database = new Connection();
                        $db = $database->open();
                        try{    
                            $sql = 'SELECT * FROM asset_history';
                            foreach ($db->query($sql) as $row) {                              
                            ?>
                                <tr>
                                    
                                    <td><?php echo $row["a_name"]?></td>
                                    <td><?php echo $row["a_num"]?></td>
                                    <td><?php echo $row["as_num"]?></td>
                                    <td><?php echo $row["a_date"]?></td>
                                    
                                 
                                    
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