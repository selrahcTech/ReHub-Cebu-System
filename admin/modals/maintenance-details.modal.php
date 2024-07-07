
<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['a_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title text-center" id="exampleModalLabel" style="color: black; font-weight: bold;">Edit Asset</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../actions/edit-maintenance.php" method="post">

                <div class="row form-group" style="display: none;">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="aid" value="<?php echo $row['a_id']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Asset Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="atype" value="<?php echo $row['a_type']; ?>" required>
                        </div>
                    </div>
                        
                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Manufacturer Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="aname" value="<?php echo $row['a_name']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Model Code:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="anum" value="<?php echo $row['a_num']; ?>" required>
                        </div>
                    </div>
                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Serial Number:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="asnum" value="<?php echo $row['as_num']; ?>" required pattern="[0-9]+">
                        </div>
                    </div>

                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Date Purchased:</label>
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-select" style="width:100%;">
                                <input type="date" class="form-control" id="adate" name="adate" value="<?php echo $row['a_date']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Warranty Provider:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="aprovider" value="<?php echo $row['a_provider']; ?>" required>
                        </div>
                    </div>

                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Warranty Expiration Date:</label>
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-select" style="width:100%;">
                                <input type="date" class="form-control" id="exdate" name="exdate" value="<?php echo $row['a_exdate']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group" style="display: none;">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Warranty Details:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="adetails" value="<?php echo $row['a_details']; ?>" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Asset Status:</label>
                        </div>
                        <div class="col-sm-8">
                            <select class="form-control" name="astatus" required>
                                <option value="Damaged" <?php if ($row['a_provider'] == 'Damaged') echo 'selected'; ?>>Damaged</option>
                                <option value="Undamaged" <?php if ($row['a_provider'] == 'Undamaged') echo 'selected'; ?>>Undamaged</option>
                                <option value="Not Repairable" <?php if ($row['a_provider'] == 'Not Repairable') echo 'selected'; ?>>Not Repairable</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Schedule Date:</label>
                        </div>
                        <div class="col-sm-8">
                            <div class="custom-select" style="width:100%;">
                                <input type="date" class="form-control" id="schedate" name="schedate" value="<?php echo $row['a_sched']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Notes:</label>
                        </div>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="aremarks" rows="4"><?php echo $row['a_remarks']; ?></textarea>
                        </div>
                    </div>


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
