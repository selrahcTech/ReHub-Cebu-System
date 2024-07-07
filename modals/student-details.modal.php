<!-- Edit-->
<div class="modal fade" id="edit_<?php echo $row['s_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                
                </button>
            </div>
            <div class="modal-body">
            <form action="../actions/edit-student.php" method="post">
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Student ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sid" value="<?php echo $row['s_id']; ?> " readonly>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sname" value="<?php echo $row['s_name']; ?>" required>
                        </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Gender:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sgender" value="<?php echo $row['s_gender']; ?>" required>
                        </div>
                        
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Status:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="sstatus" value="<?php echo $row['s_status']; ?>" required>
                        </div>
                        
                    </div>
                </div>
            
            <!-- End of Modal Body -->
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                <!-- <a class="btn btn-primary" href="../includes/logout.inc.php">Logout</a> -->
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['s_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <form action="../actions/delete-student.php" method="post">
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['s_name']; ?></h2>
                <input type="hidden" name="sid" value="<?php echo $row['s_id'];?>">
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                 <button type="submit" name="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes
</form>
            </div>

        </div>
    </div>
</div>
</div>