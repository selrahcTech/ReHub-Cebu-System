<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
        body {
            background-color: #000;
            color: #fff;
        }
        .chart-container {
                        width: 40%;
                        display: inline-block;
                    }

        .panel-primary, .panel-green, .panel-red {
            background-color: #222;
            color: #fff;
            border-color: #444;
        }

        .panel-heading {
            background-color: #408EFB;
            border-color: #001738;
            color: #fff;
        }

        .panel-footer {
            background-color: #408EFB;
            border-color: #001738;
            color: #fff;
        }

        .panel-footer a {
            color: #fff;
        }

        .panel-footer a:hover {
            color: #fff;
        }

        .fa {
            color: #fff;
        }
   
        .table {
        color: #000; /* Set font color to black */
        }
        #dataTables-example {
        color: #000; /* Set font color to black for the table */
    }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>

        <div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-black">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fas fa-tools fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php
                            // PHP code to get total order details
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "cmms";
                            $con = mysqli_connect($servername, $username, $password, $dbname);

                            // Add WHERE clause to check if s_id is 1
                            $sql = "SELECT count(w_id) AS total FROM workorder WHERE s_id = 1";
                            $result = mysqli_query($con, $sql);
                            $values = mysqli_fetch_assoc($result);
                            $num_rows = $values['total'];
                            echo $num_rows;
                            ?>
                        </div>
                        <div>Available Services!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href="../pages/firstpage.php">View Details</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <?php
// Fetch the username and user ID from the session
if (isset($_SESSION["username"]) && isset($_SESSION["user_id"])) {
    $username = $_SESSION["username"];
    $user_id = $_SESSION["user_id"];
?>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-black">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php
                            // Include our connection
                            $database = new Connection();
                            $db = $database->open();

                            try {
                                // Modify the SQL query to count ongoing services
                                $sql = 'SELECT COUNT(workorder.w_id) AS total
                                    FROM workorder
                                    INNER JOIN services ON workorder.ser_id = services.ser_id
                                    INNER JOIN priority ON workorder.p_id = priority.p_id
                                    INNER JOIN staff ON workorder.s_id = staff.s_id
                                    INNER JOIN status ON workorder.st_id = status.st_id
                                    WHERE staff.s_name = :username
                                    AND workorder.w_complete = ""';  // Add this condition to check for blank w_complete

                                $stmt = $db->prepare($sql);
                                $stmt->bindParam(':username', $username);
                                $stmt->execute();

                                $values = $stmt->fetch(PDO::FETCH_ASSOC);
                                $num_rows = $values['total'];

                                // Display the result
                                echo $num_rows;
                            } catch (PDOException $e) {
                                // Handle errors here
                                echo "Error: " . $e->getMessage();
                            }

                            // Close the database connection
                            $database->close();
                            ?>
                        </div>
                        <div>Ongoing Services!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href="../pages/dashboard.php">View Details</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
<?php
} 
?>

<?php
if (isset($_SESSION["username"]) && isset($_SESSION["user_id"])) {
    $username = $_SESSION["username"];
    $user_id = $_SESSION["user_id"];
?>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-black">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">
                            <?php

                            $database = new Connection();
                            $db = $database->open();

                            try {

                                $sql = 'SELECT COUNT(workorder.w_id) AS total
                                    FROM workorder
                                    INNER JOIN services ON workorder.ser_id = services.ser_id
                                    INNER JOIN priority ON workorder.p_id = priority.p_id
                                    INNER JOIN staff ON workorder.s_id = staff.s_id
                                    INNER JOIN status ON workorder.st_id = status.st_id
                                    WHERE staff.s_name = :username
                                    AND workorder.w_complete = "complete"'; 

                                $stmt = $db->prepare($sql);
                                $stmt->bindParam(':username', $username);
                                $stmt->execute();

                                $values = $stmt->fetch(PDO::FETCH_ASSOC);
                                $num_rows = $values['total'];

                                echo $num_rows;
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }

                            $database->close();
                            ?>
                        </div>
                        <div>Completed Services!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"><a href="../pages/history.php">View Details</a></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
<?php
}
?>
</div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Available Services</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                   <table class="table table-bordered table-hover discord-dark-theme">
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
                                    INNER JOIN status ON workorder.st_id = status.st_id
                                    WHERE staff.s_name = "Open"';

                            foreach ($conn->query($sql) as $row) {
                                ?>
                                <tr>
                                    <td><?php echo $row["w_orderid"]?></td>
                                    <td><?php echo $row["ser_desc"]?></td>
                                    <td><?php echo $row["s_name"]?></td>
                                    <td><?php echo $row["p_desc"]?></td>
                                    <td><?php echo $row["w_due"]?></td>
                                    <td><?php echo $row["st_desc"]?></td>
                                    <td>
                                        <a href="#request_<?php echo $row['w_id'];?>" class="btn btn-primary btn-xs" data-toggle="modal">
                                            <i class="fas fa-check"></i> <!-- Icon for complete -->
                                        </a>
                                        
                                    </td>
                                    <?php include('../modals/dashboard-details.modal.php'); ?>
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
