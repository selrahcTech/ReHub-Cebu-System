<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>

<!-- /.modal -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tool Used Tracker History</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Tool Name</th>
                                <th>Workorder ID:</th>
                                <th>Used By:</th>
                         
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Include our connection
                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT * FROM usedtools ';
                                foreach ($db->query($sql) as $row) {
                            ?>
                                    <tr>
                                        <td><?php echo $row["ut_tool"] ?></td>
                                        <td><?php echo $row["ut_orderid"] ?></td>
                                        <td><?php echo $row["ut_name"] ?></td>
                                        
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
            </div>
        </div>
    </div>
</div>


<?php
    include("../templates/footer.php");
?>