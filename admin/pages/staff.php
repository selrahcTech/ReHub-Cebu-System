<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Staff Managment</h1>
        <div class="panel panel-default">
        <div class="panel-heading">
                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"></i> Add</a>
            </div>
            <div class="panel-body">
                <!-- Button trigger modal -->

                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                   
                                    <th>Staff Name</th>
                                    <th>Position</th>
                                    <th>Date Hired</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                
                            <?php
                                    //include our connection
                                    $database = new Connection();
                                    $db = $database->open();
                                    try {
                                        $sql = 'SELECT * FROM staff
                                                INNER JOIN job
                                                ON staff.j_id = job.j_id
                                                WHERE staff.s_work = ""';
                                        foreach ($db->query($sql) as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row["s_name"] ?></td>
                                                <td><?php echo $row["j_desc"] ?></td>
                                                <td><?php echo $row["s_date"] ?></td>
                                                <td>
                                                    <a href="#edit_<?php echo $row['s_id']; ?>" class="btn btn-success btn-xs"
                                                    data-toggle="modal" data-target="#edit_<?php echo $row['s_id']; ?>"><i class="fas fa-edit"></i></a>
                                                    <a href="#view_<?php echo $row['s_id']; ?>" class="btn btn-info btn-xs"
                                                    data-toggle="modal" data-target="#view_<?php echo $row['s_id']; ?>"><i
                                                            class="fa fa-eye fa-fw"></i></a>
                                                    <a href="#delete_<?php echo $row['s_id']; ?>" class="btn btn-danger btn-xs"
                                                    data-toggle="modal" data-target="#delete_<?php echo $row['s_id']; ?>">X</a>
                                                </td>
                                                <?php include('../modals/staff-details.modal.php'); ?>
                                            </tr>
                                            <?php
                                        }
                                    } catch (PDOException $e) {
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Add Employee</h4>
            </div>
            <div class="modal-body">
                
                <form action="../actions/add-staff.php" method="post">
                <div class="form-group" style="display: none;">
                    <label>ID</label>
                    <input class="form-control" name="sid" placeholder="ID" readonly>
                </div>
                
                <div class="form-group">
                        <label>Employee Name</label>
                        <input class="form-control" name="sname" placeholder="Name of the Employee" pattern="[^\d]+" title="Please enter only letters and spaces" required>
                    </div>
                    <!-- Display error message if it exists -->
                    <?php if (!empty($error_message)) : ?>
                        <div style="color: red;"><?php echo $error_message; ?></div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control" name="snum" placeholder="Phone Number" pattern="09\d{9}" title="Please enter a valid phone number starting with 09 and followed by 11 digits" required>
                    </div>
                    <div class="form-group">
                        <label>Employee Email</label>
                        <input class="form-control" name="semail" type="email" placeholder="Employee Email" required>
                    </div>
                    <?php
                    include "../includes/connect.inc.php";
                    $sql = "SELECT * FROM job";
                    echo "<div class='form-group'>";
                    echo "<label>Job</label>";
                    echo "<select name='sjob' value='' class='form-control'>Job</option>";
                    foreach ($conn->query($sql) as $row) {
                        echo "<option value=$row[j_id]>$row[j_desc]</option>";
                    }
                    echo "</select>";
                    echo "</div>";
                    ?>
                    <div class="form-group">
                        <label>Date Hired</label>
                        <input class="form-control" id="sdate" name="sdate" type="date" required>
                    </div>
                    <div class="form-group">
                        <label>Skills</label>
                        <input class="form-control" name="sskills" placeholder="Other Skills of the Employee" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <div id="error-message" style="color: red; text-align: center; margin-top: 10px;">
                    <?php if (isset($error)) echo $error; ?>
                </div>
                
            </div>
           
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Fired Employees</h1>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Staff Name</th>
                                <th>Phone Number</th>
                                <th>Date Hired</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //include our connection
                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT * FROM staff
                                        INNER JOIN job ON staff.j_id = job.j_id';
                                foreach ($db->query($sql) as $row) {
                                    // Check if s_work is equal to "fired"
                                    if ($row["s_work"] == "fired") {
                            ?>
                                        <tr>
                                            <td><?php echo $row["s_name"]?></td>
                                            <td><?php echo $row["s_num"]?></td>
                                            <td><?php echo $row["s_date"]?></td>
                                            
                                            <?php include('../modals/staff-details.modal.php'); ?>
                                        </tr>
                            <?php
                                    }
                                }
                            } catch (PDOException $e) {
                                echo "There is some problem in connection: " . $e->getMessage();
                            }

                            //close connection
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