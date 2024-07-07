
<!-- Check -->
<div class="modal fade" id="check_<?php echo $row['sr_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Check Request</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <form action="../actions/add-servicereq.php" method="post">

                    <input type= "hidden" class="form-control" name="wid" value="<?php echo $row['sr_id']; ?>" readonly>
                    <input type= "hidden" class="form-control" name="srorderid" value="<?php echo $row['sr_orderid']; ?>" readonly>
                    <input type= "hidden" class="form-control" name="srcustomer" value="<?php echo $row['sr_customer']; ?>" required>
                    <input type= "hidden" class="form-control" name="sraddress" value="<?php echo $row['sr_address']; ?>" required>
                    <input type= "hidden" id="srdate" name="srcreated" class="form-control" value="<?php echo $row['sr_created']; ?>">
                    <input type= "hidden" id="srdue" name="srdue" class="form-control" value="<?php echo $row['sr_due']; ?>">
                    <input type= "hidden" class="form-control" name="srcost" value="<?php echo $row['sr_cost']; ?>" required>
                    <input type= "hidden" name="serid" value="<?php echo $row['ser_id']; ?>" readonly>
                    <input type= "hidden" name="pid" value="<?php echo $row['p_id']; ?>" readonly>
                    <input type= "hidden" name="stid" value="<?php echo $row['st_id']; ?>" readonly>
                    <input type= "hidden" name="sid" value="<?php echo $row['s_id']; ?>" readonly>

                    </div>  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- View-->
<div class="modal fade" id="view_<?php echo $row['sr_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">View Details</h4>
            </div>
            <div class="modal-body">
            <form action="../actions/view-service.php" method="post">
                    
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="worderid" value="<?php echo $row['sr_orderid']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Customer Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['sr_customer']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Address:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['ser_desc']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Priority:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wprio" value="<?php echo $row['p_desc']; ?>" readonly>
                        </div>                       
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Status:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wstatus" value="<?php echo $row['st_desc']; ?>" readonly>
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Assigned</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wassigned" value="<?php echo $row['s_name']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Created:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcreated" value="<?php echo $row['sr_address']; ?> " readonly>
                        </div>
                    </div>

                     <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Created:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcreated" value="<?php echo $row['sr_created']; ?> " readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Due Date:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wdue" value="<?php echo $row['sr_due']; ?> " readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Cost:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['sr_cost']; ?> " readonly>
                        </div>
                    </div>
             
                </div>
            
            <!-- End of Modal Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!-- <a class="btn btn-primary" href="../includes/logout.inc.php">Logout</a> -->
                </form>
            </div>
        </div>
    </div>
</div>