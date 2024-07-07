<?php
    include("../templates/header.php");
    include("../includes/connection.inc.php");
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Employee</h1>
        <div class="panel panel-default">
            <div class="container-fluid">
                <form action="../actions/add-staff.php" method="post">
                    <br>
                    <div class="form-group">
                        <label>ID</label>
                        <input class="form-control" name="sid" placeholder="ID" readonly>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="sname" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <label>Number</label>
                        <input class="form-control" name="snum" placeholder="Number" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="semail" placeholder="Email" required>
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
                        <label for="adate">Date Hired:</label>
                        <input class="form-control" id="sdate" name="sdate" value="<?php echo date('Y-m-d'); ?>"readonly>
                    </div>
                    <div class="form-group">
                        <label>Skills</label>
                        <input class="form-control" name="sskills" placeholder="Skills" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
        <!-- .panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.row -->





<?php
    include("../templates/footer.php");
?>