
<!-- View-->
<div class="modal fade" id="view_<?php echo $row['s_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">View Employee Details</h4>
            </div>
            <div class="modal-body">
            <form action="../actions/edit-staff.php" method="post">
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sname" value="<?php echo $row['s_name']; ?> " readonly>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Phone Number:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="snum" value="<?php echo $row['s_num']; ?>" readonly>
                        </div>

                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="semail" value="<?php echo $row['s_email']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Position:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sjob" value="<?php echo $row['j_desc']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Date Hired:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sdate" value="<?php echo $row['s_date']; ?>" readonly>
                        </div>
                        
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Skill:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sskills" value="<?php echo $row['s_skills']; ?>" readonly>
                        </div>
                    </div>

                </div>
            
            <!-- End of Modal Body -->
            <div class="modal-footer">

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['s_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel" style="color: black; font-weight: bold;">Edit Staff</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../actions/edit-staff.php" method="post">
                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_id" value="<?php echo $row['s_id']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_name" value="<?php echo $row['s_name']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Phone Number:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_num" value="<?php echo $row['s_num']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_email" value="<?php echo $row['s_email']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Date Hired:</label>
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-select" style="width:100%;">
                                <input type="date" class="form-control" id="sdate" name="s_date" value="<?php echo $row['s_date']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Skill:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_skills" value="<?php echo $row['s_skills']; ?>" required>
                        </div>
                    </div>

                    <?php
                    include "../includes/connect.inc.php";
                    $sql = "SELECT * FROM job";
                    echo "<div class='form-group'>";
                    echo "<label>Position: </label>";
                    echo "<select name='j_id' value='' class='form-control'>";
                    foreach ($conn->query($sql) as $edit_row) {
                        echo "<option value='$edit_row[j_id]'>$edit_row[j_desc]</option>";
                    }
                    echo "</select>";
                    echo "</div>";
                    ?>
            </div>
            <!-- End of Modal Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- delete -->
<div class="modal fade" id="delete_<?php echo $row['s_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel" style="color: black; font-weight: bold;">Fire Staff</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../actions/delete-staff.php" method="post">
                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_id" value="<?php echo $row['s_id']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row form-group"style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_name" value="<?php echo $row['s_name']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group"style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Phone Number:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_num" value="<?php echo $row['s_num']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group"style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Staff Email:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_email" value="<?php echo $row['s_email']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group"style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Date Hired:</label>
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-select" style="width:100%;">
                                <input type="date" class="form-control" id="sdate" name="s_date" value="<?php echo $row['s_date']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group"style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Skill:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="s_skills" value="<?php echo $row['s_skills']; ?>" required>
                        </div>
                    </div>
                    <?php
                    include "../includes/connect.inc.php";
                    $sql = "SELECT * FROM job";
                    echo "<div class='form-group' style='display: none;'>";
                    echo "<label>Position: </label>";
                    echo "<select name='j_id' value='' class='form-control'>";
                    foreach ($conn->query($sql) as $edit_row) {
                        echo "<option value='$edit_row[j_id]'>$edit_row[j_desc]</option>";
                    }
                    echo "</select>";
                    echo "</div>";
                    ?>
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" style="position:relative; top:7px;">work:</label>
                    </div>
                    <div class="col-sm-8">
                        <select class="form-control" name="s_work" required>
                            <option value="fired" <?php echo ($row['s_work'] == 'fired') ? 'selected' : ''; ?>>Fired</option>
                            <option value="not_fired" <?php echo ($row['s_work'] == 'not_fired') ? 'selected' : ''; ?>>Not Fired</option>
                        </select>
                    </div>
                </div>            
            <!-- End of Modal Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Yes</button>
            </div>
            </form>
        </div>
    </div>
</div>