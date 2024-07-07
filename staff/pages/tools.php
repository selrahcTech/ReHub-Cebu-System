<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tools Available</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Tools Name</th>
                                <th>Status</th>
                                <th>Request Tool</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Include our connection
                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT * FROM inventory WHERE inv_quantity > 0'; // Query modified to select only tools with inv_quantity > 0 (available)
                                foreach ($db->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["inv_name"]; ?></td>
                                        <td><?php echo $row["inv_quantity"] == 0 ? 'Unavailable' : ($row["inv_quantity"] == 2 ? 'Pending' : 'Available'); ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#requestModal<?php echo $row['inv_id']; ?>">
                                            <i class="fas fa-hand-paper"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <!-- Request Modal -->
                                    <div class="modal fade" id="requestModal<?php echo $row['inv_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="requestModalLabel<?php echo $row['inv_id']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h4 class="modal-title text-center" id="requestModalLabel<?php echo $row['inv_id']; ?>" style="color: black; font-weight: bold;">Request Tool: <?php echo $row['inv_name']; ?></h4>

                                            </div>
                                            <div class="modal-body">
                                                <form action="../actions/update-tools.php" method="POST">

                                                    <div class="row form-group">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" style="position:relative; top:7px;">User:</label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="custom-select" style="width:100%;">
                                                                <input type="text" class="form-control" id="user" name="user" value="<?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : ''; ?>"readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <?php
                                                    include "../includes/connect.inc.php";

                                                    $database = new Connection();
                                                    $conn = $database->open();

                                                    try {
                                                        

                                                        if (isset($_SESSION["username"])) {
                                                            $username = $_SESSION["username"];
                                                        } else {
                                                            $username = "";
                                                        }

                                                        $workOrderSql = "SELECT * FROM workorder
                                                                        INNER JOIN staff ON workorder.s_id = staff.s_id
                                                                        WHERE staff.s_name = :username
                                                                        AND w_complete = ''";

                                                        $stmt = $conn->prepare($workOrderSql);
                                                        $stmt->bindParam(':username', $username);
                                                        $stmt->execute();

                                                        echo "<div class='row form-group'>";
                                                        echo "<div class='col-sm-4'>";
                                                        echo "<label class='control-label' style='position:relative; top:7px;'>WorkOrder ID:</label>";
                                                        echo "</div>";
                                                        echo "<div class='col-sm-8'>";
                                                        echo "<div class='custom-select' style='width:100%;'>";
                                                        echo "<select class='form-control' id='order' name='order' required>";

                                                        while ($workOrderRow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                            echo "<option value='" . $workOrderRow['w_orderid'] . "'>" . $workOrderRow['w_orderid'] . "</option>";
                                                        }

                                                        echo "</select>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                        echo "</div>";
                                                    } catch (PDOException $e) {
                                                        echo "Error: " . $e->getMessage();
                                                    } finally {
                                                        $database->close();
                                                    }
                                                    ?>
                                              
                                                    <input type="hidden" name="inv_id" value="<?php echo $row['inv_id']; ?>">
                                                    <input type="hidden" name="tool_name" value="<?php echo $row['inv_name']; ?>">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary mx-auto">Submit</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <!-- End of Request Modal -->
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
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Tools Unavailable</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Tools Name</th>
                                <th>Status</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Include our connection
                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT * FROM inventory WHERE inv_quantity = 0'; // Query modified to select only tools with inv_quantity > 0 (available)
                                foreach ($db->query($sql) as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["inv_name"]; ?></td>
                                        <td><?php echo $row["inv_quantity"] == 0 ? 'Unavailable' : 'Available'; ?></td>
                                    
                                    </tr>
                                    
                                    </div>
                                </div>
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