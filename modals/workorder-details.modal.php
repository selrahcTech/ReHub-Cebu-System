
<!-- Complete -->
<div class="modal fade" id="complete_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Work Completed</h4></center>
            </div>
            <form action="../actions/add-completeorder.php" method="post">
            <div class="modal-body">	
                <p class="text-center">The task is Completed?</p>
                <h2 class="text-center" style="color: black;"><?php echo $row['w_orderid']; ?></h2>
                <input type="hidden" class="form-control" name="cwname" value="<?php echo $row['w_customer']; ?> ">
                <input type="hidden" class="form-control" name="cwassigned" value="<?php echo $row['s_name']; ?> ">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                 <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Yes
            </form>
            </div>

             </div>
        </div>
    </div>
</div>

<!--Delete Completed Order-->


<!-- View-->
<div class="modal fade" id="view_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">View Details</h4>
            </div>
            <div class="modal-body">
            <form action="../actions/edit-order.php" method="post">
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Work Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wid" value="<?php echo $row['w_id']; ?> " readonly>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="worderid" value="<?php echo $row['w_orderid']; ?>" readonly>
                        </div>

                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Customer Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['w_customer']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Address:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['w_address']; ?>" readonly>
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
                            <input type="text" class="form-control" name="wcreated" value="<?php echo $row['w_created']; ?> " readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Due Date:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wdue" value="<?php echo $row['w_due']; ?> " readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Cost:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['w_cost']; ?> " readonly>
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
<!-- Edit-->
<div class="modal fade" id="edit_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Edit Job Service Details</h4>
            </div>
            <div class="modal-body">
                <form action="../actions/edit-order.php" method="post">
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Order ID:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="worderid" value="<?php echo $row['w_orderid']; ?>" readonly>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Customer's Name:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcustomer" value="<?php echo $row['w_customer']; ?>" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Customer's Address:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="waddress" value="<?php echo $row['w_address']; ?>" required>
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Date Created:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" id="wdate" name="wdate" class="form-control" value="<?php echo $row['w_created']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Due Date:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="date" id="wdue" name="wdue" class="form-control" value="<?php echo $row['w_due']; ?>">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" style="position:relative; top:7px;">Cost:</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="wcost" value="<?php echo $row['w_cost']; ?>" required>
                        </div>
                    </div>

                    <?php
                        include "../includes/connect.inc.php"; 
                        
                        $sql="SELECT * FROM services"; 

                        echo "<div class='form-group'>";
                        echo "<label>Services: </label>";
                        echo "<select name='wservice' value='' class='form-control'>Staff Name</option>"; 
                        
                        
                        foreach ($conn->query($sql) as $row){
                            echo "<option value=$row[ser_id]>$row[ser_desc]</option>"; 
                        }
                        echo "</select>";
                        echo"</div>";
                    ?>
                    
                    <?php
                        include "../includes/connect.inc.php"; 
                        
                        $sql="SELECT * FROM staff"; 

                        echo "<div class='form-group'>";
                        echo "<label>Staff: </label>";
                        echo "<select name='wassigned' value='' class='form-control'>Staff Name</option>"; 
                        
                        foreach ($conn->query($sql) as $row){
                            echo "<option value=$row[s_id]>$row[s_name]</option>"; 
                        }
                        echo "</select>";
                        echo"</div>";

                    ?>
                    
                        
                    <?php
                        include "../includes/connect.inc.php"; 
                        
                        $sql="SELECT * FROM priority"; 

                        echo "<div class='form-group'>";
                        echo "<label>Job Priority: </label>";
                        echo "<select name='wprio' value='' class='form-control'>Priority</option>"; 
                        
                        foreach ($conn->query($sql) as $row){
                            echo "<option value=$row[p_id]>$row[p_desc]</option>"; 
                        }
                        echo "</select>";
                        echo"</div>";

                    ?>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['w_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel" style="color: black; font-weight: bold; text-align: center;">Delete Service?</h4>
            </div>
            <div class="modal-body">
                <form action="../actions/delete-order.php" method="post">
                    <input type="hidden" class="form-control" name="wid" value="<?php echo $row['w_id']; ?> " readonly>
                    <input type="hidden" class="form-control" name="worderid" value="<?php echo $row['w_orderid']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wcustomer" value="<?php echo $row['w_customer']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wservice" value="<?php echo $row['ser_id']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wprio" value="<?php echo $row['p_id']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wstatus" value="<?php echo $row['st_id']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wassigned" value="<?php echo $row['s_id']; ?> " readonly>
                    <input type="hidden" class="form-control" name="waddress" value="<?php echo $row['w_address']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wdate" value="<?php echo $row['w_created']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wdue" value="<?php echo $row['w_due']; ?> " readonly>
                    <input type="hidden" class="form-control" name="wcost" value="<?php echo $row['w_cost']; ?> " readonly>
                    <!-- End of Modal Body -->
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

